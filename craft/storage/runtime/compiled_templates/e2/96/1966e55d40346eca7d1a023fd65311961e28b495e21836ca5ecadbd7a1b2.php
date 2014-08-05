<?php

/* entries/about/{{object.id}} */
class __TwigTemplate_e2961966e55d40346eca7d1a023fd65311961e28b495e21836ca5ecadbd7a1b2 extends Craft\BaseTemplate
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
        echo "entries/about/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "id"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "entries/about/{{object.id}}";
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
