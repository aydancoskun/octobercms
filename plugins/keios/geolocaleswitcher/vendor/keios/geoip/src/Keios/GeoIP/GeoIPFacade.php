<?php namespace Keios\GeoIP;

use Illuminate\Support\Facades\Facade;

class GeoIPFacade extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'geoip'; }
    
}