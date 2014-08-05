<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_8e6641f7cb97f75b1fc7c352954f2fd3204c329cffe6e747c6f4c1fcf50f3749 extends Craft\BaseTemplate
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
        $context["on"] = ((array_key_exists("on", $context)) ? ((isset($context["on"]) ? $context["on"] : null)) : (false));
        // line 2
        $context["small"] = ((array_key_exists("small", $context)) ? ((isset($context["small"]) ? $context["small"] : null)) : (false));
        // line 3
        $context["toggle"] = ((array_key_exists("toggle", $context)) ? ((isset($context["toggle"]) ? $context["toggle"] : null)) : (false));
        // line 4
        $context["reverseToggle"] = ((array_key_exists("reverseToggle", $context)) ? ((isset($context["reverseToggle"]) ? $context["reverseToggle"] : null)) : (false));
        // line 5
        echo "
<div class=\"lightswitch";
        // line 6
        if ((isset($context["on"]) ? $context["on"] : null)) {
            echo " on";
        }
        if ((isset($context["small"]) ? $context["small"] : null)) {
            echo " small";
        }
        if (((isset($context["toggle"]) ? $context["toggle"] : null) || (isset($context["reverseToggle"]) ? $context["reverseToggle"] : null))) {
            echo " fieldtoggle";
        }
        echo "\" tabindex=\"0\"";
        // line 7
        if ((isset($context["toggle"]) ? $context["toggle"] : null)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        // line 8
        if ((isset($context["reverseToggle"]) ? $context["reverseToggle"] : null)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) ? $context["reverseToggle"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
\t<div class=\"lightswitch-container\">
\t\t<div class=\"label on\"></div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\"></div>
\t</div>
\t";
        // line 14
        if (array_key_exists("name", $context)) {
            // line 15
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo (((isset($context["on"]) ? $context["on"] : null)) ? ("1") : (""));
            echo "\"";
            if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
                echo " disabled";
            }
            echo ">";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  60 => 14,  47 => 8,  41 => 7,  30 => 6,  70 => 32,  61 => 29,  51 => 25,  46 => 23,  44 => 21,  40 => 18,  66 => 31,  62 => 15,  39 => 16,  37 => 15,  35 => 14,  33 => 13,  31 => 11,  24 => 5,  127 => 36,  123 => 34,  120 => 33,  114 => 32,  99 => 30,  96 => 29,  93 => 28,  90 => 27,  84 => 39,  81 => 24,  78 => 34,  74 => 33,  71 => 27,  68 => 19,  64 => 18,  56 => 27,  52 => 21,  48 => 24,  42 => 19,  38 => 17,  32 => 12,  27 => 5,  25 => 4,  28 => 8,  26 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
