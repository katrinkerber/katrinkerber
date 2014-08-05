<?php

/* _layouts/basecp */
class __TwigTemplate_dc6dcf602feee024154f86e904f030092267d1312c9a40d79d49394c232cfffa extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/base");

        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        switch ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale")) {
            case "en_gb":
            {
                // line 6
                $context["datepickerLocale"] = "en-GB";
                break;
            }
            case "fr_ca":
            {
                // line 8
                $context["datepickerLocale"] = "fr-CA";
                break;
            }
            default:
            {
                // line 10
                $context["language"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleData", array(), "method"), "getLanguageID", array(0 => $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale")), "method");
                // line 11
                if (twig_in_filter((isset($context["language"]) ? $context["language"] : null), array(0 => "ar", 1 => "de", 2 => "fr", 3 => "it", 4 => "ja", 5 => "nb", 6 => "nl"))) {
                    // line 12
                    $context["datepickerLocale"] = (isset($context["language"]) ? $context["language"] : null);
                }
            }
        }
        // line 18
        if (array_key_exists("datepickerLocale", $context)) {
            // line 19
            \Craft\craft()->templates->includeJsResource((("lib/datepicker-i18n/datepicker-" . (isset($context["datepickerLocale"]) ? $context["datepickerLocale"] : null)) . ".js"), true);
        }
        // line 22
        \Craft\craft()->templates->includeJsResource("js/cp.js", true);
        // line 23
        \Craft\craft()->templates->includeJsResource("js/craft.js", true);
        // line 24
        \Craft\craft()->templates->includeJsResource((("lib/garnish-0.1" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 25
        \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.fileupload.js", true);
        // line 26
        \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.ui.widget.js", true);
        // line 27
        \Craft\craft()->templates->includeJsResource((("lib/jquery.placeholder" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 28
        \Craft\craft()->templates->includeJsResource((("lib/jquery-ui-1.10.4.custom" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 29
        \Craft\craft()->templates->includeJsResource((("lib/jquery-2.1.0" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 30
        \Craft\craft()->templates->includeJsResource((("lib/xregexp-all" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? ("-min") : (""))) . ".js"), true);
        // line 32
        \Craft\craft()->templates->includeTranslations(
        	"Show",
        	"Hide"
        );
        // line 34
        $context["orientation"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleData", array(), "method"), "getOrientation", array(), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_foot($context, array $blocks = array())
    {
        // line 37
        echo "\t<noscript>
\t\t<div class=\"message-container no-access\">
\t\t\t<div class=\"pane notice\">
\t\t\t\t<p>";
        // line 40
        echo twig_escape_filter($this->env, \Craft\Craft::t("JavaScript must be enabled to access the Craft control panel."), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</noscript>

\t<script type=\"text/javascript\">
\t\twindow.Craft = {
\t\t\tsiteUid:              \"";
        // line 47
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getSiteUid", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tbaseUrl:              \"";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseCpUrl:            \"";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getCpUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseSiteUrl:          \"";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getSiteUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tactionUrl:            \"";
        // line 51
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getActionUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tresourceUrl:          \"";
        // line 52
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tscriptName:           \"";
        // line 53
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getScriptName", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tomitScriptNameInUrls: ";
        // line 54
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "omitScriptNameInUrls", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tusePathInfo:          ";
        // line 55
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "usePathInfo", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tresourceTrigger:      \"";
        // line 56
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "getResourceTrigger", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tactionTrigger:        \"";
        // line 57
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "actionTrigger"), "js"), "html", null, true);
        echo "\",
\t\t\tpath:                 \"";
        // line 58
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getPath", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tlocale:               \"";
        // line 59
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale"), "js"), "html", null, true);
        echo "\",
\t\t\torientation:          \"";
        // line 60
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["orientation"]) ? $context["orientation"] : null), "js"), "html", null, true);
        echo "\",
\t\t\tleft:                 \"";
        // line 61
        echo ((((isset($context["orientation"]) ? $context["orientation"] : null) == "ltr")) ? ("left") : ("right"));
        echo "\",
\t\t\tright:                \"";
        // line 62
        echo ((((isset($context["orientation"]) ? $context["orientation"] : null) == "ltr")) ? ("right") : ("left"));
        echo "\",
\t\t\tPersonal:             ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["CraftPersonal"]) ? $context["CraftPersonal"] : null), "html", null, true);
        echo ",
\t\t\tClient:               ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["CraftClient"]) ? $context["CraftClient"] : null), "html", null, true);
        echo ",
\t\t\tPro:                  ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["CraftPro"]) ? $context["CraftPro"] : null), "html", null, true);
        echo ",
\t\t\tedition:              ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["CraftEdition"]) ? $context["CraftEdition"] : null), "html", null, true);
        echo ",
\t\t\tisLocalized:          ";
        // line 67
        echo (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\ttranslations:         ";
        // line 68
        echo \Craft\craft()->templates->getTranslations();
        echo ",
\t\t\tmaxUploadSize:        ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getMaxUploadSize", array(), "method"), "html", null, true);
        echo ",
\t\t\tslugWordSeparator:    \"";
        // line 70
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "slugWordSeparator"), "js"), "html", null, true);
        echo "\"
\t\t};

\t\twindow.Craft.fileKinds = {};
\t\t";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getFileKinds", array(), "method"));
        foreach ($context['_seq'] as $context["kind"] => $context["info"]) {
            // line 75
            echo "\t\t\twindow.Craft.fileKinds.";
            echo twig_escape_filter($this->env, (isset($context["kind"]) ? $context["kind"] : null), "html", null, true);
            echo " = [];
\t\t\t";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "extensions"));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 77
                echo "\t\t\t\twindow.Craft.fileKinds.";
                echo twig_escape_filter($this->env, (isset($context["kind"]) ? $context["kind"] : null), "html", null, true);
                echo ".push(\"";
                echo twig_escape_filter($this->env, (isset($context["extension"]) ? $context["extension"] : null), "html", null, true);
                echo "\");
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kind'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t</script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 80,  224 => 79,  209 => 76,  204 => 75,  193 => 70,  189 => 69,  181 => 67,  173 => 65,  169 => 64,  161 => 62,  157 => 61,  149 => 59,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  109 => 49,  101 => 47,  91 => 40,  86 => 37,  83 => 36,  78 => 34,  71 => 30,  69 => 29,  67 => 28,  65 => 27,  61 => 25,  59 => 24,  55 => 22,  52 => 19,  50 => 18,  41 => 10,  35 => 8,  29 => 6,  25 => 4,  661 => 227,  658 => 226,  650 => 233,  642 => 231,  640 => 230,  637 => 229,  635 => 226,  632 => 225,  626 => 222,  623 => 221,  621 => 220,  612 => 219,  609 => 218,  606 => 217,  603 => 216,  601 => 215,  595 => 211,  592 => 210,  589 => 209,  586 => 208,  583 => 207,  577 => 201,  571 => 198,  568 => 197,  566 => 196,  563 => 195,  557 => 193,  555 => 192,  552 => 191,  547 => 188,  536 => 186,  532 => 185,  528 => 183,  525 => 182,  522 => 181,  513 => 267,  507 => 265,  505 => 264,  501 => 263,  495 => 260,  491 => 259,  487 => 257,  485 => 256,  480 => 253,  472 => 251,  470 => 250,  459 => 247,  451 => 245,  449 => 244,  443 => 243,  435 => 242,  429 => 238,  427 => 207,  422 => 204,  420 => 181,  414 => 177,  408 => 176,  400 => 174,  397 => 173,  394 => 172,  390 => 171,  380 => 163,  372 => 160,  367 => 158,  365 => 157,  363 => 156,  356 => 155,  351 => 154,  347 => 153,  336 => 149,  324 => 143,  316 => 141,  314 => 140,  308 => 139,  302 => 136,  298 => 134,  293 => 131,  286 => 129,  273 => 127,  269 => 126,  263 => 124,  259 => 123,  254 => 121,  246 => 118,  243 => 117,  241 => 116,  238 => 115,  235 => 114,  232 => 113,  229 => 112,  226 => 111,  219 => 107,  213 => 77,  206 => 105,  203 => 104,  200 => 74,  197 => 102,  194 => 101,  191 => 100,  188 => 99,  185 => 68,  182 => 97,  180 => 96,  177 => 66,  174 => 94,  171 => 93,  168 => 92,  165 => 63,  162 => 90,  159 => 89,  156 => 88,  153 => 60,  145 => 58,  142 => 81,  139 => 80,  136 => 79,  132 => 77,  123 => 75,  119 => 74,  116 => 73,  113 => 50,  110 => 71,  108 => 70,  105 => 48,  99 => 67,  96 => 66,  93 => 65,  151 => 86,  134 => 41,  126 => 36,  122 => 34,  117 => 51,  107 => 28,  100 => 27,  92 => 26,  84 => 25,  77 => 24,  73 => 32,  68 => 20,  63 => 26,  57 => 23,  53 => 17,  48 => 14,  45 => 12,  43 => 11,  37 => 9,  30 => 4,  28 => 3,  26 => 4,  24 => 2,);
    }
}
