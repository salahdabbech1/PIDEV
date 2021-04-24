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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/factor' => [[['_route' => 'factor_index', '_controller' => 'App\\Controller\\FactorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/factor/admin' => [[['_route' => 'factor_index2', '_controller' => 'App\\Controller\\FactorController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/factor/admin/new' => [[['_route' => 'factor_new', '_controller' => 'App\\Controller\\FactorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/film' => [[['_route' => 'film_index', '_controller' => 'App\\Controller\\FilmController::index'], null, ['GET' => 0], null, true, false, null]],
        '/film/admin' => [[['_route' => 'film_index2', '_controller' => 'App\\Controller\\FilmController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/film/admin/new' => [[['_route' => 'film_new', '_controller' => 'App\\Controller\\FilmController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/filmactors' => [[['_route' => 'filmactors_index', '_controller' => 'App\\Controller\\FilmactorsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/filmactors/new' => [[['_route' => 'filmactors_new', '_controller' => 'App\\Controller\\FilmactorsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/tactor/upcoming' => [[['_route' => 'upcoming', '_controller' => 'App\\Controller\\TactorController::show2'], null, ['GET' => 0], null, false, false, null]],
        '/tactor' => [[['_route' => 'tactor_index', '_controller' => 'App\\Controller\\TactorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tactor/admin' => [[['_route' => 'tactor_index2', '_controller' => 'App\\Controller\\TactorController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/tactor/admin/new' => [[['_route' => 'tactor_new', '_controller' => 'App\\Controller\\TactorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/theatre/quiz' => [[['_route' => 'quiz', '_controller' => 'App\\Controller\\TheatreController::piece'], null, null, null, false, false, null]],
        '/theatre/stat' => [[['_route' => 'stati', '_controller' => 'App\\Controller\\TheatreController::indexAction'], null, null, null, false, false, null]],
        '/theatre' => [[['_route' => 'theatre_index', '_controller' => 'App\\Controller\\TheatreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/theatre/admin' => [[['_route' => 'theatre_index2', '_controller' => 'App\\Controller\\TheatreController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/theatre/admin/new' => [[['_route' => 'theatre_new', '_controller' => 'App\\Controller\\TheatreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/f(?'
                    .'|actor/([^/]++)(?'
                        .'|(*:191)'
                        .'|/edit(*:204)'
                        .'|(*:212)'
                    .')'
                    .'|ilm(?'
                        .'|/([^/]++)(?'
                            .'|(*:239)'
                            .'|/edit(*:252)'
                            .'|(*:260)'
                        .')'
                        .'|actors/([^/]++)(?'
                            .'|(*:287)'
                            .'|/edit(*:300)'
                            .'|(*:308)'
                        .')'
                    .')'
                .')'
                .'|/t(?'
                    .'|actor/([^/]++)(?'
                        .'|(*:341)'
                        .'|/edit(*:354)'
                        .'|(*:362)'
                    .')'
                    .'|heatre/([^/]++)(?'
                        .'|(*:389)'
                        .'|/(?'
                            .'|show(*:405)'
                            .'|edit(*:417)'
                        .')'
                        .'|(*:426)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'factor_show', '_controller' => 'App\\Controller\\FactorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'factor_edit', '_controller' => 'App\\Controller\\FactorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'factor_delete', '_controller' => 'App\\Controller\\FactorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        239 => [[['_route' => 'film_show', '_controller' => 'App\\Controller\\FilmController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'film_edit', '_controller' => 'App\\Controller\\FilmController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'film_delete', '_controller' => 'App\\Controller\\FilmController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        287 => [[['_route' => 'filmactors_show', '_controller' => 'App\\Controller\\FilmactorsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'filmactors_edit', '_controller' => 'App\\Controller\\FilmactorsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'filmactors_delete', '_controller' => 'App\\Controller\\FilmactorsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        341 => [[['_route' => 'tactor_show', '_controller' => 'App\\Controller\\TactorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'tactor_edit', '_controller' => 'App\\Controller\\TactorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [[['_route' => 'tactor_delete', '_controller' => 'App\\Controller\\TactorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        389 => [[['_route' => 'theatre_show', '_controller' => 'App\\Controller\\TheatreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        405 => [[['_route' => 'theatre_show_back', '_controller' => 'App\\Controller\\TheatreController::show2'], ['id'], ['GET' => 0], null, false, false, null]],
        417 => [[['_route' => 'theatre_edit', '_controller' => 'App\\Controller\\TheatreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        426 => [
            [['_route' => 'theatre_delete', '_controller' => 'App\\Controller\\TheatreController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
