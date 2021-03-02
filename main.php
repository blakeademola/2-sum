<?php
/*
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.
*/
$nums=[3,3];
 $target=6;
       if(count($nums) && !is_null($target)){  
        foreach($nums as $key=>$num){
        
            unset($nums[$key]);
            $new = $nums;
          foreach($new as $keys=>$val){
              if(($num + $val) == $target){
                  $result=[$key,$keys];
              }
          }  
           
        }
        print_r($result);
       }
    