<?php
extract($_REQUEST);
$file=fopen("form_Data.txt","a");

fwrite($file, "name :");
fwrite($file, $username ."\n");
fwrite($file, "email :");
fwrite($file, $email ."\n");
fwrite($file, "subject :");
fwrite($file, $subject ."\n");
fwrite($file, "message:");
fwrite($file, $message ."\n");

fclose($file);
exit();
  ?>