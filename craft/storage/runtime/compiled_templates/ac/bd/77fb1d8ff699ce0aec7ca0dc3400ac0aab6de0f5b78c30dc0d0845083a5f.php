<?php

/* settings/assets/_layout */
class __TwigTemplate_acbd77fb1d8ff699ce0aec7ca0dc3400ac0aab6de0f5b78c30dc0d0845083a5f extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Asset Settings");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 9
        $context["tabs"] = array("sources" => array("label" => \Craft\Craft::t("Sources"), "url" => \Craft\UrlHelper::getUrl("settings/assets")), "transforms" => array("label" => \Craft\Craft::t("Image Transforms"), "url" => \Craft\UrlHelper::getUrl("settings/assets/transforms")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  134 => 41,  126 => 36,  122 => 34,  117 => 31,  107 => 28,  100 => 27,  92 => 26,  84 => 25,  77 => 24,  73 => 23,  68 => 20,  63 => 19,  57 => 18,  53 => 17,  48 => 14,  45 => 13,  43 => 12,  37 => 9,  30 => 8,  28 => 9,  26 => 4,  24 => 2,);
    }
}
