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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::authentif'], null, null, null, false, false, null]],
        '/admin/statut/liste' => [[['_route' => 'adminStatutListe', '_controller' => 'App\\Controller\\AdminController::listeStatut'], null, null, null, false, false, null]],
        '/admin/client/liste' => [[['_route' => 'adminClientListe', '_controller' => 'App\\Controller\\AdminController::listeClient'], null, null, null, false, false, null]],
        '/admin/formation/liste' => [[['_route' => 'adminFormationListe', '_controller' => 'App\\Controller\\AdminController::listeFormation'], null, null, null, false, false, null]],
        '/admin/session/liste' => [[['_route' => 'adminSessionListe', '_controller' => 'App\\Controller\\AdminController::listeSession'], null, null, null, false, false, null]],
        '/admin/plan/liste' => [[['_route' => 'adminPlanListe', '_controller' => 'App\\Controller\\AdminController::listePlanFormation'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'client', '_controller' => 'App\\Controller\\ClientController::authentif'], null, null, null, false, false, null]],
        '/client/sessions/non_totalements_pourvues' => [[['_route' => 'sessions_ntp', '_controller' => 'App\\Controller\\ClientController::sessions_ntp'], null, null, null, false, false, null]],
        '/client/sessions/non_inscrit' => [[['_route' => 'sessions_ni', '_controller' => 'App\\Controller\\ClientController::sessions_ni'], null, null, null, false, false, null]],
        '/client/sessions/plan_formation' => [[['_route' => 'sessions_dmpf', '_controller' => 'App\\Controller\\ClientController::sessions_dmpf'], null, null, null, false, false, null]],
        '/client/sessions/non_closes' => [[['_route' => 'sessions_nc', '_controller' => 'App\\Controller\\ClientController::sessions_nc'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'formation', '_controller' => 'App\\Controller\\FormationController::liste'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|s(?'
                        .'|tatut/(?'
                            .'|modif/([^/]++)(*:206)'
                            .'|supp/([^/]++)(*:227)'
                        .')'
                        .'|ession/(?'
                            .'|modif/([^/]++)(*:260)'
                            .'|supp/([^/]++)(*:281)'
                        .')'
                    .')'
                    .'|formation/(?'
                        .'|modif/([^/]++)(*:318)'
                        .'|supp/([^/]++)(*:339)'
                    .')'
                    .'|plan/(?'
                        .'|modif/([^/]++)(*:370)'
                        .'|supp/([^/]++)(*:391)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'adminStatutModif', '_controller' => 'App\\Controller\\AdminController::modifStatut'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'adminStatutSupp', '_controller' => 'App\\Controller\\AdminController::suppStatut'], ['id'], null, null, false, true, null]],
        260 => [[['_route' => 'adminSessionModif', '_controller' => 'App\\Controller\\AdminController::modifSession'], ['id'], null, null, false, true, null]],
        281 => [[['_route' => 'adminSessionSupp', '_controller' => 'App\\Controller\\AdminController::suppSession'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'adminFormationModif', '_controller' => 'App\\Controller\\AdminController::modifFormation'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'adminFormationSupp', '_controller' => 'App\\Controller\\AdminController::suppFormation'], ['id'], null, null, false, true, null]],
        370 => [[['_route' => 'adminPlanModif', '_controller' => 'App\\Controller\\AdminController::modifPlanFormation'], ['id'], null, null, false, true, null]],
        391 => [
            [['_route' => 'adminPlanSupp', '_controller' => 'App\\Controller\\AdminController::suppPlanFormation'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
