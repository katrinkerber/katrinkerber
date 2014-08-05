<?php

/* sitemap.xml */
class __TwigTemplate_359a36c3fb999d877ab620286fea3aaa5a3dd3342b82f2b0c06913f44c39f5b0 extends Craft\BaseTemplate
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
  xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
  xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
  xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\"
  xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">


  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "not entries"), "method"), "order", array(0 => "title"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 11
            echo "    <url>
      <loc>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
            echo "</loc>
      <lastmod>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "dateUpdated"), "html", null, true);
            echo "</lastmod>
      <changefreq>monthly</changefreq>
      <priority>0.7</priority>
    </url>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "entries"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 19
            echo "    <url>
      <loc>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
            echo "</loc>
      <lastmod>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "dateUpdated"), "html", null, true);
            echo "</lastmod>
      <changefreq>monthly</changefreq>
      <priority>1</priority>
    </url>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</urlset>
";
    }

    public function getTemplateName()
    {
        return "sitemap.xml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  64 => 21,  60 => 20,  57 => 19,  52 => 18,  41 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
