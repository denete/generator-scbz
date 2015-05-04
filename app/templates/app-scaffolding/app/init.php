<?php

#bootstrap admin
    require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/.php/global.php';
    define("GAME_ID", $game->getId());
    define("GAME_DIR", $game->game_directory);
    define("APP_URL", '/' . $game->game_directory);
    define("APP_DIR", $_SERVER['DOCUMENT_ROOT'] . '/' . $game->game_directory);

#error checking on non-live environments
    if (!LIVE) {
        @ini_set('log_errors','On'); // php error logging
        @ini_set('display_errors','On'); // public display of errors
    }

#bootstrap app
    require_once dirname(__FILE__) . '/autoload.php';
    require_once dirname(__FILE__) . '/functions.php';
    require_once dirname(__FILE__) . '/tests.php';
    require_once dirname(__FILE__) . '/../_config.php';