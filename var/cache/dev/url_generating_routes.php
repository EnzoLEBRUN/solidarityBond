<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::login'], [], [['text', '/se-connecter']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::register'], [], [['text', '/enregistrer']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::logout'], [], [['text', '/se-deconnecter']], [], []],
    'account' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::account'], [], [['text', '/mon-profil']], [], []],
    'delete' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::delete'], [], [['text', '/mon-profil']], [], []],
    'boutique.index' => [[], ['_controller' => 'App\\Controller\\BoutiqueController::index'], [], [['text', '/boutique']], [], []],
    'boutique.new' => [[], ['_controller' => 'App\\Controller\\BoutiqueController::new'], [], [['text', '/boutique/create']], [], []],
    'boutique.delete' => [['id'], ['_controller' => 'App\\Controller\\BoutiqueController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/boutique/deleteProduct']], [], []],
    'boutique.show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\BoutiqueController::show'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/boutique']], [], []],
    'boutique.edit' => [['id'], ['_controller' => 'App\\Controller\\BoutiqueController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/boutique/edit']], [], []],
    'panier' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/panier']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/add']], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/remove']], [], []],
    'forum.index' => [[], ['_controller' => 'App\\Controller\\ForumController::index'], [], [['text', '/forum']], [], []],
    'forum.new' => [[], ['_controller' => 'App\\Controller\\ForumController::new'], [], [['text', '/forum/create']], [], []],
    'forum.show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\ForumController::show'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/forum']], [], []],
    'forum.deleteSubject' => [['id'], ['_controller' => 'App\\Controller\\ForumController::deleteSubject'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/forum/deleteSubject']], [], []],
    'forum.deleteComment' => [['id'], ['_controller' => 'App\\Controller\\ForumController::deleteComment'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/forum/deleteComment']], [], []],
    'information' => [[], ['_controller' => 'App\\Controller\\InformationController::index'], [], [['text', '/information']], [], []],
    'cga' => [[], ['_controller' => 'App\\Controller\\LegalController::cga'], [], [['text', '/conditions-generales-d-achat']], [], []],
    'cgv' => [[], ['_controller' => 'App\\Controller\\LegalController::cgv'], [], [['text', '/conditions-generales-de-vente']], [], []],
    'cgu' => [[], ['_controller' => 'App\\Controller\\LegalController::cgu'], [], [['text', '/conditions-generales-d-utilisation']], [], []],
];
