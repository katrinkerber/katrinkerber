<?php

/* entries/_titlefield */
class __TwigTemplate_a7f7a3b69889557d8cead60d3b3d004cfaaada8ae76661665b7a9a2c1b0d80cf extends Craft\BaseTemplate
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
        $context["__internal_649539b05c62370722253c344c61ca127ea3963158aaf518547461813298ae4c"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        $context["static"] = ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (false));
        // line 3
        echo "
";
        // line 4
        echo $context["__internal_649539b05c62370722253c344c61ca127ea3963158aaf518547461813298ae4c"]->gettextField(array("label" => \Craft\Craft::t($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getType", array(), "method"), "titleLabel")), "id" => "title", "name" => "title", "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "errors" => (((!(isset($context["static"]) ? $context["static"] : null))) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "title"), "method")) : ("")), "first" => true, "autofocus" => true, "required" => (!(isset($context["static"]) ? $context["static"] : null)), "disabled" => (isset($context["static"]) ? $context["static"] : null), "maxlength" => 255));
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries/_titlefield";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 15,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
