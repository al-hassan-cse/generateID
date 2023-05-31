<?php

function GenerateID(){
   $chardid = md5(uniqid(rand() , true));
   $v = unpack("C*", $chardid);
   $v = implode("", $v);
   return substr($v, 0, 8);   // return value 0 to 10 chracters
}
 echo GenerateID();
?>
