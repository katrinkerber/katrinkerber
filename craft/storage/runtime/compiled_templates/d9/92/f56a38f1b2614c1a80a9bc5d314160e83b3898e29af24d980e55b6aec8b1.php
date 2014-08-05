<?php

/* entries/entries/{{object.id}} */
class __TwigTemplate_d992f56a38f1b2614c1a80a9bc5d314160e83b3898e29af24d980e55b6aec8b1 extends Craft\BaseTemplate
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
        echo "entries/entries/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "id"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "entries/entries/{{object.id}}";
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
