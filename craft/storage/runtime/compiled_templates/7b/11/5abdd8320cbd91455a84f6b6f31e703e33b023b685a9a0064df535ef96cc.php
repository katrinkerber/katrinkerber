<?php

/* settings/assets/sources/_edit */
class __TwigTemplate_7b115abdd8320cbd91455a84f6b6f31e703e33b023b685a9a0064df535ef96cc extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["docsUrl"] = "http://buildwithcraft.com/docs/assets";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 8
        ob_start();
        // line 9
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"assetSources/saveSource\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/assets\">
\t\t";
        // line 12
        if ((!(isset($context["isNewSource"]) ? $context["isNewSource"] : null))) {
            echo "<input type=\"hidden\" name=\"sourceId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "id"), "html", null, true);
            echo "\">";
        }
        // line 13
        echo "
\t\t<div id=\"assetsource-settings\">
\t\t\t";
        // line 15
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "id" => "name", "name" => "name", "value" => ((array_key_exists("source", $context)) ? ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "name")) : (null)), "errors" => ((array_key_exists("source", $context)) ? ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "getErrors", array(0 => "name"), "method")) : (null)), "autofocus" => true, "required" => true, "translatable" => true));
        // line 25
        echo "

\t\t\t";
        // line 27
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) {
            // line 28
            echo "\t\t\t\t<hr>

\t\t\t\t";
            // line 30
            \Craft\craft()->templates->includeJsResource("js/asseteditsourcesettings.js");
            // line 31
            echo "
\t\t\t\t";
            // line 32
            echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Type"), "instructions" => \Craft\Craft::t("What type of source is this?"), "id" => "type", "name" => "type", "options" => (isset($context["sourceTypes"]) ? $context["sourceTypes"] : null), "value" => $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getClassHandle", array(), "method"), "toggle" => true));
            // line 40
            echo "

\t\t\t\t";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sourceTypes"]) ? $context["sourceTypes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["_sourceType"]) {
                // line 43
                echo "\t\t\t\t\t";
                $context["isCurrent"] = ($this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getClassHandle", array(), "method") == $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getClassHandle", array(), "method"));
                // line 44
                echo "
\t\t\t\t\t<div id=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getClassHandle", array(), "method"), "html", null, true);
                echo "\"";
                if ((!(isset($context["isCurrent"]) ? $context["isCurrent"] : null))) {
                    echo " class=\"hidden\"";
                }
                echo ">
\t\t\t\t\t\t";
                // line 46
                $_namespace = (("types[" . $this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getClassHandle", array(), "method")) . "]");
                if ($_namespace) {
                    $_originalNamespace = \Craft\craft()->templates->getNamespace();
                    \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                        if ((isset($context["isCurrent"]) ? $context["isCurrent"] : null)) {
                            // line 48
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getSettingsHtml", array(), "method");
                            echo "
\t\t\t\t\t\t\t";
                        } else {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getSettingsHtml", array(), "method");
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 52
                        echo "\t\t\t\t\t\t";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                    \Craft\craft()->templates->setNamespace($_originalNamespace);
                } else {
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                    if ((isset($context["isCurrent"]) ? $context["isCurrent"] : null)) {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t\t";
                }
                unset($_originalNamespace, $_namespace);
                // line 53
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_sourceType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t";
            $_namespace = (("types[" . $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getClassHandle", array(), "method")) . "]");
            if ($_namespace) {
                $_originalNamespace = \Craft\craft()->templates->getNamespace();
                \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 57
                    echo "\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                \Craft\craft()->templates->setNamespace($_originalNamespace);
            } else {
                echo "\t\t\t\t\t";
                echo $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getSettingsHtml", array(), "method");
                echo "
\t\t\t\t";
            }
            unset($_originalNamespace, $_namespace);
            // line 59
            echo "\t\t\t";
        }
        // line 60
        echo "\t\t</div>

\t\t<div id=\"assetsource-fieldlayout\" class=\"hidden\">
\t\t\t";
        // line 63
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "getFieldLayout", array(), "method"), "customizableTabs" => false, "tab" => "fieldlayout"));
        // line 68
        echo "\t\t</div>

\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/sources/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 73,  184 => 68,  182 => 63,  177 => 60,  174 => 59,  155 => 57,  147 => 56,  144 => 55,  137 => 53,  133 => 52,  127 => 50,  121 => 48,  118 => 47,  108 => 52,  102 => 50,  96 => 48,  93 => 47,  86 => 46,  78 => 45,  75 => 44,  72 => 43,  68 => 42,  64 => 40,  62 => 32,  59 => 31,  57 => 30,  53 => 28,  51 => 27,  47 => 25,  45 => 15,  41 => 13,  35 => 12,  30 => 9,  28 => 8,  26 => 5,  24 => 3,);
    }
}
