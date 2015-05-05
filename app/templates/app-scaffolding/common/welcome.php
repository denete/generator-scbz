<?php if (Help::isLoggedIn()) : ?>
    <p class="welcome-user text-center">Welcome, <?php echo Help::player()->first_name ?>!</p>
    <a class="btn btn-welcome btn-block" href="<?php echoAppURL() ?>/users/logout">Log Out</a>
    <a class="btn btn-welcome btn-block" href="/general/users/register" target="_blank">My Account</a>
<?php else: ?>
    <p class="welcome-user text-center">&nbsp;</p>
    <a class="btn btn-welcome btn-block" href="<?php echoAppURL() ?>/users/login">Log In</a>
    <a class="btn btn-welcome btn-block" href="/general/users/register" target="_blank">Register</a>
<?php endif; ?>
