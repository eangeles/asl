<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Ikaw Tube</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,900,700,300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/general_foundicons.css" />
    <link rel="stylesheet" href="/css/social_foundicons.css" />
    <link rel="stylesheet" href="/css/font-awesome.css" />
    <link rel="stylesheet" href="/css/normalize.css" />

    <link href="/css/video-js.css" rel="stylesheet">
    <script src="/js/video.js"></script>
    <script>
        videojs.options.flash.swf = "/swf/video-js.swf"
    </script>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<!--    <script type="text/javascript" src="/js/jquery-1.6.1.min.js"></script>-->

</head>
<body>
<div id="wrapper">
    <?php echo $error ;?>
    <div id="top">
        <div id="top_bar">
            <div id="logo">
                <img src="/./img/logo.png">
            </div>


                <?php

                if($this->session->userdata('is_logged_in')){
                    echo '<div id="welcome">';
                    echo '<p>Welcome,'.  $username .'</p>';
                    echo '</div>';
                }
                ?>

            <div id="socials">
                <a href="#"><i class="icon-facebook"></i></a>
                <a href="#"><i class="icon-google-plus"></i></a>
                <a href="#"><i class="icon-twitter"></i></a>
            </div>
        </div>

            <?php

            if($this->session->userdata('is_logged_in')){
                echo '<ul id="logged_nav" class="uppercase small-6">';
                echo '<li id="home"><a href="/" title="home" class="active"><i class="foundicongen-home"></i></a></li>';
                echo '<li id="BrowseSongs"><a href="/" data-reveal-id="popup_browse_song_list" title="Browse Songs" class="active">Browse Songs</a> </li>';
                echo '<li id="BrowseMusic"><a href="/" data-reveal-id="popup_browse_video_list" title="Browse Videos" class="active">Browse Videos</a> </li>';
                echo '<li id="nav_login"><a href="/user/logout">Logout</a></li>';
            }else{
                echo '<ul id="top_nav" class="uppercase small-5">';
                echo '<li id="home"><a href="/" title="home" class="active"><i class="foundicongen-home"></i></a></li>';
                echo '<li id="about"><a href="/" title="about" class="active">About</a> </li>';
                echo '<li id="contact"><a href="/" title="contact" class="active">Contact Us</a> </li>';
                echo '<li id="nav_login"><a href="#" data-reveal-id="popup_login">Login/Register</a></li>';
            }
            ?>

        </ul>
    </div>
