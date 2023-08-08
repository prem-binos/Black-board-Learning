<?php

//include("db.php");
$Fname = $_GET["cname"];
$Email = $_GET["cemail"];
$Mobile = $_GET["clevel"];
$Comment = $_GET["cmessage"];

if (empty($Fname) || empty($Email) || empty($Mobile)) {
    echo "<h3 style='color:#ff0000;'><center>Please fill in all fields</center></h3>";
    // echo "<meta http-equiv='refresh' content='2;url='>";
} else {
    // $to = "hr@blackboardlearning.in,blackboardlearning16@gmail.com,jeyaprakash101@gmail.com";
    $to = "jeyaprakash101@gmail.com";
    $subject = 'Customer Information';

    $message = "<p><b> Name: </b>" . $Fname . "</p>";
    $message .= "<p><b>Email: </b>" . $Email . "</p>";
    $message .= "<p><b>level: </b>" . $Mobile . "</p>";
    $message .= "<p><b>message: </b>" . $Comment . "</p>";

    $header = "From:info@blackboardlearning.in\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail($to, $subject, $message, $header);

    $too = $Email;
    $subjectt = "Black Board Learning Course Enquiry";

    $messagee = "<b>Dear " . $Fname . ",</b>";
    $messagee .= "<p>Congratulations on taking the first step to become Data Scientist. We have received your information. Our customer care representative will get in touch with you in next 24 hours. Thank You for your interest. Happy Learning!!!</p>";

    $headerr = "From:info@blackboardlearning.in \r\n";
    $headerr .= "MIME-Version: 1.0\r\n";
    $headerr .= "Content-type: text/html\r\n";

    $retvall = mail($too, $subjectt, $messagee, $headerr);
    if ($retval && $retvall) {
        echo "<p style='color:#4e9e03;'><center>Response submitted</center></p>";
        // echo '<a href="download.pdf">download file</a>';
        echo "<meta http-equiv='refresh' content='5;url='>";
       
    } else {
        echo "<p style='color:#4e9e03;'><center>Response failed</center></p>";
        echo "<meta http-equiv='refresh' content='2;url='>";
    }
}
?>