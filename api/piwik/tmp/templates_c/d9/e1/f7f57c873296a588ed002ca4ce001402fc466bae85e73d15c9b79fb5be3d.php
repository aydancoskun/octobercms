<?php

/* @CorePluginsAdmin/plugins.twig */
class __TwigTemplate_d9e1f7f57c873296a588ed002ca4ce001402fc466bae85e73d15c9b79fb5be3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("admin.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["plugins"] = $this->env->loadTemplate("@CorePluginsAdmin/macros.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div style=\"max-width:980px;\">

    ";
        // line 8
        if (twig_length_filter($this->env, (isset($context["pluginsHavingUpdate"]) ? $context["pluginsHavingUpdate"] : $this->getContext($context, "pluginsHavingUpdate")))) {
            // line 9
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["pluginsHavingUpdate"]) ? $context["pluginsHavingUpdate"] : $this->getContext($context, "pluginsHavingUpdate"))), "html", null, true);
            echo " Update(s) available</h2>

        <p>";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InfoPluginUpdateIsRecommended")), "html", null, true);
            echo "</p>

        ";
            // line 13
            echo $context["plugins"]->gettablePluginUpdates((isset($context["pluginsHavingUpdate"]) ? $context["pluginsHavingUpdate"] : $this->getContext($context, "pluginsHavingUpdate")), (isset($context["updateNonce"]) ? $context["updateNonce"] : $this->getContext($context, "updateNonce")), (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce")), 0);
            echo "
    ";
        }
        // line 15
        echo "
    <h2 piwik-enriched-headline>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginsManagement")), "html", null, true);
        echo "</h2>

    <p>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginsExtendPiwik")), "html", null, true);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OncePluginIsInstalledYouMayActivateHere")), "html", null, true);
        echo "

    ";
        // line 21
        if ((!(isset($context["isPluginsAdminEnabled"]) ? $context["isPluginsAdminEnabled"] : $this->getContext($context, "isPluginsAdminEnabled")))) {
            // line 22
            echo "        <br/>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_DoMoreContactPiwikAdmins")), "html", null, true);
            echo "
    ";
        }
        // line 24
        echo "
    </p>

    ";
        // line 27
        echo $context["plugins"]->getpluginsFilter(false, (isset($context["isMarketplaceEnabled"]) ? $context["isMarketplaceEnabled"] : $this->getContext($context, "isMarketplaceEnabled")));
        echo "

    ";
        // line 29
        echo $context["plugins"]->gettablePlugins((isset($context["pluginsInfo"]) ? $context["pluginsInfo"] : $this->getContext($context, "pluginsInfo")), (isset($context["pluginNamesHavingSettings"]) ? $context["pluginNamesHavingSettings"] : $this->getContext($context, "pluginNamesHavingSettings")), (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce")), (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce")), (isset($context["uninstallNonce"]) ? $context["uninstallNonce"] : $this->getContext($context, "uninstallNonce")), false, (isset($context["marketplacePluginNames"]) ? $context["marketplacePluginNames"] : $this->getContext($context, "marketplacePluginNames")), (isset($context["isPluginsAdminEnabled"]) ? $context["isPluginsAdminEnabled"] : $this->getContext($context, "isPluginsAdminEnabled")));
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/plugins.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  85 => 27,  80 => 24,  74 => 22,  72 => 21,  67 => 19,  63 => 18,  58 => 16,  55 => 15,  50 => 13,  45 => 11,  39 => 9,  37 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
