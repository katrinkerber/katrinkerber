<?php

/* _includes/fieldlayoutdesigner */
class __TwigTemplate_b29daeb8e571d5d1da690605d926789d070e3031dccb9ede8efdc192249e6822 extends Craft\BaseTemplate
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
        if ((!array_key_exists("customizableTabs", $context))) {
            $context["customizableTabs"] = true;
        }
        // line 2
        if (((!(isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) && (!array_key_exists("pretendTabName", $context)))) {
            // line 3
            echo "\t";
            $context["pretendTabName"] = \Craft\Craft::t("Content");
        }
        // line 5
        echo "
";
        // line 6
        $context["groups"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields"), "getAllGroups", array(0 => "id"), "method");
        // line 7
        $context["fields"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields"), "getAllFields", array(0 => "id"), "method");
        // line 8
        echo "
";
        // line 9
        \Craft\craft()->templates->includeTranslations(
        	"Rename",
        	"Delete",
        	"Make required",
        	"Make not required",
        	"Remove",
        	"Give your tab a name."
        );
        // line 17
        echo "
";
        // line 18
        \Craft\craft()->templates->includeCssFile("//fonts.googleapis.com/css?family=Coming+Soon");
        // line 19
        echo "
";
        // line 42
        echo "


<div id=\"fieldlayoutform\" class=\"fieldlayoutform\">

\t<h2>";
        // line 47
        echo twig_escape_filter($this->env, \Craft\Craft::t("Design your field layout"), "html", null, true);
        echo "</h2>

\t";
        // line 49
        if (array_key_exists("instructions", $context)) {
            // line 50
            echo "\t\t<div class=\"instructions\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((isset($context["instructions"]) ? $context["instructions"] : null)), "html", null, true);
            echo "</div>
\t";
        }
        // line 52
        echo "
\t<div class=\"fld-tabs\">
\t\t";
        // line 54
        if ((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null)) {
            // line 55
            echo "\t\t\t";
            $context["macros"] = $this;
            // line 56
            echo "
\t\t\t";
            // line 57
            if ((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) {
                // line 58
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null), "getTabs", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 59
                    echo "\t\t\t\t\t";
                    echo $context["macros"]->gettab((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null), $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "name"), $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "getFields", array(), "method"));
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t";
                echo $context["macros"]->gettab((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null), (isset($context["pretendTabName"]) ? $context["pretendTabName"] : null), $this->getAttribute((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null), "getFields", array(), "method"));
                echo "
\t\t\t";
            }
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t</div>

\t";
        // line 67
        if ((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) {
            // line 68
            echo "\t\t<div class=\"newtabbtn-container\">
\t\t\t<div class=\"btn add icon\">";
            // line 69
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Tab"), "html", null, true);
            echo "</div>
\t\t\t<h3>";
            // line 70
            echo twig_escape_filter($this->env, \Craft\Craft::t("…Or use one of your field groups as a starting point:"), "html", null, true);
            echo "</h3>
\t\t</div>
\t";
        }
        // line 73
        echo "
\t<div class=\"unusedfields\">
\t\t";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 76
            echo "\t\t\t";
            $context["totalUnselected"] = 0;
            // line 77
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 78
                echo "\t\t\t\t";
                if (((!(isset($context["fieldLayout"]) ? $context["fieldLayout"] : null)) || !twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id"), $this->getAttribute((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null), "getFieldIds", array(), "method")))) {
                    // line 79
                    echo "\t\t\t\t\t";
                    $context["totalUnselected"] = ((isset($context["totalUnselected"]) ? $context["totalUnselected"] : null) + 1);
                    // line 80
                    echo "\t\t\t\t";
                }
                // line 81
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
\t\t\t<div class=\"fld-tab unused";
            // line 83
            if (((isset($context["totalUnselected"]) ? $context["totalUnselected"] : null) == 0)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<div class=\"tab sel\"><span>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name"), "html", null, true);
            echo "</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"fld-tabcontent\">
\t\t\t\t\t";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 89
                echo "\t\t\t\t\t\t";
                $context["selected"] = ((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null) && twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id"), $this->getAttribute((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null), "getFieldIds", array(), "method")));
                // line 90
                echo "\t\t\t\t\t\t<div class=\"fld-field unused";
                if ((isset($context["selected"]) ? $context["selected"] : null)) {
                    echo " hidden";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<span>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t</div>

</div>

";
        // line 101
        ob_start();
        // line 102
        echo "\tvar initFLD = function() {
\t\tnew Craft.FieldLayoutDesigner('#fieldlayoutform', {
\t\t\tcustomizableTabs: ";
        // line 104
        echo (((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) ? ("true") : ("false"));
        echo "
\t\t});
\t};

\t";
        // line 108
        if (array_key_exists("tab", $context)) {
            // line 109
            echo "
\t\tvar \$fldTab = \$('#tab-";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["tab"]) ? $context["tab"] : null), "html", null, true);
            echo "');

\t\tif (\$fldTab.hasClass('sel'))
\t\t{
\t\t\tinitFLD();
\t\t}
\t\telse
\t\t{
\t\t\t\$fldTab.on('activate.fld', function() {
\t\t\t\tinitFLD();
\t\t\t\t\$fldTab.off('activate.fld');
\t\t\t});
\t\t}

\t";
        } else {
            // line 125
            echo "
\t\tinitFLD();

\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 130
        echo "
";
        // line 131
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    // line 20
    public function gettab($_customizableTabs = null, $_tabName = null, $_tabFields = null)
    {
        $context = $this->env->mergeGlobals(array(
            "customizableTabs" => $_customizableTabs,
            "tabName" => $_tabName,
            "tabFields" => $_tabFields,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t<div class=\"fld-tab\">
\t\t<div class=\"tabs\">
\t\t\t<div class=\"tab sel";
            // line 23
            if ((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) {
                echo " draggable";
            }
            echo "\">
\t\t\t\t<span>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["tabName"]) ? $context["tabName"] : null), "html", null, true);
            echo "</span>
\t\t\t\t";
            // line 25
            if ((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) {
                // line 26
                echo "\t\t\t\t\t<a class=\"settings icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t";
            }
            // line 28
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"fld-tabcontent\">
\t\t\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabFields"]) ? $context["tabFields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                echo "\t\t\t\t<div class=\"fld-field";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required")) {
                    echo " fld-required";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), "html", null, true);
                echo "\">
\t\t\t\t\t<a class=\"settings icon\" title=\"";
                // line 33
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t<span>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getField", array(), "method"), "name"), "html", null, true);
                echo "</span>
\t\t\t\t\t<input class=\"id-input\" type=\"hidden\" name=\"fieldLayout[";
                // line 35
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["tabName"]) ? $context["tabName"] : null), "url"), "html", null, true);
                echo "][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 36
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required")) {
                    echo "<input class=\"required-input\" type=\"hidden\" name=\"requiredFields[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), "html", null, true);
                    echo "\">";
                }
                // line 37
                echo "\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_includes/fieldlayoutdesigner";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 39,  344 => 37,  338 => 36,  332 => 35,  328 => 34,  324 => 33,  315 => 32,  311 => 31,  306 => 28,  300 => 26,  298 => 25,  294 => 24,  288 => 23,  284 => 21,  271 => 20,  264 => 130,  257 => 125,  239 => 110,  236 => 109,  234 => 108,  227 => 104,  223 => 102,  215 => 97,  207 => 94,  198 => 91,  189 => 90,  186 => 89,  169 => 83,  166 => 82,  160 => 81,  157 => 80,  154 => 79,  146 => 77,  129 => 70,  125 => 69,  122 => 68,  120 => 67,  116 => 65,  113 => 64,  104 => 61,  88 => 57,  82 => 55,  80 => 54,  76 => 52,  70 => 50,  56 => 42,  48 => 17,  36 => 8,  34 => 7,  29 => 5,  32 => 6,  37 => 6,  92 => 23,  90 => 58,  85 => 56,  74 => 17,  65 => 14,  42 => 8,  40 => 7,  25 => 3,  33 => 14,  21 => 2,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 131,  256 => 24,  244 => 20,  233 => 19,  221 => 101,  210 => 14,  199 => 10,  188 => 9,  176 => 85,  165 => 1,  159 => 180,  151 => 78,  143 => 76,  139 => 75,  135 => 73,  131 => 140,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 62,  103 => 105,  99 => 100,  95 => 59,  91 => 92,  87 => 87,  83 => 82,  79 => 23,  71 => 21,  67 => 20,  63 => 47,  55 => 47,  43 => 32,  39 => 9,  31 => 17,  27 => 6,  23 => 2,  19 => 1,  191 => 73,  184 => 68,  182 => 88,  177 => 60,  174 => 59,  155 => 175,  147 => 165,  144 => 55,  137 => 53,  133 => 52,  127 => 135,  121 => 48,  118 => 47,  108 => 52,  102 => 50,  96 => 48,  93 => 47,  86 => 24,  78 => 19,  75 => 22,  72 => 43,  68 => 49,  64 => 40,  62 => 32,  59 => 11,  57 => 18,  53 => 19,  51 => 18,  47 => 10,  45 => 9,  41 => 13,  35 => 22,  30 => 15,  28 => 4,  26 => 13,  24 => 3,);
    }
}
