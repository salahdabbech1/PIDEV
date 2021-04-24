<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'factor_index' => [[], ['_controller' => 'App\\Controller\\FactorController::index'], [], [['text', '/factor/']], [], []],
    'factor_index2' => [[], ['_controller' => 'App\\Controller\\FactorController::index2'], [], [['text', '/factor/admin']], [], []],
    'factor_new' => [[], ['_controller' => 'App\\Controller\\FactorController::new'], [], [['text', '/factor/admin/new']], [], []],
    'factor_show' => [['id'], ['_controller' => 'App\\Controller\\FactorController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/factor']], [], []],
    'factor_edit' => [['id'], ['_controller' => 'App\\Controller\\FactorController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/factor']], [], []],
    'factor_delete' => [['id'], ['_controller' => 'App\\Controller\\FactorController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/factor']], [], []],
    'film_index' => [[], ['_controller' => 'App\\Controller\\FilmController::index'], [], [['text', '/film/']], [], []],
    'film_index2' => [[], ['_controller' => 'App\\Controller\\FilmController::index2'], [], [['text', '/film/admin']], [], []],
    'film_new' => [[], ['_controller' => 'App\\Controller\\FilmController::new'], [], [['text', '/film/admin/new']], [], []],
    'film_show' => [['id'], ['_controller' => 'App\\Controller\\FilmController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/film']], [], []],
    'film_edit' => [['id'], ['_controller' => 'App\\Controller\\FilmController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/film']], [], []],
    'film_delete' => [['id'], ['_controller' => 'App\\Controller\\FilmController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/film']], [], []],
    'filmactors_index' => [[], ['_controller' => 'App\\Controller\\FilmactorsController::index'], [], [['text', '/filmactors/']], [], []],
    'filmactors_new' => [[], ['_controller' => 'App\\Controller\\FilmactorsController::new'], [], [['text', '/filmactors/new']], [], []],
    'filmactors_show' => [['id'], ['_controller' => 'App\\Controller\\FilmactorsController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/filmactors']], [], []],
    'filmactors_edit' => [['id'], ['_controller' => 'App\\Controller\\FilmactorsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/filmactors']], [], []],
    'filmactors_delete' => [['id'], ['_controller' => 'App\\Controller\\FilmactorsController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/filmactors']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'upcoming' => [[], ['_controller' => 'App\\Controller\\TactorController::show2'], [], [['text', '/tactor/upcoming']], [], []],
    'tactor_index' => [[], ['_controller' => 'App\\Controller\\TactorController::index'], [], [['text', '/tactor/']], [], []],
    'tactor_index2' => [[], ['_controller' => 'App\\Controller\\TactorController::index2'], [], [['text', '/tactor/admin']], [], []],
    'tactor_new' => [[], ['_controller' => 'App\\Controller\\TactorController::new'], [], [['text', '/tactor/admin/new']], [], []],
    'tactor_show' => [['id'], ['_controller' => 'App\\Controller\\TactorController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/tactor']], [], []],
    'tactor_edit' => [['id'], ['_controller' => 'App\\Controller\\TactorController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/tactor']], [], []],
    'tactor_delete' => [['id'], ['_controller' => 'App\\Controller\\TactorController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/tactor']], [], []],
    'quiz' => [[], ['_controller' => 'App\\Controller\\TheatreController::piece'], [], [['text', '/theatre/quiz']], [], []],
    'stati' => [[], ['_controller' => 'App\\Controller\\TheatreController::indexAction'], [], [['text', '/theatre/stat']], [], []],
    'theatre_index' => [[], ['_controller' => 'App\\Controller\\TheatreController::index'], [], [['text', '/theatre/']], [], []],
    'theatre_index2' => [[], ['_controller' => 'App\\Controller\\TheatreController::index2'], [], [['text', '/theatre/admin']], [], []],
    'theatre_new' => [[], ['_controller' => 'App\\Controller\\TheatreController::new'], [], [['text', '/theatre/admin/new']], [], []],
    'theatre_show' => [['id'], ['_controller' => 'App\\Controller\\TheatreController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/theatre']], [], []],
    'theatre_show_back' => [['id'], ['_controller' => 'App\\Controller\\TheatreController::show2'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id'], ['text', '/theatre']], [], []],
    'theatre_edit' => [['id'], ['_controller' => 'App\\Controller\\TheatreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/theatre']], [], []],
    'theatre_delete' => [['id'], ['_controller' => 'App\\Controller\\TheatreController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/theatre']], [], []],
];