<!DOCTYPE html>
<html>
<head>
    <link href="{{asset('assets/rc/x_rotating_card_v1.4/css/bootstrap.css')}}" rel='stylesheet' />
    <link href="{{asset('assets/rc/x_rotating_card_v1.4/css/rotating-card.css')}}" rel='stylesheet' />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link href="{{asset('http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')}}" rel="stylesheet">

    <script src="{{asset('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1 class="title">
            This is our awesome team
            <br>
            <small>Present your team in an interesting way</small>
        </h1>
        <div class="col-sm-10 col-sm-offset-1">
         <div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{asset('assets/rc/x_rotating_card_v1.4/images/rotating_card_thumb2.png')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{asset('assets/rc/x_rotating_card_v1.4/images/rotating_card_profile3.png')}}"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">John Marvel</h3>
                                <p class="profession">CEO</p>
                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i> Auto Rotation
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->
        <div class="col-md-4 col-sm-6">
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{asset('assets/rc/x_rotating_card_v1.4/images/rotating_card_thumb.png')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{asset('assets/rc/x_rotating_card_v1.4/images/rotating_card_profile2.png')}}"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Andrew Mike</h3>
                                <p class="profession">Web Developer</p>
                                <p class="text-center">"Lamborghini Mercy <br>Your chick she so thirsty <br>I'm in that two seat Lambo"</p>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" onclick="rotateCard(this)">
                                    <i class="fa fa-mail-forward"></i> Manual Rotation
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Back
                            </button>
                            <div class="social-links text-center">
                                <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->
        <div class="col-md-4 col-sm-6">
            <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{asset('assets/rc/x_rotating_card_v1.4/images/rotating_card_thumb3.png')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{asset('assets/rc/x_rotating_card_v1.4/images/rotating_card_profile.png')}}"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Inna Corman</h3>
                                <p class="profession">Product Manager</p>

                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    <i class="fa fa-mail-forward"></i> Auto Rotation
                                </div>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col-sm-3 -->
        </div> <!-- end col-sm-10 -->
    </div> <!-- end row -->
    <div class="space-200"></div>
</div>
<div class="white-board">
   <div class="container">
        <br>
        <h4>
            If you want to use the rotating presentation cards you have to add to your project these files:
        </h4>
        <pre class="prettyprint">
        <br>
              &lt;link href=&quot;css/bootstrap.css&quot; rel=&quot;stylesheet&quot; /&gt;
              &lt;link href=&quot;css/rotating-card.css&quot; rel=&quot;stylesheet&quot; /&gt;
              &lt;link href=&quot;http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css&quot; rel=&quot;stylesheet&quot; /&gt;
        </pre>
        <br>
        <h4>
            Here is the html code for one card:
        </h4>
        <pre class="prettyprint">
        <br>
        &lt;div class=&quot;card-container&quot;&gt;
         &lt;div class=&quot;card&quot;&gt;
             &lt;div class=&quot;front&quot;&gt;
                 &lt;div class=&quot;cover&quot;&gt;
                     &lt;img src=&quot;images/rotating_card_thumb3.png&quot;/&gt;
                 &lt;/div&gt;
                 &lt;div class=&quot;user&quot;&gt;
                     &lt;img class=&quot;img-circle&quot; src=&quot;images/rotating_card_profile.png&quot;/&gt;
                 &lt;/div&gt;
                 &lt;div class=&quot;content&quot;&gt;
                     &lt;div class=&quot;main&quot;&gt;
                         &lt;h3 class=&quot;name&quot;&gt;Inna Corman&lt;/h3&gt;
                         &lt;p class=&quot;profession&quot;&gt;Product Manager&lt;/p&gt;

                         &lt;p class=&quot;text-center&quot;&gt;&quot;I&#39;m the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere&quot;&lt;/p&gt;
                     &lt;/div&gt;
                     &lt;div class=&quot;footer&quot;&gt;
                         &lt;div class=&quot;rating&quot;&gt;
                             &lt;i class=&quot;fa fa-mail-forward&quot;&gt;&lt;/i&gt; Auto Rotation
                         &lt;/div&gt;
                     &lt;/div&gt;
                 &lt;/div&gt;
             &lt;/div&gt; &lt;!-- end front panel --&gt;
             &lt;div class=&quot;back&quot;&gt;
                 &lt;div class=&quot;header&quot;&gt;
                     &lt;h5 class=&quot;motto&quot;&gt;&quot;To be or not to be, this is my awesome motto!&quot;&lt;/h5&gt;
                 &lt;/div&gt;
                 &lt;div class=&quot;content&quot;&gt;
                     &lt;div class=&quot;main&quot;&gt;
                         &lt;h4 class=&quot;text-center&quot;&gt;Job Description&lt;/h4&gt;
                         &lt;p class=&quot;text-center&quot;&gt;Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...&lt;/p&gt;

                         &lt;div class=&quot;stats-container&quot;&gt;
                             &lt;div class=&quot;stats&quot;&gt;
                                 &lt;h4&gt;235&lt;/h4&gt;
                                 &lt;p&gt;
                                     Followers
                                 &lt;/p&gt;
                             &lt;/div&gt;
                             &lt;div class=&quot;stats&quot;&gt;
                                 &lt;h4&gt;114&lt;/h4&gt;
                                 &lt;p&gt;
                                     Following
                                 &lt;/p&gt;
                             &lt;/div&gt;
                             &lt;div class=&quot;stats&quot;&gt;
                                 &lt;h4&gt;35&lt;/h4&gt;
                                 &lt;p&gt;
                                     Projects
                                 &lt;/p&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                     &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;div class=&quot;footer&quot;&gt;
                     &lt;div class=&quot;social-links text-center&quot;&gt;
                         &lt;a href=&quot;http://creative-tim.com&quot; class=&quot;facebook&quot;&gt;&lt;i class=&quot;fa fa-facebook fa-fw&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                         &lt;a href=&quot;http://creative-tim.com&quot; class=&quot;google&quot;&gt;&lt;i class=&quot;fa fa-google-plus fa-fw&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                         &lt;a href=&quot;http://creative-tim.com&quot; class=&quot;twitter&quot;&gt;&lt;i class=&quot;fa fa-twitter fa-fw&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                     &lt;/div&gt;
                 &lt;/div&gt;
             &lt;/div&gt; &lt;!-- end back panel --&gt;
         &lt;/div&gt; &lt;!-- end card --&gt;
     &lt;/div&gt; &lt;!-- end card-container --&gt;

        </pre>
        <div class="space-50"></div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <a href="http://creative-tim.com/product/rotating-presentation-card" class="btn btn-info btn-lg btn-block">Download</a>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="space-50"></div>
    <p class="text-center">Copyright &copy; 2015 <a href="http://creative-tim.com">Creative Tim</a>, made with <i class="fa fa-heart ct-heart"></i> for a better web.</p>
   </div>
</div>


<script src="{{asset('assets/rc/x_rotating_card_v1.4/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/rc/x_rotating_card_v1.4/js/bootstrap.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>

<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46172202-4', 'auto');
  ga('send', 'pageview');

</script> -->

</body>
</html>
