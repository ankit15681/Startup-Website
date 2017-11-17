<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Shaastra|Forum</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <?php include "includes/styles.html"; ?>
</head>
<body>
<section class="header" id="header" style="padding-bottom:13em;">
   <?php include "includes/navbar.html"; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <i class="fa fa-pencil logo-img" ></i>
          <div class="hero-text">
            <h1 >Feedbacks</h1>
            <h4>We love to hear suggestions from our customers and implementing them</h4>
            <p>in the process of automating the generation</p>
          </div>
          
        </div>
        <div class="col-md-6" style="padding-top:16em;">
          <div class="hero-text">
            <p class="header-para" style="float: middle;">What'sWhat's the point of making stuff when we can't get any suggestions, and more importantly, reviews and usage experiences. Hence please feel free to post, discuss about our device and our company, here in this forum.

Topics and questions to discuss about.

            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="article">
    <div class="container intro-txt" >
      <div class="row">
        <div class="col-md-12">
          <article>
          <h2>We would like to see your views on our articles.</h2>
         <p style="float: middle;">
          
          </p>
          </article>
        </div>

      </div>
      
    
      <div class="row" style="padding: 1em; float: middle;">
        <div id="disqus_thread"></div>
        <script>
          var disqus_config = function () {
          this.page.url = "https://salindia.in";  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = "forum"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

          (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://salindia-in.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

        </div>
        </div>
    </section>
    <?php include "includes/footer.html"; ?>

<!-- /container -->

<?php include "includes/scripts.html"; ?>
<script id="dsq-count-scr" src="http://salindia-in.disqus.com/count.js" async></script>
</body>
</html>
