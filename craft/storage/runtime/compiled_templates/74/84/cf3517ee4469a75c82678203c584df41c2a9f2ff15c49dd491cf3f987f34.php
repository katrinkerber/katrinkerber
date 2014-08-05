<?php

/* notes */
class __TwigTemplate_7484cf3517ee4469a75c82678203c584df41c2a9f2ff15c49dd491cf3f987f34 extends Craft\BaseTemplate
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
        // line 2
        $context["pageTitle"] = ucwords($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  <h1 class=\"visuallyhidden\">";
        echo twig_escape_filter($this->env, ucwords($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title")), "html", null, true);
        echo "</h1>

  ";
        // line 7
        if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageIntro")) {
            // line 8
            echo "    <div class=\"page__intro\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pageIntro"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 12
        echo "
  <ul class=\"listing-notes\">
    ";
        // line 14
        $context["notes"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "entries"), "method"), "type", array(0 => "notes"), "method");
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 16
            echo "      <li class=\"listing-notes__item\">
        <article itemscope itemtype=\"http://schema.org/BlogPosting\">
          <div class=\"listing-notes__heading lines-heading\">
            <h2 itemprop=\"name\">
              <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "url"), "html", null, true);
            echo "\" itemprop=\"url\">
                ";
            // line 21
            echo twig_escape_filter($this->env, ucwords(twig_title_string_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "title"))), "html", null, true);
            echo "
              </a>
            </h2>
            <time datetime=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "postDate"), "Y-m-d"), "html", null, true);
            echo "\" itemprop=\"datePublished\">
              ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "postDate"), "jS F Y"), "html", null, true);
            echo "
            </time>
          </div>

          <div class=\"listing-notes__text\" itemprop=\"description\">
            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "pageIntro"), "html", null, true);
            echo "
          </div>

          <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "url"), "html", null, true);
            echo "\" itemprop=\"url\">
            Continue reading
          </a>
        </article>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  </ul>

  ";
        // line 41
        $this->env->loadTemplate("_includes/callout")->display($context);
    }

    public function getTemplateName()
    {
        return "notes";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  107 => 39,  95 => 33,  89 => 30,  81 => 25,  77 => 24,  71 => 21,  67 => 20,  61 => 16,  56 => 15,  54 => 14,  50 => 12,  44 => 9,  41 => 8,  39 => 7,  33 => 5,  30 => 4,  25 => 2,);
    }
}
