<?php

/* _layout */
class __TwigTemplate_a4e7cd6fa7ceeb551b0f8e492966958802570980de21ff52c35ab40271d261ff extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]>  <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]>     <html class=\"no-js lt-ie9 lt-ie8 ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]>     <html class=\"no-js lt-ie9 ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]>     <html class=\"no-js ie9\" lang=\"en\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->  <html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
  <meta charset=\"UTF-8\" />

  <title>";
        // line 10
        if (array_key_exists("pageTitle", $context)) {
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
            echo " - Katrin Kerber";
        } else {
            echo "Katrin Kerber - I build websites with love.";
        }
        echo "</title>
  <meta name=\"description\" content=\"Freelance web developer based in Petersfield. I build successful websites with love for usability, high quality code, great CMS and attention to detail.\" />
  <meta name=\"author\" content=\"/humans.txt\" />
  <meta name=\"robots\" content=\"/robots.txt\" />

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

   <!-- Disable skype from styling numbers as skype buttons - DOES NOT VALIDATE -->
  <meta name=\"SKYPE_TOOLBAR\" content=\"SKYPE_TOOLBAR_PARSER_COMPATIBLE\" />

  <link rel=\"stylesheet\" href=\"/assets/css/styles.min.css\">

  <!-- Icons - https://github.com/audreyr/favicon-cheat-sheet -->
  <!-- IE6-10 -->
  <link rel=\"shortcut icon\" sizes=\"16x16 24x24 32x32 64x64\" href=\"/favicon.ico\">
  <!-- Everybody else -->
  <link rel=\"icon\" sizes=\"16x16 24x24 32x32 64x64\" href=\"/favicon.ico\">
  <!-- iOS 2.0+ and Android 2.1+ -->
  <link rel=\"apple-touch-icon-precomposed\" href=\"/favicon-152.png\">
  <!-- Metro tile -->
  <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">
  <meta name=\"msapplication-TileImage\" content=\"/favicon-144.png\">

  <!-- Open Graph protocol meta tags - http://ogp.me/ -->
  <meta property=\"og:title\" content=\"";
        // line 34
        if (array_key_exists("pageTitle", $context)) {
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        } else {
            echo "Katrin Kerber - I build websites with love.";
        }
        echo "\" />
  <meta property=\"og:type\" content=\"website\" />
  <meta property=\"og:url\" content=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "url"), "html", null, true);
        echo "\" />
  <meta property=\"og:image\" content=\"/favicon-152.png\" />

  <!-- Most JavaScript at bottom for optimal page load times, except for Modernizr, webfontloader and GA -->
  <!-- Custom Modernizr script, includes some mobile device/OS detection -->
  <script src=\"/assets/js/libs/modernizr.js\" async></script>
  <script src=\"/assets/js/libs/webfontloader.js\" async></script>
  <!-- adding GA in head to increase likelihood of tracking even if user should leave before page has completely loaded -->
  <script src=\"/assets/js/analytics.js\" async></script>
</head>
<body itemscope itemtype=\"http://schema.org/WebPage\" id=\"top\">
  <header role=\"banner\" class=\"siteheader\">
    <h1 class=\"siteheader__header\">
      ";
        // line 49
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment")) {
            // line 50
            echo "        <a href=\"/\">Katrin Kerber</a>
      ";
        } else {
            // line 52
            echo "        Katrin Kerber
      ";
        }
        // line 54
        echo "    </h1>
    <p class=\"siteheader__tagline\">I build websites with love.</p>
    <nav class=\"siteheader__nav\" role=\"navigation\">
      <ul>
        ";
        // line 58
        $context["nav"] = array(0 => array("uri" => "", "title" => "Home"), 1 => array("uri" => "what-i-do", "title" => "What I Do"), 2 => array("uri" => "projects", "title" => "Projects"), 3 => array("uri" => "about", "title" => "About"), 4 => array("uri" => "notes", "title" => "Notes"), 5 => array("uri" => "contact", "title" => "Contact"));
        // line 66
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nav"]) ? $context["nav"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 67
            echo "          ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                // line 68
                echo "            <li>
              <a ";
                // line 69
                if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "")) {
                    echo "class=\"current\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri")), "html", null, true);
                echo "\">
                ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "
              </a>
            </li>
          ";
            } else {
                // line 74
                echo "            ";
                $context["current"] = ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"));
                // line 75
                echo "            <li>
              <a ";
                // line 76
                if ((isset($context["current"]) ? $context["current"] : null)) {
                    echo "class=\"current\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri")), "html", null, true);
                echo "\">
                ";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "
              </a>
            </li>
          ";
            }
            // line 81
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "      </ul>
    </nav>
  </header>

  <main role=\"main\" class=\"page page--";
        // line 86
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "section")), "html", null, true);
        echo " page--";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment"), "html", null, true);
        echo "\">
\t\t";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "  </main>

  <div class=\"backtotop\">
    <a class=\"backtotop__link\" href=\"#top\"><i class=\"icon icon--arrow-up\" aria-hidden=\"true\"></i> Back to top</a>
  </div>

  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
  <script>
    window.jQuery || document.write(\"<script src='/assets/js/libs/jquery-1.9.1.min.js'>\\x3C/script>\")
  </script>
  <script src=\"/assets/js/scripts.min.js\"></script>
</body>
</html>
";
    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 87,  194 => 88,  192 => 87,  186 => 86,  180 => 82,  166 => 81,  159 => 77,  151 => 76,  148 => 75,  145 => 74,  138 => 70,  130 => 69,  127 => 68,  124 => 67,  106 => 66,  104 => 58,  98 => 54,  94 => 52,  90 => 50,  88 => 49,  72 => 36,  63 => 34,  31 => 10,  20 => 1,);
    }
}
