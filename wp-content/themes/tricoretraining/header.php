<?php $q_config['language'] = wpm_get_language(); ?>
<?php $v = "1.3"; ?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head profile="https://gmpg.org/xfn/11">
<title><?php wp_title('', true, 'right'); ?> - TriCoreTraining</title>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P47J8C3');</script>
<!-- End Google Tag Manager -->

    
  <link href="/trainer/favicon.ico" type="image/x-icon" rel="icon" /><link href="/trainer/favicon.ico" type="image/x-icon" rel="shortcut icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8"><!--<?php bloginfo('charset'); ?>-->

  <meta name="description" content="<?php the_title(); ?>" />
  <meta name="keywords" content="TriCoreTraining - Triathlon plans, sport plans, training plans, run, bike, running, biking, swim, Ironman, Half-Ironman" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Klaus-M. Schremser">

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
  <script type="text/javascript" src="/trainer/assets/js/jquery-1.9.1.js?v=<?php echo $v; ?>"></script>

  <!--script type="text/javascript" src="/trainer/js/jquery-ui-1.8.5.custom.min.js?v=<?php echo $v; ?>"></script-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js?v=<?php echo $v; ?>"></script>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>

  <!--script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.js?v=<?php echo $v; ?>"></script-->
  <script type="text/javascript" src="/trainer/assets/js/bootstrap.min.js?v=<?php echo $v; ?>"></script>

  <!-- PAGE CUSTOM SCROLLER -->
  <script type="text/javascript" src="/trainer/assets/js/jquery.nicescroll.min.js?v=<?php echo $v; ?>"></script>

  <script type="text/javascript" src="/trainer/assets/js/jquery.parallax-1.1.3.js?v=<?php echo $v; ?>"></script>
  <script type="text/javascript" src="/trainer/assets/js/jquery.localscroll-1.2.7-min.js?v=<?php echo $v; ?>"></script>
  <script type="text/javascript" src="/trainer/assets/js/jquery.scrollTo-1.4.2-min.js?v=<?php echo $v; ?>"></script>

<!--
  <script type="text/javascript" src="/trainer/js/workoutstats.js?v=<?php echo $v; ?>"></script>
  <script type="text/javascript" src="/trainer/js/timeparser.js?v=<?php echo $v; ?>"></script>        
  <script type="text/javascript" src="/trainer/js/jquery.tipTip.min.js?v=<?php echo $v; ?>"></script>
-->
  <script type="text/javascript" src="/trainer/js/jquery.magnific-popup.js?v=<?php echo $v; ?>"></script>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="https://html5shim.googlecode.com/svn/trunk/html5.js?v=<?php echo $v; ?>" type="text/javascript"></script>

  <![endif]-->

  <!-- Latest compiled and minified CSS BS 3.0. RC1-->
  <link rel="stylesheet" type="text/css" href="/trainer/assets/css/theme.css?v=<?php echo $v; ?>" />
  <link rel="stylesheet" type="text/css" href="/trainer/css/theme/jquery-ui-1.8.5.custom.css?v=<?php echo $v; ?>" />
  <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css?v=<?php echo $v; ?>" /> 
  <link rel="stylesheet" type="text/css" href="/trainer/css/tipTip.css?v=<?php echo $v; ?>" />
  <link rel="stylesheet" type="text/css" href="/trainer/css/magnific-popup.css?v=<?php echo $v; ?>" />

  <!--[if lt IE 7]>
  <link href="/trainer/assets/css/font-awesome-ie7.min.css?v=<?php echo $v; ?>" rel="stylesheet">
  <![endif]-->

  <style type="text/css">

    body {
        padding-top: 70px;
        padding-bottom: 0px;
        background-color: rgba(0,0,0, 0.1);
    }

  .wrapper {
    /*max-width:1210px;*/
    display:block;
    margin-right:auto;
    margin-left:auto; 
  }
  
  .sub {
    padding:30px 0px 30px;
  }
  
  h1 {
    font-size: 32.5px;
  }
    
  .thumbnail {
    margin-bottom:30px;
  }
  
  .thumbnail img {
    min-width:100%;
  }

  footer {
    padding-top:40px;
    margin-top:40px;
    border-top:1px solid #dedede;
    background:rgba(0,0,0, 0.7);
    color:#fff;
    padding-bottom:30px;
  }

  .related-projects {
    padding-top:20px;
    margin-top:20px;    
  }

  .responsiveimage {
    max-width: 600px;
  }

  .navbar-small {
    font-size: 13px;
    padding: 0px 0px;
  } 

  .form-controll-small {
    font-size: 13px;
    height: 100%;
  }

  .btn-small {
    font-size: 13px;
  }

  .navbar-brand-small { 
    padding-top: 0px;
    padding-bottom: 0px;
  }

  .item {
    display: block;
      margin-left: auto;
      margin-right: auto    
  }

  .date {
    width:50%;
  }

  .date .form-control {
    display: inline;
    width: auto;
  }

  .white-popup-block {
    background: #FFF;
    padding: 20px 30px;
    text-align: left;
    max-width: 650px;
    margin: 40px auto;
    position: relative;
  } 

  h2 {
    font-size: 22px;
  }
  @media (min-width: 992px) and (max-width: 1200px) {
    .navbar, .wrapper {
      max-width: 1000px;
      margin-right:auto;
      margin-left:auto;
    }
  }
  
  @media(min-width: 768px) and (max-width: 992px) {
    .navbar, .wrapper {
      max-width: 760px;
      margin-right:auto;
      margin-left:auto;
    }
    .responsiveimage {
      max-width: 450px;
    } 
    .form-control, .alert, textarea {
      width: 90%;
    } 
  }
  
  @media (max-width: 992px) {
    .navbar .btn-navbar {
      margin-top:20px;
    } 
    .responsiveimage {
      max-width: 450px;
    }   
    /** TODO **/
    .workouts .sport {
      width: 10%;
    }
    .workouts .type {
      width: 40%;
    }
    .workouts .duration {
      width: 20%;
    }
    .workouts .trimp {
      width: 20%;
    }
    .form-control, .alert, textarea {
      width: 90%;
    } 

  }
  
  @media (max-width: 767px) {
    .container {
      /**
      padding-right:20px;
      padding-left:20px;
      **/
    }
    body {
      padding-top:0px;
    }
    .responsiveimage {
      max-width: 450px;
    }
    .form-control, .alert, textarea {
      width: 90%;
    } 

  } 

  @media (max-width: 530px) {
    .responsiveimage {
      max-width: 300px;
    }
    .form-control, .alert, textarea {
      width: 90%;
    } 
    h1 {
      margin-top: 40px;
    }
  }
  </style>

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( empty($withcomments) && !is_single() ) {
?>
  #page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
  #page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

.widgettitle {
margin-top:15px;
font-size: 20px;
}
/**
.widget li {
list-style-type: square;
list-style: square;
margin-left: 50px;
margin-bottom: 10px;
}
**/
</style>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<script type="JavaScript">
$(document).ready(function() {
    $(document).scrollTop( $(".content").offset().top );  
};
</script>
  
    <!--link rel="alternate" type="application/rss+xml" title="TriCoreTraining RSS" href="http://feeds.feedburner.com/tricoretraining/<?php echo strtoupper( $q_config['language'] ); ?>" /-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P47J8C3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- MAIN WRAPPER class="wrapper" max-width="1110px"-->
<div class="wrapper">

<header>  

  <!-- PAGE-HEADER--> 
  <!-- NAVBAR-->
  <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only"><?php _e('Toggle navigation'); ?></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand navbar-brand-small" href="https://tricoretraining.com/">
    <img width="120px" src="/trainer/img/logo_tricoretraining_233.png" alt="<?php bloginfo('name'); ?>">
    </a>
      </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">

<?php if ( !isset( $_COOKIE['CakeCookie']['tct_auth'] ) && !isset( $_COOKIE['CakeCookie']['tct_auth_blog'] ) ) { ?>

                <ul class="nav navbar-nav">

                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TriCoreTraining?<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="/trainer/#howitworks"<?php _e('What is TriCoreTraining?'); ?></a></li>
                          <li><a href="/trainer/#features"><?php _e('Features'); ?></a></li>
                          <li><a href="/trainer/#references"><?php _e('References'); ?></a></li>
                          <li><a href="/trainer/#newsletter">&raquo; <?php _e('Get Training Hints'); ?></a></li>                          
                          <li><a href="/trainer/#pricing"><?php _e('Pricing'); ?></a></li>
                          <li><a href="/blog/tricoretraining-the-interactive-online-training-coach-for-triathlon-running-biking/"><?php _e('More about TriCoreTraining'); ?></a></li>
                        </ul>
                  </li>
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('How to start'); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="/trainer/users/register"><?php _e('Get Started'); ?></a></li>
                          <li><a href="/trainer/users/login"><?php _e('Sign in'); ?></a></li>
                        </ul>
                  </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('FAQ'); ?> &amp; <?php _e('Blog'); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="/blog/<?php echo $q_config['language']; ?>/"><?php _e('Read our blog'); ?></a></li>
                          <li><a href="/blog/<?php echo $q_config['language']; ?>/category/news/"><?php _e('News'); ?></a></li>
                          <li><a href="/blog/<?php echo $q_config['language']; ?>/category/faq/"><?php _e('FAQs'); ?></a></li>
                        </ul>
                  </li>
                </ul>

    <form class="navbar-form navbar-left navbar-small" role="search" method="get" id="searchform" action="/blog/<?php echo $q_config['language']; ?>/">
      <div class="form-group">
      <input name="s" id="s" type="text" class="form-control form-controll-small" placeholder="<?php _e('Search'); ?>">
      </div>
      <input id="searchsubmit" value="<?php _e('Search'); ?>" type="submit" class="btn btn-primary">
    </form>   

<form action="#" id="UserLoginForm" method="post" accept-charset="utf-8" class="navbar-form navbar-right navbar-small">
  &nbsp;&nbsp; <?php _e('Change to'); ?>:
    <?php if ( $q_config['language'] == 'en' ) { ?>
    <a href="/blog/de/" class="btn btn-success btn-small">Deutsch</a>  
    <?php } else { ?>
    <a href="/blog/en/" class="btn btn-success btn-small">English</a>  
    <?php } ?>
    <a href="/trainer/users/login" class="btn btn-warning btn-small"><?php _e('Sign in'); ?></a>
</form>

<?php } ?>
<?php if ( isset( $_COOKIE['CakeCookie']['tct_auth'] ) || isset( $_COOKIE['CakeCookie']['tct_auth_blog'] ) ) { ?>

                <!-- signed in -->
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('Training'); ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li style="padding-left: 20px;"><b><?php _e('Training Plan'); ?></b></li>
                          <li><a href="/trainer/trainingplans/view"><?php _e('Your Training Plan'); ?></a></li>

                          <li><a href="/trainer/trainingstatistics/list_trainings"><?php _e('Training Log'); ?></a></li>
                          <li><a href="/trainer/competitions/list_competitions"><?php _e('Your Races'); ?></a></li>
                        
                          <li style="padding-left: 20px;"><b><?php _e('Statistics'); ?></b></li>
                          <li><a href="/trainer/trainingstatistics/statistics_trimp"><?php _e('How fit am I?'); ?></a></li>
                          <li><a href="/trainer/trainingstatistics/statistics_formcurve"><?php _e('How fast am I?'); ?></a></li>
                          <li><a href="/trainer/trainingstatistics/statistics_competition"><?php _e('Can I finish my goal?'); ?></a></li>
                          <li><a href="/trainer/trainingstatistics/statistics_howmuchhaveilost"><?php _e('How much have I lost?'); ?></a></li>
                          <li><a href="/trainer/trainingstatistics/statistics_whathaveidone"><?php _e('What have I achieved?'); ?></a></li>

                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('Settings'); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="/trainer/users/edit_traininginfo"><?php _e('Edit training info'); ?></a></li>
                          <li><a href="/trainer/users/edit_weight"><?php _e('Edit weight goals'); ?></a></li>
                          <li><a href="/trainer/users/edit_userinfo"><?php _e('Edit profile'); ?></a></li>
                          <li><a href="/trainer/users/edit_password"><?php _e('Change password'); ?></a></li>
                          <li><a href="/trainer/users/edit_metric"><?php _e('Change metric'); ?></a></li>
                          <li><a target="_blank" href="mailto:support@tricoretraining.com"><?php _e('Feedback'); ?></a></li>        
                          <!--
			                    <li><a href="/trainer/users/logout"><?php _e('Sign out'); ?></a></li>
                          <li style="padding-left: 20px;"><?php _e('Change to'); ?>:<li>
                          <?php if ( $q_config['language'] == 'en' ) { ?>
                          <a href="/trainer/starts/index/code:ger">Deutsch</a>
                          <?php } else { ?>
                          <a href="/trainer/starts/index/code:eng">English</a>                          
                          <?php } ?>
                          </li>
			                    -->
                        </ul>
                  </li>
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('Premium'); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="/trainer/payments/subscribe_triplans"><b><?php _e('Subscribe'); ?></b></a></li>
                          <li><a href="/trainer/payments/show_payments"><?php _e('Show payments'); ?></a></li>
                          <li><a href="/trainer/payments/unsubscribe_triplans"><?php _e('Cancel subscription :('); ?></a></li>
                        </ul>
                  </li>
                </ul>               

    <form class="navbar-form navbar-left navbar-small" role="search" method="get" id="searchform" action="/blog/<?php echo $q_config['language']; ?>/">
      <div class="form-group">
      <input name="s" id="s" type="text" class="form-control form-control-small" placeholder="<?php _e('Search'); ?>">
      </div>
      <input id="searchsubmit" value="<?php _e('Search'); ?>" type="submit" class="btn btn-primary">
    </form>  

<form action="#" id="UserLoginForm" method="post" accept-charset="utf-8" class="navbar-form navbar-right navbar-small">
 &nbsp; &nbsp; <?php _e('Change to'); ?>:
    <?php if ( $q_config['language'] == 'en' ) { ?>
    <a href="/blog/de/" class="btn btn-success btn-small">Deutsch</a>  
    <?php } else { ?>
    <a href="/blog/en/" class="btn btn-success btn-small">English</a>  
    <?php } ?>
    <a href="/trainer/users/logout" class="btn btn-success btn-small"><?php _e('Sign out'); ?></a>
</form>
<?php } ?>

    </div><!-- /.navbar-collapse --> 
  </div>  
  </nav>

</header>
<!-- /PAGE-HEADER-->
