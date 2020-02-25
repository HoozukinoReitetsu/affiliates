<?php 
class Customers {
    private $name,$address,$affiliate;
    public function PlasceOrder($order,$affiliate,$Store){
        if($affiliate->getUpperAffiliate()!=null){
            $affiliate->setBalance($affiliate->getBalance()+$order->getTotal()*0.1);
            // echo $affiliate->getBalance();
            $Store->setBalance($Store->getBalance()+$order->getTotal()*0.85);
        }else{
            $Store->setBalance($Store->getBalance()+$order->getTotal()*0.9);
        }
        
        // print_r($affiliate);
        // print_r($Store);
        // echo"<br>";
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
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of affiliate
     */ 
    public function getAffiliate()
    {
        return $this->affiliate;
    }

    /**
     * Set the value of affiliate
     *
     * @return  self
     */ 
    public function setAffiliate($affiliate)
    {
        $this->affiliate = $affiliate;

        return $this;
    }
}