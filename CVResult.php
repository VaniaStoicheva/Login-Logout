<?php
require  'FormValidation.php';
?>
<html>
<head>
        <meta charset="UTF-8"/>
        <title>CV</title>
</head>
<body>
        <h1>CV</h1>
        <div>
            <?php
//        if(isset($_POST['pr_info']));
//        $person=$_POST['pr_info'];
//        foreach ($person as $name=>$value){
//            echo $name.'->'.$value."<br/>";
//        }
        ?>
            
        </div>
        <?php
        if(isset($_POST['pr_info']));
        ?>
        <table border='1px'>
            <thead>
                <tr>
                    <th colspan="2">Personal information</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $person=$_POST['pr_info'];
            foreach ($person as $key=>$value){
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            ?>
            </tbody>
        </table><br />
         <?php
        if(isset($_POST['last_work']));
        ?>
        <table border='1px'>
            <thead>
                <tr>
                    <th colspan="2">Last Work Position</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $last_work=$_POST['last_work'];
                        foreach ($last_work as $key=>$value){
                             echo "<tr><td>$key</td><td>$value</td></tr>";
                        }
                ?>
            </tbody>
        </table><br />
         <?php
        if(isset($_POST['prog_lang']));
        ?>
        <table border='1px'>
            <thead>
                <tr>
                    <th colspan="2">Computer skills</th>
                </tr>
            </thead>
            <tbody>
                <tr>
            <td>Programming lenguages</td>
            <td>
                <table border="1px">
                    <thead>
                    <tr>
                        <th>Language</th><th>Skill Level</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php
                $prog_lang=$_POST['prog_lang'];
                $prog_skill=$_POST['prog_skills'];
                        foreach ($prog_lang as $key=>$value){
                         echo "<tr><td>$value</td><td>$prog_skill[$key]</td></tr>";
                        }
                ?>
                    </tbody>
                </table>
                </tr>
            </tbody>
        </table><br />
         <?php
        if(isset($_POST['other_lang']));
        ?>
        <table border='1px'>
            <thead>
                <tr>
                    <th colspan="2">Other Skills</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Languages</td>
                    <td>
                        <table border="1px">
                            <thead>
                                <tr><th>Language</th>
                                    <th>Comprehension</th>
                                    <th>Reading</th>
                                    <th>Writing</th></tr>
                            </thead>
                            <tbody>
                                <?php
                                $other_lang=$_POST['other_lang'];
                                $comp=$_POST['lang_comp'];
                                $reading=$_POST['lang_reading'];
                               $writing=$_POST['lang_writing'];
                                
                                foreach($other_lang as $key=>$language)
                                 echo "<tr>"
                                . "<td>$language</td>"
                                . "<td>$comp[$key]</td>"
                                . "<td>$reading[$key]</td>"
                                . "<td>$writing[$key]</td>"
                                        . "</tr>"
                                ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Driver's License</td>
                <?php
                if(isset($_POST['driver'])){
                $drivers=$_POST['driver'];
                $license= implode(',', $drivers);
               echo "<td>".$license."</td>";
                } 
                ?>
                </tr>
            </tbody>
        </table>
        </body>
</html>

