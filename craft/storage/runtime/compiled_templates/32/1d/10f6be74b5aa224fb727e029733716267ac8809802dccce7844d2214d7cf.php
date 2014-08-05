<?php

/* _elements/indexcontainer */
class __TwigTemplate_321d10f6be74b5aa224fb727e029733716267ac8809802dccce7844d2214d7cf extends Craft\BaseTemplate
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
        $context["__internal_ca3c5d9dd8b42b3651ba4e9d00650383e033e853d5f6e1b79d35fbad69c604f8"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        \Craft\craft()->templates->includeTranslations(
        	"Display in a table",
        	"Display hierarchically",
        	"Display as thumbnails"
        );
        // line 8
        echo "
";
        // line 9
        $context["context"] = ((array_key_exists("context", $context)) ? ((isset($context["context"]) ? $context["context"] : null)) : ("index"));
        // line 10
        $context["showStatusMenu"] = (((array_key_exists("showStatusMenu", $context) && ((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : null) != "auto"))) ? ((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : null)) : ($this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "hasStatuses", array(), "method")));
        // line 11
        $context["showLocaleMenu"] = ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") && ((isset($context["context"]) ? $context["context"] : null) == "index"))) ? ((((array_key_exists("showLocaleMenu", $context) && ((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : null) != "auto"))) ? ((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : null)) : ($this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "isLocalized", array(), "method")))) : (false));
        // line 12
        echo "
<div class=\"main\">
\t<div class=\"toolbar\">
\t\t<table class=\"inputs fullwidth\">
\t\t\t<tr>
\t\t\t\t";
        // line 17
        if ((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : null)) {
            // line 18
            echo "\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn statusmenubtn\"><span class=\"status\"></span>";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t<li><a data-status=\"\" class=\"sel\"><span class=\"status\"></span>";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "getStatuses", array(), "method"));
            foreach ($context['_seq'] as $context["status"] => $context["label"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t<li><a data-status=\"";
                echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
                echo "\"><span class=\"status ";
                echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t";
        if ((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : null)) {
            // line 31
            echo "\t\t\t\t\t";
            $context["editableLocaleIds"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getEditableLocaleIds", array(), "method");
            // line 32
            echo "\t\t\t\t\t";
            if (twig_in_filter($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale"), (isset($context["editableLocaleIds"]) ? $context["editableLocaleIds"] : null))) {
                // line 33
                echo "\t\t\t\t\t\t";
                $context["initialLocale"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getCurrentLocale", array(), "method");
                // line 34
                echo "\t\t\t\t\t";
            } elseif (twig_length_filter($this->env, (isset($context["editableLocaleIds"]) ? $context["editableLocaleIds"] : null))) {
                // line 35
                echo "\t\t\t\t\t\t";
                $context["initialLocale"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleById", array(0 => twig_first($this->env, (isset($context["editableLocaleIds"]) ? $context["editableLocaleIds"] : null))), "method");
                // line 36
                echo "\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t";
                $context["initialLocale"] = null;
                // line 38
                echo "\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn localemenubtn\">";
            // line 40
            echo twig_escape_filter($this->env, (((isset($context["initialLocale"]) ? $context["initialLocale"] : null)) ? ($this->getAttribute((isset($context["initialLocale"]) ? $context["initialLocale"] : null), "getName", array(), "method")) : ("")), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getEditableLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t<li><a";
                if (((isset($context["initialLocale"]) ? $context["initialLocale"] : null) && ($this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "getId", array(), "method") == $this->getAttribute((isset($context["initialLocale"]) ? $context["initialLocale"] : null), "getId", array(), "method")))) {
                    echo " class=\"sel\"";
                }
                echo " data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "getId", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "getName", array(), "method"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t<td>
\t\t\t\t\t<div class=\"texticon search icon\">
\t\t\t\t\t\t";
        // line 52
        echo $context["__internal_ca3c5d9dd8b42b3651ba4e9d00650383e033e853d5f6e1b79d35fbad69c604f8"]->gettext(array("placeholder" => \Craft\Craft::t("Search")));
        // line 54
        echo "
\t\t\t\t\t\t<div class=\"clear hidden\" title=\"";
        // line 55
        echo twig_escape_filter($this->env, \Craft\Craft::t("Clear"), "html", null, true);
        echo "\"></div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"thin viewbtns hidden\"></td>
\t\t\t</tr>
\t\t</table>
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t<div class=\"elements\"></div>

\t<div class=\"centeralign\">
\t\t<div class=\"spinner loadingmore hidden\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/indexcontainer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 55,  148 => 54,  146 => 52,  142 => 50,  136 => 46,  121 => 44,  117 => 43,  111 => 40,  108 => 39,  105 => 38,  102 => 37,  99 => 36,  96 => 35,  93 => 34,  90 => 33,  87 => 32,  81 => 30,  62 => 24,  54 => 22,  48 => 19,  45 => 18,  43 => 17,  36 => 12,  27 => 8,  21 => 3,  19 => 1,  92 => 35,  88 => 34,  84 => 31,  80 => 32,  75 => 26,  72 => 30,  66 => 18,  64 => 17,  61 => 16,  58 => 23,  55 => 14,  50 => 40,  46 => 26,  44 => 25,  41 => 24,  39 => 23,  37 => 11,  34 => 11,  32 => 10,  30 => 9,  28 => 4,  26 => 3,  24 => 2,);
    }
}
