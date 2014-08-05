<?php

/* _includes/tabs */
class __TwigTemplate_416d80de6371908b76fb467972f68d4f03930f904bf5e9ae2d8f50be4da8adff extends Craft\BaseTemplate
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
        $context["title"] = ((array_key_exists("title", $context)) ? (array_key_exists("title", $context)) : (null));
        // line 2
        echo "
<nav id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
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
        foreach ($context['_seq'] as $context["tabId"] => $context["tab"]) {
            // line 6
            echo "\t\t\t";
            if ((isset($context["tab"]) ? $context["tab"] : null)) {
                // line 7
                echo "\t\t\t\t";
                $context["tabIsSelected"] = (((!array_key_exists("selectedTab", $context)) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) || (array_key_exists("selectedTab", $context) && ((isset($context["selectedTab"]) ? $context["selectedTab"] : null) == (isset($context["tabId"]) ? $context["tabId"] : null))));
                // line 9
                if (((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : null) && ((isset($context["title"]) ? $context["title"] : null) != $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label")))) {
                    // line 10
                    echo "\t\t\t\t\t";
                    $context["title"] = (((isset($context["title"]) ? $context["title"] : null) . " - ") . $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label"));
                    // line 11
                    echo "\t\t\t\t";
                }
                // line 13
                echo "<li><a id=\"tab-";
                echo twig_escape_filter($this->env, (isset($context["tabId"]) ? $context["tabId"] : null), "html", null, true);
                echo "\" class=\"tab";
                if ((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : null)) {
                    echo " sel";
                }
                if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class"), "html", null, true);
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['tabId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  54 => 11,  51 => 10,  49 => 9,  46 => 7,  21 => 2,  19 => 1,  80 => 23,  75 => 15,  64 => 13,  60 => 12,  56 => 10,  47 => 24,  44 => 23,  42 => 22,  38 => 21,  33 => 9,  22 => 1,  230 => 80,  224 => 79,  209 => 76,  204 => 75,  193 => 70,  189 => 69,  181 => 67,  173 => 65,  169 => 64,  161 => 62,  157 => 61,  149 => 59,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  109 => 49,  101 => 47,  91 => 40,  86 => 37,  83 => 36,  78 => 34,  71 => 30,  69 => 29,  67 => 28,  65 => 27,  61 => 25,  59 => 24,  55 => 22,  52 => 19,  50 => 18,  41 => 10,  35 => 20,  29 => 6,  25 => 4,  661 => 227,  658 => 226,  650 => 233,  642 => 231,  640 => 230,  637 => 229,  635 => 226,  632 => 225,  626 => 222,  623 => 221,  621 => 220,  612 => 219,  609 => 218,  606 => 217,  603 => 216,  601 => 215,  595 => 211,  592 => 210,  589 => 209,  586 => 208,  583 => 207,  577 => 201,  571 => 198,  568 => 197,  566 => 196,  563 => 195,  557 => 193,  555 => 192,  552 => 191,  547 => 188,  536 => 186,  532 => 185,  528 => 183,  525 => 182,  522 => 181,  513 => 267,  507 => 265,  505 => 264,  501 => 263,  495 => 260,  491 => 259,  487 => 257,  485 => 256,  480 => 253,  472 => 251,  470 => 250,  459 => 247,  451 => 245,  449 => 244,  443 => 243,  435 => 242,  429 => 238,  427 => 207,  422 => 204,  420 => 181,  414 => 177,  408 => 176,  400 => 174,  397 => 173,  394 => 172,  390 => 171,  380 => 163,  372 => 160,  367 => 158,  365 => 157,  363 => 156,  356 => 155,  351 => 154,  347 => 153,  336 => 149,  324 => 143,  316 => 141,  314 => 140,  308 => 139,  302 => 136,  298 => 134,  293 => 131,  286 => 129,  273 => 127,  269 => 126,  263 => 124,  259 => 123,  254 => 121,  246 => 118,  243 => 117,  241 => 116,  238 => 115,  235 => 114,  232 => 113,  229 => 112,  226 => 111,  219 => 107,  213 => 77,  206 => 105,  203 => 104,  200 => 74,  197 => 102,  194 => 101,  191 => 100,  188 => 99,  185 => 68,  182 => 97,  180 => 96,  177 => 66,  174 => 94,  171 => 93,  168 => 92,  165 => 63,  162 => 90,  159 => 89,  156 => 88,  153 => 60,  145 => 58,  142 => 81,  139 => 80,  136 => 79,  132 => 77,  123 => 75,  119 => 74,  116 => 73,  113 => 50,  110 => 71,  108 => 70,  105 => 48,  99 => 67,  96 => 66,  93 => 65,  151 => 86,  134 => 41,  126 => 36,  122 => 34,  117 => 51,  107 => 28,  100 => 27,  92 => 26,  84 => 25,  77 => 24,  73 => 32,  68 => 20,  63 => 26,  57 => 13,  53 => 9,  48 => 14,  45 => 12,  43 => 6,  37 => 9,  30 => 4,  28 => 6,  26 => 5,  24 => 3,);
    }
}
