<?php

/* _elements/tableview/elements */
class __TwigTemplate_fca98a4c9a42572dba97090c0042b28e5bed10ca45f21219d275bc355690ec9b extends Craft\BaseTemplate
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
            // line 2
            echo "\t<tr";
            if (twig_in_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "id"), (isset($context["disabledElementIds"]) ? $context["disabledElementIds"] : null))) {
                echo " class=\"disabled\"";
            }
            echo ">
\t\t";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
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
            foreach ($context['_seq'] as $context["attribute"] => $context["label"]) {
                // line 4
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                    // line 5
                    echo "\t\t\t\t<td scope=\"row\" data-title=\"";
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t";
                    // line 6
                    $this->env->loadTemplate("_elements/element")->display($context);
                    // line 7
                    echo "\t\t\t\t</td>
\t\t\t";
                } else {
                    // line 9
                    echo "\t\t\t\t<td data-title=\"";
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                    echo "\">";
                    echo $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "getTableAttributeHtml", array(0 => (isset($context["element"]) ? $context["element"] : null), 1 => (isset($context["attribute"]) ? $context["attribute"] : null)), "method");
                    echo "</td>
\t\t\t";
                }
                // line 11
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
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t</tr>
";
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
    }

    public function getTemplateName()
    {
        return "_elements/tableview/elements";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 12,  82 => 11,  74 => 9,  70 => 7,  68 => 6,  63 => 5,  60 => 4,  43 => 3,  36 => 2,  54 => 11,  52 => 10,  48 => 8,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
