<?php

/* 500 */
class __TwigTemplate_c93d0785cd7ff85be2b22349267818773d98209241032cc8ccdfb4478aebae40 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/message");

        $this->blocks = array(
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Internal Server Error");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_message($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<p>
\t\t";
        // line 7
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 8
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
\t\t";
        } else {
            // line 10
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("An error occurred while processing your request."), "html", null, true);
            echo "
\t\t";
        }
        // line 12
        echo "\t</p>
";
    }

    public function getTemplateName()
    {
        return "500";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  47 => 10,  39 => 7,  33 => 5,  25 => 2,  52 => 18,  41 => 8,  37 => 12,  34 => 11,  30 => 4,  19 => 1,);
    }
}
