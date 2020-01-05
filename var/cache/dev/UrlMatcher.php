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
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\MainController::register'], null, null, null, false, false, null]],
        '/recettes' => [[['_route' => 'discover', '_controller' => 'App\\Controller\\MainController::allRecipes'], null, null, null, false, false, null]],
        '/recette' => [[['_route' => 'recipe_index', '_controller' => 'App\\Controller\\RecipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recette/nouvelle' => [[['_route' => 'recipe_new', '_controller' => 'App\\Controller\\RecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/recette/([^/]++)(?'
                    .'|(*:189)'
                    .'|/(?'
                        .'|edit(*:205)'
                        .'|like(*:217)'
                        .'|unsave(*:231)'
                        .'|save(*:243)'
                    .')'
                    .'|(*:252)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:278)'
                    .'|/(?'
                        .'|recettes\\-enregistree(*:311)'
                        .'|mes\\-recettes(*:332)'
                        .'|edit(*:344)'
                    .')'
                    .'|(*:353)'
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
        189 => [[['_route' => 'recipe_show', '_controller' => 'App\\Controller\\RecipeController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        205 => [[['_route' => 'recipe_edit', '_controller' => 'App\\Controller\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        217 => [[['_route' => 'recipe_like', '_controller' => 'App\\Controller\\RecipeController::like'], ['id'], null, null, false, false, null]],
        231 => [[['_route' => 'recipe_unsave', '_controller' => 'App\\Controller\\RecipeController::unsave'], ['id'], null, null, false, false, null]],
        243 => [[['_route' => 'recipe_save', '_controller' => 'App\\Controller\\RecipeController::save'], ['id'], null, null, false, false, null]],
        252 => [[['_route' => 'recipe_delete', '_controller' => 'App\\Controller\\RecipeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        278 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'user_save_recipe', '_controller' => 'App\\Controller\\UserController::saveRecipe'], ['id'], ['GET' => 0], null, false, false, null]],
        332 => [[['_route' => 'user_my_recipes', '_controller' => 'App\\Controller\\UserController::userRecipes'], ['id'], ['GET' => 0], null, false, false, null]],
        344 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
