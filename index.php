<?php
 $grade=100;

 if($grade<=100 && $grade>=90){
   echo "A";
 } elseif ($grade>=80 && $grade<90){
   echo "B";
 } elseif ($grade<=70 && $grade>=60){
   echo "C";
 } elseif ($grade<=60 && $grade>=50){
   echo "D";
 } elseif ($grade <=51 && $grade >=10){
   echo "F";
 } else {
   echo "You Failed";
 }
?>