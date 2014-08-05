<?php

/* entry-detail */
class __TwigTemplate_ce425d098009072d1dc05e42368405dfcddd34c6ddb4deeba3fcc7b44cc5d42e extends Craft\BaseTemplate
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
        $context["pageTitle"] = ((ucwords($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title")) . " - ") . ucwords($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "type")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
  ";
        // line 7
        echo "  ";
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "type") == "projects")) {
            // line 8
            echo "    <article itemscope itemtype=\"http://schema.org/WebSite\">
      <div class=\"lines-heading\">
        <h1 itemprop=\"name\">";
            // line 10
            echo twig_escape_filter($this->env, ucwords($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title")), "html", null, true);
            echo "</h1>

        <time datetime=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate"), "Y-m-d"), "html", null, true);
            echo "\" itemprop=\"datePublished\">
          ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate"), "F Y"), "html", null, true);
            echo "
        </time>
      </div>

      ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mainImage"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 18
                echo "        <figure class=\"page__media\">
          <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url"), "html", null, true);
                echo "\" alt=\"Project screenshots\" itemprop=\"image\">
        </figure>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
      <div class=\"page__text\">
        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mainCopy"), "html", null, true);
            echo "

        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "projectInfo"));
            foreach ($context['_seq'] as $context["_key"] => $context["projectInfo"]) {
                // line 27
                echo "          <h2>";
                echo twig_escape_filter($this->env, ucwords($this->getAttribute((isset($context["projectInfo"]) ? $context["projectInfo"] : null), "sectionTitle")), "html", null, true);
                echo "</h2>
          ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projectInfo"]) ? $context["projectInfo"] : null), "sectionContent"), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projectInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      </div>

      ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "quote"));
            foreach ($context['_seq'] as $context["_key"] => $context["projectQuote"]) {
                // line 33
                echo "        <blockquote>
          ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projectQuote"]) ? $context["projectQuote"] : null), "text"), "html", null, true);
                echo "
          <footer>
            <cite>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projectQuote"]) ? $context["projectQuote"] : null), "sourceName"), "html", null, true);
                echo "</cite>
          </footer>
        </blockquote>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projectQuote'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
      ";
            // line 41
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "projectUrl")) {
                // line 42
                echo "        <div class=\"center-btn\">
          <a class=\"btn\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "projectUrl"), "html", null, true);
                echo "\" itemprop=\"url\">Visit site</a>
        </div>
      ";
            }
            // line 46
            echo "
      <aside class=\"page--entries__more\">
        <h2 class=\"lines-heading\">Other Projects</h2>

        ";
            // line 50
            $context["projects"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "entries"), "method"), "type", array(0 => "projects"), "method"), "id", array(0 => ("not " . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"))), "method"), "order", array(0 => "RAND()"), "method"), "limit", array(0 => "4"), "method");
            // line 51
            echo "        ";
            $this->env->loadTemplate("_includes/listing-projects")->display($context);
            // line 52
            echo "
        <div class=\"center-btn\">
          <a class=\"btn btn--secondary\" href=\"/projects\">View all projects</a>
        </div>
      </aside>
    </article>
  ";
        }
        // line 59
        echo "  ";
        // line 60
        echo "
  ";
        // line 62
        echo "  ";
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "type") == "notes")) {
            // line 63
            echo "    <article itemscope itemtype=\"http://schema.org/BlogPosting\">
      <div class=\"lines-heading\">
        <h1 itemprop=\"name\">";
            // line 65
            echo twig_escape_filter($this->env, ucwords($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title")), "html", null, true);
            echo "</h1>
        <time datetime=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate"), "Y-m-d"), "html", null, true);
            echo "\" itemprop=\"datePublished\">
          ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate"), "jS F Y"), "html", null, true);
            echo "
        </time>
      </div>

      ";
            // line 71
            $this->env->loadTemplate("_includes/pagecontentsections")->display($context);
            // line 72
            echo "    </article>

    <aside class=\"page--entries__more\">
      <h2 class=\"lines-heading\">Other Notes</h2>
      <ul class=\"listing-notes\">
        ";
            // line 77
            $context["notes"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "entries"), "method"), "type", array(0 => "notes"), "method"), "id", array(0 => ("not " . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"))), "method"), "limit", array(0 => "4"), "method");
            // line 78
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 79
                echo "          <li class=\"listing-notes__item\">
            <h3 class=\"listing-notes__heading\">
              <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "url"), "html", null, true);
                echo "\">
                ";
                // line 82
                echo twig_escape_filter($this->env, ucwords(twig_title_string_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "title"))), "html", null, true);
                echo "
              </a>
            </h3>
            <time datetime=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "postDate"), "Y-m-d"), "html", null, true);
                echo "\" itemprop=\"datePublished\">
              ";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "postDate"), "jS F Y"), "html", null, true);
                echo "
            </time>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "      </ul>
      <div class=\"center-btn\">
        <a class=\"btn btn--secondary\" href=\"/notes\">View all notes</a>
      </div>
    </aside>
  ";
        }
        // line 96
        echo "  ";
        // line 97
        echo "
";
    }

    public function getTemplateName()
    {
        return "entry-detail";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 97,  240 => 96,  232 => 90,  222 => 86,  218 => 85,  212 => 82,  208 => 81,  204 => 79,  199 => 78,  197 => 77,  190 => 72,  188 => 71,  181 => 67,  177 => 66,  173 => 65,  169 => 63,  166 => 62,  163 => 60,  161 => 59,  152 => 52,  149 => 51,  147 => 50,  141 => 46,  135 => 43,  132 => 42,  130 => 41,  127 => 40,  117 => 36,  112 => 34,  109 => 33,  105 => 32,  101 => 30,  93 => 28,  88 => 27,  84 => 26,  79 => 24,  75 => 22,  66 => 19,  63 => 18,  59 => 17,  52 => 13,  48 => 12,  43 => 10,  39 => 8,  36 => 7,  33 => 5,  30 => 4,  25 => 2,);
    }
}
