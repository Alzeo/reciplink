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
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\MainController::register'], [], [['text', '/register']], [], []],
    'discover' => [[], ['_controller' => 'App\\Controller\\MainController::allRecipes'], [], [['text', '/recettes']], [], []],
    'kitchen_user' => [['idUser'], ['_controller' => 'App\\Controller\\MainController::userKitchen'], [], [['variable', '/', '[^/]++', 'idUser'], ['text', '/profil']], [], []],
    'paleo_recipe' => [[], ['_controller' => 'App\\Controller\\MainController::paleoRecipes'], [], [['text', '/recettes/paleo']], [], []],
    'vegan_recipe' => [[], ['_controller' => 'App\\Controller\\MainController::veganRecipes'], [], [['text', '/recettes/vegan']], [], []],
    'vegetarien_recipe' => [[], ['_controller' => 'App\\Controller\\MainController::vegetarienRecipes'], [], [['text', '/recettes/vegetarien']], [], []],
    'vegetalien_recipe' => [[], ['_controller' => 'App\\Controller\\MainController::vegetalienRecipes'], [], [['text', '/recettes/vegetalien']], [], []],
    'recipe_index' => [[], ['_controller' => 'App\\Controller\\RecipeController::index'], [], [['text', '/recette/']], [], []],
    'recipe_new' => [[], ['_controller' => 'App\\Controller\\RecipeController::new'], [], [['text', '/recette/nouvelle']], [], []],
    'recipe_show' => [['id'], ['_controller' => 'App\\Controller\\RecipeController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'recipe_edit' => [['id'], ['_controller' => 'App\\Controller\\RecipeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'recipe_delete' => [['id'], ['_controller' => 'App\\Controller\\RecipeController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'recipe_like' => [['id'], ['_controller' => 'App\\Controller\\RecipeController::like'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'recipe_unsave' => [['id'], ['_controller' => 'App\\Controller\\RecipeController::unsave'], [], [['text', '/unsave'], ['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'recipe_save' => [['id'], ['_controller' => 'App\\Controller\\RecipeController::save'], [], [['text', '/save'], ['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_save_recipe' => [['id'], ['_controller' => 'App\\Controller\\UserController::saveRecipe'], [], [['text', '/recettes-enregistree'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_my_recipes' => [['id'], ['_controller' => 'App\\Controller\\UserController::userRecipes'], [], [['text', '/mes-recettes'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
];
