<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::authentif'], [], [['text', '/admin']], [], [], []],
    'adminStatutListe' => [[], ['_controller' => 'App\\Controller\\AdminController::listeStatut'], [], [['text', '/admin/statut/liste']], [], [], []],
    'adminStatutModif' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modifStatut'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/statut/modif']], [], [], []],
    'adminStatutSupp' => [['id'], ['_controller' => 'App\\Controller\\AdminController::suppStatut'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/statut/supp']], [], [], []],
    'adminClientListe' => [[], ['_controller' => 'App\\Controller\\AdminController::listeClient'], [], [['text', '/admin/client/liste']], [], [], []],
    'adminFormationListe' => [[], ['_controller' => 'App\\Controller\\AdminController::listeFormation'], [], [['text', '/admin/formation/liste']], [], [], []],
    'adminFormationModif' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modifFormation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/formation/modif']], [], [], []],
    'adminFormationSupp' => [['id'], ['_controller' => 'App\\Controller\\AdminController::suppFormation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/formation/supp']], [], [], []],
    'adminSessionListe' => [[], ['_controller' => 'App\\Controller\\AdminController::listeSession'], [], [['text', '/admin/session/liste']], [], [], []],
    'adminSessionModif' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modifSession'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/session/modif']], [], [], []],
    'adminSessionSupp' => [['id'], ['_controller' => 'App\\Controller\\AdminController::suppSession'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/session/supp']], [], [], []],
    'adminPlanListe' => [[], ['_controller' => 'App\\Controller\\AdminController::listePlanFormation'], [], [['text', '/admin/plan/liste']], [], [], []],
    'adminPlanModif' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modifPlanFormation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/plan/modif']], [], [], []],
    'adminPlanSupp' => [['id'], ['_controller' => 'App\\Controller\\AdminController::suppPlanFormation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/plan/supp']], [], [], []],
    'client' => [[], ['_controller' => 'App\\Controller\\ClientController::authentif'], [], [['text', '/client']], [], [], []],
    'sessions_ntp' => [[], ['_controller' => 'App\\Controller\\ClientController::sessions_ntp'], [], [['text', '/client/sessions/non_totalements_pourvues']], [], [], []],
    'sessions_ni' => [[], ['_controller' => 'App\\Controller\\ClientController::sessions_ni'], [], [['text', '/client/sessions/non_inscrit']], [], [], []],
    'sessions_dmpf' => [[], ['_controller' => 'App\\Controller\\ClientController::sessions_dmpf'], [], [['text', '/client/sessions/plan_formation']], [], [], []],
    'sessions_nc' => [[], ['_controller' => 'App\\Controller\\ClientController::sessions_nc'], [], [['text', '/client/sessions/non_closes']], [], [], []],
    'formation' => [[], ['_controller' => 'App\\Controller\\FormationController::liste'], [], [['text', '/formation']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegisterController::register'], [], [['text', '/register']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
