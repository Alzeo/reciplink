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
        '/admin/login' => [[['_route' => 'admin_account_login', '_controller' => 'App\\Controller\\AdminAccountController::login'], null, null, null, false, false, null]],
        '/admin/comments' => [[['_route' => 'admin_comments_index', '_controller' => 'App\\Controller\\AdminCommentController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/newsletter' => [[['_route' => 'newsletter', '_controller' => 'App\\Controller\\AdminNewsletterController::index'], null, null, null, false, false, null]],
        '/admin/send/paleo' => [[['_route' => 'newsletter_paleo', '_controller' => 'App\\Controller\\AdminNewsletterController::newsPaleo'], null, null, null, false, false, null]],
        '/admin/posts' => [[['_route' => 'admin_posts_index', '_controller' => 'App\\Controller\\AdminPostController::index'], null, null, null, false, false, null]],
        '/admin/posts/new' => [[['_route' => 'admin_posts_new', '_controller' => 'App\\Controller\\AdminPostController::new'], null, null, null, false, false, null]],
        '/admin/recipes' => [[['_route' => 'admin_recipes_index', '_controller' => 'App\\Controller\\AdminRecipeController::index'], null, null, null, false, false, null]],
        '/admin/tags' => [[['_route' => 'admin_tags_index', '_controller' => 'App\\Controller\\AdminTagsController::index'], null, null, null, false, false, null]],
        '/admin/tags/new' => [[['_route' => 'admin_tags_new', '_controller' => 'App\\Controller\\AdminTagsController::create'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\MainController::register'], null, null, null, false, false, null]],
        '/recettes' => [[['_route' => 'discover', '_controller' => 'App\\Controller\\MainController::allRecipes'], null, null, null, false, false, null]],
        '/recettes/paleo' => [[['_route' => 'paleo_recipe', '_controller' => 'App\\Controller\\MainController::paleoRecipes'], null, null, null, false, false, null]],
        '/recettes/vegan' => [[['_route' => 'vegan_recipe', '_controller' => 'App\\Controller\\MainController::veganRecipes'], null, null, null, false, false, null]],
        '/recettes/vegetarien' => [[['_route' => 'vegetarien_recipe', '_controller' => 'App\\Controller\\MainController::vegetarienRecipes'], null, null, null, false, false, null]],
        '/recettes/vegetalien' => [[['_route' => 'vegetalien_recipe', '_controller' => 'App\\Controller\\MainController::vegetalienRecipes'], null, null, null, false, false, null]],
        '/apropos' => [[['_route' => 'main_about', '_controller' => 'App\\Controller\\MainController::about'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'main_cgu', '_controller' => 'App\\Controller\\MainController::cgu'], null, null, null, false, false, null]],
        '/posts' => [[['_route' => 'post_index', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/programme' => [[['_route' => 'programme_index', '_controller' => 'App\\Controller\\ProgrammeController::index'], null, null, null, false, false, null]],
        '/recette' => [[['_route' => 'recipe_index', '_controller' => 'App\\Controller\\RecipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recette/nouvelle' => [[['_route' => 'recipe_new', '_controller' => 'App\\Controller\\RecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset/password' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], null, null, null, true, false, null]],
        '/compte/recettes-enregistrees' => [[['_route' => 'user_save_recipe', '_controller' => 'App\\Controller\\UserController::saveRecipe'], null, null, null, false, false, null]],
        '/compte/update-password' => [[['_route' => 'update_password', '_controller' => 'App\\Controller\\UserController::updatePassword'], null, null, null, false, false, null]],
        '/compte/mes-recettes' => [[['_route' => 'user_my_recipes', '_controller' => 'App\\Controller\\UserController::userRecipes'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|comments/([^/]++)/(?'
                        .'|edit(*:204)'
                        .'|publish(*:219)'
                        .'|delete(*:233)'
                    .')'
                    .'|recipes/([^/]++)/(?'
                        .'|edit(*:266)'
                        .'|publish(*:281)'
                        .'|delete(*:295)'
                    .')'
                    .'|tags/([^/]++)/(?'
                        .'|edit(*:325)'
                        .'|delete(*:339)'
                    .')'
                    .'|users/([^/]++)/delete(*:369)'
                .')'
                .'|/c(?'
                    .'|uisine/([^/]++)(*:398)'
                    .'|ompte/([^/]++)(*:420)'
                .')'
                .'|/post/([^/]++)(*:443)'
                .'|/recette/([^/]++)(?'
                    .'|(*:471)'
                    .'|/(?'
                        .'|edit(*:487)'
                        .'|delete(*:501)'
                        .'|like(*:513)'
                        .'|unsave(*:527)'
                        .'|save(*:539)'
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
        204 => [[['_route' => 'admin_comments_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'], ['id'], null, null, false, false, null]],
        219 => [[['_route' => 'admin_comments_publish', '_controller' => 'App\\Controller\\AdminCommentController::publish'], ['id'], null, null, false, false, null]],
        233 => [[['_route' => 'admin_comments_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'], ['id'], null, null, false, false, null]],
        266 => [[['_route' => 'admin_recipes_edit', '_controller' => 'App\\Controller\\AdminRecipeController::edit'], ['id'], null, null, false, false, null]],
        281 => [[['_route' => 'admin_recipes_publish', '_controller' => 'App\\Controller\\AdminRecipeController::publish'], ['id'], null, null, false, false, null]],
        295 => [[['_route' => 'admin_recipes_delete', '_controller' => 'App\\Controller\\AdminRecipeController::delete'], ['id'], null, null, false, false, null]],
        325 => [[['_route' => 'admin_tags_edit', '_controller' => 'App\\Controller\\AdminTagsController::edit'], ['id'], null, null, false, false, null]],
        339 => [[['_route' => 'admin_tags_delete', '_controller' => 'App\\Controller\\AdminTagsController::delete'], ['id'], null, null, false, false, null]],
        369 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        398 => [[['_route' => 'kitchen_user', '_controller' => 'App\\Controller\\MainController::userKitchen'], ['username'], null, null, false, true, null]],
        420 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        443 => [[['_route' => 'post_show', '_controller' => 'App\\Controller\\PostController::show'], ['slug'], null, null, false, true, null]],
        471 => [[['_route' => 'recipe_show', '_controller' => 'App\\Controller\\RecipeController::show'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        487 => [[['_route' => 'recipe_edit', '_controller' => 'App\\Controller\\RecipeController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        501 => [[['_route' => 'recipe_delete', '_controller' => 'App\\Controller\\RecipeController::delete'], ['slug'], null, null, false, false, null]],
        513 => [[['_route' => 'recipe_like', '_controller' => 'App\\Controller\\RecipeController::like'], ['id'], null, null, false, false, null]],
        527 => [[['_route' => 'recipe_unsave', '_controller' => 'App\\Controller\\RecipeController::unsave'], ['id'], null, null, false, false, null]],
        539 => [
            [['_route' => 'recipe_save', '_controller' => 'App\\Controller\\RecipeController::save'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
