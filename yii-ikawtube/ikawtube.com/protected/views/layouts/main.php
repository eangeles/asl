<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/general_foundicons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/social_foundicons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,900,700,300,200' rel='stylesheet' type='text/css'>


</head>

<body>



    <div id="wrapper">

        <div id="top">
            <div id="top_bar">
                <div id="logo">
                    <img src="./img/logo.png">
                </div>
                <div id="socials">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-twitter"></i></a>
                </div>
            </div>
            <ul id="top_nav" class="uppercase small-5">
                <li id="home"><a href="/" title="home" class="active"><i class="foundicongen-home"></i></a></li>
                <li id="about"><a href="/" title="about" class="active">About</a> </li>
                <li id="contact"><a href="/" title="contact" class="active">Contact Us</a> </li>
                <li id="nav_login"><a href="#" data-reveal-id="popup_login">Login/Register</a></li>
            </ul>
        </div>


    <!-- Links to site folder -->
	<?php echo $content; ?>

        <!-- Footer -->
        <div id="footer">
            <div id="footer_bar">
                <div id="footer_content">
                    <ul id="footer_nav" class="uppercase small-5">
                        <li id="homef"><a href="/" title="home" class="active"><i class="foundicongen-home"></i></a></li>
                        <li id="aboutf"><a href="/" title="about" class="active">About</a> </li>
                        <li id="contactf"><a href="/" title="contact" class="active">Contact Us</a> </li>
                        <li id="nav_loginf"><a href="#" data-reveal-id="popup_login">Login</a></li>
                    </ul>
                    <div id="footer_right">
                        <p>&copy; Erwin Angeles</p>
                    </div>
                </div>
            </div>
        </div>

</div><!-- page -->

    <script>
        document.write('<script src=' +
            ('__proto__' in {} ? '/js/vendor/zepto' : '/js/vendor/jquery') +
            '.js><\/script>')
    </script>

    <script src="/js/foundation.min.js"></script>
    <script src="/js/foundation/foundation.orbit.js"></script>
    <!--

    <script src="js/foundation/foundation.js"></script>

    <script src="js/foundation/foundation.alerts.js"></script>

    <script src="js/foundation/foundation.clearing.js"></script>

    <script src="js/foundation/foundation.cookie.js"></script>

    <script src="js/foundation/foundation.dropdown.js"></script>

    <script src="js/foundation/foundation.forms.js"></script>

    <script src="js/foundation/foundation.joyride.js"></script>

    <script src="js/foundation/foundation.magellan.js"></script>

    <script src="js/foundation/foundation.orbit.js"></script>

    <script src="js/foundation/foundation.reveal.js"></script>

    <script src="js/foundation/foundation.section.js"></script>

    <script src="js/foundation/foundation.tooltips.js"></script>

    <script src="js/foundation/foundation.topbar.js"></script>

    <script src="js/foundation/foundation.interchange.js"></script>

    <script src="js/foundation/foundation.placeholder.js"></script>

    <script src="js/foundation/foundation.abide.js"></script>

    -->

    <script>
        $(document).foundation();
    </script>

</body>
</html>
