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
        '/concert/piano' => [[['_route' => 'piano', '_controller' => 'App\\Controller\\ConcertController::piano'], null, ['GET' => 0], null, false, false, null]],
        '/concert/triC' => [[['_route' => 'triC', '_controller' => 'App\\Controller\\ConcertController::Tri'], null, null, null, false, false, null]],
        '/concert/video' => [[['_route' => 'videochat', '_controller' => 'App\\Controller\\ConcertController::video'], null, null, null, false, false, null]],
        '/concert/media' => [[['_route' => 'media_player', '_controller' => 'App\\Controller\\ConcertController::piece'], null, null, null, false, false, null]],
        '/concert/record' => [[['_route' => 'song_record', '_controller' => 'App\\Controller\\ConcertController::afficher'], null, ['GET' => 0], null, false, false, null]],
        '/concert/front' => [[['_route' => 'concert_index2', '_controller' => 'App\\Controller\\ConcertController::index2'], null, null, null, false, false, null]],
        '/concert/exportXML' => [[['_route' => 'export', '_controller' => 'App\\Controller\\ConcertController::export'], null, null, null, false, false, null]],
        '/concert' => [[['_route' => 'concert_index', '_controller' => 'App\\Controller\\ConcertController::index'], null, ['GET' => 0], null, true, false, null]],
        '/concert/affich' => [[['_route' => 'concert_index3', '_controller' => 'App\\Controller\\ConcertController::index3'], null, ['GET' => 0], null, false, false, null]],
        '/concert/new' => [[['_route' => 'concert_new', '_controller' => 'App\\Controller\\ConcertController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/factor' => [[['_route' => 'factor_index', '_controller' => 'App\\Controller\\FactorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/factor/admin' => [[['_route' => 'factor_index2', '_controller' => 'App\\Controller\\FactorController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/factor/admin/new' => [[['_route' => 'factor_new', '_controller' => 'App\\Controller\\FactorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/film' => [[['_route' => 'film_index', '_controller' => 'App\\Controller\\FilmController::index'], null, ['GET' => 0], null, true, false, null]],
        '/film/admin' => [[['_route' => 'film_index2', '_controller' => 'App\\Controller\\FilmController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/film/admin/new' => [[['_route' => 'film_new', '_controller' => 'App\\Controller\\FilmController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/filmactors' => [[['_route' => 'filmactors_index', '_controller' => 'App\\Controller\\FilmactorsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/filmactors/new' => [[['_route' => 'filmactors_new', '_controller' => 'App\\Controller\\FilmactorsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/musician/affich' => [[['_route' => 'musician_index3', '_controller' => 'App\\Controller\\MusicianController::index3'], null, ['GET' => 0], null, false, false, null]],
        '/musician/stat' => [[['_route' => 'stati', '_controller' => 'App\\Controller\\MusicianController::indexAction'], null, null, null, false, false, null]],
        '/musician' => [[['_route' => 'musician_index', '_controller' => 'App\\Controller\\MusicianController::index'], null, ['GET' => 0], null, true, false, null]],
        '/musician/front' => [[['_route' => 'musician_front', '_controller' => 'App\\Controller\\MusicianController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/musician/new' => [[['_route' => 'musician_new', '_controller' => 'App\\Controller\\MusicianController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/concert/(?'
                    .'|([^/]++)(*:189)'
                    .'|front/([^/]++)(*:211)'
                    .'|([^/]++)(?'
                        .'|/edit(*:235)'
                        .'|(*:243)'
                    .')'
                    .'|Supp/([^/]++)(*:265)'
                .')'
                .'|/f(?'
                    .'|actor/([^/]++)(?'
                        .'|(*:296)'
                        .'|/edit(*:309)'
                        .'|(*:317)'
                    .')'
                    .'|ilm(?'
                        .'|/([^/]++)(?'
                            .'|(*:344)'
                            .'|/edit(*:357)'
                            .'|(*:365)'
                        .')'
                        .'|actors/([^/]++)(?'
                            .'|(*:392)'
                            .'|/edit(*:405)'
                            .'|(*:413)'
                        .')'
                    .')'
                .')'
                .'|/musician/(?'
                    .'|([^/]++)(?'
                        .'|(*:448)'
                        .'|/edit(*:461)'
                        .'|(*:469)'
                    .')'
                    .'|Supp/([^/]++)(*:491)'
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
        189 => [[['_route' => 'concert_show', '_controller' => 'App\\Controller\\ConcertController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'concert_front', '_controller' => 'App\\Controller\\ConcertController::showfront'], ['id'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'concert_edit', '_controller' => 'App\\Controller\\ConcertController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        243 => [[['_route' => 'concert_delete', '_controller' => 'App\\Controller\\ConcertController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        265 => [[['_route' => 'deleteC', '_controller' => 'App\\Controller\\ConcertController::Supprimer'], ['id'], null, null, false, true, null]],
        296 => [[['_route' => 'factor_show', '_controller' => 'App\\Controller\\FactorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'factor_edit', '_controller' => 'App\\Controller\\FactorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [[['_route' => 'factor_delete', '_controller' => 'App\\Controller\\FactorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        344 => [[['_route' => 'film_show', '_controller' => 'App\\Controller\\FilmController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        357 => [[['_route' => 'film_edit', '_controller' => 'App\\Controller\\FilmController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        365 => [[['_route' => 'film_delete', '_controller' => 'App\\Controller\\FilmController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        392 => [[['_route' => 'filmactors_show', '_controller' => 'App\\Controller\\FilmactorsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        405 => [[['_route' => 'filmactors_edit', '_controller' => 'App\\Controller\\FilmactorsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        413 => [[['_route' => 'filmactors_delete', '_controller' => 'App\\Controller\\FilmactorsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        448 => [[['_route' => 'musician_show', '_controller' => 'App\\Controller\\MusicianController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'musician_edit', '_controller' => 'App\\Controller\\MusicianController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        469 => [[['_route' => 'musician_delete', '_controller' => 'App\\Controller\\MusicianController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        491 => [
            [['_route' => 'deleteM', '_controller' => 'App\\Controller\\MusicianController::Supprimer'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
