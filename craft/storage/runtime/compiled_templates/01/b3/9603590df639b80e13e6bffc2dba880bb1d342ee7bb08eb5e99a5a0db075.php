<?php

/* projects */
class __TwigTemplate_01b39603590df639b80e13e6bffc2dba880bb1d342ee7bb08eb5e99a5a0db075 extends Craft\BaseTemplate
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
        if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageIntro")) {
            // line 8
            echo "    <div class=\"page__intro\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageIntro"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        $context["projects"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "entries"), "method"), "type", array(0 => "projects"), "method");
        // line 14
        echo "  ";
        $this->env->loadTemplate("_includes/listing-projects")->display($context);
        // line 15
        echo "
  ";
        // line 16
        $this->env->loadTemplate("_includes/callout")->display($context);
    }

    public function getTemplateName()
    {
        return "projects";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  44 => 9,  41 => 8,  39 => 7,  33 => 5,  30 => 4,  25 => 2,);
    }
}
