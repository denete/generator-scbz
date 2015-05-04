
    <?php if (Help::isLoggedIn()) : ?>
        Welcome, <?php echo Help::player()->first_name ?>!
        <br class="visible-xs visible-ie">
        <a class="btn btn-primary btn-welcome" href="<?php echoAppURL() ?>/users/logout">Log Out</a>
        <a class="btn btn-primary btn-welcome" href="/general/users/register" target="_blank">Update Account</a>
    <?php else: ?>
        <a class="btn btn-primary btn-welcome" href="<?php echoAppURL() ?>/users/login">Log In</a>
        <a class="btn btn-primary btn-welcome" href="/general/users/register" target="_blank">Create Account</a>
    <?php endif; ?>
