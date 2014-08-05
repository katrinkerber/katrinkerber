<?php

/* _includes/pagecontentsections */
class __TwigTemplate_d3846c0cf4904ac8901569b632959f8b2ec131538ebd9943f1d0f1e65d929782 extends Craft\BaseTemplate
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageContentSections"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 2
            echo "
  ";
            // line 3
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type") == "sectionTitle")) {
                // line 4
                echo "
    <h2 class=\"lines-heading\">";
                // line 5
                echo twig_escape_filter($this->env, ucwords($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "sectionTitle")), "html", null, true);
                echo "</h2>

  ";
            } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type") == "sectionImage")) {
                // line 8
                echo "
    ";
                // line 9
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "image"));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 10
                    echo "      <figure class=\"page__media\">
        <img src=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "imageAlt"), "html", null, true);
                    echo "\">
        ";
                    // line 12
                    if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "imageCaption")) {
                        // line 13
                        echo "          <figcaption>
            ";
                        // line 14
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "imageCaption"), "html", null, true);
                        echo "
          </figcaption>
        ";
                    }
                    // line 17
                    echo "      </figure>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "
    ";
                // line 20
                if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "remoteImage")) {
                    // line 21
                    echo "      <figure class=\"page__media\">
        <img src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "remoteImage"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "imageAlt"), "html", null, true);
                    echo "\">
        ";
                    // line 23
                    if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "imageCaption")) {
                        // line 24
                        echo "          <figcaption>
            ";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "imageCaption"), "html", null, true);
                        echo "
          </figcaption>
        ";
                    }
                    // line 28
                    echo "      </figure>
    ";
                }
                // line 30
                echo "
  ";
            } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type") == "sectionCodeSnippet")) {
                // line 32
                echo "
    <pre class=\"page__code\"><code class=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "codeType"), "html", null, true);
                echo "\">
";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "codeSnippet"), "html", null, true);
                echo "
    </code></pre>

  ";
            } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type") == "sectionQuote")) {
                // line 38
                echo "
    <blockquote>
      ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "quoteText"), "html", null, true);
                echo "
      ";
                // line 41
                if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "quoteSource")) {
                    // line 42
                    echo "        <footer>
          <cite>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "quoteSource"), "html", null, true);
                    echo "</cite>
        </footer>
      ";
                }
                // line 46
                echo "    </blockquote>

  ";
            } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type") == "sectionText")) {
                // line 49
                echo "
    <div class=\"page__text\">
      ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "text"), "html", null, true);
                echo "
    </div>

  ";
            }
            // line 55
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_includes/pagecontentsections";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 55,  146 => 51,  142 => 49,  137 => 46,  131 => 43,  128 => 42,  126 => 41,  122 => 40,  118 => 38,  111 => 34,  107 => 33,  104 => 32,  100 => 30,  96 => 28,  90 => 25,  87 => 24,  85 => 23,  79 => 22,  76 => 21,  74 => 20,  71 => 19,  64 => 17,  58 => 14,  55 => 13,  53 => 12,  47 => 11,  44 => 10,  40 => 9,  37 => 8,  31 => 5,  28 => 4,  26 => 3,  23 => 2,  19 => 1,  39 => 7,  33 => 5,  30 => 4,  25 => 2,);
    }
}
