<?php
    $debug = $globe->get('feedback-send-browser-info');
    $subject = $globe->get('feedback-subject');
    $message = $globe->get('feedback-page-message');
    $thankyou_message = $globe->get('feedback-thankyou-message');

    require_once fileFromAdminCommon('/code/home/feedback.php');
?>

<?php if ($success) : # feedback submitted successfully - display thank you message ?>
    <div class="alert alert-success text-center" role="alert">
        <?php echo $thankyou_message; ?>
    </div>
<?php else : # show feedback form ?>
    <?php echo $feedback_form->beginForm() ?>

    <?php if($feedback_form->checkErrorMsg()): ?>
        <div class="alert alert-danger text-center" role="alert"><?php echo $feedback_form->getErrorMsg() ?></div>
    <?php endif; ?>

    <?php echo $message; ?>

    <div class="form-group">
        <label for="name">Name:</label>
        <?php echo $feedback_form->create_textbox('name', htmlspecialchars($unsafe_name), 32, 120, 'placeholder="Enter Name" class="form-control"') ?>
    </div>
    <div class="form-group">
        <label for="email">Email Address:</label>
        <?php echo $feedback_form->create_textbox('email', htmlspecialchars($unsafe_email), 32, 60, 'placeholder="Enter E-mail" class="form-control"') ?>
    </div>
    <div class="form-group">
        <label for="comments">Comments:</label>
        <?php echo $feedback_form->create_textarea('comments',htmlspecialchars($unsafe_comments),10,50,'virtual', 'class="form-control"') ?>
    </div>

    <input type="submit" name="submit" value="Submit" class="btn btn-primary center-block" />
    <?php echo $feedback_form->create_hidden('form_submitted', 1) ?>

    <?php echo $feedback_form->endForm() ?>
<?php endif; ?>
