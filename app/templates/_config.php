<?php

$menu  = new Menu();
    $menu->addPattern('register' , '/register');
    $menu->addPattern('enter'    , array('/enter', '/login'));
    $menu->addPattern('home'     , array('/home', '/template'));
    $menu->addPattern('prizes'   , '/prizes');
    $menu->addPattern('winners'  , '/winners');
    $menu->addPattern('rules'    , '/rules');
    $menu->addPattern('faqs'     , '/faqs');
    $menu->addPattern('feedback' , '/feedback');
    $menu->addPattern('terms'    , '/terms');
    $menu->addPattern('privacy'  , '/privacy');
    $menu->addPattern('legal'    , '/legal');

$globe = new Globe();
    $globe->set('lottery-name'        , '<%= fullJurisdictionName %>');
    $globe->set('lottery-name-abbr'   , '<%= abbrJurisdictionName %>');

    $globe->set('lottery-url'         , '<%= lotteryUrl %>');
    $globe->set('game-name'           , '<%= gameName %>');
    $globe->set('game-analytics-code' , '<%= googleAnalyticsCode %>');

    $globe->set('game-over-test'      , false);
    $globe->set('game-is-live-test'   , false);
    $globe->set('game-is-passthru'    , <%= gameIsPassthru %>);
    $globe->set('game-passthru-url'   , '<%= passthruUrl %>');

    $globe->set('feedback-page-message'      , "<p>Please use this form to submit your questions or comments pertaining to the {$globe->get('lottery-name')} {$globe->get('game-name')}.</p>");
    $globe->set('feedback-thankyou-message'  , "<p><strong>Thank you.  Your feedback has been sent.</strong></p><p>A player service representative will review your e-mail and respond as necessary to the e-mail address you included.</p>");
    $globe->set('feedback-subject'           , "Feedback {$globe->get('lottery-name-abbr')} {$globe->get('game-name')}");
    $globe->set('feedback-send-browser-info' , true);
