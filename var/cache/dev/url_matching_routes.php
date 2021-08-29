<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/brand' => [[['_route' => 'brand_index', '_controller' => 'App\\Controller\\BrandController::indexBrand'], null, null, null, false, false, null]],
        '/brand/create' => [[['_route' => 'brand_create', '_controller' => 'App\\Controller\\BrandController::createnewbrand'], null, null, null, false, false, null]],
        '/phone' => [[['_route' => 'phone_index', '_controller' => 'App\\Controller\\PhoneController::indexPhone'], null, null, null, false, false, null]],
        '/phone/create' => [[['_route' => 'phone_create', '_controller' => 'App\\Controller\\PhoneController::createPhone'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tablet' => [[['_route' => 'tablet_index', '_controller' => 'App\\Controller\\Tablet1Controller::indexTablet'], null, null, null, false, false, null]],
        '/tablet/create' => [[['_route' => 'tablet_create', '_controller' => 'App\\Controller\\Tablet1Controller::createnewtablet'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/brand/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:196)'
                        .'|lete/([^/]++)(*:217)'
                    .')'
                    .'|update/([^/]++)(*:241)'
                .')'
                .'|/phone/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:278)'
                        .'|lete/([^/]++)(*:299)'
                    .')'
                    .'|update/([^/]++)(*:323)'
                .')'
                .'|/tablet/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:361)'
                        .'|lete/([^/]++)(*:382)'
                    .')'
                    .'|update/([^/]++)(*:406)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        196 => [[['_route' => 'brand_detail', '_controller' => 'App\\Controller\\BrandController::detailBook'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'brand_delete', '_controller' => 'App\\Controller\\BrandController::deleteBrand'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'brand_update', '_controller' => 'App\\Controller\\BrandController::updateBrand'], ['id'], null, null, false, true, null]],
        278 => [[['_route' => 'phone_detail', '_controller' => 'App\\Controller\\PhoneController::detailPhone'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'phone_delete', '_controller' => 'App\\Controller\\PhoneController::deletePhone'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'phone_update', '_controller' => 'App\\Controller\\PhoneController::updatePhone'], ['id'], null, null, false, true, null]],
        361 => [[['_route' => 'tablet_detail', '_controller' => 'App\\Controller\\Tablet1Controller::detailPhone'], ['id'], null, null, false, true, null]],
        382 => [[['_route' => 'tablet_delete', '_controller' => 'App\\Controller\\Tablet1Controller::deletePhone'], ['id'], null, null, false, true, null]],
        406 => [
            [['_route' => 'tablet_update', '_controller' => 'App\\Controller\\Tablet1Controller::updateTablet'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
