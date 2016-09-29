<!DOCTYPE html>
<html>

<title>The EDMachine</title>

<body>






            <h1>Come and send your encrypted message!</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <input type="text" name="subject" placeholder="Subject..."><br><br>
              <input type="text" name="reciever" placeholder="Recipient Email..."><br><br>
             <textarea type="text" name="message" placeholder="Message..."></textarea><br><br>
              

              <input type="submit" name="submit" value="Submit">                  
            </form>





<?php

      
      $mail_From = secure_in($_POST["sender_Email"]);
      $mail_NFrom = secure_in($_POST["sender_Name"]);
      $mail_To =  secure_in($_POST["reciever"]);
      $mail_Subject = secure_in($_POST["subject"]);
      $mail_Mess = secure_in($_POST["message"]);
      
      $mail_Header = "From: " . $mail_From . "\r\n" . "Name: " . $sender_Name . "\r\n";

      mail($mail_To, $mail_Subject, $mail_Mess, $mail_Header);


      function secure_in($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
           }
      
    ?>

    
  </body>
</html>