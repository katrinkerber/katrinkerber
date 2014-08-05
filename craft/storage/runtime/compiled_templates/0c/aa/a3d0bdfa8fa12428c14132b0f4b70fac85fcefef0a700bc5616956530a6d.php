<?php

/* _includes/listing-projects */
class __TwigTemplate_0caaa3d0bdfa8fa12428c14132b0f4b70fac85fcefef0a700bc5616956530a6d extends Craft\BaseTemplate
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
        echo "<ul class=\"listing-projects\">
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 3
            echo "    <li class=\"listing-projects__item ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "listing-projects__item--odd", 1 => ""), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0")), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/WebSite\">
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "url"), "html", null, true);
            echo "\">
        ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "listingImage"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 6
                echo "          <img class=\"listing-projects__img\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url"), "html", null, true);
                echo "\" alt=\"\" role=\"presentation\" aria-hidden=\"true\" itemprop=\"image\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        <h2 class=\"listing-projects__heading\" itemprop=\"name\">
          ";
            // line 9
            echo twig_escape_filter($this->env, ucwords($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "title")), "html", null, true);
            echo "
        </h2>
        <time class=\"listing-projects__time\" datetime=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "postDate"), "Y-m-d"), "html", null, true);
            echo "\" itemprop=\"datePublished\">
          ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "postDate"), "F Y"), "html", null, true);
            echo "
        </time>
      </a>
    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_includes/listing-projects";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  73 => 12,  69 => 11,  64 => 9,  61 => 8,  52 => 6,  48 => 5,  44 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
