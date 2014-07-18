 <?php


class Account {
    
    private $account_number;
    private $opening_date;
    private $balance;
    
    
    function __construct($account_number, $opening_date) {
        $this->account_number = $account_number;
        $this->opening_date = $opening_date;
        $this->balance = 0;
    }
    
    public function get_account_number() {
        return $this->account_number;
    }

    public function get_opening_date() {
        return $this->opening_date;
    }

    public function get_balance() {
        return $this->balance;
    }

   
    
    
    public function deposit($amount)
           {
        
        $this->balance += $amount;
        
            return 'deposited';
           }
           
           public function withdraw($amount)
           {
        
              if($this->balance - $amount >=0){
                    $this->balance -= $amount;
                return 'withdrwan';
              }
              
                else { 
                    return 'insufficient balance';
                    
                }
            }



    
}
