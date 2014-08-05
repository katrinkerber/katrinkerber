<?php

/* _layouts/base */
class __TwigTemplate_8f1aa6549415b1f72915aab6576fef8853e7cfeb2233e5be2363dc16508b6db0 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->templates->includeCssResource("css/craft.css", true);
        // line 3
        $context["siteName"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getSiteName", array(), "method");
        // line 4
        $context["docTitle"] = ((array_key_exists("docTitle", $context)) ? ((isset($context["docTitle"]) ? $context["docTitle"] : null)) : (strip_tags((isset($context["title"]) ? $context["title"] : null))));
        // line 6
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "</head>
<body class=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleData", array(), "method"), "getOrientation", array(), "method"), "html", null, true);
        echo "\">
\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "\t";
        $this->displayBlock('foot', $context, $blocks);
        // line 24
        echo "</body>
</html>
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta charset=\"utf-8\">
\t<title>";
        // line 12
        echo twig_escape_filter($this->env, (((isset($context["docTitle"]) ? $context["docTitle"] : null) . ((((isset($context["docTitle"]) ? $context["docTitle"] : null) && (isset($context["siteName"]) ? $context["siteName"] : null))) ? (" - ") : (""))) . (isset($context["siteName"]) ? $context["siteName"] : null)), "html", null, true);
        echo "</title>
\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getHeadHtmlFunction(), "html", null, true);
        echo "
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<script type=\"text/javascript\">
\t\t// Fix for Firefox autofocus CSS bug
\t\t// See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
\t</script>
\t";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_foot($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  75 => 22,  64 => 13,  60 => 12,  56 => 10,  47 => 24,  44 => 23,  42 => 22,  38 => 21,  33 => 9,  22 => 1,  230 => 80,  224 => 79,  209 => 76,  204 => 75,  193 => 70,  189 => 69,  181 => 67,  173 => 65,  169 => 64,  161 => 62,  157 => 61,  149 => 59,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  109 => 49,  101 => 47,  91 => 40,  86 => 37,  83 => 36,  78 => 34,  71 => 30,  69 => 29,  67 => 28,  65 => 27,  61 => 25,  59 => 24,  55 => 22,  52 => 19,  50 => 18,  41 => 10,  35 => 20,  29 => 6,  25 => 4,  661 => 227,  658 => 226,  650 => 233,  642 => 231,  640 => 230,  637 => 229,  635 => 226,  632 => 225,  626 => 222,  623 => 221,  621 => 220,  612 => 219,  609 => 218,  606 => 217,  603 => 216,  601 => 215,  595 => 211,  592 => 210,  589 => 209,  586 => 208,  583 => 207,  577 => 201,  571 => 198,  568 => 197,  566 => 196,  563 => 195,  557 => 193,  555 => 192,  552 => 191,  547 => 188,  536 => 186,  532 => 185,  528 => 183,  525 => 182,  522 => 181,  513 => 267,  507 => 265,  505 => 264,  501 => 263,  495 => 260,  491 => 259,  487 => 257,  485 => 256,  480 => 253,  472 => 251,  470 => 250,  459 => 247,  451 => 245,  449 => 244,  443 => 243,  435 => 242,  429 => 238,  427 => 207,  422 => 204,  420 => 181,  414 => 177,  408 => 176,  400 => 174,  397 => 173,  394 => 172,  390 => 171,  380 => 163,  372 => 160,  367 => 158,  365 => 157,  363 => 156,  356 => 155,  351 => 154,  347 => 153,  336 => 149,  324 => 143,  316 => 141,  314 => 140,  308 => 139,  302 => 136,  298 => 134,  293 => 131,  286 => 129,  273 => 127,  269 => 126,  263 => 124,  259 => 123,  254 => 121,  246 => 118,  243 => 117,  241 => 116,  238 => 115,  235 => 114,  232 => 113,  229 => 112,  226 => 111,  219 => 107,  213 => 77,  206 => 105,  203 => 104,  200 => 74,  197 => 102,  194 => 101,  191 => 100,  188 => 99,  185 => 68,  182 => 97,  180 => 96,  177 => 66,  174 => 94,  171 => 93,  168 => 92,  165 => 63,  162 => 90,  159 => 89,  156 => 88,  153 => 60,  145 => 58,  142 => 81,  139 => 80,  136 => 79,  132 => 77,  123 => 75,  119 => 74,  116 => 73,  113 => 50,  110 => 71,  108 => 70,  105 => 48,  99 => 67,  96 => 66,  93 => 65,  151 => 86,  134 => 41,  126 => 36,  122 => 34,  117 => 51,  107 => 28,  100 => 27,  92 => 26,  84 => 25,  77 => 24,  73 => 32,  68 => 20,  63 => 26,  57 => 23,  53 => 9,  48 => 14,  45 => 12,  43 => 11,  37 => 9,  30 => 4,  28 => 6,  26 => 4,  24 => 3,);
    }
}
