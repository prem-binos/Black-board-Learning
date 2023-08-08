<?php

//include("db.php");
$Fname = $_GET["cname"];
$Email = $_GET["cemail"];
$Mobile = $_GET["cphone"];
$Comment = $_GET["cmessage"];

if (empty($Fname) || empty($Email) || empty($Mobile) || empty($Comment)) {
    echo "<h4 style='color:#ff0000;'><center>Fill Required Fields</center></h4>";
    // echo "<meta http-equiv='refresh' content='2;url='>";
} else {
    /* $to = "local@manibondart.com"; */
    $to = "blackboardlearning16@gmail.com,info@blackboardlearning.in,manibondart@gmail.com";
    $subject = 'New Enquiry from Black Board Learning';

    $message = "<p><b> Name: </b>" . $Fname . "</p>";
    $message .= "<p><b>Email: </b>" . $Email . "</p>";
    $message .= "<p><b>Mobile: </b>" . $Mobile . "</p>";
    $message .= "<p><b>Course: </b>" . $Course . "</p>";
    $message .= "<p><b>message: </b>" . $Comment . "</p>";

    $header = "From:info@blackboardlearning.in\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail($to, $subject, $message, $header);

    $too = $Email;
    $subjectt = "Black Board Learning - Thank you for the Enquiry";

    $messagee = "<h2><b>Hello, " . $Fname . ",</b></h2>";
    $messagee .= "<p>Thank you for reaching out to Black Board Learning. We have received your enquiry and will be in touch with you within next 24-48 hours.</p>";

    $headerr = "From:info@blackboardlearning.in \r\n";
    $headerr .= "MIME-Version: 1.0\r\n";
    $headerr .= "Content-type: text/html\r\n";

    $retvall = mail($too, $subjectt, $messagee, $headerr);
    if ($retval && $retvall) {
        echo "<p style='color:#000000;'><center>Response Submitted</center></p>";
        // echo '<a href="download.pdf">download file</a>';
        echo "<meta http-equiv='refresh' content='5;url='>";
       
    } else {
        echo "<p style='color:#4e9e03;'><center>Response failed</center></p>";
        echo "<meta http-equiv='refresh' content='2;url='>";
    }
}
?>