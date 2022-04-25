<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/author/fetch_all' => [[['_route' => 'api_authorapi_get_books', '_controller' => 'App\\Controller\\AuthorController::fetch_all'], null, ['GET' => 0], null, false, false, null]],
        '/api/author/add_book' => [[['_route' => 'api_authorapi_post_book', '_controller' => 'App\\Controller\\AuthorController::post_book'], null, ['POST' => 0], null, false, false, null]],
        '/api/guest/fetch_all' => [[['_route' => 'api_guestapi_guest_fetch_all', '_controller' => 'App\\Controller\\GuestController::fetch_all'], null, ['GET' => 0], null, false, false, null]],
        '/api/guest/search' => [[['_route' => 'api_guestapi_guest_search', '_controller' => 'App\\Controller\\GuestController::search'], null, ['POST' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'api_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|author/(?'
                        .'|show_book/([^/]++)(*:43)'
                        .'|update_book/([^/]++)(*:70)'
                        .'|delete_book/([^/]++)(*:97)'
                    .')'
                    .'|guest/show_book/([^/]++)(?'
                        .'|(*:132)'
                        .'|/add_opinion(*:152)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:190)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_authorapi_get_book', '_controller' => 'App\\Controller\\AuthorController::show_book'], ['id'], ['GET' => 0], null, false, true, null]],
        70 => [[['_route' => 'api_authorapi_put_book', '_controller' => 'App\\Controller\\AuthorController::update_book'], ['id'], ['PUT' => 0], null, false, true, null]],
        97 => [[['_route' => 'api_authorapi_delete_book', '_controller' => 'App\\Controller\\AuthorController::delete_book'], ['id'], ['DELETE' => 0], null, false, true, null]],
        132 => [[['_route' => 'api_guestapi_guest_get_book', '_controller' => 'App\\Controller\\GuestController::show_book'], ['id'], ['GET' => 0], null, false, true, null]],
        152 => [[['_route' => 'api_guestapi_guest_add_opinion', '_controller' => 'App\\Controller\\GuestController::add_opinion'], ['id'], ['POST' => 0], null, false, false, null]],
        190 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
