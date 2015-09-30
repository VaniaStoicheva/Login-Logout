<h1>PHP Syntax</h1>
<?php
$n=12;
echo "You are {$n} th person"."<br>";
$x=4;
$y=&$x;
$y=3;
$x++;
echo "$y";
?>
<h1>1.Personal info</h1>
<p>

    <?php
$first="Vania";
$second="Stoicheva";
$age=38;
echo "My name is $first $second and I am $age years old";
?>
</p>
<h1>2.Sum two numers</h1>
<p>
    <?php
    function sumTwoNumbers($first,$second){
        $sum=($first+$second);
        $sumfloat=  number_format($sum,2);

        echo '$first+$second='
        ."{$first}"."+" ."{$second}"."="
             ."$sumfloat"."<br>";
    }
    sumTwoNumbers(2,5);
    sumTwoNumbers(1.2546,2.1456);
    sumTwoNumbers(123.456,555);
    ?>
</p>
<h1>3.Dump variable</h1>
<p>
    <?php
    function printVariable($number){
        if(is_numeric($number)){
            echo var_dump($number)."<br>";
        }else{
        echo  gettype($number)."<br>";
        }
        
    }
    $number=
            array(
                "hello",
                15,
                1.234,
                array(1,2,3),
                
            );
            foreach ($number as $num){
    printVariable($num);
            }
          
    ?>
</p>
<h1>4.Non-repeating digits</h1>
<p>
    <?php
    function nonRepeatingDigits($digits){
        $numbers=array();
        $result=array();
        
        for ($i =102; $i <=987; $i++) {
            $numbers=(string)$i;
            if($numbers[0]!=$numbers[1]
                    && $numbers[1]!=$numbers[2]
                    && $numbers[0]!=$numbers[2] 
                    && $i<=$digits){
                $result[]=$i;
            }
        }
        
        if(count($result>0)){
            echo($digits)."<br>";
            echo implode(",", $result)."<br>";
         }else{
            echo 'NO'."<br>";
        }
    }
    nonRepeatingDigits(1234);
    "<br>";
    nonRepeatingDigits(15);
            "<br>";
    nonRepeatingDigits(145);
            "<br>";
    nonRepeatingDigits(247);
    ?>
</p>
<h1>5.Lazy Sundays</h1>
<p>
    <?php
  
   //<PHP 5.3
//   function getAllSundays($y,$m){
//       $ts=  strtotime("first sunday $y-$m-03");
//       $end=  strtotime("last sunday $y-$m");
//       $sundays=array();
//       while($ts<=$end){
//           $sundays[]=$ts;
//           $ts=  strtotime('next sunday',$ts);
//       }
//       return $sundays;
//   }
//   foreach (getAllSundays(2014, 8) as $sundays){
//       echo date('dS F,Y',$sundays);
//   }
//with PHP 5.3
function getAllSundays($y, $m)
{
    return new DatePeriod(
        new DateTime("first sunday of $y-$m"),
        DateInterval::createFromDateString('next sunday'),
        new DateTime("last day of $y-$m 00:01")//00:01->31
    );
}


foreach (getAllSundays(2014, 8) as $sunday) {
    echo $sunday->format('dS F,Y')."<br>";
}
    ?>
    
</p>
<h1>5.HTML Table</h1>
<p>
    <?php
   
    function creatTable($name,$phone,$age,$address){
        echo "<table border='1px'>";
      echo "<tr><th>name</th><td>$name</td></tr>";
      echo "<tr><th>Phone number</th><td>$phone</td></tr>";
      echo "<tr><th>Age</th><td>$age</td></tr>";
      echo "<tr><th>Address:</th><td>$address</td></tr>";
      echo "</table>"."<br>";
      }
      creatTable('Gosho',05555555,25,'Hadji Dimitar');
      creatTable('Mimi',0888999,30,'Petrova niva');
    ?>
</p>
<h1>7.Form Data</h1>
<p>
<form action="#" method="get">
    Name:<input type="text" name="fname"><br>
    Age:<input type="text" name="fage"><br>
    <input type="radio" name="gender" value="male">Male<br>
    <input type="radio" name="gender" value="fmale">Fmale<br>
    <input type="submit" name='Submit'><br>
</form>
    <?php if (isset($_GET["fname"],$_GET["fage"],$_GET["gender"])):?>
    <p>My name is <?php echo htmlspecialchars($_GET['fname']);?>.<br>
    I'm <?php echo htmlspecialchars($_GET["fage"]);?> years.<br>
    I'm <?php echo htmlspecialchars($_GET["gender"])?>.<br>
    </p>
    <?php endif;?>
</p>
<h1>Time until new year</h1>
<p>
    <?php
    
   $now=new DateTime;

    //$now=new DateTime('12-08-2014 13:07:09');
    echo $now->format("d-m-Y G:i:s")."<br>";
    $newYear=new DateTime('31-12-2014 23:59:59');
    
    $days=$newYear->diff($now)->format("%a");
    $hours=$newYear->diff($now)->format("%h");
    $minuts=$newYear->diff($now)->format("%i");
    $seconds=$newYear->diff($now)->format("%s");
    $allHours=$days*24+$hours;
    $allMinutes=$allHours*60+$minuts;
    $allSeconds=$allMinutes*60+$seconds;
    
    ?>
<p>Hours until new year :<?php echo $allHours;?><br>
    Minutes until new year : <?php echo number_format($allMinutes,0,' ',' ');?><br>
    Seconds until new year : <?php echo number_format($allSeconds,0,' ',' ');?><br>
    Days:Hours:Minutes:Seconds <?php echo "$days : $hours : $minuts : $seconds";?><br>
    </p>
</p>
<h1>9.Awesome Calendar</h1>
<p>
<form method="post">
    <input type="text" name="year" placeholder="Year">
    <input type="submit">
</form>

    <?php
    $year=date('Y',time());
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $year=$_POST["year"];
    }
    echo "<h1>Calendar $year year</h1>";
    
    for($i=1;$i<=12;$i++){
        $firstday=  mktime(0,0,0,$i,1,$year);
        $title=date('F',$firstday);
        $day_of_week=date('D',$firstday);
        switch ($day_of_week){
            case "Mon":$blank=0;break;
             case "Tue":$blank=1;break;
              case "Wed":$blank=2;break;
               case "Thu":$blank=3;break;
                case "Fri":$blank=4;break;
                 case "Sat":$blank=5;break;
                  case "Sun":$blank=6;break;
        }
        
        $day_in_mounts=  cal_days_in_month(0, $i, $year);
                
                echo "<table id=month  border='1px solid black'
    width='420px'
    margin='5px auto'>";
        echo "<tr>
        <th colspan=7>$title</th>"
                        . "</tr>";
        echo "<tr id=weekday border='1px solid black'
    text-align='center'
    width='40px'>
        <td>Mon</td>
        <td>Tue</td>
        <td>Wed</td>
        <td>Thu</td>
        <td>Fri</td>
        <td>Sat</td>
        <td>Sun</td>
        </tr>";
        $day_count=1;
        echo "<tr>";
        while($blank>0){
            echo "<td></td>";
            $blank=$blank-1;
            $day_count++;
        }
        $day_num=1;
        while($day_num<=$day_in_mounts){
            echo "<td>$day_num</td>";
            $day_num++;
            $day_count++;
            
            if($day_count>7){
                echo "</tr><tr>";
                $day_count=1;
            }
        }
        while($day_count>1 && $day_count<=7){
            echo "<td></td>";
            $day_count++;
        }
        echo "</tr></table>";
    }
    ?>
</p>