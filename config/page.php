<?php
/**
 * Configuration file for page which can create and put together web pages
 * from a collection of views. Through configuration you can add the
 * standard parts of the page, such as header, navbar, footer, stylesheets,
 * javascripts and more.
 */
return [
    // This layout view is the base for rendering the page, it decides on where
    // all the other views are rendered.
    "layout" => [
        "region" => "layout",
        "template" => "sechat/components/layout/sechat-primary",
        "data" => [
            "baseTitle" => " | SECHAT",
            "bodyClass" => null,
            "favicon" => "favicon.ico",
            "htmlClass" => null,
            "lang" => "sv",
            "stylesheets" => [
                "css/sechat-override.css",
                "https://fonts.googleapis.com/icon?family=Material+Icons",
                "https://code.getmdl.io/1.3.0/material.green-light_green.min.css",
            ],
            "javascripts" => [
                "js/responsive-menu.js",
                "https://code.getmdl.io/1.3.0/material.min.js",
            ],
        ],
    ],

    // These views are always loaded into the collection of views.
    "views" => [
        [
            "region" => "navbar",
            "template" => "sechat/components/navbar/material",
            "data" => [
                    "navbarConfig" => require __DIR__ . "/navbar/header.php",
                    "headerTitle" => "SECHAT"
                ],
        ],
        [
            "region" => "footer",
            "template" => "sechat/components/footer/material",
            "data" => [
                "class"  => "site-footer",
                "contentRoute" => "block/footer",
            ],
            "sort" => 2
        ],
    ],
];
