<?php

/* about */
class __TwigTemplate_aac28d2d90b59032e2e9ba7f99f007cbed2dec0a6a930ef0c36437c0322c0a81 extends Craft\BaseTemplate
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

  <img class=\"page--about__img\" src=\"/uploads/portrait.jpg\" alt=\"Photo of me\">

  ";
        // line 9
        if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageIntro")) {
            // line 10
            echo "    <div class=\"page__intro\">
      ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageIntro"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 14
        echo "
  ";
        // line 15
        $this->env->loadTemplate("_includes/pagecontentsections")->display($context);
        // line 16
        echo "
  ";
        // line 17
        $this->env->loadTemplate("_includes/callout")->display($context);
    }

    public function getTemplateName()
    {
        return "about";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  57 => 16,  55 => 15,  52 => 14,  46 => 11,  43 => 10,  41 => 9,  33 => 5,  30 => 4,  25 => 2,);
    }
}
