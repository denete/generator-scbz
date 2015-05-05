<?php echo $login_form->beginForm() ?>
    <?php echo $login_form->create_hidden('form_submitted', 1) ?>

    <?php if($login_form->checkErrorMsg()) : ?>
        <div class="alert alert-danger text-center" role="alert">
            <?php echo $login_form->getErrorMsg() ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <label for="email">E-mail Address:</label>
        <?php echo $login_form->create_textbox('email', htmlspecialchars($unsafe_email), 32, 60, 'placeholder="Enter E-mail" class="form-control"') ?>
    </div>
    <div class="form-group">
        <label for="password">E-mail Address:</label>
        <?php echo $login_form->create_passwordbox('password', '', 32, 32, 'class="form-control"') ?>
    </div>

    <p class="text-right"><a href="/general/users/forgot.php" target="_blank">Forgot password?</a></p>
    <input type="submit" name="submit" value="Log In" class="btn btn-primary center-block" />
<?php echo $login_form->endForm() ?>
