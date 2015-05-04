<?php

$runTests = false;

if (!LIVE && $runTests) {
    Help::d('=== TESTS STARTING ===');

    testCommonFunctions();
    testMenu();
    testGlobe();
    testPointsAndEntries();

    Help::d('=== TESTS COMPLETE ===', true);
}

function testCommonFunctions()
{
   d('passthruURL(): '. passthruURL());
}

function testMenu()
{
    $menu = new Menu();
    $menu->addPattern('home',     array('/home', '/index'));
    $menu->addPattern('template', '/template');
    $menu->displayAll();
}

function testGlobe()
{
    $globe = new Globe();
    $globe->set('lottery-url',  'http: //nylottery.ny.gov/');
    $globe->set('lottery-name', 'NY Lottery');
    $globe->displayAll();
}

function testPointsAndEntries()
{
    $points      = Help::getDrawPoints();
    $draw_count  = count($points);
    $draw_points = $points[$draw_count];

    d($points);
    d("Total 2nd Chance Entries for Drawing {$draw_count}: <b>{$draw_points}</b>");

    $current_draw_points = Help::getCurrentDrawPoints();
    d($current_draw_points);
}