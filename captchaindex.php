<?php
session_start(); // this MUST be called prior to any output including whitespaces and line breaks!

$GLOBALS['ct_recipient']   = 'YOU@EXAMPLE.COM'; // Change to your email address!
$GLOBALS['ct_msg_subject'] = 'Securimage Test Contact Form';

$GLOBALS['DEBUG_MODE'] = 1;
// CHANGE TO 0 TO TURN OFF DEBUG MODE
// IN DEBUG MODE, ONLY THE CAPTCHA CODE IS VALIDATED, AND NO EMAIL IS SENT


// Process the form, if it was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
    // if the form has been submitted

    foreach($_POST as $key => $value) {
        if (!is_array($key)) {
            // sanitize the input data
            if ($key != 'ct_message') $value = strip_tags($value);
            $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
        }
    }

   
    $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code

    $errors = array();  // initialize empty error array

    // Only try to validate the captcha if the form has no errors
    // This is especially important for ajax calls
    if (sizeof($errors) == 0) {
        require_once dirname(__FILE__) . '/securimage.php';
        $securimage = new Securimage();

        if ($securimage->check($captcha) == false) {
            $errors['captcha_error'] = 'Incorrect security code entered';
        }
    }

    if (sizeof($errors) == 0) {
        // no errors, send the form
       

        if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
           
        }

        $return = array('error' => 0, 'message' => 'OK');
        die(json_encode($return));
    } else {
        $errmsg = '';
        foreach($errors as $key => $error) {
            // set up error messages to display with each field
            $errmsg .= " - {$error}\n";
        }

        $return = array('error' => 1, 'message' => $errmsg);
        die(json_encode($return));
    }
} // POST

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title>Securimage Example Form</title>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript">
        $.noConflict();

        function reloadCaptcha()
        {
            jQuery('#siimage').prop('src', './securimage_show.php?sid=' + Math.random());
        }

        function processForm()
        {
            jQuery.ajax({
                url: '<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES) ?>',
                type: 'POST',
                data: jQuery('#contact_form').serialize(),
                dataType: 'json'
            }).done(function(data) {
                if (data.error === 0) {
                    jQuery('#success_message').show();
                    jQuery('#contact_form')[0].reset();
                    reloadCaptcha();
                    setTimeout("jQuery('#success_message').fadeOut()", 12000);
                    alert("ThereSuccess.\n\n" + data.message);
                } else {
                    alert("There was an error with your submission.\n\n" + data.message);

                    if (data.message.indexOf('Incorrect security code') >= 0) {
                        jQuery('#captcha_code').val('');
                    }
                }
            });
            return false;
        }
    </script>
</head>
<body>

    <div id="success_message" style="display: none">Your message has been sent!<br />We will contact you as soon as possible.</div>
    <form method="post" action="" id="contact_form" onsubmit="return processForm()">
    <input type="hidden" name="do" value="contact" />
        <p>
            <?php require_once 'securimage.php'; echo Securimage::getCaptchaHtml(array('input_name' => 'ct_captcha')); ?>
        </P>
        <input type="submit" value="Submit Message" />
    </p>

</form>
</body>
</html>

