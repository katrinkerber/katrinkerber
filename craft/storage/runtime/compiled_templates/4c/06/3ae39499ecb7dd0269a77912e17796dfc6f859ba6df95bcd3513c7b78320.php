<?php

/* _components/assetsourcetypes/Local/settings */
class __TwigTemplate_4c063ae39499ecb7dd0269a77912e17796dfc6f859ba6df95bcd3513c7b78320 extends Craft\BaseTemplate
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
        $context["__internal_34b8df6f153ab1a34aa89c96a4124928c1a50d7d4b356bf0ae3e085b507a9c27"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_34b8df6f153ab1a34aa89c96a4124928c1a50d7d4b356bf0ae3e085b507a9c27"]->gettextField(array("label" => \Craft\Craft::t("File System Path"), "instructions" => \Craft\Craft::t("The path to your folder on the file system."), "id" => "path", "class" => "ltr", "name" => "path", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "path"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "path"), "method"), "required" => true, "placeholder" => \Craft\Craft::t("/path/to/folder/")));
        // line 13
        echo "

";
        // line 15
        echo $context["__internal_34b8df6f153ab1a34aa89c96a4124928c1a50d7d4b356bf0ae3e085b507a9c27"]->gettextField(array("label" => \Craft\Craft::t("URL"), "instructions" => \Craft\Craft::t("The URL to your folder."), "id" => "url", "class" => "ltr", "name" => "url", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "url"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "url"), "method"), "required" => true, "placeholder" => \Craft\Craft::t("http://example.com/path/to/folder/")));
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/assetsourcetypes/Local/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 25,  37 => 6,  92 => 23,  90 => 22,  85 => 20,  74 => 17,  65 => 14,  42 => 8,  40 => 7,  25 => 4,  33 => 14,  21 => 2,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  165 => 1,  159 => 180,  151 => 170,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  91 => 92,  87 => 87,  83 => 82,  79 => 23,  71 => 21,  67 => 20,  63 => 19,  55 => 47,  43 => 32,  39 => 15,  31 => 17,  27 => 6,  23 => 3,  19 => 1,  191 => 73,  184 => 68,  182 => 63,  177 => 60,  174 => 59,  155 => 175,  147 => 165,  144 => 55,  137 => 53,  133 => 52,  127 => 135,  121 => 48,  118 => 47,  108 => 52,  102 => 50,  96 => 48,  93 => 47,  86 => 24,  78 => 19,  75 => 22,  72 => 43,  68 => 15,  64 => 40,  62 => 32,  59 => 11,  57 => 18,  53 => 28,  51 => 17,  47 => 10,  45 => 9,  41 => 13,  35 => 22,  30 => 15,  28 => 4,  26 => 13,  24 => 3,);
    }
}
