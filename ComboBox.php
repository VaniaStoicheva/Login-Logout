<?php
session_start();
include 'countryList.php';
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>ComboBox</title>
    </head>
    <body>
        <label>
            Choise continent:
        </label>
                
        <form method='post' action="" id="form">
            <select name="continents" id="continent" required autofocus onchange="document.getElementById('form').submit()">
                 <option value="" selected disabled></option>
                <?php
              
               foreach ($countryList as $continentsList=>$continents){
                   if ($_POST['continents'] == $continentsList) {
                    $selected = 'selected';
                    }
		else {
                    $selected = '';
                    }
                   
                  echo '<option value="'.$continentsList.'"'.$selected.'>'.$continentsList.'</option>';
                    }
               ?>
            </select>
            
            <select name="countrys" id="contry">
                
                <?php
                if($_POST && isset($_POST['continents']))
                    $continents=$_POST['continents'];
                   $_SESSION['continents']=$continents;
                    $country=$countryList[$continents];
                        foreach ($country as $countrys){
                   
                        echo "<option value='$countrys'>{$countrys}</option>";
                }
          ?>
            </select>
            </form>
        <?php
        if($_POST && isset($_POST['continents'])){
            $continent=$_POST['continents'];
            echo "You choise: ".$continent;
            }
        ?>
      
    </body>
</html>
