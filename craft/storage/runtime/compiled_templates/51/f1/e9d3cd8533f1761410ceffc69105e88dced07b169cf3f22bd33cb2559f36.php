<?php

/* {{object.type}}/{{object.slug}} */
class __TwigTemplate_51f1e9d3cd8533f1761410ceffc69105e88dced07b169cf3f22bd33cb2559f36 extends Craft\BaseTemplate
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "type"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{object.type}}/{{object.slug}}";
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
