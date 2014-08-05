<?php

/* contact */
class __TwigTemplate_141701bf07820be3dbac7b50d83c1a48178a2d2bb52db29769afbfe57bffe2c1 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["pageTitle"] = ucwords($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  <h1 class=\"visuallyhidden\">";
        echo twig_escape_filter($this->env, ucwords($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title")), "html", null, true);
        echo "</h1>

  ";
        // line 7
        $this->env->loadTemplate("_includes/pagecontentsections")->display($context);
    }

    public function getTemplateName()
    {
        return "contact";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 5,  30 => 4,  25 => 2,);
    }
}
