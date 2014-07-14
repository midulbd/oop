<?php

class Person {
       
         public $firstname;
         public $lastname;
         public $middlename;
         
         public function get_full_name()
         {
             return $full_name=  $this->firstname.' '. $this->middlename.' '.$this->lastname;
          
             
         }
         
         public function get_reverse_name()
         {
           $full_name=  $this->get_full_name();
           $reverse_name= strrev($full_name);
           return $reverse_name;
         }
     }
        ?>

