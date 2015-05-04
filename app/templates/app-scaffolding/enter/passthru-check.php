<?php
    if ($globe->get('game-is-passthru')) {
        $passthru = passthruURL($globe->get('game-passthru-url'), $globe->set('game-is-live-test'));
        define('LOGIN_REDIRECT', $passthru);
        require_once fileFromAdminCommon('code/entry/index.php');
    } else {
        require_once fileFromStateCommon('code/entry/index.php');
    }