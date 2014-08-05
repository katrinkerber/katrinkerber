<?php

/* _components/fieldtypes/Assets/input */
class __TwigTemplate_389c266751d547a8ae4804312164c4c7bcea9cc2e5fa42678edc6a3a483b6d2f extends Craft\BaseTemplate
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
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["elements"] = ((array_key_exists("elements", $context)) ? ((isset($context["elements"]) ? $context["elements"] : null)) : (array()));
        // line 6
        $context["jsClass"] = (((array_key_exists("jsClass", $context) && (isset($context["jsClass"]) ? $context["jsClass"] : null))) ? ((isset($context["jsClass"]) ? $context["jsClass"] : null)) : ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = (((array_key_exists("sources", $context) && (isset($context["sources"]) ? $context["sources"] : null))) ? ((isset($context["sources"]) ? $context["sources"] : null)) : (null));
        // line 8
        $context["criteria"] = (((array_key_exists("criteria", $context) && (isset($context["criteria"]) ? $context["criteria"] : null))) ? ((isset($context["criteria"]) ? $context["criteria"] : null)) : (null));
        // line 9
        $context["storageKey"] = (((array_key_exists("storageKey", $context) && (isset($context["storageKey"]) ? $context["storageKey"] : null))) ? ((isset($context["storageKey"]) ? $context["storageKey"] : null)) : (null));
        // line 11
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 14
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 15
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</div>

\t<div class=\"btn add icon dashed\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["addButtonLabel"]) ? $context["addButtonLabel"] : null), "html", null, true);
        echo "</div>
</div>

";
        // line 21
        ob_start();
        // line 22
        echo "\tnew ";
        echo twig_escape_filter($this->env, (isset($context["jsClass"]) ? $context["jsClass"] : null), "html", null, true);
        echo "(
\t\t\"";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 24
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "getClassHandle", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 26
        echo twig_jsonencode_filter((isset($context["sources"]) ? $context["sources"] : null));
        echo ",
\t\t";
        // line 27
        echo twig_jsonencode_filter((isset($context["criteria"]) ? $context["criteria"] : null));
        echo ",
\t\t";
        // line 28
        echo twig_escape_filter($this->env, (((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) : ("null")), "html", null, true);
        echo ",
\t\t";
        // line 29
        echo twig_escape_filter($this->env, (((isset($context["limit"]) ? $context["limit"] : null)) ? ((isset($context["limit"]) ? $context["limit"] : null)) : ("null")), "html", null, true);
        echo ",
\t\t\"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["storageKey"]) ? $context["storageKey"] : null), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
        echo "
\t);
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 35,  132 => 34,  122 => 30,  118 => 29,  114 => 28,  106 => 26,  102 => 25,  94 => 23,  89 => 22,  87 => 21,  77 => 16,  60 => 14,  33 => 8,  31 => 7,  24 => 3,  62 => 19,  51 => 14,  48 => 13,  34 => 8,  28 => 5,  26 => 11,  67 => 12,  64 => 20,  59 => 18,  42 => 11,  37 => 11,  30 => 6,  23 => 3,  72 => 15,  57 => 13,  55 => 16,  46 => 7,  21 => 2,  19 => 1,  568 => 289,  564 => 287,  561 => 286,  555 => 283,  549 => 280,  543 => 276,  540 => 275,  535 => 272,  529 => 269,  526 => 268,  524 => 267,  518 => 263,  510 => 261,  508 => 260,  505 => 259,  492 => 257,  490 => 256,  487 => 255,  484 => 254,  481 => 253,  478 => 252,  475 => 251,  472 => 250,  469 => 249,  467 => 248,  460 => 246,  452 => 241,  443 => 235,  438 => 232,  435 => 227,  432 => 225,  428 => 223,  422 => 220,  416 => 217,  412 => 216,  406 => 212,  403 => 208,  400 => 206,  395 => 203,  390 => 201,  386 => 200,  381 => 199,  378 => 198,  375 => 196,  367 => 194,  364 => 189,  359 => 186,  353 => 183,  347 => 182,  341 => 178,  339 => 177,  336 => 176,  333 => 174,  329 => 172,  323 => 169,  319 => 168,  316 => 167,  314 => 166,  309 => 163,  305 => 161,  303 => 158,  300 => 157,  297 => 156,  290 => 152,  286 => 151,  283 => 150,  281 => 149,  278 => 148,  273 => 145,  271 => 140,  268 => 139,  265 => 138,  263 => 137,  260 => 136,  257 => 135,  255 => 134,  251 => 132,  249 => 125,  245 => 123,  243 => 116,  240 => 115,  236 => 113,  233 => 106,  231 => 105,  228 => 104,  224 => 102,  221 => 95,  219 => 94,  215 => 92,  213 => 85,  210 => 84,  206 => 82,  203 => 76,  201 => 75,  197 => 73,  195 => 72,  192 => 71,  188 => 69,  181 => 67,  177 => 65,  170 => 64,  167 => 58,  163 => 57,  161 => 56,  155 => 55,  152 => 54,  148 => 53,  145 => 52,  143 => 51,  140 => 50,  137 => 49,  128 => 46,  126 => 31,  120 => 42,  117 => 41,  113 => 39,  110 => 27,  108 => 37,  101 => 32,  98 => 24,  96 => 28,  90 => 24,  84 => 22,  81 => 18,  74 => 20,  68 => 19,  63 => 15,  61 => 17,  56 => 16,  53 => 15,  47 => 297,  45 => 12,  43 => 13,  41 => 11,  39 => 10,  35 => 9,  32 => 7,  29 => 6,  27 => 5,  25 => 4,);
    }
}
