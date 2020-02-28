<?php 
class Affiliate {
    private $name,$balance=0,$upperAffiliate,$subAffiliates=array(),$customers=array();
    function __construct($name) {
        $this->name=$name;
    }
    public function Refer($name){
        if($name instanceof Customers){
           $this->customers[]=$name;
        }else{
           $this->subAffiliates[]=$name;
        }
    }
    public function Withdraw($v){  
        if($this->getBalance()<100){
             echo " Khong the rut tien vi balance nho hon $100";
        }else{
 
            if(($this->getBalance() )< $v){
                echo"số tiền rút lớn hơn balance hiện có";
            }
            else{
                
                $this->setBalance($this->getBalance() - $v);
                echo "rút tiền thành công số tiền còn lại là ".$this->getBalance();
            }
        }

        
    }
    public function PrintSubAff(){
       foreach($this->subAffiliates as $v){
           echo ($v->getName()." ".$v->getBalance());
           echo"</br>";
       }
    }
    public function PrintCustomers(){
    print_r($this->customers);
    }

    /**
     * Get the value of balance
     */ 
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of upperAffiliate
     */ 
    public function getUpperAffiliate()
    {
        return $this->upperAffiliate;
    }

    /**
     * Set the value of upperAffiliate
     *
     * @return  self
     */ 
    public function setUpperAffiliate($_upperAffiliate)
    {
        $this->upperAffiliate = $_upperAffiliate;

        return $this;
    }
}
?>