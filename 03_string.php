<?php
 $str1="This";
 $len=strlen($str1);
  echo  "The length of the string is " . $len . " Thank you";
  echo "<br>";
  echo  "The Number of  word of the string is " .  str_word_count($str1)  . " Thank you";
  echo "<br>";
  echo "the  string reverse " .strrev($str1)." Thank you";
  echo "<br>";
  echo "the  position of the sub string  " .strpos($str1,"is")." Thank you";
  echo "<br>";
  echo "the  replaced of the sub string  " .str_replace("is","at",$str1)." Thank you";


?>