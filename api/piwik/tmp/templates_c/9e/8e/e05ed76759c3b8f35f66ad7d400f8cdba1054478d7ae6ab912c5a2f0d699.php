<?php

/* @Live/index.twig */
class __TwigTemplate_9e8ee05ed76759c3b8f35f66ad7d400f8cdba1054478d7ae6ab912c5a2f0d699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$(document).ready(function () {
        var segment = broadcast.getValueFromUrl('segment');

        \$('#visitsLive').liveWidget({
            interval: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["liveRefreshAfterMs"]) ? $context["liveRefreshAfterMs"] : $this->getContext($context, "liveRefreshAfterMs")), "html", null, true);
        echo ",
            onUpdate: function () {
                //updates the numbers of total visits in startbox
                var ajaxRequest = new ajaxHelper();
                ajaxRequest.setFormat('html');
                ajaxRequest.addParams({
                    module: 'Live',
                    action: 'ajaxTotalVisitors',
                    segment: segment
                }, 'GET');
                ajaxRequest.setCallback(function (r) {
                    \$(\"#visitsTotal\").html(r);
                });
                ajaxRequest.send(false);
            },
            maxRows: 10,
            fadeInSpeed: 600,
            dataUrlParams: {
                module: 'Live',
                action: 'getLastVisitsStart',
                segment: segment
            }
        });
    });
</script>

";
        // line 32
        $this->env->loadTemplate("@Live/_totalVisitors.twig")->display($context);
        // line 33
        echo "
";
        // line 34
        echo (isset($context["visitors"]) ? $context["visitors"] : $this->getContext($context, "visitors"));
        echo "

";
        // line 36
        ob_start();
        // line 37
        echo "<div class=\"visitsLiveFooter\">
    <a title=\"Start Live!\" href=\"javascript:void(0);\" onclick=\"onClickPause();\">
        <img id=\"pauseImage\" border=\"0\" src=\"plugins/Live/images/pause.gif\" />
    </a>
    <a title=\"Pause Live!\" href=\"javascript:void(0);\" onclick=\"onClickPlay();\">
        <img id=\"playImage\" style=\"display: none;\" border=\"0\" src=\"plugins/Live/images/play.gif\" />
    </a>
    ";
        // line 44
        if ((!(isset($context["disableLink"]) ? $context["disableLink"] : $this->getContext($context, "disableLink")))) {
            // line 45
            echo "        &nbsp;
        <a class=\"rightLink\" href=\"javascript:broadcast.propagateAjax('module=Live&action=getVisitorLog')\">";
            // line 46
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LinkVisitorLog")), "html", null, true);
            echo "</a>
    ";
        }
        // line 48
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@Live/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 48,  81 => 46,  78 => 45,  76 => 44,  67 => 37,  65 => 36,  60 => 34,  57 => 33,  55 => 32,  26 => 6,  19 => 1,);
    }
}
