<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_authorapi_get_books' => [[], ['_controller' => 'App\\Controller\\AuthorController::fetch_all'], [], [['text', '/api/author/fetch_all']], [], [], []],
    'app_authorapi_get_book' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::show_book'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/author/show_book']], [], [], []],
    'app_authorapi_post_book' => [[], ['_controller' => 'App\\Controller\\AuthorController::post_book'], [], [['text', '/api/author/post_book']], [], [], []],
    'app_authorapi_put_book' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::update_book'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/author/update_book']], [], [], []],
    'app_authorapi_delete_book' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::delete_book'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/author/delete_book']], [], [], []],
    'app_guestapp_guest' => [[], ['_controller' => 'App\\Controller\\GuestController::fetch_all'], [], [['text', '/api//fetch_all']], [], [], []],
    'api_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/api/register']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], [], []],
];
