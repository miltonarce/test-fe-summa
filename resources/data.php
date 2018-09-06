<?php

$get = $_GET;
if (isset($get['getBoxes']) && $get['getBoxes'] == 'what-we-do') {
    $boxes = array(
        array(
            'title' => 'e-commerce',
            'color' => '#ff910f',
            'content' => 'As your E-Commerce partner we will identify your specific needs, build solutions that will make your operations stronger, and provide a powerful web presence.',
        ),
        array(
            'title' => 'mobile & social',
            'color' => '#ffd11a',
            'content' => 'Be it iOS, Android or Windows Phone, we can accommodate your specific needs for your ideal mobile application.',
        ),
        array(
            'title' => 'open source cms',
            'color' => '#39a91f',
            'content' => 'Every good open-source CMS system allows for great flexibility to be customized and extended. Let us help you build yours.',
        ),
        array(
            'title' => 'software development',
            'color' => '#17b5ff',
            'content' => 'Our development services help you address evolving business and technology challenges by building applications tailored to meet your business requirements.',
        ),
        array(
            'title' => 'interactive design and usability',
            'color' => '#6b6bff',
            'content' => 'We are a full-service user interface design firm offering information architecture, interaction design, and full visual design.',
        ),
    );

    echo json_encode($boxes);
 exit;
}

if (strpos($_SERVER['REQUEST_URI'], basename(__FILE__)) !== false) {
    header("HTTP/1.1 404 File Not Found", 404);
    exit;
}

function getMenu()
{
    return array(
        array(
            'label' => 'Home',
            'link' => '#home',
            'class' => 'active',
        ),
        array(
            'label' => 'Company',
            'link' => '#company',
            'child' => array(
                array(
                    'label' => 'Vision, Mission & History',
                    'link' => '#vision-mission-history',
                ),
                array(
                    'label' => 'Manifesto',
                    'link' => '#manifesto',
                ),
                array(
                    'label' => 'Clients',
                    'link' => '#clients',
                ),
                array(
                    'label' => 'Partners',
                    'link' => '#partners',
                ),
                array(
                    'label' => 'Team',
                    'link' => '#team',
                ),
                array(
                    'label' => 'Current Openings',
                    'link' => '#current-openings',
                ),
            ),
        ),
        array(
            'label' => 'Services',
            'link' => '#services',
            'child' => array(
                array(
                    'label' => 'eCommerce',
                    'link' => '#ecommerce',
                ),
                array(
                    'label' => 'Open Source',
                    'link' => '#open-source',
                ),
                array(
                    'label' => 'Interactive Design & Usability',
                    'link' => '#interactive-design-usability',
                ),
                array(
                    'label' => 'Mobile',
                    'link' => '#mobile',
                ),
                array(
                    'label' => 'Software Development',
                    'link' => '#software-development',
                ),
            ),
        ),
        array(
            'label' => 'Portfolio',
            'link' => '#portfolio',
        ),
        array(
            'label' => 'Blog',
            'link' => '#blog',
        ),
        array(
            'label' => 'Contact Us',
            'link' => '#contact-us',
        ),
    );
}

