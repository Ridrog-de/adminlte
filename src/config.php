<?php

return [

    'style' => [
        'mix' => false,
        'mix_file' => '/admin.css',
        'skin' => 'blue'
    ],

    'script' => [
        'mix' => false,
        'mix_file' => '/admin.js'
    ],

    'logo' => [
        'text' => 'AdminLTE',
        'text_small' => 'ALT',
        'home_url' => '/admin'
    ],

    'layout' => [
        'sidebar-collapse' => false,     // sidebar-collapse
        'sidebar-mini' => true,         // sidebar-mini
        'fixed' => false,               // fixed        !need slimscroll plugin
        'boxed' => false,               // layout-boxed,
        'top-nav' => false,              // layout-top-nav
    ],

    'plugins' => [
        'bootstrap-slider' => true,
        'bootstrap-wysihtml5' => true,
        'chartjs' => true,
        'ckeditor' => true,
        'colorpicker' => true,
        'datatables' => true,
        'datepicker' => true,
        'daterangepicker' => true,
        'fastclick' => true,
        'flot' => true,
        'fullcalendar' => true,
        'iCheck' => true,
        'input-mask' => true,
        'ionslider' => true,
        'jQueryUI' => true,
        'jvectormap' => true,
        'knob' => true,
        'morris' => true,
        'pace' => true,
        'select2' => true,
        'slimScroll' => true,
        'sparkline' => true,
        'timepicker' => true,
    ],

    'topmenu' => [
        'messages' => true,
        'notifications' => true,
        'tasks' => true,
        'userAccount' => true,
        'controlBarToggle' => true,
    ],

    'mainmenu' => [
        'searchform' => true,
        'userpanel' => true,
        'mainnavigation' => true
    ],

    'footer' => true,

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