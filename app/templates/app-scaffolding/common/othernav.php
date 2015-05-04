    <li class="<?php echo $menu->getNavClass('terms') ?>">
        <a href="<?php echoAppURL() ?>/terms">terms <span style="text-transform:none;">of</span> use</a>
    </li>
    <li class="<?php echo $menu->getNavClass('privacy') ?>">
        <a href="<?php echoAppURL() ?>/privacy">privacy policy</a>
    </li>

    <?php if (UserAuth::getInstance()->isLoggedIn()) : ?>
    <li class="<?php echo $menu->getNavClass('privacy') ?>">
        <a href="/general/users/cancel" target="_blank">cancel account</a>
    </li>
    <?php endif; ?>
