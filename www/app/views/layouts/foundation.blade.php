<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Dashboard - @yield('title')</title>
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
      <li class="has-dropdown">
        <a href="#">
          {{-- Current page title --}}
          @yield('title')
        </a>

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

    @yield('content')

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
