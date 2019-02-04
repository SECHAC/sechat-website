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
            "text" => "Presentationer",
            "url" => "presentations",
            "title" => "Sechats hackaton",
        ],
        [
            "text" => "Hackathon",
            "url" => "hackathon",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Networking",
            "url" => "networking",
            "title" => "Studiesocialt networking",
        ],
        [
            "text" => "ANMÄL DIG",
            "url" => "register",
            "title" => "Anmäl dig till SECHAT",
        ],
    ],
];
