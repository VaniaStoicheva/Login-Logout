<?php
if($_GET && isset($_GET['submit'])){
    if(isset($_GET['amount']) && isset($_GET['currency'])
            && isset($_GET['interest']) && isset($_GET['period'])) {
        $amount=$_GET['amount'];
        $interest=$_GET['interest'];
        
        foreach($_GET['period'] as $value){
            $period=$value;
        }
        foreach ($_GET['currency'] as $value){
            $currency=$value;
        }
    if(is_numeric($amount)&& $amount>0 && is_numeric($interest) ){
        if($interest>0&&$interest<100){
           $result = round($amount * pow(1 + (($interest / 100) / 12),
                   $period / 12 * 12), 2);
           echo "Sum after  ".$period." mount/year :".$result." ".$currency;
        }else{
        echo "Invalid interest rate.It shold by number betwin 0 and 100%";
        }
    }else{
        echo "The amount or interest is invalid";
            }
   }else{
                echo"You have not fielledd in all required fields";
        }
}
?>
<html>
    <body>
        <form method="get">
            Enter amount:
            <input type="text" name="amount"/><br/>
            <input type="radio" name="currency[]" value="BGN"/>BGN<br/>
            <input type="radio" name="currency[]" value="USD"/>USD<br/>
            <input type="radio" name="currency[]" value="EUR"/>EUR<br/>
            Compound Interest Amound:
            <input type="text" name="interest"/><br/>
            <select name="period[]">
                <option value="6">6 mounth</option>
                <option value="12">1 years</option>
                <option value="24">2 years</option>
                <option value="60">5 years</option>
            </select>
            <input type="submit" name="submit" value="Calculate"/>
        </form>
    </body>
</html>

