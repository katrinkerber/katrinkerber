<?php

/* _layouts/elementindex */
class __TwigTemplate_39c4a1210bde7e4c95003f180a4f1861c3100a30d0816703e76cdba10af4ebe0 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'initJs' => array($this, 'block_initJs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["elementTypeClass"] = (isset($context["elementType"]) ? $context["elementType"] : null);
        // line 4
        $context["elementType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "elements"), "getElementType", array(0 => (isset($context["elementTypeClass"]) ? $context["elementTypeClass"] : null)), "method");
        // line 5
        $context["context"] = "index";
        // line 7
        if ((!(isset($context["elementType"]) ? $context["elementType"] : null))) {
            // line 8
            throw new \Craft\HttpException(404);
        }
        // line 11
        $context["sources"] = $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "getSources", array(0 => "index"), "method");
        // line 23
        ob_start();
        // line 24
        echo "\t<div class=\"elementindex\">
\t\t";
        // line 25
        $this->env->loadTemplate("_elements/indexcontainer")->display($context);
        // line 26
        echo "\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        \Craft\craft()->templates->includeJs($this->renderBlock("initJs", $context, $blocks));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        if ((!twig_test_empty((isset($context["sources"]) ? $context["sources"] : null)))) {
            // line 16
            echo "\t\t<nav>
\t\t\t";
            // line 17
            $this->env->loadTemplate("_elements/sources")->display($context);
            // line 18
            echo "\t\t</nav>
\t";
        }
    }

    // line 30
    public function block_initJs($context, array $blocks = array())
    {
        // line 31
        echo "\tCraft.createElementIndex('";
        echo twig_escape_filter($this->env, (isset($context["elementTypeClass"]) ? $context["elementTypeClass"] : null), "html", null, true);
        echo "', \$('#main'), {
\t\tcontext:        '";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["context"]) ? $context["context"] : null), "html", null, true);
        echo "',
\t\tshowStatusMenu: ";
        // line 33
        echo ((array_key_exists("showStatusMenu", $context)) ? (twig_jsonencode_filter((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : null))) : ("'auto'"));
        echo ",
\t\tshowLocaleMenu: ";
        // line 34
        echo ((array_key_exists("showLocaleMenu", $context)) ? (twig_jsonencode_filter((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : null))) : ("'auto'"));
        echo ",
\t\tstorageKey:     'elementindex.";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["elementTypeClass"]) ? $context["elementTypeClass"] : null), "html", null, true);
        echo "',
\t\tcriteria:       { localeEnabled: null }
\t});
";
    }

    public function getTemplateName()
    {
        return "_layouts/elementindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  88 => 34,  84 => 33,  80 => 32,  75 => 31,  72 => 30,  66 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  50 => 40,  46 => 26,  44 => 25,  41 => 24,  39 => 23,  37 => 11,  34 => 8,  32 => 7,  30 => 5,  28 => 4,  26 => 3,  24 => 2,);
    }
}
