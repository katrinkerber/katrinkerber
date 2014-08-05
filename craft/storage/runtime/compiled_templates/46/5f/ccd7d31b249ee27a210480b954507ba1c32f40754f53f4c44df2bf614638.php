<?php

/* _components/fieldtypes/PlainText/input */
class __TwigTemplate_465fccd7d31b249ee27a210480b954507ba1c32f40754f53f4c44df2bf614638 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        $context["config"] = array("id" => (isset($context["name"]) ? $context["name"] : null), "name" => (isset($context["name"]) ? $context["name"] : null), "value" => (isset($context["value"]) ? $context["value"] : null), "class" => "nicetext", "placeholder" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "placeholder"), "rows" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "initialRows"));
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "multiline")) {
            // line 13
            echo "\t";
            echo $context["forms"]->gettextarea((isset($context["config"]) ? $context["config"] : null));
            echo "
";
        } else {
            // line 15
            echo "\t";
            echo $context["forms"]->gettext((isset($context["config"]) ? $context["config"] : null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 13,  24 => 3,  62 => 19,  51 => 14,  48 => 13,  34 => 8,  28 => 5,  26 => 11,  67 => 12,  64 => 20,  59 => 18,  42 => 11,  37 => 15,  30 => 6,  23 => 3,  72 => 15,  57 => 13,  55 => 16,  46 => 7,  21 => 2,  19 => 1,  568 => 289,  564 => 287,  561 => 286,  555 => 283,  549 => 280,  543 => 276,  540 => 275,  535 => 272,  529 => 269,  526 => 268,  524 => 267,  518 => 263,  510 => 261,  508 => 260,  505 => 259,  492 => 257,  490 => 256,  487 => 255,  484 => 254,  481 => 253,  478 => 252,  475 => 251,  472 => 250,  469 => 249,  467 => 248,  460 => 246,  452 => 241,  443 => 235,  438 => 232,  435 => 227,  432 => 225,  428 => 223,  422 => 220,  416 => 217,  412 => 216,  406 => 212,  403 => 208,  400 => 206,  395 => 203,  390 => 201,  386 => 200,  381 => 199,  378 => 198,  375 => 196,  367 => 194,  364 => 189,  359 => 186,  353 => 183,  347 => 182,  341 => 178,  339 => 177,  336 => 176,  333 => 174,  329 => 172,  323 => 169,  319 => 168,  316 => 167,  314 => 166,  309 => 163,  305 => 161,  303 => 158,  300 => 157,  297 => 156,  290 => 152,  286 => 151,  283 => 150,  281 => 149,  278 => 148,  273 => 145,  271 => 140,  268 => 139,  265 => 138,  263 => 137,  260 => 136,  257 => 135,  255 => 134,  251 => 132,  249 => 125,  245 => 123,  243 => 116,  240 => 115,  236 => 113,  233 => 106,  231 => 105,  228 => 104,  224 => 102,  221 => 95,  219 => 94,  215 => 92,  213 => 85,  210 => 84,  206 => 82,  203 => 76,  201 => 75,  197 => 73,  195 => 72,  192 => 71,  188 => 69,  181 => 67,  177 => 65,  170 => 64,  167 => 58,  163 => 57,  161 => 56,  155 => 55,  152 => 54,  148 => 53,  145 => 52,  143 => 51,  140 => 50,  137 => 49,  128 => 46,  126 => 45,  120 => 42,  117 => 41,  113 => 39,  110 => 38,  108 => 37,  101 => 32,  98 => 29,  96 => 28,  90 => 24,  84 => 22,  81 => 21,  74 => 20,  68 => 19,  63 => 18,  61 => 17,  56 => 16,  53 => 15,  47 => 297,  45 => 12,  43 => 12,  41 => 11,  39 => 10,  35 => 7,  32 => 7,  29 => 12,  27 => 3,  25 => 4,);
    }
}
