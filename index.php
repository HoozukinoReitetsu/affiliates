<?php 
include 'Affiliate.php';
include 'Customer.php';
include 'Order.php';
include 'StoreOwner.php';
    //khởi tạo của hàng
    $Moyes=new StoreOwner();
    $Moyes->setName('Moyes');
    //
    //khởi tạo affiliate john
    $John=new Affiliate('John'); 
    //John giới thiệu các affiliate khác
    $Sarah=new Affiliate('Sarah');
    $Sarah->setUpperAffiliate($John);
    $John->Refer($Sarah);
    //
    $Eva=new Affiliate('Eva');
    $Eva->setUpperAffiliate($John);
    $John->Refer($Eva);
    //
    $Jimmy=new Affiliate('Jimmy');
    $Jimmy->setUpperAffiliate($John);
    $John->Refer($Jimmy);
    //
    $Henry=new Affiliate('Henry');
    $Henry->setUpperAffiliate($John);
    $John->Refer($Henry);
    //
    //khởi tạo khách hàng
    $customer1=new Customers();
    $customer2=new Customers();
    $customer3=new Customers();
    $customer4=new Customers();
    //mỗi affiliate giới thiệu 1 khách hàng
    $Sarah->Refer($customer1);
    $customer1->setAffiliate($Sarah);    
    $Eva->Refer($customer2);   
    $customer2->setAffiliate($Eva);
    $Jimmy->Refer($customer3);   
    $customer3->setAffiliate($Jimmy); 
    $Henry->Refer($customer4);  
    $customer4->setAffiliate($Henry); 
    //khởi tạo hóa đơn.Mỗi khách hàng mua 1 đơn hàng trị giá $800.
    $Oder=new Order();
    $Oder->setTotal(800);   
    $customer1->PlasceOrder($Oder,$Moyes); 
    $customer2->PlasceOrder($Oder,$Moyes);
    $customer3->PlasceOrder($Oder,$Moyes);
    $customer4->PlasceOrder($Oder,$Moyes);
    //
    //danh sách các affiliate mà John giới thiệu được, bao gồn Name và Balance của mỗi Affiliate
    $John->PrintSubAff();
    //John thực hiện thao tác rút tiền
    $John->Withdraw(300);
    echo "<br>";
    $John->Withdraw(150);
    echo "<br>";
    $John->Withdraw(50);
    echo "<br>";
    // tổng tiền thu được của chủ store
    $Moyes->Print_balance();
?>