<?php

return [

    'style' => [
        /*
         * Mix your own CSS file
         */
        'mix' => false,

        /*
         * Name of your own CSS File
         */
        'mix_file' => '/admin.css',

        /*
         * The Skin
         * black | black-light | blue | blue-light | green | green-light | purple | purple-light | red | red-light | yellow | yellow-light
         */
        'skin' => 'blue'
    ],

    'script' => [
        /*
         * Mix your own JS file
         */
        'mix' => false,

        /*
         * Name of your own JS File
         */
        'mix_file' => '/admin.js'
    ],

    /*
     * What is displayed as header for the mainnav
     */
    'navi_title' => 'Main Navigation',

    'logo' => [
        'text' => 'AdminLTE',
        'text_small' => 'ALT',
        'home_url' => '/admin'
    ],

    'layout' => [

        /*
         * The sidebar is collapsed at pageload
         */
        'sidebar-collapse' => false,

        /*
         * The sidebar shows only the icons if collapsed
         */
        'sidebar-mini' => true,

        /*
         * Fixed Layout (need slimscroll plugin)
         */
        'fixed' => false,

        /*
         * Boxed Layout
         */
        'boxed' => false,

        /*
         * Layout with Top Nav
         */
        'top-nav' => false,
    ],

    /*
     * Hides/Show the various items in the topmenu
     */
    'topmenu' => [
        'messages' => true,
        'notifications' => true,
        'tasks' => true,
        'userAccount' => true,
        'controlBarToggle' => true,
    ],

    /*
     * Hides/Show the various items in the sidebar
     */
    'mainmenu' => [
        'searchform' => true,
        'userpanel' => true,
        'mainnavigation' => true
    ],

    /*
     * Hides/Show the footer
     */
    'footer' => true,

    /*
     * Links for the mainnav see example below
     */
    'links' => [

    ]

    /*
    'links' => [
        'Test' => [
            'treeview' => false,
            'name' => 'test',
            'route_name' => 'admin-test',
            'icon' => 'home'
        ],
        'Test2' => [
            'treeview' => false,
            'name' => 'test2',
            'route_name' => 'admin-test2',
            'icon' => 'home'
        ],
        'Sections' => [
            'treeview' => true,
            'name' => 'Sections',
            'route_name' => 'section-one',
            'icon' => 'home',
            'links' => [
                [
                'name' => 'One',
                'route_name' => 'section-one',
                'icon' => 'home'
                ],
                [
                    'name' => 'Two',
                    'route_name' => 'section-two',
                    'icon' => 'home'
                ],
                [
                    'name' => 'Three',
                    'route_name' => 'section-three',
                    'icon' => 'home'
                ],
            ]
        ],
    ],
    */
];