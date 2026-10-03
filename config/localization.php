<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Locale
    |--------------------------------------------------------------------------
    |
    | This is the default language used by WorkManagement.
    |
    */

    'default' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Fallback Locale
    |--------------------------------------------------------------------------
    |
    | If a translation is not available for the active locale,
    | WorkManagement will fall back to this language.
    |
    */

    'fallback' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Supported Languages
    |--------------------------------------------------------------------------
    |
    | Add new languages here when multilingual support is enabled.
    |
    */

    'supported' => [

        'en' => [
            'name' => 'English',
            'native_name' => 'English',
            'direction' => 'ltr',
        ],

        // Future languages:
        //
         'bn' => [
             'name' => 'Bengali',
             'native_name' => 'বাংলা',
             'direction' => 'ltr',
         ],

         'ar' => [
             'name' => 'Arabic',
             'native_name' => 'العربية',
             'direction' => 'rtl',
         ],

    ],

];
