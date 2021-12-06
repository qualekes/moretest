<?php   
// Write a program that prints every number from 1 to 100. If it’s a multiple of 3, it should print “Fizz”. If it’s a multiple of 5, it should print “Buzz”. If it’s a multiple of 3 and 5, it should print “FizzBuzz”.



for($i= 1; $i <= 100; $i++) {
   echo "$i ";
   if($i % 3 == 0){
      echo "Fixx";
   } 
   elseif($i % 5 == 0){
      echo "Buxx";
   }
   elseif($i % 5 == 0 && $i  % 3 == 0) {
      echo "FixxBuxx";
   }
}






?>