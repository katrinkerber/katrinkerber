<?php

/* index */
class __TwigTemplate_ac7f6ac639229a55d258de9fed9065bd1f56fab213ed420a136d9e71be6f8713 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"icons-strip\" role=\"presentation\" aria-hidden=\"true\">
    <i class=\"icon icon--large icon--wayfinder\" aria-hidden=\"true\"></i>
    <i class=\"icon icon--large icon--speed\" aria-hidden=\"true\"></i>
    <i class=\"icon icon--xlarge icon--heart\" aria-hidden=\"true\"></i>
    <i class=\"icon icon--large icon--smile\" aria-hidden=\"true\"></i>
    <i class=\"icon icon--large icon--mobile\" aria-hidden=\"true\"></i>
  </div>

  ";
        // line 12
        if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageIntro")) {
            // line 13
            echo "    <div class=\"page__intro page--home__intro\">
      ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageIntro"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageContentSections"));
        foreach ($context['_seq'] as $context["_key"] => $context["contentSection"]) {
            // line 19
            echo "    <div class=\"page__text page--home__text\">
      ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentSection"]) ? $context["contentSection"] : null), "text"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentSection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
  ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageCallOut"));
        foreach ($context['_seq'] as $context["_key"] => $context["callOut"]) {
            // line 25
            echo "    <a class=\"btn page--home__btn\" href=\"/contact\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["callOut"]) ? $context["callOut"] : null), "linkText"), "html", null, true);
            echo "</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['callOut'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
  ";
        // line 28
        $context["project"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "entries"), "method"), "search", array(0 => "quote:*"), "method"), "order", array(0 => "RAND()"), "method"), "limit", array(0 => 1), "method");
        // line 29
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["project"]) ? $context["project"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 30
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "quote"));
            foreach ($context['_seq'] as $context["_key"] => $context["projectQuote"]) {
                // line 31
                echo "      <blockquote>
        ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projectQuote"]) ? $context["projectQuote"] : null), "text"), "html", null, true);
                echo "
        <footer>
          <cite>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projectQuote"]) ? $context["projectQuote"] : null), "sourceName"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projectQuote"]) ? $context["projectQuote"] : null), "sourceCompany"), "html", null, true);
                echo "</cite>
          <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "url"), "html", null, true);
                echo "\">View project</a>
        </footer>
      </blockquote>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projectQuote'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  116 => 35,  110 => 34,  105 => 32,  102 => 31,  97 => 30,  92 => 29,  90 => 28,  87 => 27,  78 => 25,  74 => 24,  71 => 23,  62 => 20,  59 => 19,  55 => 18,  52 => 17,  46 => 14,  43 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
