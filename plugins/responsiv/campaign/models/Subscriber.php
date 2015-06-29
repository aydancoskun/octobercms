<?php namespace Responsiv\Campaign\Models;

use Model;
use ApplicationException;

/**
 * Subscriber Model
 */
class Subscriber extends Model
{

    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'responsiv_campaign_subscribers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['email', 'first_name', 'last_name'];

    /**
     * @var array Date fields
     */
    public $dates = ['unsubscribed_at'];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'subscriber_lists' => ['Responsiv\Campaign\Models\SubscriberList', 'table' => 'responsiv_campaign_lists_subscribers', 'otherKey' => 'list_id'],
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'email' => 'required|between:3,64|email|unique:responsiv_campaign_subscribers',
    ];

    /**
     * Signs up a user as a subscriber, adds them to supplied list code.
     */
    public static function signup($details, $addToList = null, $isConfirmed = true)
    {
        if (is_string($details)) {
            $details = ['email' => $details];
        }

        if (!$email = array_get($details, 'email')) {
            throw new ApplicationException('Missing email for subscriber!');
        }

        $subscriber = self::firstOrNew(['email' => $email]);
        $subscriber->first_name = array_get($details, 'first_name');
        $subscriber->last_name = array_get($details, 'last_name');

        // Already subscribed and opted-in
        if ($isConfirmed || ($subscriber->exists && !$subscriber->unsubscribed_at)) {
            $subscriber->unsubscribed_at = null;
        }
        // Confirmation required
        else {
            $subscriber->unsubscribed_at = $subscriber->freshTimestamp();
        }

        $subscriber->save();

        if ($addToList) {

            if (!$list = SubscriberList::where('code', $addToList)->first()) {
                throw new ApplicationException('Unable to find a list with code: ' . $addToList);
            }

            if (!$list->subscribers()->where('id', $subscriber->id)->count()) {
                $list->subscribers()->add($subscriber);
            }

        }

        return $subscriber;
    }

    public function getUniqueCode()
    {
        $hash = md5($this->id . '!' . $this->email);
        return base64_encode($this->id.'!'.$hash);
    }

}