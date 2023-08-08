<?php
if(isset($_POST['submit'])){
   print_r($_POST);
    //     $error_message = '';
    //     $valid = 1;
    //     if(empty($_POST['name']))
    //     {
    //         $valid = 0;
    //         $error_message .= 'Please enter your name.\n';
    //     }
    //     else if(empty($_POST['mobile']))
    //     {
    //         $valid = 0;
    //         $error_message .= 'Please enter your mobile.\n';
    //     }
    //   else if(empty($_POST['fage']))
    //     {
    //         $valid = 0;
    //         $error_message .= 'Please enter your email.\n';
    //     }
       
        // else if($valid == 1)
        // {
        $toId = $_POST['fage'];
		$subject = "test message from form";
		$message = "New Test Message";
		//echo $message;
		$fromId = "info@blackboardlearning.com";
		//$cc = $mailDataArray["cc"];
		$cc = "";
		$cc2 = "";
		
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n";
		$headers .= "From: $fromId\r\n";
		$headers .="Cc:$cc,$cc2\r\n";
		
		$response = mail($toId, $subject, $message, $headers);
		
// 		return $response;
    // }
}
?>