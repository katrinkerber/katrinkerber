<?php

/* _components/fieldtypes/Matrix/input */
class __TwigTemplate_ba52b117784814b7c0738e5eb345037f0496ac84b48789801921090a18ac7d43 extends Craft\BaseTemplate
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
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" value=\"\">

<div class=\"matrix\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t<div class=\"blocks\">
\t\t";
        // line 5
        $context["totalNewBlocks"] = 0;
        // line 6
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 7
            echo "\t\t\t";
            $context["blockId"] = $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id");
            // line 8
            echo "\t\t\t";
            if ((!(isset($context["blockId"]) ? $context["blockId"] : null))) {
                // line 9
                echo "\t\t\t\t";
                $context["totalNewBlocks"] = ((isset($context["totalNewBlocks"]) ? $context["totalNewBlocks"] : null) + 1);
                // line 10
                echo "\t\t\t\t";
                $context["blockId"] = ("new" . (isset($context["totalNewBlocks"]) ? $context["totalNewBlocks"] : null));
                // line 11
                echo "\t\t\t";
            }
            // line 12
            echo "
\t\t\t<div class=\"matrixblock";
            // line 13
            if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled"))) {
                echo " disabled";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
            echo "\"";
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "collapsed")) {
                echo " data-collapsed=\"1\"";
            }
            echo ">
\t\t\t\t";
            // line 14
            if ((!(isset($context["static"]) ? $context["static"] : null))) {
                // line 15
                echo "\t\t\t\t\t<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
                echo "][type]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "getType", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
                echo "][enabled]\" value=\"";
                if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled")) {
                    echo "1";
                }
                echo "\">
\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t<div class=\"status off\" title=\"";
                // line 18
                echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
                echo "\"></div>
\t\t\t\t\t\t<a class=\"settings icon menubtn\" title=\"";
                // line 19
                echo twig_escape_filter($this->env, \Craft\Craft::t("Actions"), "html", null, true);
                echo "\" role=\"button\"></a>
\t\t\t\t\t\t<div class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t<li><a data-icon=\"collapse\" data-action=\"collapse\">";
                // line 22
                echo twig_escape_filter($this->env, \Craft\Craft::t("Collapse"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\">";
                // line 23
                echo twig_escape_filter($this->env, \Craft\Craft::t("Expand"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li";
                // line 24
                if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled"))) {
                    echo " class=\"hidden\"";
                }
                echo "><a data-icon=\"disabled\" data-action=\"disable\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Disable"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li";
                // line 25
                if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled")) {
                    echo " class=\"hidden\"";
                }
                echo "><a data-icon=\"enabled\" data-action=\"enable\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Enable"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<hr class=\"padded\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t<li><a data-icon=\"+\" data-action=\"add\" data-type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "handle"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Add {type} above", array("type" => \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "name")))), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<hr class=\"padded\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t<li><a data-icon=\"remove\" data-action=\"delete\">";
                // line 35
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"move icon\" title=\"";
                // line 38
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\" role=\"button\"></a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t<div class=\"fields\">
\t\t\t\t\t";
            // line 42
            $this->env->loadTemplate("_includes/fields")->display(array_merge($context, array("namespace" => ((((isset($context["name"]) ? $context["name"] : null) . "[") . (isset($context["blockId"]) ? $context["blockId"] : null)) . "][fields]"), "element" => (isset($context["block"]) ? $context["block"] : null), "fields" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "getType", array(), "method"), "getFieldLayout", array(), "method"), "getFields", array(), "method"), "static" => (isset($context["static"]) ? $context["static"] : null))));
            // line 48
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t</div>
\t";
        // line 52
        if ((!(isset($context["static"]) ? $context["static"] : null))) {
            // line 53
            echo "\t\t<div class=\"buttons\">
\t\t\t<div class=\"btngroup\">
\t\t\t\t";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 56
                echo "\t\t\t\t\t<div class=\"btn";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo " add icon";
                }
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "handle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "name")), "html", null, true);
                echo "</div>
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t</div>

\t\t\t<div class=\"btn add icon menubtn hidden\">";
            // line 60
            echo twig_escape_filter($this->env, \Craft\Craft::t("Add a block"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 64
                echo "\t\t\t\t\t\t<li><a data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "handle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "name")), "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 70
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 70,  266 => 66,  241 => 58,  218 => 56,  176 => 48,  174 => 42,  171 => 41,  165 => 38,  159 => 35,  154 => 32,  139 => 29,  116 => 23,  112 => 22,  91 => 16,  82 => 15,  80 => 14,  65 => 12,  50 => 7,  44 => 7,  40 => 5,  49 => 9,  135 => 35,  132 => 34,  122 => 30,  118 => 29,  114 => 28,  106 => 19,  102 => 18,  94 => 23,  89 => 22,  87 => 21,  77 => 16,  60 => 14,  33 => 6,  31 => 7,  24 => 4,  62 => 11,  51 => 14,  48 => 13,  34 => 8,  28 => 5,  26 => 11,  67 => 12,  64 => 20,  59 => 10,  42 => 6,  37 => 11,  30 => 5,  23 => 4,  72 => 15,  57 => 13,  55 => 16,  46 => 7,  21 => 3,  19 => 1,  568 => 289,  564 => 287,  561 => 286,  555 => 283,  549 => 280,  543 => 276,  540 => 275,  535 => 272,  529 => 269,  526 => 268,  524 => 267,  518 => 263,  510 => 261,  508 => 260,  505 => 259,  492 => 257,  490 => 256,  487 => 255,  484 => 254,  481 => 253,  478 => 252,  475 => 251,  472 => 250,  469 => 249,  467 => 248,  460 => 246,  452 => 241,  443 => 235,  438 => 232,  435 => 227,  432 => 225,  428 => 223,  422 => 220,  416 => 217,  412 => 216,  406 => 212,  403 => 208,  400 => 206,  395 => 203,  390 => 201,  386 => 200,  381 => 199,  378 => 198,  375 => 196,  367 => 194,  364 => 189,  359 => 186,  353 => 183,  347 => 182,  341 => 178,  339 => 177,  336 => 176,  333 => 174,  329 => 172,  323 => 169,  319 => 168,  316 => 167,  314 => 166,  309 => 163,  305 => 161,  303 => 158,  300 => 157,  297 => 156,  290 => 152,  286 => 151,  283 => 150,  281 => 149,  278 => 148,  273 => 145,  271 => 140,  268 => 139,  265 => 138,  263 => 137,  260 => 136,  257 => 135,  255 => 64,  251 => 63,  249 => 125,  245 => 60,  243 => 116,  240 => 115,  236 => 113,  233 => 106,  231 => 105,  228 => 104,  224 => 102,  221 => 95,  219 => 94,  215 => 92,  213 => 85,  210 => 84,  206 => 82,  203 => 76,  201 => 55,  197 => 53,  195 => 52,  192 => 51,  188 => 69,  181 => 67,  177 => 65,  170 => 64,  167 => 58,  163 => 57,  161 => 56,  155 => 55,  152 => 54,  148 => 53,  145 => 52,  143 => 30,  140 => 50,  137 => 49,  128 => 25,  126 => 31,  120 => 24,  117 => 41,  113 => 39,  110 => 27,  108 => 37,  101 => 32,  98 => 24,  96 => 28,  90 => 24,  84 => 22,  81 => 18,  74 => 20,  68 => 13,  63 => 12,  61 => 17,  56 => 9,  53 => 8,  47 => 8,  45 => 8,  43 => 13,  41 => 11,  39 => 7,  35 => 9,  32 => 6,  29 => 6,  27 => 5,  25 => 3,);
    }
}
