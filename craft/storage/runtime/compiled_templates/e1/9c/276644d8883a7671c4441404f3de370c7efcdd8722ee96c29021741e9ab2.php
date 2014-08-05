<?php

/* what-i-do */
class __TwigTemplate_e19c276644d8883a7671c4441404f3de370c7efcdd8722ee96c29021741e9ab2 extends Craft\BaseTemplate
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
        $context["pageTitle"] = "What I Do";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  <h1 class=\"visuallyhidden\">What I Do</h1>

  <div class=\"page__intro\">
    <p>From joining a team to focus on a site’s code, to managing the entire process of a build. </p>
  </div>

  <h2 class=\"lines-heading\">Planning and Prototyping</h2>
  <div class=\"page__text\">
    <p>To ensure that your website fulfils both your and your users’ needs, planning is paramount. Before a site can be visualised and built, you need to know your goals, core content and user journeys.</p>
    <p>I can work with you to work out your core objectives and plan your site’s structure, content flow and interactive functionality. I use the ‘mobile first’ approach during this process, which ensures a focus on the essentials and allows for better, more effective coding later on.</p>
  </div>

  <h2 class=\"lines-heading\">Design</h2>
  <div class=\"page__text\">
    <p>The overall design direction of a site can be best put together with the help of mood boards and <a href=\"http://styletil.es/\">style tiles</a>, which specify the colours, typography and the look of important components.</p>
    <p>At this stage I also relish working together with skilled, experienced designers. Having another set of eyes and being able to discuss ideas with someone who is not as heavily involved with the coding of a site helps to push boundaries and create a truly special look.</p>
  </div>

  <h2 class=\"lines-heading\">Front-End Development</h2>
  <div class=\"page__text\">
    <p>Using detailed plans and collaborating closely with designers, I transform plans and ideas into streamlined code and robust sites.</p>
    <p>I usually begin the coding process by setting up a <a href=\"/assets/styleguide\">style guide</a>, which breaks the site down into it’s major components. This creates a maintable, robust structure and also helps other developers that might need to work on your site, too.</p>
    <p>I build solid foundations which work across browsers, devices, and user environments. My HTML is structured, accessible and semantic; my CSS is progressive and modular; and my JavaScript is minimal and effective.</p>
  </div>

  <h2 class=\"lines-heading\">Integrating CMS</h2>
  <div class=\"page__text\">
    <p>Content Management Systems (CMS) can be real party poopers. Wrangling with convoluted markup that invades carefully crafted code, poor control panels, and complex steps for simple updates is just frustrating for anyone involved.</p>
    <p>My CMS of choice are <a href=\"http://buildwithcraft.com/\">Craft</a>, <a href=\"https://ellislab.com/expressionengine\">ExpressionEngine</a>, <a href=\"http://statamic.com/\">Statamic</a> and <a href=\"http://grabaperch.com/\">Perch</a>. They are flexible, extendable, and a joy to use.</p>
  </div>

  <h2 class=\"lines-heading\">E-Commerce</h2>
  <div class=\"page__text\">
    <p>I can help choose the right tools and set up everything you need for an online shop - from product management, checkout steps, payments, to order handling.</p>
  </div>

  <h2 class=\"lines-heading\">Testing, Testing, Testing</h2>
  <div class=\"page__text\">
    <p>Using an extensive checklist and a host of tools, I test and optimise a site to ensure it performs at its absolute best. I check and fine-tune the experience in various popular browsers and on handheld devices, validate the code, reduce HTTP requests, enable server-side file caching and compression, check all links, implement print styles, and more.</p>
  </div>

  <h2 class=\"lines-heading\">Ongoing Support</h2>
  <div class=\"page__text\">
    <p>You will find updating your website a breeze using the CMS that has been built specifically to suit your needs. As your business and site develops you might want to make tweaks, updates and optimisations. For this I offer ongoing support.</p>
  </div>

  <h2 class=\"lines-heading\">Email Marketing</h2>
  <div class=\"page__text\">
    <p>I create emails that work across major email clients and can help you set up easy-to-use email marketing environments in <a href=\"https://www.campaignmonitor.com/\">Campaign Monitor</a> or <a href=\"http://mailchimp.com/\">MailChimp</a>.</p>
  </div>

  <h2 class=\"lines-heading\">Remote Collaboration</h2>
  <div class=\"page__text\">
    <p>I work from my home in Petersfield and often collaborate with other web professionals who specialise in copy writing, design, photography, social media strategy and more. This way your online presence can shine from all angles and fulfil your needs across the board.</p>
  </div>

  <aside class=\"callout\">
    <p>Want a site that is user-friendly, hand-coded, easy to update and successful?</p>
    <a class=\"btn\" href=\"/contact\">Let’s work together</a>
  </aside>
";
    }

    public function getTemplateName()
    {
        return "what-i-do";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  30 => 4,  25 => 2,);
    }
}
