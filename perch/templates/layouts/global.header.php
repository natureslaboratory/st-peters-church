<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<title><?php perch_pages_title(); ?></title>
	<?php perch_page_attributes(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link href="/assets/css/base.css?v=<?= rand() ?>" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive-nav.css?v=<?= rand() ?>" rel="stylesheet" type="text/css" />
    <link href="/assets/css/layout.css?v=<?= rand() ?>" rel="stylesheet" type="text/css" />
    <link href="/assets/css/index.css?v=<?= rand() ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="l-wrap">
    <div class="c-header">
        <div class="c-logo">
            <p>Icon</p>
        </div>
        <div class="c-navigation" data-breakpoint="768" data-type="dynamic">
                
            <div class="c-hamburger hide">
                <button class="c-hamburger__button">
                    <!-- <div class="c-hamburger__line"></div>
                    <div class="c-hamburger__line"></div>
                    <div class="c-hamburger__line"></div> -->
                    Menu
                </button>
                <?php
                perch_pages_navigation(array(
                    'template' => array('hamburgerMain.html', 'hamburgerSub.html')
                ))
                ?>
            </div>
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
        </div>
        <div class="c-header__email">
            <a href="mailto:stpetersstaithes@gmail.com">stpetersstaithes@gmail.com</a>
        </div>
        <div class="c-social-media">
            <i class="fab fa-facebook"></i>
        </div>
    
    </div>
</div>