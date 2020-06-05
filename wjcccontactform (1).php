<html>
<head></head>

    <body>
        <a href="contactpage.php"> CONTACT FORM</a>
        <p id="wJCC FOUNDATION"></p>
        <script>
            var person = prompt("please enter your name");
            document.getElementById("WJCC FOUNDATION").innerHTML = "Hello " + person + "! Welcome to my website";
        </script>
        <!-- Start of HubSpot Embed Code -->
<!--<pt" id="hs-script-loader" async defer src="//js.hs-scripts.com/7371273.js"></script> -->
<!-- End of HubSpot Embed Codescript type="text/javascri -->
        <!-------------Contact Form---------------------- -->
        <section>
            <form action="Contact_Confirm.php" method="post">
            Name:<br>
            <input type="text" name="name">
            <br>
            Phone:<br>
            <input type="text"name="phone">
            <br>
            Reason:<br>
            <input type="text"name="Reason">
            <br>
            Message:<br>
            <textarea name="message" row =10 col =32> </textarea>
            <br><br>
            E-mail:<br>
            <input type="text"name="email">
            <br>
            </form> 
        </section>
        <?php
            $name=$_POST['name'];
            $visitor_phone = $_POST['phone number'];
            $visitor_reason= $_POST['reason'];
            $message = $_POST['message'];
            $visitor_email= $_POST['email'];
            $email_form  = "donotreply@wjcc.com";
            $email_subject = "new form submission";
            $email_body = "you have received a new messagenfrom the user" . $name .
              "\r\n visitor's phone:" . $visitor_phone .
              "\r\n visitor's reason:" . $visitor_reason .
              "\r\n visitor's message:" . $visitor_message .
              "\r\n visitor email" . $visitor_email;

            $to ="wjcc email";  
                $headers = "from: $email_form \r\n";

            $sent1 = mail($to, $email_subject, $email_body, $headers);
            $confirmation_subject="thanks for contacting us";
            $confirmation_body = "hello $name,\n".
            "thank you for contacting us, we will be in touch shortly. do not reply to this email.";
            $sent2 = mail($visitor_email, $confirmation_subject, $confirmation_body, $headers);
            $confirmation_subject = "thanks for contacting us";
        ?>
    </body>
</html>