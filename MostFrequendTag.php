<?php
function trims($tag){
    return trim(htmlentities($tag));
}
if(isset($_POST["submit"])){
    if(isset($_POST["tags"])){
      $textTags= array_map("trims", explode(",",$_POST['tags']));
      $result=  array_count_values($textTags);
      $val=  array_search(max($result), $result);
        //echo"<div>". print_r($result)."</div>";
         foreach ($result as $key=>$value){
             echo "<div>"."$key :$value item"."<br>"."</div>";
    }  
    echo "Most frequency tags is:$val";
    }
}
?>
<form method="post" action="#">
    <input type="text" name="tags"/><br>
    <input type="submit" name="submit"/><br>
</form>



