<?php

function d($value, $kill=false, $bgcolor='#e5eecc')
{
    Help::d($value, $kill, $bgcolor);
}

function appURL($echo=false)
{
    return APP_URL;
}

function echoAppURL()
{
    echo APP_URL;
}

function passthruURL($url=null, $live=LIVE)
{
    if (!$live || empty($url)) {
        $game_dir = Help::game()->game_directory;

        $url = Help::isSecure() ? "https://" : "http://";
        $url .= "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url .= "/{$game_dir}/enter/passthru-on-dev.php";
    }

    return $url;
}

function fileFromHere($filename)
{
    $filename = Help::StripFilenameExtension($filename);
    return "{$filename}.php";
}

function fileFromGame($filename)
{
    $fileFrom = new FileFrom();
    return $fileFrom->game($filename);
}

function fileFromCommon($filename, $dir_name='common')
{
    $fileFrom = new FileFrom();
    return $fileFrom->common($filename, $dir_name);
}

function fileFromState($filename)
{
    $fileFrom = new FileFrom();
    return $fileFrom->state($filename);
}

function fileFromStateCommon($filename)
{
    $fileFrom = new FileFrom();
    return $fileFrom->stateCommon($filename);
}

function fileFromAdminCommon($filename)
{
    $fileFrom = new FileFrom();
    return $fileFrom->adminCommon($filename);
}

function setupNonSCBZEnvironment()
{
    if (preg_match("/\.loc/", $_SERVER['HTTP_HOST'])) {
        define('LOC',true);
        define('DEV',false);
        define('UAT',false);
        define('LIVE',false);
    } elseif (preg_match("/\.dev\.secondchancebonuszone\.com/", $_SERVER['HTTP_HOST'])) {
        define('LOC',false);
        define('DEV',true);
        define('UAT',false);
        define('LIVE',false);
    } elseif (preg_match("/\.uat\.secondchancebonuszone\.com/", $_SERVER['HTTP_HOST'])) {
        define('LOC',false);
        define('DEV',false);
        define('UAT',true);
        define('LIVE',false);
    } elseif (preg_match("/\.uat\.secondchancebonuszone\.com/", $_SERVER['HTTP_HOST'])) {
        define('LOC',false);
        define('DEV',false);
        define('UAT',false);
        define('LIVE',true);
    }
}