<?php

/* 404 */
class __TwigTemplate_75f8c403fd60eaa8f39c2b5eff6fdfc3aa34d3af68face57f1c101fec0bd8956 extends Craft\BaseTemplate
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
        // line 20
        $context["title"] = "Page Not Found";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "\t<h1 class=\"visuallyhidden\">Page Not Found</h1>

  <div class=\"page__intro\">
    <p>Whooa there, where did you stumble off to?</p>
  </div>

";
    }

    public function getTemplateName()
    {
        return "404";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 23,  30 => 22,  25 => 20,);
    }
}
