<?php

/* _layouts/cp */
class __TwigTemplate_fcf126aa0c7856e2f12ae4e9b31bc17290a45376caef064b890fb31c381254de extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        \Craft\craft()->templates->includeCssResource("css/cp.css", true);
        // line 4
        \Craft\craft()->templates->includeTranslations(
        	"Pending",
        	"Failed",
        	"Failed task",
        	"Options",
        	"Try again",
        	"Show sidebar",
        	"Hide sidebar",
        	"1 update available",
        	"{num} updates available",
        	"More",
        	"Attempted to get the height of a modal whose container has not been set.",
        	"Attempted to get the width of a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Are you sure you want to transfer your license to this domain?",
        	"License transferred.",
        	"An unknown error occurred.",
        	"Cancel",
        	"Close",
        	"Create",
        	"Done",
        	"Delete",
        	"Handle",
        	"Name",
        	"Move",
        	"New Child",
        	"Remove",
        	"Reorder",
        	"Save",
        	"Settings",
        	"Select",
        	"New order saved.",
        	"Couldn’t save new order.",
        	"Are you sure you want to delete “{name}”?",
        	"“{name}” deleted.",
        	"Couldn’t delete “{name}”.",
        	"Show/hide children",
        	"New child",
        	"Upload failed for {filename}",
        	"View file",
        	"Edit properties",
        	"Rename file",
        	"Copy reference tag",
        	"Delete file",
        	"{ctrl}C to copy.",
        	"Are you sure you want to delete these {number} files?",
        	"New subfolder",
        	"Rename folder",
        	"Delete folder",
        	"Enter the name of the folder",
        	"Really delete folder “{folder}”?",
        	"Upload files",
        	"Select Transform",
        	"Please enter your current password.",
        	"Continue",
        	"Cancel",
        	"Any changes will be lost if you leave this page."
        );
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "\t";
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin") && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "devMode"))) {
            // line 67
            echo "\t\t<div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Craft is running in Dev Mode."), "html", null, true);
            echo "\"></div>
\t";
        }
        // line 69
        echo "
\t";
        // line 70
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "areAlertsCached", array(), "method")) {
            // line 71
            echo "\t\t";
            $context["alerts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "getAlerts", array(), "method");
            // line 72
            echo "\t\t";
            if ((isset($context["alerts"]) ? $context["alerts"] : null)) {
                // line 73
                echo "\t\t\t<ul id=\"alerts\">
\t\t\t\t";
                // line 74
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 75
                    echo "\t\t\t\t\t<li>";
                    echo (isset($context["alert"]) ? $context["alert"] : null);
                    echo "</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "\t\t\t</ul>
\t\t";
            }
            // line 79
            echo "\t";
        } else {
            // line 80
            echo "\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.fetchAlerts();");
            // line 81
            echo "\t";
        }
        // line 82
        echo "
\t<header id=\"header\">
\t\t<div class=\"container\">
\t\t\t<ul id=\"header-actions\">
\t\t\t\t";
        // line 86
        $context["task"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks"), "getRunningTask", array(), "method");
        // line 87
        echo "\t\t\t\t";
        if ((isset($context["task"]) ? $context["task"] : null)) {
            // line 88
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs((("Craft.cp.setRunningTaskInfo(" . twig_jsonencode_filter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "getInfo", array(), "method"))) . ");"));
            // line 89
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.trackTaskProgress();");
            // line 90
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks"), "areTasksPending", array(), "method")) {
            // line 91
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.runPendingTasks();");
            // line 92
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks"), "haveTasksFailed", array(), "method")) {
            // line 93
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.setRunningTaskInfo({ status: \"error\" });");
            // line 94
            echo "\t\t\t\t";
        }
        // line 95
        echo "
\t\t\t\t";
        // line 96
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 97
            echo "\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "isUpdateInfoCached", array(), "method")) {
                // line 98
                echo "\t\t\t\t\t\t";
                $context["totalUpdates"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getTotalAvailableUpdates", array(), "method");
                // line 99
                echo "\t\t\t\t\t\t";
                if ((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)) {
                    // line 100
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null) == 1)) {
                        // line 101
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("1 update available");
                        // line 102
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("{num} updates available", array("num" => (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)));
                        // line 104
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 105
                    echo "\t\t\t\t\t\t\t<li class=\"updates";
                    if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "isCriticalUpdateAvailable", array(), "method")) {
                        echo " critical";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<a data-icon=\"newstamp\" href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["updateText"]) ? $context["updateText"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 107
                    echo twig_escape_filter($this->env, (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t";
            } else {
                // line 112
                echo "\t\t\t\t\t\t";
                \Craft\craft()->templates->includeJs("Craft.cp.checkForUpdates();");
                // line 113
                echo "\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t";
        }
        // line 115
        echo "
\t\t\t\t";
        // line 116
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin")) {
            // line 117
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settings\" data-icon=\"settings\" href=\"";
            // line 118
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settingsmenu menubtn\" title=\"";
            // line 121
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t<div id=\"settingsmenu\" class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t\t";
            // line 123
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "settings", array(), "method"));
            foreach ($context['_seq'] as $context["category"] => $context["items"]) {
                // line 124
                echo "\t\t\t\t\t\t\t\t<h6>";
                echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t\t";
                // line 126
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . (isset($context["handle"]) ? $context["handle"] : null))), "html", null, true);
                    echo "\" data-icon=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 134
        echo "
\t\t\t\t<li>
\t\t\t\t\t<a data-icon=\"user\" class=\"myaccount menubtn\" title=\"";
        // line 136
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 139
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 140
        if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin"))) {
            // line 141
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("clientaccount"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Client’s Account"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["logoutUrl"]) ? $context["logoutUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Sign out"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<h2><a href=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Site Homepage"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t((isset($context["siteName"]) ? $context["siteName"] : null)), "html", null, true);
        echo "</a></h2>

\t\t\t<nav>
\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t";
        // line 153
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "nav", array(), "method"));
        foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
            // line 154
            echo "\t\t\t\t\t\t<li id=\"nav-";
            echo twig_escape_filter($this->env, (isset($context["handle"]) ? $context["handle"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<a";
            // line 155
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "sel")) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url"), "html", null, true);
            echo "\">";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
            // line 157
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "badge", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "badge"))) {
                // line 158
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "badge"), "html", null, true);
                echo "</span>";
            }
            // line 160
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</header>

\t<div class=\"container\">
\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "notice", 1 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 172
            echo "\t\t\t\t\t";
            $context["message"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session"), "getFlash", array(0 => (isset($context["type"]) ? $context["type"] : null)), "method");
            // line 173
            echo "\t\t\t\t\t";
            if ((isset($context["message"]) ? $context["message"] : null)) {
                // line 174
                echo "\t\t\t\t\t\t<div class=\"notification ";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t</div>
\t\t</div>

\t\t<header id=\"page-header\">
\t\t\t";
        // line 181
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 204
        echo "\t\t</header>

\t\t<main id=\"main\" role=\"main\">
\t\t\t";
        // line 207
        $this->displayBlock('main', $context, $blocks);
        // line 238
        echo "\t\t</main>

\t\t<div id=\"footer\">
\t\t\t<ul>
\t\t\t\t<li>Craft ";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getEditionName", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getVersion", array(), "method"), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getBuild", array(), "method"), "html", null, true);
        echo "</li>
\t\t\t\t<li>";
        // line 243
        echo twig_escape_filter($this->env, \Craft\Craft::t("Released on"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "releaseDate"), "localeDate"), "html", null, true);
        echo "</li>
\t\t\t\t";
        // line 244
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 245
            echo "\t\t\t\t\t<li><a id=\"footer-updates\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "isUpdateInfoCached", array(), "method") && (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null))) ? ((isset($context["updateText"]) ? $context["updateText"] : null)) : (\Craft\Craft::t("Check for updates"))), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 247
        echo "\t\t\t\t<li>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Copyright"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo " Pixel &amp; Tonic, Inc. ";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All rights reserved."), "html", null, true);
        echo "</li>
\t\t\t</ul>

\t\t\t";
        // line 250
        if (((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPersonal"]) ? $context["CraftPersonal"] : null)) || ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getPath") == "settings")) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "canUpgradeEdition", array(), "method"))) {
            // line 251
            echo "\t\t\t\t<p id=\"upgradepromo\"><a>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade Craft to take your site to the next level."), "html", null, true);
            echo " <span class=\"go\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Show me"), "html", null, true);
            echo "</span></a></p>
\t\t\t";
        }
        // line 253
        echo "\t\t</div>
\t</div>

\t";
        // line 256
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "hasWrongEdition", array(), "method")) {
            // line 257
            echo "\t\t<div id=\"wrongedition-modal\" class=\"modal fitted hidden\">
\t\t\t<div class=\"body\">
\t\t\t\t<p>";
            // line 259
            echo twig_escape_filter($this->env, \Craft\Craft::t("You’re running Craft {edition} with a Craft {licensedEdition} license.", array("edition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getEditionName", array(), "method"), "licensedEdition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 260
            echo twig_escape_filter($this->env, \Craft\Craft::t("What would you like to do?"), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"btngroup\">
\t\t\t\t\t\t<div id=\"wrongedition-switchbtn\" class=\"btn\">";
            // line 263
            echo twig_escape_filter($this->env, \Craft\Craft::t("Switch to Craft {edition}", array("edition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
            // line 264
            if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getEdition", array(), "method") > $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getLicensedEdition", array(), "method"))) {
                // line 265
                echo "\t\t\t\t\t\t\t<div id=\"wrongedition-upgradebtn\" class=\"btn\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade your license"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 267
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 181
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 182
        echo "\t\t\t\t";
        if ((array_key_exists("crumbs", $context) && (isset($context["crumbs"]) ? $context["crumbs"] : null))) {
            // line 183
            echo "\t\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 185
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) ? $context["crumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 186
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : null), "label"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 191
        echo "
\t\t\t\t";
        // line 192
        if ((array_key_exists("title", $context) && (isset($context["title"]) ? $context["title"] : null))) {
            // line 193
            echo "\t\t\t\t\t<h1>";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h1>
\t\t\t\t";
        }
        // line 195
        echo "
\t\t\t\t";
        // line 196
        if (array_key_exists("extraPageHeaderHtml", $context)) {
            // line 197
            echo "\t\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t\t";
            // line 198
            echo twig_escape_filter($this->env, (isset($context["extraPageHeaderHtml"]) ? $context["extraPageHeaderHtml"] : null), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 201
        echo "
\t\t\t\t<div class=\"clear\"></div>
\t\t\t";
    }

    // line 207
    public function block_main($context, array $blocks = array())
    {
        // line 208
        echo "\t\t\t\t";
        $context["sidebar"] = ((array_key_exists("sidebar", $context)) ? ((isset($context["sidebar"]) ? $context["sidebar"] : null)) : (trim($this->renderBlock("sidebar", $context, $blocks))));
        // line 209
        echo "\t\t\t\t";
        $context["hasSidebar"] = (!twig_test_empty((isset($context["sidebar"]) ? $context["sidebar"] : null)));
        // line 210
        echo "\t\t\t\t";
        $context["hasHelp"] = (array_key_exists("docsUrl", $context) && (!twig_test_empty((isset($context["docsUrl"]) ? $context["docsUrl"] : null))));
        // line 211
        echo "
\t\t\t\t<div class=\"grid\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t";
        // line 215
        if ((array_key_exists("tabs", $context) && (isset($context["tabs"]) ? $context["tabs"] : null))) {
            // line 216
            echo "\t\t\t\t\t\t\t\t";
            $this->env->loadTemplate("_includes/tabs")->display($context);
            // line 217
            echo "\t\t\t\t\t\t\t";
        }
        // line 218
        echo "
\t\t\t\t\t\t\t<div id=\"content\" class=\"content";
        // line 219
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            echo " has-sidebar";
        }
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            echo " has-help";
        }
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 220
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            // line 221
            echo "\t\t\t\t\t\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t";
            // line 222
            echo (isset($context["sidebar"]) ? $context["sidebar"] : null);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 225
        echo "
\t\t\t\t\t\t\t\t";
        // line 226
        $this->displayBlock('content', $context, $blocks);
        // line 229
        echo "
\t\t\t\t\t\t\t\t";
        // line 230
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            // line 231
            echo "\t\t\t\t\t\t\t\t\t<a id=\"help\" class=\"help\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Help"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["docsUrl"]) ? $context["docsUrl"] : null), "html", null, true);
            echo "\" target=\"_blank\"></a>
\t\t\t\t\t\t\t\t";
        }
        // line 233
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 226
    public function block_content($context, array $blocks = array())
    {
        // line 227
        echo "\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ((array_key_exists("content", $context)) ? ((isset($context["content"]) ? $context["content"] : null)) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 227,  658 => 226,  650 => 233,  642 => 231,  640 => 230,  637 => 229,  635 => 226,  632 => 225,  626 => 222,  623 => 221,  621 => 220,  612 => 219,  609 => 218,  606 => 217,  603 => 216,  601 => 215,  595 => 211,  592 => 210,  589 => 209,  586 => 208,  583 => 207,  577 => 201,  571 => 198,  568 => 197,  566 => 196,  563 => 195,  557 => 193,  555 => 192,  552 => 191,  547 => 188,  536 => 186,  532 => 185,  528 => 183,  525 => 182,  522 => 181,  513 => 267,  507 => 265,  505 => 264,  501 => 263,  495 => 260,  491 => 259,  487 => 257,  485 => 256,  480 => 253,  472 => 251,  470 => 250,  459 => 247,  451 => 245,  449 => 244,  443 => 243,  435 => 242,  429 => 238,  427 => 207,  422 => 204,  420 => 181,  414 => 177,  408 => 176,  400 => 174,  397 => 173,  394 => 172,  390 => 171,  380 => 163,  372 => 160,  367 => 158,  365 => 157,  363 => 156,  356 => 155,  351 => 154,  347 => 153,  336 => 149,  324 => 143,  316 => 141,  314 => 140,  308 => 139,  302 => 136,  298 => 134,  293 => 131,  286 => 129,  273 => 127,  269 => 126,  263 => 124,  259 => 123,  254 => 121,  246 => 118,  243 => 117,  241 => 116,  238 => 115,  235 => 114,  232 => 113,  229 => 112,  226 => 111,  219 => 107,  213 => 106,  206 => 105,  203 => 104,  200 => 103,  197 => 102,  194 => 101,  191 => 100,  188 => 99,  185 => 98,  182 => 97,  180 => 96,  177 => 95,  174 => 94,  171 => 93,  168 => 92,  165 => 91,  162 => 90,  159 => 89,  156 => 88,  153 => 87,  145 => 82,  142 => 81,  139 => 80,  136 => 79,  132 => 77,  123 => 75,  119 => 74,  116 => 73,  113 => 72,  110 => 71,  108 => 70,  105 => 69,  99 => 67,  96 => 66,  93 => 65,  151 => 86,  134 => 41,  126 => 36,  122 => 34,  117 => 31,  107 => 28,  100 => 27,  92 => 26,  84 => 25,  77 => 24,  73 => 23,  68 => 20,  63 => 19,  57 => 18,  53 => 17,  48 => 14,  45 => 13,  43 => 12,  37 => 9,  30 => 4,  28 => 3,  26 => 4,  24 => 2,);
    }
}
