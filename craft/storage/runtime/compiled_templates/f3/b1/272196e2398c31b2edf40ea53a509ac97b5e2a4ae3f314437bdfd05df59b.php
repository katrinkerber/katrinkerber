<?php

/* _includes/fields */
class __TwigTemplate_f3b1272196e2398c31b2edf40ea53a509ac97b5e2a4ae3f314437bdfd05df59b extends Craft\BaseTemplate
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
        if ((!array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 2
        if ((!array_key_exists("namespace", $context))) {
            $context["namespace"] = "fields";
        }
        // line 3
        echo "
";
        // line 4
        $_namespace = (isset($context["namespace"]) ? $context["namespace"] : null);
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 5
                echo "\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 6
                    echo "\t\t";
                    $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getField", array(), "method"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "element" => (isset($context["element"]) ? $context["element"] : null), "static" => ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (null))));
                    // line 12
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 5
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "\t\t";
                $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getField", array(), "method"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "element" => (isset($context["element"]) ? $context["element"] : null), "static" => ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (null))));
                // line 12
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        unset($_originalNamespace, $_namespace);
    }

    public function getTemplateName()
    {
        return "_includes/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  64 => 6,  59 => 5,  42 => 6,  37 => 5,  30 => 4,  23 => 2,  72 => 15,  57 => 13,  55 => 8,  46 => 7,  21 => 2,  19 => 1,  568 => 289,  564 => 287,  561 => 286,  555 => 283,  549 => 280,  543 => 276,  540 => 275,  535 => 272,  529 => 269,  526 => 268,  524 => 267,  518 => 263,  510 => 261,  508 => 260,  505 => 259,  492 => 257,  490 => 256,  487 => 255,  484 => 254,  481 => 253,  478 => 252,  475 => 251,  472 => 250,  469 => 249,  467 => 248,  460 => 246,  452 => 241,  443 => 235,  438 => 232,  435 => 227,  432 => 225,  428 => 223,  422 => 220,  416 => 217,  412 => 216,  406 => 212,  403 => 208,  400 => 206,  395 => 203,  390 => 201,  386 => 200,  381 => 199,  378 => 198,  375 => 196,  367 => 194,  364 => 189,  359 => 186,  353 => 183,  347 => 182,  341 => 178,  339 => 177,  336 => 176,  333 => 174,  329 => 172,  323 => 169,  319 => 168,  316 => 167,  314 => 166,  309 => 163,  305 => 161,  303 => 158,  300 => 157,  297 => 156,  290 => 152,  286 => 151,  283 => 150,  281 => 149,  278 => 148,  273 => 145,  271 => 140,  268 => 139,  265 => 138,  263 => 137,  260 => 136,  257 => 135,  255 => 134,  251 => 132,  249 => 125,  245 => 123,  243 => 116,  240 => 115,  236 => 113,  233 => 106,  231 => 105,  228 => 104,  224 => 102,  221 => 95,  219 => 94,  215 => 92,  213 => 85,  210 => 84,  206 => 82,  203 => 76,  201 => 75,  197 => 73,  195 => 72,  192 => 71,  188 => 69,  181 => 67,  177 => 65,  170 => 64,  167 => 58,  163 => 57,  161 => 56,  155 => 55,  152 => 54,  148 => 53,  145 => 52,  143 => 51,  140 => 50,  137 => 49,  128 => 46,  126 => 45,  120 => 42,  117 => 41,  113 => 39,  110 => 38,  108 => 37,  101 => 32,  98 => 29,  96 => 28,  90 => 24,  84 => 22,  81 => 21,  74 => 20,  68 => 19,  63 => 18,  61 => 17,  56 => 16,  53 => 15,  47 => 297,  45 => 12,  43 => 12,  41 => 11,  39 => 10,  35 => 7,  32 => 6,  29 => 6,  27 => 3,  25 => 4,);
    }
}
