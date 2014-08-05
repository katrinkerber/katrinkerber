<?php

/* _includes/field */
class __TwigTemplate_5e51600fb7dfc66a4d2a6660fa45c92cedfd6a3d244efc9fbaef35ed8c772d74 extends Craft\BaseTemplate
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
        $context["static"] = ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (false));
        // line 2
        $context["element"] = ((array_key_exists("element", $context)) ? ((isset($context["element"]) ? $context["element"] : null)) : (null));
        // line 3
        echo "
";
        // line 4
        $context["value"] = (((isset($context["element"]) ? $context["element"] : null)) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"))) : (null));
        // line 5
        $context["errors"] = ((((isset($context["element"]) ? $context["element"] : null) && (!(isset($context["static"]) ? $context["static"] : null)))) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "getErrors", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle")), "method")) : (null));
        // line 6
        $context["fieldtype"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields"), "populateFieldType", array(0 => (isset($context["field"]) ? $context["field"] : null), 1 => (isset($context["element"]) ? $context["element"] : null)), "method");
        // line 7
        $context["instructions"] = (((!(isset($context["static"]) ? $context["static"] : null))) ? (\Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "instructions"))) : (null));
        // line 8
        echo "
";
        // line 9
        if ((isset($context["fieldtype"]) ? $context["fieldtype"] : null)) {
            // line 10
            echo "\t";
            if ((!(isset($context["static"]) ? $context["static"] : null))) {
                // line 11
                echo "\t\t";
                $context["input"] = $this->getAttribute((isset($context["fieldtype"]) ? $context["fieldtype"] : null), "getInputHtml", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"), 1 => (isset($context["value"]) ? $context["value"] : null)), "method");
                // line 12
                echo "\t";
            } else {
                // line 13
                echo "\t\t";
                $context["input"] = $this->getAttribute((isset($context["fieldtype"]) ? $context["fieldtype"] : null), "getStaticHtml", array(0 => (isset($context["value"]) ? $context["value"] : null)), "method");
                // line 14
                echo "\t";
            }
        } else {
            // line 16
            echo "\t";
            $context["input"] = (("<p class=\"error\">" . \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type")))) . "</p>");
        }
        // line 18
        echo "
";
        // line 19
        if (((isset($context["instructions"]) ? $context["instructions"] : null) || (isset($context["input"]) ? $context["input"] : null))) {
            // line 20
            echo "\t";
            $this->env->loadTemplate("_includes/forms/field")->display(array("label" => twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name"))), "required" => (((!(isset($context["static"]) ? $context["static"] : null))) ? ((isset($context["required"]) ? $context["required"] : null)) : (false)), "instructions" => (isset($context["instructions"]) ? $context["instructions"] : null), "id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"), "errors" => (isset($context["errors"]) ? $context["errors"] : null), "input" => (isset($context["input"]) ? $context["input"] : null)));
        }
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  51 => 14,  48 => 13,  34 => 8,  28 => 5,  26 => 4,  67 => 12,  64 => 20,  59 => 18,  42 => 11,  37 => 9,  30 => 6,  23 => 3,  72 => 15,  57 => 13,  55 => 16,  46 => 7,  21 => 2,  19 => 1,  568 => 289,  564 => 287,  561 => 286,  555 => 283,  549 => 280,  543 => 276,  540 => 275,  535 => 272,  529 => 269,  526 => 268,  524 => 267,  518 => 263,  510 => 261,  508 => 260,  505 => 259,  492 => 257,  490 => 256,  487 => 255,  484 => 254,  481 => 253,  478 => 252,  475 => 251,  472 => 250,  469 => 249,  467 => 248,  460 => 246,  452 => 241,  443 => 235,  438 => 232,  435 => 227,  432 => 225,  428 => 223,  422 => 220,  416 => 217,  412 => 216,  406 => 212,  403 => 208,  400 => 206,  395 => 203,  390 => 201,  386 => 200,  381 => 199,  378 => 198,  375 => 196,  367 => 194,  364 => 189,  359 => 186,  353 => 183,  347 => 182,  341 => 178,  339 => 177,  336 => 176,  333 => 174,  329 => 172,  323 => 169,  319 => 168,  316 => 167,  314 => 166,  309 => 163,  305 => 161,  303 => 158,  300 => 157,  297 => 156,  290 => 152,  286 => 151,  283 => 150,  281 => 149,  278 => 148,  273 => 145,  271 => 140,  268 => 139,  265 => 138,  263 => 137,  260 => 136,  257 => 135,  255 => 134,  251 => 132,  249 => 125,  245 => 123,  243 => 116,  240 => 115,  236 => 113,  233 => 106,  231 => 105,  228 => 104,  224 => 102,  221 => 95,  219 => 94,  215 => 92,  213 => 85,  210 => 84,  206 => 82,  203 => 76,  201 => 75,  197 => 73,  195 => 72,  192 => 71,  188 => 69,  181 => 67,  177 => 65,  170 => 64,  167 => 58,  163 => 57,  161 => 56,  155 => 55,  152 => 54,  148 => 53,  145 => 52,  143 => 51,  140 => 50,  137 => 49,  128 => 46,  126 => 45,  120 => 42,  117 => 41,  113 => 39,  110 => 38,  108 => 37,  101 => 32,  98 => 29,  96 => 28,  90 => 24,  84 => 22,  81 => 21,  74 => 20,  68 => 19,  63 => 18,  61 => 17,  56 => 16,  53 => 15,  47 => 297,  45 => 12,  43 => 12,  41 => 11,  39 => 10,  35 => 7,  32 => 7,  29 => 6,  27 => 3,  25 => 4,);
    }
}
