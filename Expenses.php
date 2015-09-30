<html>
    <head>
        <meta charset="UTF-8">
        <title>Expenses</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="number"/>
            <input type="submit" name="submit"/>
        </form>
        <?php
       // session_destroy();
        $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July',
                        'August', 'September', 'October', 'November', 'December');
        if(isset($_POST['number']) && isset($_POST['submit']));
        ?>
        <table border="1">
            <thead>
            <tr>
                <th>years</th>
           <?php
           foreach ($months as $mounth){
               echo "<th>".$mounth."</th>";
           }
           ?>
                <th>Total</th>
            </thead>
            <tbody>
                <tr>
            <?php
            $year=date("Y");
            $num=  is_numeric($_POST['number']);
            $sum=0;
            for ($i=$year;$i<=$year-$num;$i--){
                echo "<tr><td>".$i."</td>";
            
            for($j=0;$j<=count($months);$j++){
               $randomExpenses=rand(0,99);
                  echo "<td>".$randomExpenses."</td>";
                  $sum+=$randomExpenses;
               }
            
            echo "<td>".$sum."</td></tr>";
            }
            ?>
                    </tbody>
        </table>
    </body>
</html>
