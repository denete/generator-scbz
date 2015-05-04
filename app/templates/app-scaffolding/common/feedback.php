<?php
    $debug            = $globe->get('feedback-send-browser-info');
    $subject          = $globe->get('feedback-subject');
    $message          = $globe->get('feedback-page-message');
    $thankyou_message = $globe->get('feedback-thankyou-message');

    require_once fileFromAdminCommon('/code/home/feedback.php');
?>

<?php if ($success) : #feedback submitted successfully - display thank you message ?>
    <div class="success">
        <b><?php echo $thankyou_message; ?></b>
    </div>
<?php else : #show feedback form ?>
    <?php echo $feedback_form->beginForm() ?>

        <?php if($feedback_form->checkErrorMsg()): ?>
            <div class="error"><b><?php echo $feedback_form->getErrorMsg() ?></b></div>
        <?php endif; ?>

        <br>
        <p><?php echo $message; ?></p>

        <b>Name:</b><br>
        <?php echo $feedback_form->create_textbox('name', htmlspecialchars($unsafe_name), 32, 120) ?>

        <br><br>
        <b>E-mail:</b><br>
        <?php echo $feedback_form->create_textbox('email', htmlspecialchars($unsafe_email), 32, 60) ?>

        <br><br>
        <b>Comments:</b><br>
        <?php echo $feedback_form->create_textarea('comments',htmlspecialchars($unsafe_comments),10,50) ?>

        <br><br>
        <input type="submit" name="submit" value="Submit" />
        <?php echo $feedback_form->create_hidden('form_submitted', 1) ?>

    <?php echo $feedback_form->endForm() ?>
<?php endif; ?>