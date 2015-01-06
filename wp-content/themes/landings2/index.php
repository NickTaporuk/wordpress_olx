<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Taimi</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="container">
        <strong class="logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="image" /></a></strong>
        <div id="content" data-tabs="tabs">
            <div class="step-holder">
                <div id="step-01" class="step active">
                    <h2>Who are you interested in meeting?</h2>
                    <div class="info-box">
                        <span class="cover pat-6"></span>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/photo-01.jpg" alt="image" />
                        </div>
                        <a href="#step-02-woman" class="btn btn-red" data-toggle="tab">Woman</a>
                    </div>
                    <span class="divider">or</span>
                    <div class="info-box">
                        <span class="cover pat-17"></span>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/photo-02.jpg" alt="image" />
                        </div>
                        <a href="#step-02-men" class="btn btn-blue" data-toggle="tab">Man</a>
                    </div>
                </div><!-- / step-01 -->
                <div id="step-02-woman" class="step">
                    <h2>What kind of hair color you prefer?</h2>
                    <div class="info-box">
                        <span class="cover pat-3"></span>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/photo-03.jpg" alt="image" />
                        </div>
                        <a href="#step-03" class="btn btn-red" data-toggle="tab">Light</a>
                    </div>
                    <span class="divider">or</span>
                    <div class="info-box">
                        <span class="cover pat-5"></span>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/photo-04.jpg" alt="image" />
                        </div>
                        <a href="#step-03" class="btn btn-blue" data-toggle="tab">Dark</a>
                    </div>
                </div><!-- / step-02 -->
                <div id="step-02-men" class="step">
                    <h2>What kind of hair color you prefer?</h2>
                    <div class="info-box">
                        <span class="cover pat-3"></span>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/photo-02.jpg" alt="image" />
                        </div>
                        <a href="#step-03" class="btn btn-red" data-toggle="tab">Light</a>
                    </div>
                    <span class="divider">or</span>
                    <div class="info-box">
                        <span class="cover pat-5"></span>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/photo-02.jpg" alt="image" />
                        </div>
                        <a href="#step-03" class="btn btn-blue" data-toggle="tab">Dark</a>
                    </div>
                </div><!-- / step-02 -->
                <div id="step-03" class="step">
                    <h2>What location you prefer?</h2>
                    <div class="info-box">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="image" />
                        </div>
                        <a href="#step-04" class="btn btn-red" data-toggle="tab">Near me</a>
                    </div>
                    <span class="divider">or</span>
                    <div class="info-box">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="image" />
                        </div>
                        <a href="#step-04" class="btn btn-blue" data-toggle="tab">Doesn’t metter</a>
                    </div>
                </div><!-- / step-03 -->
                <div id="step-04" class="step">
                    <h2>To see results complete the form</h2>
                    <div class="form">
                        <form action="#">
                            <input class="form-control" type="email" placeholder="Email">
                            <input class="form-control" type="password" placeholder="Password">
                            <button class="btn btn-green" type="submit">See results</button>
                            <div class="sep">
                                <span>or</span>
                            </div>
                            <a href="#" class="btn facebook">Login with facebook</a>
                            <p class="note">Creating an account means you’re okay with Taimi’s <strong>Terms of Service</strong> and <strong>Privacy Policy</strong>.</p>
                        </form>
                    </div>
                </div><!-- / step-04 -->
            </div><!-- / step-holder -->
        </div><!-- / content -->
        <h1 class="slogan">
            <span>meet <strong>&nbsp;new people.</strong></span>
            <span>play <strong>&nbsp;the game.</strong></span>
            <span>it's <strong>&nbsp;easy&amp;fun.</strong></span>
        </h1>
    </div><!-- / container -->
    <div id="footer">
        <p>2014 &copy; Taimi. All rights reserved</p>
    </div>
</div><!-- / wrapper -->
</body>
</html>