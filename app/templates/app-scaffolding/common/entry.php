    <?php if ($form->checkErrorMsg()) : ?>
        <div class="<?php echo $success ? 'success' : 'error' ?>">
            <b><?php echo $form->getErrorMsg() ?></b>
        </div><br>
    <?php endif; ?>

    <div id="entry-box">
        <?php echo $form->beginForm() ?>
            <p>
                <b>TICKET NUMBER:</b>
                <a class="fancybox" href="#popTicket">
                    <span class="fa fa-question-circle entry-help theme-color-other"></span>
                </a>
            </p>
            <?php echo $game->tf(1, 1, 1,'size-sm') ?> - <?php echo $game->tf(1, 1, 2,'size-md') ?> - <?php echo $game->tf(1, 1, 3,'size-sm') ?>

            <br><br>
            <p>
                <b>ENTRY NUMBER:</b>
                <a class="fancybox" href="#popEntry">
                    <span class="fa fa-question-circle entry-help theme-color-other"></span>
                </a>
            </p>
            <?php echo $game->tf(1,2,1) ?>

            <br><br>
            <input type="submit" name="submit" value="Submit Entry">
            <input name="entry_method" id="entry_method" value="" type="hidden">
            <?php echo $form->create_hidden('form_submitted', 1) ?>

            <br><br>
            <div class="small bold">
                <br>Need help finding <a class="fancybox" href="#popTicket"><b>Ticket Number</b>?</a>
                <br>Need help finding <a class="fancybox" href="#popEntry"><b>Entry Number</b>?</a>
            </div>
        <?php echo $form->endForm() ?>
    </div>