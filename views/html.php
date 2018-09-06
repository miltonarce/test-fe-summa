<?php
/*
 * You will find 3 files to edit:
 * skin/sass/summatest.scss
 * skin/js/summatest.js
 * views/html.php
 *
 */

if (strpos($_SERVER['REQUEST_URI'], basename(__FILE__)) !== false) {
	header("HTTP/1.1 404 File Not Found", 404); exit;
}

// Navigation bar
$menu = getMenu();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Summa Frontend Evaluation</title>
        <link rel="stylesheet" type="text/css" href="skin/css/cssreset-min.css" media="all">
        <link rel="stylesheet" type="text/css" href="skin/css/cssbase-min.css" media="all">
        <link rel="stylesheet" type="text/css" href="skin/css/cssfonts-min.css" media="all">
        <link rel="stylesheet" type="text/css" href="skin/css/summabase.css" media="all">
        <link rel="stylesheet" type="text/css" href="skin/css/summatest.css" media="all">        
        <link rel="stylesheet" type="text/css" href="skin/css/slick-theme.css" media="all">      
        <link rel="stylesheet" type="text/css" href="skin/css/slick.css" media="all">
        <script type="text/javascript" src="skin/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="skin/js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="skin/js/summatest.js"></script>
        <script type="text/javascript" src="skin/js/slick.min.js"></script>
    </head>

    <body class="summatest">
        <div class="wrapper">
            <div class="page">
                <div class="header">
                    <div class="header-container">
                        <div class="logo-wrapper">
                            <img src="skin/images/logo.png" class="logo" />
                        </div>
                        <div class="nav">
                          <ul class="menu">
                            <?php 
                                foreach($menu as $key => $rel){
                                    echo '<li><a href="'. $rel['link'].'">'. $rel['label'].'</a>';
                                    if(isset($rel['child'])){
                                       echo '<ul class="inactive">';
                                       foreach($rel['child'] as $child => $arrayC){
                                           echo '<li><a href="'.$arrayC['link'].'">'.$arrayC['label'].'</a></li>';
                                       }
                                       echo '</ul></li>';
                                    }
                                }
                            ?>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <div class="top-container">
                        <div class="slider-container">
                            <ul class="list">
                                <li class="item">
                                    <a href="javascript:void(0);"><img typeof="foaf:Image" src="skin/images/sl1.png" alt=""></a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);"><img typeof="foaf:Image" src="skin/images/sl2.png" alt=""></a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);"><img typeof="foaf:Image" src="skin/images/sl3.png" alt=""></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="main-container">
                        <div class="boxes-block">
                            <div class="box">
                                <h2 class="title">What we do <a href="javascript:void(0);" class="link">Read more about our services  »</a></h2>
                                <div class="box-list"><!-- he what-we-do boxes should be here --></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-container">
                        <div class="logo-wrapper">
                            <img src="skin/images/logo.png" class="logo" />
                        </div>
                        <div class="info">
                            <p class="address">
                                <span class="title">Argentina: </span>AV. CORDOBA 5779 1st FLOOR OFF. C, PALERMO, CAPITAL FEDERAL<br><a href="mailto:argentina@summasolutions.net">argentina@summasolutions.net</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
