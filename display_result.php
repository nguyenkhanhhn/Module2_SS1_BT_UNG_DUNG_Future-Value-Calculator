
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $Investment_Amount=$_POST['investmen_Amount'];
    $Yearly_Interest_Rate=$_POST['Yearly_Interest_Rate'];
    $Number_of_Years=$_POST['Number_of_Year'];
    $Future_value=$Investment_Amount*pow((1+$Yearly_Interest_Rate/100),$Number_of_Years);
    echo " Investment Amount:".$Investment_Amount."<br>";
    echo "Yearly Interest Rate:".$Yearly_Interest_Rate."%"."<br>";
    echo "  Number of Years:".$Number_of_Years."<br>";
    echo "Future value :".$Future_value;
}
?>