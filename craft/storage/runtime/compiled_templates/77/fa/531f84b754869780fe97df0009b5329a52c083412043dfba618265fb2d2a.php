<?php

/* settings/assets/sources/index */
class __TwigTemplate_77fa531f84b754869780fe97df0009b5329a52c083412043dfba618265fb2d2a extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("settings/assets/_layout");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "settings/assets/_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["selectedTab"] = "sources";
        // line 4
        $context["docsUrl"] = "http://buildwithcraft.com/docs/assets";
        // line 7
        ob_start();
        // line 8
        echo "\t<p id=\"nosources\"";
        if (twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 9
        echo twig_escape_filter($this->env, \Craft\Craft::t("No sources exist yet."), "html", null, true);
        echo "
\t</p>

\t";
        // line 12
        if (twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null))) {
            // line 13
            echo "\t\t";
            $context["sortable"] = (twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null)) > 1);
            // line 14
            echo "
\t\t<table id=\"sources\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t";
            // line 18
            if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) {
                echo "<th scope=\"col\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "</th>";
            }
            // line 19
            echo "\t\t\t\t";
            if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                echo "<td class=\"thin\"></td>";
            }
            // line 20
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 24
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "id"), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "name")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 25
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/assets/sources/" . $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "name")), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t";
                // line 26
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) {
                    echo "<td data-title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "getSourceType", array(), "method"), "getName", array(), "method"), "html", null, true);
                    echo "</td>";
                }
                // line 27
                echo "\t\t\t\t\t\t";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<td class=\"thin\"><a class=\"move icon\" title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                    echo "\" role=\"button\"></a></td>";
                }
                // line 28
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 34
        echo "
\t<div class=\"buttons\">
\t\t<a class=\"btn submit add icon\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/assets/sources/new"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Source"), "html", null, true);
        echo "</a>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        $context["js"] = ('' === $tmp = "\tvar adminTable = new Craft.AdminTable({
\t\ttableSelector: '#sources',
\t\tnoObjectsSelector: '#nosources',
\t\tsortable: true,
\t\treorderAction: 'assetSources/reorderSources',
\t\tdeleteAction: 'assetSources/deleteSource',
\t\tonDeleteObject: function()
\t\t{
\t\t\t// Hide the Assets tab if that was the last one
\t\t\tif (adminTable.totalObjects == 0)
\t\t\t{
\t\t\t\t\$('#nav-assets').remove();
\t\t\t}
\t\t}
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/sources/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  134 => 41,  126 => 36,  122 => 34,  117 => 31,  107 => 28,  100 => 27,  92 => 26,  84 => 25,  77 => 24,  73 => 23,  68 => 20,  63 => 19,  57 => 18,  53 => 17,  48 => 14,  45 => 13,  43 => 12,  37 => 9,  30 => 8,  28 => 7,  26 => 4,  24 => 2,);
    }
}
