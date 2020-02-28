<?php 
class Customers {
    private $name,$address,$affiliate;
    public function PlasceOrder($order,$Store){
        //nếu có affiliate trước đó affiliate->affiliate->customer
        if($this->affiliate->getUpperAffiliate()!=null){
            //tính balance của affilia giới thiệu khách hàng này
            $this->affiliate->setBalance($this->affiliate->getBalance()+$order->getTotal()*0.1);
            //tính balance của affiliate đã giới thiệu affiliate giới thiệu khách hàng này
           $this->affiliate->getUpperAffiliate()->setBalance($this->affiliate->getUpperAffiliate()->getBalance()+$this->affiliate->getBalance()*0.5);
            //balance cửa hàng còn lại khi thanh toán cho các affiliate
            $Store->setBalance($Store->getBalance()+$order->getTotal()*0.85);
        }else{
            $Store->setBalance($Store->getBalance()+$order->getTotal()*0.9);
        }
        
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
    public function setAffiliate($_affiliate)
    {
        $this->affiliate = $_affiliate;

        return $this;
    }
}