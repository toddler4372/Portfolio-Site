<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="keywords" content="AngularJS, javascript frameworks, Google Material Design, flat design, javascript inheritance, prototypal inheritance, prototype chaining javascript, javascript prototype property, prototypes javascript, function prototype javascript, prototypes in javascript, javascript create prototype, what is javascript prototype, prototype function javascript, javascript set prototype, create prototype javascript, javascript using prototype, what is prototype javascript, use of prototypes in javascript, how to use prototypes in javascript">
  <meta name="description" content="Welcome to my Front End Development Portfolio Site Blog. Here I like to discuss Material Design and Flat Design, Javascript, AngularJS, jQuery, and other web technologies.">
  <meta name="author" content="Todd Williams">
  <title>Todd Williams - Front End Developer - Material Design Portfolio Blog</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <script type="text/javascript" src="js/latest-tweet.js"></script>
  <?php
  require('blog/wp-blog-header.php');
  ?>
</head>
<body>
  <nav class="default-primary-color z-depth-5" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="/" class="brand-logo"><img src="images/logo.svg" class="logo" alt="Logo" /></a>
        <ul class="right">
          <li><a href="/portfolio.html">Portfolio</a></li>
          <li><a href="/blog.php">Blog</a></li>
          <li><a href="/about.html">About</a></li>
          <li><a href="/contact.html">Contact</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li class="title"><div class="sidenav-header"><span class="helper"></span><img src="images/logo.svg" class="sidebar-logo" alt="Sidebar Logo" />Todd Williams</div></li>
          <li class="waves-effect waves-dark"><a href="/">Home</a></li>
          <li class="waves-effect waves-dark"><a href="/portfolio.html">Portfolio</a></li>
          <li class="waves-effect waves-dark"><a href="/blog.php">Blog</a></li>
          <li class="waves-effect waves-dark"><a href="/about.html">About</a></li>
          <li class="waves-effect waves-dark"><a href="/contact.html">Contact</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
      </div>
  </nav>
  <div id="sub-header" class="dark-primary-color z-depth-1">
    <img src="images/logo.svg" class="logo-large" alt="logo large" />
      <h1 class="header center white-text">Blog</h1>
      <div class="row center">
        <h5 class="header col s12 white-text">Thoughts on Dev and Design</h5>
      </div>
    </div>


  <div class="container">
    <div class="section" style="padding-top: 0;">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <div class="center">
          <div class="icon-block">
            <div class="blog-post">
              <?php while (have_posts()): the_post(); ?>
              <div class="blog-text">
              <h4><?php the_title(); ?></h4>
              <div class="dateIcon">
              <p><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></p> 
              </div>
              <?php the_content(); ?>
              <a href="<?php the_permalink(); ?>">Read More...</a>
              </div>
              <br />
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <footer class="page-footer accent-color">
    <div class="container">
      <div class="row">
        <div class="col l4 s12">
          <div class="social-icons">
          <h5 class="white-text center">Let's Connect!</h5>
          <p class="grey-text text-lighten-4 center">I love connecting with other developers and designers. Follow me on Twitter, friend request me on Facebook, or contact me on LinkedIn. I would love to hear from you!</p>
          <div class="center">
            <a href="https://twitter.com/toddlerwilliams" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="http://www.linkedin.com/in/toddcwilliams" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/toddler4372" target="_blank"><i class="fa fa-github"></i></a>
            <a href="https://www.facebook.com/profile.php?id=1467081438" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="mailto:toddlerwilliams@gmail.com" target="_top"><i class="fa fa-envelope"></i></a>
          </div>
          </div>
        </div>
        <div class="col l4 s12">
          <div class="quick-bio">
          <h5 class="white-text center">Quick Bio</h5>
          <p class="grey-text text-lighten-4 center">I am a Front End Developer living in Redlands, CA.  I love creating clean, usable, responsive websites.  My passions are family, sports, guitar, and new web technology.</p>
        <div class="center">
          <img src="images/bio-photo-small.png" class="bio-photo-small" alt="Bio Photo" />
        </div>
        </div>
      </div>
        <div class="col l4 s12">
          <div class="quick-bio">
          <h5 class="white-text center">Latest Tweet</h5>
          <div id="example1"></div>
        <div class="center">
          <i class="fa fa-twitter"></i>
        </div>
        </div>
      </div>
    </div>
  </div>
    <div class="footer-copyright">
      <div class="container center">
      ©2015 Todd Williams. All Rights Reserved.
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script type="text/javascript" src="js/twitterFetcher_min.js"></script>
  <script type="text/javascript" src="js/exampleUsage.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
