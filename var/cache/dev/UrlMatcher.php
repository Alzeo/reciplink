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
        '/admin/login' => [[['_route' => 'admin_account_account', '_controller' => 'App\\Controller\\AdminAccountController::login'], null, null, null, false, false, null]],
        '/admin/recipes' => [[['_route' => 'admin_recipes_index', '_controller' => 'App\\Controller\\AdminRecipeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\MainController::register'], null, null, null, false, false, null]],
        '/recettes' => [[['_route' => 'discover', '_controller' => 'App\\Controller\\MainController::allRecipes'], null, null, null, false, false, null]],
        '/recettes/paleo' => [[['_route' => 'paleo_recipe', '_controller' => 'App\\Controller\\MainController::paleoRecipes'], null, null, null, false, false, null]],
        '/recettes/vegan' => [[['_route' => 'vegan_recipe', '_controller' => 'App\\Controller\\MainController::veganRecipes'], null, null, null, false, false, null]],
        '/recettes/vegetarien' => [[['_route' => 'vegetarien_recipe', '_controller' => 'App\\Controller\\MainController::vegetarienRecipes'], null, null, null, false, false, null]],
        '/recettes/vegetalien' => [[['_route' => 'vegetalien_recipe', '_controller' => 'App\\Controller\\MainController::vegetalienRecipes'], null, null, null, false, false, null]],
        '/recette' => [[['_route' => 'recipe_index', '_controller' => 'App\\Controller\\RecipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recette/nouvelle' => [[['_route' => 'recipe_new', '_controller' => 'App\\Controller\\RecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], null, null, null, true, false, null]],
        '/compte/edit' => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], null, null, null, false, false, null]],
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
                .'|/c(?'
                    .'|uisine/([^/]++)(*:189)'
                    .'|ompte/([^/]++)(?'
                        .'|/(?'
                            .'|recettes\\-enregistree(*:239)'
                            .'|mes\\-recettes(*:260)'
                        .')'
                        .'|(*:269)'
                    .')'
                .')'
                .'|/recette/([^/]++)(?'
                    .'|(*:299)'
                    .'|/(?'
                        .'|edit(*:315)'
                        .'|delete(*:329)'
                        .'|like(*:341)'
                        .'|unsave(*:355)'
                        .'|save(*:367)'
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
        189 => [[['_route' => 'kitchen_user', '_controller' => 'App\\Controller\\MainController::userKitchen'], ['username'], null, null, false, true, null]],
        239 => [[['_route' => 'user_save_recipe', '_controller' => 'App\\Controller\\UserController::saveRecipe'], ['username'], ['GET' => 0], null, false, false, null]],
        260 => [[['_route' => 'user_my_recipes', '_controller' => 'App\\Controller\\UserController::userRecipes'], ['username'], ['GET' => 0], null, false, false, null]],
        269 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        299 => [[['_route' => 'recipe_show', '_controller' => 'App\\Controller\\RecipeController::show'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        315 => [[['_route' => 'recipe_edit', '_controller' => 'App\\Controller\\RecipeController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'recipe_delete', '_controller' => 'App\\Controller\\RecipeController::delete'], ['slug'], null, null, false, false, null]],
        341 => [[['_route' => 'recipe_like', '_controller' => 'App\\Controller\\RecipeController::like'], ['id'], null, null, false, false, null]],
        355 => [[['_route' => 'recipe_unsave', '_controller' => 'App\\Controller\\RecipeController::unsave'], ['id'], null, null, false, false, null]],
        367 => [
            [['_route' => 'recipe_save', '_controller' => 'App\\Controller\\RecipeController::save'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
