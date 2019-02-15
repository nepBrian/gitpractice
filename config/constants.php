<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Defined Variables
    |--------------------------------------------------------------------------
    |
    | This is a set of variables that are made specific to this application
    | that are better placed here rather than in .env file.
    | Use config('your_key') to get the values.
    |
    */

    'association_fullName' => env('ASSOCIATION_NAME','Stoughton Police Relief Association'),
    'association_partialName' => env('ASSOCIATION_PARTIALNAME','Stoughton PRA'),
    'association_acronym' => env('ASSOCIATION_ACRONYM','SPRA'),
    'association_url' => env('ASSOCIATION_URL','stoughtonpolicerelief.org'),
    'association_phone' => env('ASSOCIATION_URL','(781)-344-2424'),
    'association_email' => env('ASSOCIATION_EMAIL','info@stoughtonpolicerelief.org'),
    'association_mobileLogo' => env('ASSOCIATION_MOBILELOGO','string'),
    'association_desktopLogo' => env('ASSOCIATION_LOGO','string'),

    'board_president' => env('ASSOCIATION_PRESIDENT','Jennifer Sullivan'),
    'board_vicePresident' => env('ASSOCIATION_VICEPRESIDENT','Robert Kuhn'),
    'board_treasurer' => env('ASSOCIATION_TREASURER','Bobert Kuhn'),
    'board_secretary' => env('ASSOCIATION_SECRETARY','Daniel McGowan'),

    'address_street' => env('ASSOCIATION_STREET','26 Rose St.'),
    'address_city' => env('ASSOCIATION_CITY','Stoughton'),
    'address_state' => env('ASSOCIATION_STATE','Massachusetts'),
    'address_stateAcronym' => env('ASSOCIATION_STATEACRONYM','MA'),
    'address_zip' => env('ASSOCIATION_ZIP','02072'),

    'social_facebook' => env('ASSOCIATION_FACEBOOK','https://www.facebook.com/StoughtonPRA/'),
    'social_twiiter' => env('ASSOCIATION_TWITTER','https://twitter.com/PoliceRelief'),
    'social_youtube' => env('ASSOCIATION_YOUTUBE','https://www.youtube.com/channel/UCJsL5-Jtktc_BVYLmuAvZDg/featured'),


];
