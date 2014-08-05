<?php

/* entries/_edit */
class __TwigTemplate_7d32f83655d0118a43ff3e0c9b32f66935fb00be99feaf7f03cc78322e0f536e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 4
        ob_start();
        // line 5
        echo "\t";
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") && ((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)))) {
            // line 6
            echo "\t\t";
            $this->env->loadTemplate("entries/_revisions")->display($context);
            // line 7
            echo "\t";
        }
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        $context["sectionHandle"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle");
        // line 11
        $context["isVersion"] = ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryVersion");
        // line 12
        $context["isDraft"] = ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") && ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryDraft"));
        // line 296
        if ((!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug"))) {
            // line 297
            \Craft\craft()->templates->includeJs("window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "\t<form id=\"entry-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\" data-saveshortcut-redirect=\"";
        echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
        echo "\" data-confirm-unload=\"1\">
\t\t";
        // line 17
        if ((!(isset($context["isVersion"]) ? $context["isVersion"] : null))) {
            // line 18
            echo "\t\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t";
            // line 19
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")) {
                echo "<input type=\"hidden\" name=\"entryId\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), "html", null, true);
                echo "\">";
            }
            // line 20
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                echo "<input type=\"hidden\" name=\"locale\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale"), "html", null, true);
                echo "\">";
            }
            // line 21
            echo "\t\t";
        } else {
            // line 22
            echo "\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "versionId"), "html", null, true);
            echo "\">
\t\t";
        }
        // line 24
        echo "
\t\t<div class=\"grid first\">
\t\t\t<div class=\"item\" data-position=\"left\" data-min-colspan=\"2\" data-max-colspan=\"3\">
\t\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t\t";
        // line 28
        $this->env->loadTemplate("_includes/tabs")->display($context);
        // line 29
        echo "\t\t\t\t\t";
        $this->env->loadTemplate("entries/_fields")->display(array_merge($context, array("static" => (isset($context["isVersion"]) ? $context["isVersion"] : null))));
        // line 32
        echo "\t\t\t\t</div>
\t\t\t</div><!--/item-->

\t\t\t<div class=\"item\" data-position=\"right\" data-colspan=\"1\">

\t\t\t\t";
        // line 37
        if ((isset($context["showPreviewBtn"]) ? $context["showPreviewBtn"] : null)) {
            // line 38
            echo "\t\t\t\t\t";
            if (array_key_exists("shareUrl", $context)) {
                // line 39
                echo "\t\t\t\t\t\t<div id=\"view-btns\" class=\"btngroup\">
\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t<div id=\"livepreview-btn\" class=\"btn big\" data-icon=\"view\">
\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, \Craft\Craft::t("Live Preview"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<div id=\"livepreview-spinner\" class=\"spinner hidden\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 45
            if (array_key_exists("shareUrl", $context)) {
                // line 46
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["shareUrl"]) ? $context["shareUrl"] : null), "html", null, true);
                echo "\" id=\"share-btn\" class=\"btn big\" data-icon=\"share\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("View this entry on your website"), "html", null, true);
                echo "\" target=\"_blank\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t";
        }
        // line 50
        echo "
\t\t\t\t";
        // line 51
        if (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") && (twig_length_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getLocales", array(), "method")) > 1))) {
            // line 52
            echo "\t\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t\t";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localeIds"]) ? $context["localeIds"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["localeId"]) {
                // line 54
                echo "\t\t\t\t\t\t\t";
                $context["localeName"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleById", array(0 => (isset($context["localeId"]) ? $context["localeId"] : null)), "method"), "name");
                // line 55
                echo "\t\t\t\t\t\t\t<li";
                if (((isset($context["localeId"]) ? $context["localeId"] : null) == $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale"))) {
                    echo " class=\"sel\"";
                }
                echo ">";
                // line 56
                if (((isset($context["localeId"]) ? $context["localeId"] : null) == $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale"))) {
                    // line 57
                    echo twig_escape_filter($this->env, (isset($context["localeName"]) ? $context["localeName"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 58
                    echo $context["forms"]->getlightswitch(array("name" => "localeEnabled", "on" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "localeEnabled"), "small" => true));
                } else {
                    // line 64
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ((\Craft\UrlHelper::getUrl(((("entries/" . (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null)) . "/") . $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getSegment", array(0 => 3), "method"))) . "/") . (isset($context["localeId"]) ? $context["localeId"] : null)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["localeName"]) ? $context["localeName"] : null), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<div class=\"status ";
                    // line 65
                    echo ((twig_in_filter((isset($context["localeId"]) ? $context["localeId"] : null), (isset($context["enabledLocales"]) ? $context["enabledLocales"] : null))) ? ("enabled") : ("disabled"));
                    echo "\"></div>";
                }
                // line 67
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 71
        echo "
\t\t\t\t";
        // line 72
        if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single")) {
            // line 73
            echo "\t\t\t\t\t<div id=\"settings\" class=\"pane\">

\t\t\t\t\t\t";
            // line 75
            if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
                // line 76
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "id" => "entryType", "name" => "typeId", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "id"), "options" => (isset($context["entryTypeOptions"]) ? $context["entryTypeOptions"] : null)));
                // line 82
                echo "
\t\t\t\t\t\t";
            }
            // line 84
            echo "
\t\t\t\t\t\t";
            // line 85
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Slug"), "id" => "slug", "name" => "slug", "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug"), "errors" => (((!(isset($context["isVersion"]) ? $context["isVersion"] : null))) ? (twig_array_merge($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "slug"), "method"), $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "uri"), "method"))) : ("")), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
            // line 92
            echo "

\t\t\t\t\t\t";
            // line 94
            if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "structure") && (twig_length_filter($this->env, (isset($context["parentOptions"]) ? $context["parentOptions"] : null)) > 1))) {
                // line 95
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Parent Entry"), "id" => "parentId", "name" => "parentId", "options" => (isset($context["parentOptions"]) ? $context["parentOptions"] : null), "value" => (isset($context["parentId"]) ? $context["parentId"] : null), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
                // line 102
                echo "
\t\t\t\t\t\t";
            }
            // line 104
            echo "
\t\t\t\t\t\t";
            // line 105
            if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                // line 106
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Author"), "id" => "author", "name" => "author", "options" => (isset($context["authorOptions"]) ? $context["authorOptions"] : null), "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId"), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
                // line 113
                echo "
\t\t\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t\t\t\t";
            // line 116
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Post Date"), "id" => "postDate", "name" => "postDate", "value" => (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate")) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate")) : (null)), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "postDate"), "method"), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
            // line 123
            echo "

\t\t\t\t\t\t";
            // line 125
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Expiration Date"), "id" => "expiryDate", "name" => "expiryDate", "value" => (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "expiryDate")) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "expiryDate")) : (null)), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "expiryDate"), "method"), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
            // line 132
            echo "

\t\t\t\t\t\t";
            // line 134
            $context["canPublish"] = $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method");
            // line 135
            echo "\t\t\t\t\t\t";
            if (((isset($context["canPublish"]) ? $context["canPublish"] : null) || ((!(isset($context["isVersion"]) ? $context["isVersion"] : null)) && (isset($context["canDeleteEntry"]) ? $context["canDeleteEntry"] : null)))) {
                // line 136
                echo "
\t\t\t\t\t\t\t";
                // line 137
                ob_start();
                // line 138
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["canPublish"]) ? $context["canPublish"] : null)) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 140
                    echo $context["forms"]->getlightswitch(array("id" => "enabled", "name" => "enabled", "on" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "enabled"), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
                    // line 145
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 148
                echo "
\t\t\t\t\t\t\t\t";
                // line 149
                if (((!(isset($context["isVersion"]) ? $context["isVersion"] : null)) && (isset($context["canDeleteEntry"]) ? $context["canDeleteEntry"] : null))) {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    // line 151
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                    echo "\" data-action=\"entries/deleteEntry\"
\t\t\t\t\t\t\t\t\t\t\tdata-confirm=\"";
                    // line 152
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this entry?"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-redirect=\"entries\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t\t";
                $context["statusInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 157
                echo "
\t\t\t\t\t\t\t";
                // line 158
                echo $context["forms"]->getfield(array("label" => (((isset($context["canPublish"]) ? $context["canPublish"] : null)) ? (\Craft\Craft::t("Status")) : ("")), "id" => "enabled"), (isset($context["statusInput"]) ? $context["statusInput"] : null));
                // line 161
                echo "
\t\t\t\t\t\t";
            }
            // line 163
            echo "
\t\t\t\t\t</div><!--/pane-->

\t\t\t\t\t";
            // line 166
            if (((isset($context["isVersion"]) ? $context["isVersion"] : null) && $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "revisionNotes"))) {
                // line 167
                echo "\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t<h6>";
                // line 168
                echo twig_escape_filter($this->env, \Craft\Craft::t("Version Notes"), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t<p class=\"light\">";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "revisionNotes"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 172
            echo "
\t\t\t\t";
        }
        // line 174
        echo "
\t\t\t\t";
        // line 176
        echo "
\t\t\t\t";
        // line 177
        if ((isset($context["isDraft"]) ? $context["isDraft"] : null)) {
            // line 178
            echo "
\t\t\t\t\t<hr>

\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 182
            echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
            echo "/drafts/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId"), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"draftId\" value=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId"), "html", null, true);
            echo "\">

\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 186
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save draft"), "html", null, true);
            echo "\">

\t\t\t\t\t\t";
            // line 189
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method") && ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "single") || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id"))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) && (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 194
                echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Publish draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/publishDraft\" data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 196
            echo "
\t\t\t\t\t\t";
            // line 198
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("deletePeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) {
                // line 199
                echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/deleteDraft\"
\t\t\t\t\t\t\t   data-confirm=\"";
                // line 200
                echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this draft?"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t   data-redirect=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t";
            }
            // line 203
            echo "\t\t\t\t\t</div>

\t\t\t\t";
        } elseif ((isset($context["isVersion"]) ? $context["isVersion"] : null)) {
            // line 206
            echo "
\t\t\t\t\t";
            // line 208
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method") && ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "single") || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id"))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 212
                echo "
\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/revertEntryToVersion\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "versionId"), "html", null, true);
                echo "\">

\t\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                // line 220
                echo twig_escape_filter($this->env, \Craft\Craft::t("Revert entry to this version"), "html", null, true);
                echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 223
            echo "
\t\t\t\t";
        } else {
            // line 225
            echo "
\t\t\t\t\t";
            // line 227
            echo "\t\t\t\t\t";
            if (((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("createEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")) && (((!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")) || (!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "enabled"))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) && ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "single") || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id"))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 232
                echo "\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entries/saveEntry\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"entries/";
                // line 235
                echo twig_escape_filter($this->env, (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null), "html", null, true);
                echo "\">

\t\t\t\t\t\t<table class=\"inputs fullwidth\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t\t\t<div class=\"btngroup submit first\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
                // line 241
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"";
                // line 246
                echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
                echo "</a></li>

\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 248
                $context["nextEntryParams"] = array();
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
                    // line 250
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "typeId={type.id}"));
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 252
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "structure") && (twig_length_filter($this->env, (isset($context["parentOptions"]) ? $context["parentOptions"] : null)) > 1))) {
                    // line 253
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "parentId={parent.id}"));
                    // line 254
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 255
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 256
                if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single")) {
                    // line 257
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"entries/";
                    echo twig_escape_filter($this->env, (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null), "html", null, true);
                    echo "/new";
                    if ((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null)) {
                        echo "?";
                        echo twig_escape_filter($this->env, twig_join_filter((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), "&"), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 259
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 260
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                    // line 261
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-action=\"entryRevisions/saveDraft\" data-redirect=\"";
                    echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
                    echo "/drafts/{draftId}\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                // line 267
                if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "enableVersioning"))) {
                    // line 268
                    echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"revisionNotes\" class=\"fullwidth textline\" placeholder=\"";
                    // line 269
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Notes about your changes"), "html", null, true);
                    echo "\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                // line 272
                echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t";
            } else {
                // line 275
                echo "\t\t\t\t\t\t";
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                    // line 276
                    echo "
\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                    // line 280
                    echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
                    echo "/drafts/{draftId}\">

\t\t\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit first\" value=\"";
                    // line 283
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 286
                echo "\t\t\t\t\t";
            }
            // line 287
            echo "
\t\t\t\t";
        }
        // line 289
        echo "
\t\t\t</div><!--/item-->
\t\t</div><!--/grid-->
\t</form>
";
    }

    public function getTemplateName()
    {
        return "entries/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 289,  564 => 287,  561 => 286,  555 => 283,  549 => 280,  543 => 276,  540 => 275,  535 => 272,  529 => 269,  526 => 268,  524 => 267,  518 => 263,  510 => 261,  508 => 260,  505 => 259,  492 => 257,  490 => 256,  487 => 255,  484 => 254,  481 => 253,  478 => 252,  475 => 251,  472 => 250,  469 => 249,  467 => 248,  460 => 246,  452 => 241,  443 => 235,  438 => 232,  435 => 227,  432 => 225,  428 => 223,  422 => 220,  416 => 217,  412 => 216,  406 => 212,  403 => 208,  400 => 206,  395 => 203,  390 => 201,  386 => 200,  381 => 199,  378 => 198,  375 => 196,  367 => 194,  364 => 189,  359 => 186,  353 => 183,  347 => 182,  341 => 178,  339 => 177,  336 => 176,  333 => 174,  329 => 172,  323 => 169,  319 => 168,  316 => 167,  314 => 166,  309 => 163,  305 => 161,  303 => 158,  300 => 157,  297 => 156,  290 => 152,  286 => 151,  283 => 150,  281 => 149,  278 => 148,  273 => 145,  271 => 140,  268 => 139,  265 => 138,  263 => 137,  260 => 136,  257 => 135,  255 => 134,  251 => 132,  249 => 125,  245 => 123,  243 => 116,  240 => 115,  236 => 113,  233 => 106,  231 => 105,  228 => 104,  224 => 102,  221 => 95,  219 => 94,  215 => 92,  213 => 85,  210 => 84,  206 => 82,  203 => 76,  201 => 75,  197 => 73,  195 => 72,  192 => 71,  188 => 69,  181 => 67,  177 => 65,  170 => 64,  167 => 58,  163 => 57,  161 => 56,  155 => 55,  152 => 54,  148 => 53,  145 => 52,  143 => 51,  140 => 50,  137 => 49,  128 => 46,  126 => 45,  120 => 42,  117 => 41,  113 => 39,  110 => 38,  108 => 37,  101 => 32,  98 => 29,  96 => 28,  90 => 24,  84 => 22,  81 => 21,  74 => 20,  68 => 19,  63 => 18,  61 => 17,  56 => 16,  53 => 15,  47 => 297,  45 => 296,  43 => 12,  41 => 11,  39 => 10,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  25 => 2,);
    }
}
