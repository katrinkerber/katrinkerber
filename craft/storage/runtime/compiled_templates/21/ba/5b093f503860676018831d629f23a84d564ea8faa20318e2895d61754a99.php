<?php

/* _includes/forms/select */
class __TwigTemplate_21ba5b093f503860676018831d629f23a84d564ea8faa20318e2895d61754a99 extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "select", 1 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)))), " ");
        // line 6
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : null)) : (array()));
        // line 7
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (null));
        // line 8
        $context["hasOptgroups"] = false;
        // line 10
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\">
\t<select";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 13
        if ((array_key_exists("toggle", $context) && (isset($context["toggle"]) ? $context["toggle"] : null))) {
            echo " class=\"fieldtoggle\"";
        }
        // line 14
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 15
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 16
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        // line 17
        if (array_key_exists("targetPrefix", $context)) {
            echo " data-target-prefix=\"";
            echo twig_escape_filter($this->env, (isset($context["targetPrefix"]) ? $context["targetPrefix"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 19
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "optgroup", array(), "any", true, true)) {
                // line 20
                echo "\t\t\t\t";
                if ((isset($context["hasOptgroups"]) ? $context["hasOptgroups"] : null)) {
                    // line 21
                    echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t";
                    $context["hasOptgroups"] = true;
                    // line 24
                    echo "\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "optgroup"), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t";
                $context["optionLabel"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label")) : ((isset($context["option"]) ? $context["option"] : null)));
                // line 28
                echo "\t\t\t\t";
                $context["optionValue"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value")) : ((isset($context["key"]) ? $context["key"] : null)));
                // line 29
                echo "\t\t\t\t";
                $context["optionDisabled"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "disabled", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "disabled")) : (false));
                // line 30
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["optionValue"]) ? $context["optionValue"] : null), "html", null, true);
                echo "\"";
                if (((isset($context["optionValue"]) ? $context["optionValue"] : null) == (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected";
                }
                if ((isset($context["optionDisabled"]) ? $context["optionDisabled"] : null)) {
                    echo " disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["optionLabel"]) ? $context["optionLabel"] : null), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 32
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t";
        if ((isset($context["hasOptgroups"]) ? $context["hasOptgroups"] : null)) {
            // line 34
            echo "\t\t\t</optgroup>
\t\t";
        }
        // line 36
        echo "\t</select>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/select";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  123 => 34,  120 => 33,  114 => 32,  99 => 30,  96 => 29,  93 => 28,  90 => 27,  84 => 25,  81 => 24,  78 => 23,  74 => 21,  71 => 20,  68 => 19,  64 => 18,  56 => 17,  52 => 16,  48 => 15,  42 => 14,  38 => 13,  32 => 12,  27 => 10,  25 => 8,  28 => 15,  26 => 4,  23 => 7,  21 => 6,  19 => 1,);
    }
}
