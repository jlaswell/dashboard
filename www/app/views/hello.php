<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Dashboard</title>
    <script src="js/dist/dashboard.min.js"></script>
    <!-- <link href="packages/dashboard/stylesheets/_normalize.css" rel="stylesheet" type="text/css" /> -->
    <link href="packages/dashboard/stylesheets/app.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
    <link href="packages/dashboard/stylesheets/author.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
    <script src="packages/dashboard/javascripts/vendor/custom.modernizr.js"></script>
<body>
    <header>
        <nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><a href="#">Dashboard</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="has-form">
        <form>
          <div class="row collapse">
            <div class="small-8 columns">
              <input type="text">
            </div>
            <div class="small-4 columns">
              <a href="#" class="alert button">Search</a>
            </div>
          </div>
        </form>
      </li>
      <li class="divider hide-for-small"></li>
      <li class="has-dropdown"><a href="#">Current Page</a>

        <ul class="dropdown">
          <li><label>User Specific Items</label></li>
          <li class="has-dropdown"><a href="#" class="">Dropdown Level 1a</a>

            <ul class="dropdown">
              <li><a href="#">Dropdown Level 2a</a></li>
              <li><a href="#">Dropdown Level 2b</a></li>
              <li class="has-dropdown"><a href="#">Dropdown Level 2c</a>

                <ul class="dropdown">
                  <li><a href="#">Dropdown Level 3a</a></li>
                  <li><a href="#">Dropdown Level 3b</a></li>
                  <li><a href="#">Dropdown Level 3c</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown Level 2d</a></li>
              <li><a href="#">Dropdown Level 2e</a></li>
              <li><a href="#">Dropdown Level 2f</a></li>
            </ul>
          </li>
          <li><a href="#">Dropdown Level 1b</a></li>
          <li><a href="#">Dropdown Level 1c</a></li>
          <li><a href="#">Logout</a></li>
          <li class="divider"></li>
          <li><label>Dashboard Navigation Items</label></li>
          <li><a href="#">Dropdown Level 1d</a></li>
          <li><a href="#">Dropdown Level 1e</a></li>
          <li><a href="#">Dropdown Level 1f</a></li>
        </ul>
      </li>
    </ul>
  </section>
</nav>
    </header>

    <div class="row">
        <div class="large-12 columns">
            <h2>Welcome to Foundation</h2>
            <p>This is version 4.3.2.</p>
            <hr />
        </div>
    </div>

    <div class="row">
        <div class="large-8 columns">
            <h3>The Grid</h3>

            <!-- Grid Example -->
            <div class="row">
                <div class="large-12 columns">
                    <div class="panel">
                        <p>This is a twelve column section in a row. Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <div class="panel">
                        <p>Six columns</p>
                    </div>
                </div>
                <div class="large-6 columns">
                    <div class="panel">
                        <p>Six columns</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="large-4 columns">
                    <div class="panel">
                        <p>Four columns</p>
                    </div>
                </div>
                <div class="large-4 columns">
                    <div class="panel">
                        <p>Four columns</p>
                    </div>
                </div>
                <div class="large-4 columns">
                    <div class="panel">
                        <p>Four columns</p>
                    </div>
                </div>
            </div>

            <h3>Buttons</h3>

      <div class="row">
        <div class="large-6 columns">
          <p><a href="#" class="small button">Small Button</a></p>
          <p><a href="#" class="button">Medium Button</a></p>
          <p><a href="#" class="large button">Large Button</a></p>
        </div>
        <div class="large-6 columns">
          <p><a href="#" class="small alert button">Small Alert Button</a></p>
          <p><a href="#" class="success button">Medium Success Button</a></p>
          <p><a href="#" class="large secondary button">Large Secondary Button</a></p>
        </div>
      </div>
        </div>

        <div class="large-4 columns">
            <h4>Getting Started</h4>
            <p>We're stoked you want to try Foundation! To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>

            <h4>Other Resources</h4>
            <p>Once you've exhausted the fun in this document, you should check out:</p>
            <ul class="disc">
                <li><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</li>
                <li><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</li>
                <li><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</li>
            </ul>
        </div>
    </div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'packages/dashboard/javascripts/vendor/zepto' : 'packages/dashboard/javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="packages/dashboard/javascripts/foundation/foundation.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.abide.js"></script>    
  <script src="packages/dashboard/javascripts/foundation/foundation.alerts.js"></script>    
  <script src="packages/dashboard/javascripts/foundation/foundation.clearing.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.cookie.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.dropdown.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.forms.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.interchange.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.joyride.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.magellan.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.orbit.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.placeholder.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.reveal.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.section.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.tooltips.js"></script>
  <script src="packages/dashboard/javascripts/foundation/foundation.topbar.js"></script>
    
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
