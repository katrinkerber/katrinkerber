<?php

/* entries/contact/{{object.id}} */
class __TwigTemplate_02dbd34adf1b737954521bb421e6ec3d28336151ed88537a152483aa7ef673db extends Craft\BaseTemplate
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
        echo "entries/contact/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "id"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "entries/contact/{{object.id}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
