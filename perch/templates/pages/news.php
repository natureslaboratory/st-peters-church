<?php 
if (!defined('PERCH_RUNWAY')) {
     include($_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php');
}

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

?>
<?php perch_layout("global.header", ["noHeaderBorder" => perch_get("s") ? true : false]) ?>

<div id="content">
    <?php 

    if (perch_get("s")) {
        perch_blog_post(perch_get("s"));
    } else { ?>
        
        <div class="l-block l-block--padding-half">
            <div class="l-restrict l-restrict--small l-restrict--narrow">
                <?php
                    if (perch_get("s")) {
                        perch_blog_post(perch_get("s"));
                    } else if (perch_get("t")) {
                        echo "<h2 style='text-align:center; margin-bottom: 1.6rem;'>\"" . perch_get("t") . "\"</h2>";
                        perch_blog_custom([
                            "template" => "post_in_list_card.html",
                            "tag" => perch_get("t")
                        ]);
                    } else if (perch_get("a")) {
                        
                        $author = perch_blog_author(perch_get("a"), ["skip-template" => true]);

                        echo "<h2 style='text-align:center; margin-bottom: 1.6rem;'>Posts by " . $author["authorGivenName"] . " " . $author["authorFamilyName"] . "</h2>";
                        perch_blog_custom([
                            "template" => "post_in_list_card.html",
                            "author" => perch_get("a")
                        ]);
                    } else {
                ?>
                <h2 class="c-page-title">News</h2>
                <?php
                        perch_blog_custom([
                            "template" => "post_in_list_card.html",
                            "count" => 10 
                        ]);
                    }
                ?>
            </div>
        </div>
    <?php } ?>
</div>
<?php perch_layout("global.footer") ?>