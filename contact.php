<!DOCTYPE html>
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
            <h1>Contact Me</h1>
            <article>
                <section>
                    Feel free to pop me a message at any time!
                    <p class="mobi_contact">
                      <span class="heavy">My Email: </span><a href="mailto:rob@itsrobellis.co.uk">rob@itsrobellis.co.uk</a><br/>
                      <span class="heavy">My CV: </span><a style="color: blue;" href="cdn/cv.docx">Download CV</a><br/>
                    </p>
                    <table width="100%">
                      <tr>
                        <td id="contact_info">
                          <span class="heavy">My Email: </span><a href="mailto:rob@itsrobellis.co.uk">rob@itsrobellis.co.uk</a><br/>
                          <span class="heavy">My CV: </span><a style="color: blue;" href="cdn/cv.docx">Download CV</a><br/>

                        </td>
                        <td width="70%">
                          <form id="contact" action="" method="post">
                          <fieldset>
                              <input name="message_name" placeholder="Your Name" type="text" tabindex="1" required autofocus>
                          </fieldset>
                          <fieldset>
                              <input name="message_email" placeholder="Your Email" type="email" tabindex="2" required autofocus>
                          </fieldset>
                          <fieldset>
                              <textarea name="message_body" placeholder="Your Comments" type="comments" required autofocus></textarea>
                          </fieldset>
                          <fieldset>
                              <button name="send" type="submit" class="submit" value="">Send</button>
                          </fieldset>
                      </form>
                        </td>
                      </tr>
                    </table>
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
