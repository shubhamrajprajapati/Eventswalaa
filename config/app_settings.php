<?php

return [

    /*
    |--------------------------------------------------------------------------
    | ⚠️ IMPORTANT INFO | App/Website Settings & Details Config File
    |--------------------------------------------------------------------------
    |
    | This custom file, authored by Shubham Raj, serves as a repository for 
    | storing and managing various settings and details of this website/app. 
    | These stored values can be overridden by corresponding entries from the
    | 'db_app_setting' table."
    |
    */

    /*
    |--------------------------------------------------------------------------
    | App/Website Basic Details : FRONTEND
    |--------------------------------------------------------------------------
    |
    | Here all app basic info details like name, short name, full name, description, 
    | contact numbers, phone, whatsapp, address, etc.
    |
    */

    'frontend' => [
        'app' => [
            'name' => env('APP_NAME', 'Not Found'),
            'short_name' => env('APP_SHORT_NAME', 'Not Found'),
            'full_name' => env('APP_FULL_NAME', 'Not Found'),

            'manifest' => [
                'start_url' => env('APP_START_URL', '/'),
                'scope' => env('APP_SCOPE', '/'),
                'display' => env('APP_DISPLAY', 'standalone'),
                'orientation' => env('APP_ORIENTATION', 'portrait'),
                'background_color' => env('APP_BACKGROUND_COLOR', '#ffffff'),
                'theme_color' => env('APP_THEME_COLOR', '#19547b'),
            ],

            'contact' => [
                'email' => [
                    'contact' => env('APP_CONTACT_EMAIL', 'not found'),
                    'support' => env('APP_SUPPORT_EMAIL', 'not found'),
                ],

                'phone' => [
                    'primary' => env('APP_PRIMARY_PHONE', 'not found'),
                    'secondary' => env('APP_PRIMARY_PHONE', 'not found'),
                    'whatsapp' => env('APP_WHATSAPP_NUMBER', 'not found'),
                ],

                'username' => [
                    'twitter' => 'eventswalaa',
                ],

                'link' => [
                    'whatsapp' => env('APP_WHATSAPP_LINK', '#'),
                    'facebook' => env('APP_FACEBOOK_LINK', '#'),
                    'instagram' => env('APP_INSTAGRAM_LINK', '#'),
                    'twitter' => env('APP_TWITTER_LINK', '#'),
                    'linkedin' => env('APP_LINKEDIN_LINK', '#'),
                    'pinterest' => env('APP_PINTEREST_LINK', '#'),
                    'youtube' => env('APP_YOUTUBE_LINK', '#'),
                    'telegram' => env('APP_TELEGRAM_LINK', '#'),
                ],

                'address' => [
                    'pincode' => env('APP_ADDRESS_PINCODE', 000000),
                    'line_1' => env('APP_ADDRESS_LINE_1', 'No Line 1 Address Found'),
                    'line_2' => env('APP_ADDRESS_LINE_2', 'No Line 2 Address Found'),
                    'line_3' => env('APP_ADDRESS_LINE_3', 'No Line 3 Address Found'),
                    'full' => env('APP_FULL_ADDRESS', 'No Full Address Found'),
                ]

            ]
        ],


        /*
            |--------------------------------------------------------------------------
            | SEO config settings -- Search Engine Optimization
            |--------------------------------------------------------------------------
            |
            | Here you may configure your settings for verification tags, default meta 
            | data tags, og:type, local, language, url, viewport, image, twitter card meta
            | tags etc.
            | NOTE: Don't put dot(.) in key. Seperate with underscore(_). You can put dot in values.
            |
            */

        'seo' => [

            'page' => [

                'home' => [
                    'title' => env('APP_HOME_PAGE_TITLE', env('APP_FULL_NAME', 'Not Found')),
                    'description' => env('APP_HOME_PAGE_DESCRIPTION', ''),
                    'keywords' => env('APP_HOME_PAGE_KEYWORDS', ''),
                    'author' => env('APP_HOME_PAGE_AUTHOR', env('APP_NAME', 'Not Found')),
                    'image' => env('APP_HOME_PAGE_IMAGE', 'assets/images/bg/home-banner.jpg'),
                    'modified_time' => '2022-09-22T17:43:13+00:00',
                    'locale' => env('APP_HOME_PAGE_LOCALE', 'en_US'),
                    'type' => env('APP_HOME_PAGE_TYPE', 'website'),
                ]
            ],

            'sitemap' => [
                'updated_at' => '2023-08-23T06:08:11+05:30',
            ],

            'website_ownership_verification_meta_code' => [

                'google' => json_decode(
                    env(
                        'GOOGLE_VERIFICATION_META_TAGS',

                        '{}'
                    ),
                    true
                ),

                'bing' => json_decode(
                    env(
                        'BING_VERIFICATION_META_TAGS',

                        '{}'
                    ),
                    true
                ),

                'pinterest' => json_decode(
                    env(
                        'PINTEREST_VERIFICATION_META_TAGS',

                        '{}'
                    ),
                    true
                )
            ],
        ]
    ]
];
