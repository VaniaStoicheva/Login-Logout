<?php

mb_internal_encoding('UTF-8');

if( isset($_POST['submit']) && isset($_POST['pr_info'])){
    
//data normalization
    $person=($_POST['pr_info']);
         $fname=trim(htmlentities($person['First name']));
         $lname=trim(htmlentities($person['Last name']));
         $phone=trim(htmlentities($person['Phone number']));
         $email=trim(htmlentities($person['Email']));
         $birthday=trim(htmlentities($person['Birth Date']));  
    $last_work=$_POST['last_work'];
    $company_name=trim(htmlentities($last_work['Company']));
    $prog_lang=$_POST['prog_lang'];
    $other_lang=$_POST['other_lang'];
    
        
    //data validation
   if (!(ctype_alpha($fname)) || mb_strlen($fname) <= 2 || mb_strlen($fname) > 20) {
        echo "Please enter valid first name.Invalid first name:-> ".$fname."<br>";
       }
    if((!(ctype_alpha($lname)) || mb_strlen($lname)<= 2 || mb_strlen($lname)>20)){
        echo "Please enter valid last name.Invalid last name:-> ".$lname."<br>";
      }
   if(!preg_match('/[^0-9\+\-\s]/',$phone)){
        echo "Please enter valid phone number.Invalid phone number:-> ".$phone."<br>";
    }
    if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
       echo "Please enter valid email.Invalid email:-> ".$email."<br>";
    }
    $date_pattern='/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/'; 
    if(preg_match($date_pattern,$birthday)===0){
        echo 'Please enter valid birth date.Invalid birth date.->'.$birthday."<br/>";
    }
    if(mb_strlen($company_name)<2 || mb_strlen($company_name)>20 ||
            !preg_match('/[^A-Za-z0-9]/',$company_name)){
       echo "Please enter a valid company name!Invalid company name.->".$company_name."<br/>";
    }
    foreach ($prog_lang as $key=>$lang){
        $lang=trim(htmlentities($lang));
   if(!(ctype_alpha($lang)) || mb_strlen($lang)<= 2 || mb_strlen($lang)>20){
        echo 'Please enter valid programming language name.Invalid programming language name.->'.$lang."<br/>";
    }
    }
   foreach ($other_lang as $key=>$lang){
        $lang=trim(htmlentities($lang));
   if(!(ctype_alpha($lang)) || mb_strlen($lang)<= 2 || mb_strlen($lang)>20){
        echo 'Please enter valid language name.Invalid language name->'.$lang."<br/>";
    }
    }
}  

        


