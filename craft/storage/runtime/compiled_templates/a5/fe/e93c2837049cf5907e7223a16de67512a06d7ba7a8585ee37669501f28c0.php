<?php

/* _includes/callout */
class __TwigTemplate_a5fee93c2837049cf5907e7223a16de67512a06d7ba7a8585ee37669501f28c0 extends Craft\BaseTemplate
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageCallOut"));
        foreach ($context['_seq'] as $context["_key"] => $context["callOut"]) {
            // line 2
            echo "  <aside class=\"callout\">
    ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["callOut"]) ? $context["callOut"] : null), "text"), "html", null, true);
            echo "
    <a class=\"btn\" href=\"/contact\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["callOut"]) ? $context["callOut"] : null), "linkText"), "html", null, true);
            echo "</a>
  </aside>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['callOut'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_includes/callout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  23 => 2,  19 => 1,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  44 => 9,  41 => 8,  39 => 7,  33 => 5,  30 => 4,  25 => 2,);
    }
}
