<html>
    <head>
        <title>Rob Ellis | Home</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"></meta>
        <meta http-equiv="encoding" content="utf-8"></meta>
        <meta name = "viewport" content = "initial-scale=1"></meta>
        <meta name="description" content="Rob Ellis | Coder, Designer and Developer"></meta>
        <meta name="keywords" content="Rob Ellis, Portfolio, Web, Coding, Programming, PHP, JavaScript, HTML, CSS, Web Design, Blog, Games"></meta>
        <meta name="author" content="Rob Ellis"></meta>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <!-- Style Stuff -->
        <link type="text/css" rel="stylesheet" href="css/master.css"></link>
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300"></link>
        <link href='http://fonts.googleapis.com/css?family=Martel+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'></link>
    </head>
    <body>
        <header>
            <div id="header_wrapper">
                <div class="header_module" id="header_nameplate">
                    <img id="header_logo" src="img/header-logo.png" alt="Header Logo"/>
                </div>
                <div class="header_module" id="header_mobi">
                  <img src="img/mobi.png">
                </div>
                <div class="header_module" id="header_navigation">
                    <div class="navigation">
                        <a class="nav_anchor" href="index.html">About Me</a>
                    </div>
                    <div class="navigation">
                        <a class="nav_anchor" href="blog.php">Blog</a>
                    </div>
                    <div class="navigation">
                        <a class="nav_anchor" href="work.html">My Work</a>
                    </div>
                    <div class="navigation">
                        <a class="nav_anchor" href="contact.php">Contact Me</a>
                    </div>
                </div>
                <noscript>
                    <div id="noscript">
                    Hey! You'd benefit more from this page with script enabled!
                    </div>
                </noscript>
            </div>
        </header>
        <div class="mobile_menu">
          <ul>
            <a href="index.html"><li>About Me</li></a>
            <a href="work.html"><li>My Work</li></a>
            <a href="blog.php"><li>Blog</li></a>
            <a href="contact.php"><li>Contact</li></a>
          </ul>
        </div>
        <div class="body_wrapper" id="about">
            <h1>My Blog</h1>
            <article class="blog_article">
                <h2>How I got Google Analytics</h2>
                <section>
                    Part of creating a successful portfolio website is knowing how many people visit your webiste. For this, I used Google Analytics to record visits.
                </section>
                <video width="100%" controls>
                  <source src="video/tut_google.mp4" type="video/mp4">
                  Unfortunately, your browser can't play this video!
                </video>
            </article>
            <article class="blog_article">
                <h2>Why My Favourite Video Game Genre Is What It Is</h2>
                <section>
                    When it comes to video games, there are many genres, many different playstyles and audiences. Some video games are laid back and designed to be easy and straightforward, while others are consistently challenging and require full concentration. Akin to this, my favourite genre of video game is strategy. Being in an overlooking position and commanding soldiers, ships and other things around, for me, is a treat. Game such as the Total War and the Sins of a Solar Empire series truly catch my eye, and give me exactly what I like to see in a video game.0
                </section>
            </article>
        </div>
        <!--Twitter Integration-->
        <a target="_blank" href="https://twitter.com/ItsRobboEllis"><div id="twitter_button"><img src="img/twit.png"/></div></a>
        <div id="twitter_wrapper">
          <a class="twitter-timeline"  href="https://twitter.com/ItsRobboEllis" data-widget-id="701786566818189312">Tweets by @ItsRobboEllis</a>
          <script>
            !function(d,s,id){
              var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
              if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);}
              }(document,"script","twitter-wjs");
          </script>
        </div>
        <!--Google Analytics-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-74255556-1', 'auto');
          ga('send', 'pageview');
        </script>
        <!--Importing jQuery for mobile menu-->
        <script src="js/jQuery.js"></script>
        <script>
          $(document).ready(function(){
            $("#header_mobi").click(function(){
              $(".mobile_menu").slideToggle();
            });
            $(".mobile_menu").click(function(){
              $(".mobile_menu").slideUp();
            });
          });
        </script>
    </body>
</html>
