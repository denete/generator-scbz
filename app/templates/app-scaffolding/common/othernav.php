<li class="<?php echo $menu->getNavClass('terms') ?>">
    <a href="<?php echoAppURL() ?>/terms#promotop">Terms of Use</a>
</li>
<li class="<?php echo $menu->getNavClass('privacy') ?>">
    <a href="<?php echoAppURL() ?>/privacy#promotop">Privacy Policy</a>
</li>
<li class="<?php echo $menu->getNavClass('legal') ?>">
    <a href="<?php echoAppURL() ?>/legal#promotop">Legal Notices</a>
</li>

<?php if (UserAuth::getInstance()->isLoggedIn()) : ?>
    <li class="<?php echo $menu->getNavClass('privacy') ?>">
        <a href="/general/users/cancel" target="_blank">cancel account</a>
    </li>
<?php endif; ?>
