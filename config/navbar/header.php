<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "SECHAT",
        ],
        [
            "text" => "Konferens",
            "url" => "presentations",
            "title" => "SECHAT Konferens",
        ],
        [
            "text" => "Hackathon",
            "url" => "hackathon",
            "title" => "Hackathon",
        ],
        [
            "text" => "Nätverkande",
            "url" => "networking",
            "title" => "Studiesocialt nätverkande",
        ],
        [
            "text" => "ANMÄL DIG",
            "url" => "register",
            "title" => "Anmäl dig till SECHAT",
        ],
    ],
];
