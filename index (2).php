<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <style>
            
            body 
                {
                    background-color: #d0e4fe;
                    font-family: "Times New Roman";
                    font-size: 20px;
                    color: #AFB798;
                }

            

            

            input
                {
                    color: #A98DF8;
                }
                
        </style>
        
    </head>
   
    <body>
    
            
        <form action="index.php"  method="GET">
           
            Customer Account Info Entry
            Customer Name: <input type="text" name='customerNameText'> <br />
             Email Address: <input type="text" name='emailAddressText'> <br/>
            Account Number: <input type="text" name='accountNumberText'> <br/>
            Opening Date: <input type="text" name='openingDateText'> <br/>
             
             <input type='submit' name='createButton' value='Create Account'/> <br />
             Transaction <br/>
            Amount: <input type="text" name='amountText'> <br />
            <input type='submit' name='depositButton' value='Deposit'/>
            <input type='submit' name='withdrawButton' value='Withdraw'/><br />
            <input type="submit" name='showReportButton' value="Show Report">
           </form>
         
        
       
        
        <?php
        
        /* <form action="show_report.php" method="GET">
            
            
            
        </form>  body te hobe */
        
        require_once 'account.php';
        require_once 'customer.php';
        
        session_start();
        
         if(isset($_GET["createButton"]))
            {
       
        $customer = new Customer();
        
        $customer->set_customer_name($_GET['customerNameText']);
        $customer->set_email_address($_GET['emailAddressText']);
        
         $account = new Account($_GET['accountNumberText'], $_GET['openingDateText']);
        $customer->set_customer_account($account);
        
        $_SESSION['a_customer'] = $customer;
        
            
           echo 'created';
          }
        
         if(isset($_GET['depositButton']))
            {
                       $customer = $_SESSION['a_customer'];
                       
                       $customer->get_customer_account()->deposit($_GET['amountText']);
                       
               
                       $_SESSION['a_customer'] = $customer;
                       
                       echo 'deposited';
            }
           
             if(isset($_GET['withdrawButton']))
            {
                   $customer = $_SESSION['a_customer'];
                       
                       echo $customer->get_customer_account()->withdraw($_GET['amountText']);
                       
                       $_SESSION['a_customer'] = $customer;
                       
            }
            
            if(isset($_GET['showReportButton']))
        {
             $customer = $_SESSION['a_customer'];
                 
              echo $customer->get_customer_account()->get_account_number().'<br/>';
              echo $customer->get_customer_name().'<br/>';
              echo $customer->get_customer_account()->get_opening_date().'<br/>';
              echo $customer->get_customer_account()->get_balance().'<br/>';
        }   
       
        
        
        
        
            
        
        
        ?>
    </body>
    
</html>
