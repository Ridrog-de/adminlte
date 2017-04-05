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
         * Always include the skin name, even if you load it with mix
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
     * Text and Link for Logo
     */
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
     * Components for the menu top right
     * views/partials that get included
     */
    'topMenuRight' => [
        'adminlte::components.topmenu.messages',
        'adminlte::components.topmenu.notifications',
        'adminlte::components.topmenu.tasks',
        'adminlte::components.topmenu.userAccount',
    ],

    /*
     * Components for the menu top left
     * views/partials that get included
     */
    'topMenuLeft' => [
            'adminlte::components.topmenu.messages',
    ],

    /*
     * Control the Control Bar
     * enable/disable it
     * create your own Tab Menu and Tab Panes
     */
    'controlBar' => [
        'enable' => true,
        'toggle' => true,
        'toggleName' => '',
        'toggleIcon' => 'gears',
        'tabsMenu' => 'adminlte::components.controlBar._menu',
        'tabPanes' => [
            'adminlte::components.controlBar.home',
            'adminlte::components.controlBar.settings',
        ]
    ],

    /*
     * Components for the sidebar
     * views/partials that get included
     */
    'sidebar' => [
        'adminlte::components.sidebar.userpanel',
        'adminlte::components.sidebar.searchform',
    ],


    /*
     * Controll the mainmenu
     * Show/hide it
     * Use textbased links or include your custom partials or both
     */
    'mainmenu' => [
        'show' => true,
        'title' => 'Main Navigation',
        'showLinks' => true,
        'links' => [
            'Test' => [
                'treeview' => false,
                'name' => 'test',
                'route_name' => 'login',
                'icon' => 'home'
            ],
        ],
        'showPartials' => true,
        'partials' => [
            'adminlte::components.mainmenu.sample-links',
        ]


    ],

    /*
     * Control the Footer
     */
    'footer' => [
        'show' => true,
        'content' => [
            'adminlte::components.footer.copyright'
        ]
    ],


    /*
     * Sample Links for "mainmenu=>links"
     *
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