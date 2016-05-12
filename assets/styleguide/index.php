<!doctype html>
<!--[if IE 7 ]>     <html class="no-js old-ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>     <html class="no-js old-ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>     <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="UTF-8" />

  <title>Style Guide for Katrin Kerber</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="robots" content="noindex, nofollow">

  <link rel="stylesheet" href="/assets/css/styles.min.css">

  <script src="/assets/libs/modernizr.js"></script>
</head>

<body class="page--guide">

  <header class="page--guide__header" role="banner">
    <h1>Katrin Kerber</h1>
    <h2>Style Guide</h2>
    <nav>
      <ul>
        <!-- section links populated via JS -->
      </ul>
    </nav>
  </header>

  <main role="main">

    <div data-section data-section-title="Coding guidelines">
      <?php
        include 'includes/notes/intro.html';
        include 'includes/notes/html.html';
        include 'includes/notes/css.html';
        include 'includes/notes/js.html';
      ?>
    </div>

    <div data-section data-section-title="Tools">
      <?php
        include 'includes/tools/colours.html';
        include 'includes/tools/helpers.html';
        include 'includes/tools/mixins.html';
      ?>
    </div>

    <div data-section data-section-title="Base">
      <?php
        include 'includes/base/typography.html';
      ?>
    </div>

    <div data-section data-section-title="Modules">
      <?php
        include 'includes/modules/page-intro.html';
        include 'includes/modules/page-heading.html';
        include 'includes/modules/media.html';
        include 'includes/modules/code.html';
        include 'includes/modules/icon-panels.html';
        include 'includes/modules/projects.html';
        include 'includes/modules/notes.html';
        include 'includes/modules/prev-next.html';
      ?>
    </div>
  </main>


  <!-- JavaScript -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="/assets/libs/prism/prism.js"></script>
  <!-- Styleguide specific -->
  <script src="/assets/js/styleguide.min.js"></script>
</body>
</html>
