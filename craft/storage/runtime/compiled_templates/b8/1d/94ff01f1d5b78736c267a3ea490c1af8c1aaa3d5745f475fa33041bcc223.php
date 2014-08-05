<?php

/* _elements/sources */
class __TwigTemplate_b81d94ff01f1d5b78736c267a3ea490c1af8c1aaa3d5745f475fa33041bcc223 extends Craft\BaseTemplate
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
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 3
            echo "\t\t";
            if ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "heading", array(), "any", true, true)) {
                // line 4
                echo "\t\t\t<li class=\"heading\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "heading"), "html", null, true);
                echo "</span></li>
\t\t";
            } else {
                // line 6
                echo "\t\t\t<li>
\t\t\t\t<a data-key=\"";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"";
                // line 8
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "hasThumbs", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "hasThumbs"))) {
                    echo " data-has-thumbs=\"1\"";
                }
                // line 9
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "structureId", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "structureId"))) {
                    echo " data-has-structure=\"1\" data-structure-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "structureId"), "html", null, true);
                    echo "\"";
                }
                // line 10
                if ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "data", array(), "any", true, true)) {
                    // line 11
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "data"));
                    foreach ($context['_seq'] as $context["dataKey"] => $context["dataVal"]) {
                        echo " data-";
                        echo twig_escape_filter($this->env, (isset($context["dataKey"]) ? $context["dataKey"] : null), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, (isset($context["dataVal"]) ? $context["dataVal"] : null), "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataVal'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 13
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "label"), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 14
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested"))))) {
                    // line 15
                    echo "\t\t\t\t\t<div class=\"toggle\"></div>
\t\t\t\t\t";
                    // line 16
                    $this->env->loadTemplate("_elements/sources")->display(array_merge($context, array("sources" => $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested"))));
                    // line 19
                    echo "\t\t\t\t";
                }
                // line 20
                echo "\t\t\t</li>
\t\t";
            }
            // line 22
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_elements/sources";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  95 => 20,  85 => 14,  51 => 7,  42 => 4,  22 => 2,  151 => 55,  148 => 54,  146 => 52,  142 => 50,  136 => 46,  121 => 44,  117 => 43,  111 => 40,  108 => 39,  105 => 38,  102 => 37,  99 => 22,  96 => 35,  93 => 34,  90 => 16,  87 => 15,  81 => 30,  62 => 24,  54 => 8,  48 => 6,  45 => 18,  43 => 17,  36 => 12,  27 => 8,  21 => 3,  19 => 1,  92 => 19,  88 => 34,  84 => 31,  80 => 13,  75 => 26,  72 => 30,  66 => 11,  64 => 10,  61 => 16,  58 => 9,  55 => 14,  50 => 40,  46 => 26,  44 => 25,  41 => 24,  39 => 3,  37 => 11,  34 => 11,  32 => 10,  30 => 9,  28 => 4,  26 => 3,  24 => 2,);
    }
}
