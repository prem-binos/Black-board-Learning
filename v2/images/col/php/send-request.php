<?php

$FirstName=$_GET["firstname"];
$MailID=$_GET["mailid"];
$MobileNumber=$_GET["phonenumber"];
$Messages=$_GET["message"];


if(!empty($FirstName) && !empty($MailID) && !empty($MobileNumber) && !empty($Messages)){
                $to="$MailID";
        $subject = 'Srivari';

         $message = "<p><b> Your Message has been Submitted Successfully</b></br></p>";
         $header = "From:srivarialignerrs@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $retval = mail ($to,$subject,$message,$header);

                $too="srivarialignerrs@gmail.com,tokarthikv@gmail.com,karthymit13@gmail.com";
        $subjectt = 'Request';

         $messagee = "<p>Name : ".$FirstName."  </p>
                                          <p>MobileNumber : ".$MobileNumber."</p>
                                          <p>Message : ".$Messages."</p>
                                          <p>MailID: ".$MailID." </p>";
         $headerr = "From:srivarialignerrs@gmail.com \r\n";
         $headerr .= "MIME-Version: 1.0\r\n";
         $headerr .= "Content-type: text/html\r\n";

         $retvall = mail ($too,$subjectt,$messagee,$headerr);

        if($retval)
        {
      echo '<span style="color:#08622C;text-align:center;"><h4>Request Submitted</h4></span>';
        }
        if($retvall)
                {
                        echo '<span style="color:#08622C;text-align:center;"><h4>Customer Support will reach you soon</h4></span>';
                        echo "<meta http-equiv='refresh' content='2;url='>";
                }
				}
				else
				{
					      echo '<span style="color:#08622C;text-align:center;"><h4>>Fill Required Fields</h4></span>';

				}
?>