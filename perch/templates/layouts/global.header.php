<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<title><?php perch_pages_title(); ?></title>
	<?php
    $domain        = 'https://'.$_SERVER["HTTP_HOST"];
    $url           = $domain.$_SERVER["REQUEST_URI"];
    $sitename      = "St Peter's Centre, Staithes";
    $sharing_image = 'https://stpetersstaithes.org.uk/perch/resources/fish-1-w1280h768.png';

    PerchSystem::set_var('domain',$domain);
    PerchSystem::set_var('url',$url);
    PerchSystem::set_var('sharing_image',$sharing_image);
    PerchSystem::set_var('twittername',$twittername);

    perch_page_attributes(array(        
      'template' => 'default.html'    
    ));
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="stylesheet" href="/assets/css/modules/glide.core.min.css">
    <link href="/assets/css/base.css?v=<?= rand() ?>" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive-nav.css?v=<?= rand() ?>" rel="stylesheet" type="text/css" />
    <link href="/assets/css/layout.css?v=<?= rand() ?>" rel="stylesheet" type="text/css" />
    <link href="/assets/css/index.css?v=<?= rand() ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="l-wrap">
    <div class="l-block l-block--padding-none">
        <div class="c-header <?= perch_layout_var("noHeaderBorder", true) ? "c-header--no-border" : "" ?>">
            <div class="c-logo">
                <img src="/assets/images/logo.svg" alt="St Peter's, Staithes" />
            </div>
            <div class="c-navigation" data-breakpoint="768" data-type="dynamic">
                    
                <?php
                $isHome = false;
                if ($_SERVER["REQUEST_URI"] == "/") {
                    $isHome = true;
                }
                // perch_content_custom("Icon", ["data" => ["isHome" => $isHome]]);
                
                perch_pages_navigation(array(
                    'template' => array('topNavMain.html', 'topNavSub.html')
                ));
                ?>
                <div class="c-hamburger hide">
                    <button class="c-hamburger__button c-navbar__button">
                        <!-- <div class="c-hamburger__line"></div>
                        <div class="c-hamburger__line"></div>
                        <div class="c-hamburger__line"></div> -->
                        <a class="c-navbar__link c-navbar__link--hover-invert c-navbar__link--fixed-size">Menu</a>
                    </button>
                    <?php
                    perch_pages_navigation(array(
                        'template' => array('hamburgerMain.html', 'hamburgerSub.html')
                    ))
                    ?>
                </div>
            </div>
            <div class="c-header__email">
                <a href="mailto:spccstaithes@gmail.com">spccstaithes@gmail.com</a>
            </div>
            <div class="c-social-media">
                <a href="https://www.facebook.com/St-Peters-Staithes-336076093552959"><i class="fab fa-facebook"></i></a>
            </div>
        
        </div>
    </div>
</div>