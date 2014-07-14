
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
   <?php
         require_once 'person.php'; 
         $a_person =new Person();
         $a_person->firstname='James';
         $a_person->middlename='fdfs';
         $a_person->lastname='sdfsdf';
         
         
         echo $a_person->get_full_name(). '<br/>';
         echo $a_person->get_reverse_name();
          
         
                 
                 
    ?>
    </body>
</html>
