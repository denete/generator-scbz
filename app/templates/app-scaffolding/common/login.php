    <div id="login-box">
        <?php echo $login_form->beginForm() ?>
            <?php echo $login_form->create_hidden('form_submitted', 1) ?>

            <?php if($login_form->checkErrorMsg()) : ?>
            <div class="error"><?php echo $login_form->getErrorMsg() ?></div>
            <?php endif; ?>

            <br>
            <b>E-mail Address: </b><br>
            <?php echo $login_form->create_textbox('email', htmlspecialchars($unsafe_email), 32, 96) ?><br><br>

            <b>Password:</b><br>
            <?php echo $login_form->create_passwordbox('password', '', 32, 32) ?><br><br>

            <p class="text-right"><a href="/general/users/forgot.php" target="_blank">Forgot password?</a></p>
            <input class="btn" type="submit" name="submit" value="Log In" />
        <?php echo $login_form->endForm() ?>
    </div>