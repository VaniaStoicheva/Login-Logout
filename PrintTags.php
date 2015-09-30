<?php
if(isset($_POST["submit"])){
    if(isset($_POST["tags"])){
        $textTags=  explode(",",$_POST['tags']);
        for($i=0;$i<count($textTags);$i++){
            $tags=trim(htmlentities($textTags[$i]));
         echo "$i : $tags"."<br>";
    }  
    }
}
?>
<form method="post" action="#">
    <input type="text" name="tags"/><br>
    <input type="submit" name="submit"/><br>
</form>

  
