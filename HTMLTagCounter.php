
<?php
session_start();

         // I got all tags from http://www.w3.org/TR/html-markup/elements.html
        $tags = array("a", "abbr", "address", "area", "article", "aside", "audio", "b", "base", "bdi", "bdo", "blockquote", "body", "br", "button", "canvas", "caption",
        "cite", "code", "col", "colgroup", "command", "datalist", "dd", "del", "details", "dfn", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption", "figure",
        "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "hgroup", "hr", "html", "i", "iframe", "img", "input", "ins", "kbd", "keygen", "label",
        "legend", "li", "link", "map", "mark", "menu", "meta", "meter", "nav", "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "pre", "progress",
        "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "source", "span", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td",
        "textarea", "tfoot", "th", "thead", "time", "title", "tr", "track", "u", "ul", "var", "video", "wbr");
 
        if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    $_SESSION['inputet_tags']=array();
   }
if ($_POST && isset($_POST['submit'])) {
    $tag = mb_strtolower(trim($_POST['tag']));
    
    if (in_array($tag, $tags)) {
        
        if(in_array($tag, $_SESSION['inputet_tags'])){
        echo "<div >Valid HTML tag!</div>";
            } else {
                echo "<div>Valid HTML tag!</div>";
                 $_SESSION["score"] ++; 
                 array_push($_SESSION['inputet_tags'],$tag);
                    } 
            }else{
            echo "<div>Invalid HTML tag!</div>";
        }
 
  echo "<div>Score: " . $_SESSION["score"] . "</div>";
}
        
        
//if (!isset($_SESSION['count'])) {
//	$_SESSION['count'] = 0;						// setting a variable for the count of inputed unique tags 
//	$_SESSION['inputted_tags'] = array();		// setting a array for the already inputed tags						
//	
//}
//if (isset($_POST['tag'])) {
//	$tag = $_POST['tag'];
//	
//	if (in_array($tag, $tags)) {						// checking the tag is in the array with all tags 
//		
//		if(in_array($tag, $_SESSION['inputted_tags'])) {	// checking if the tag is already inputed
//			echo '<p>Valid HTML tag!</p>';
//		} else {
//			echo'<p>Valid HTML tag!</p>';
//			$_SESSION['count']++;							// increasing count of unique tags
//			array_push($_SESSION['inputted_tags'], $tag);	// adding tag to the array with inputed tags
//		}		
//	} else {
//		echo  '<p>Invalid HTML tag!</p>';
//	}
//	echo "<p>Score: ${_SESSION['count']}</p>";	
//}
?>


<form method="post">
    <label for="tag">Enter the tag:</label>
    <input type="text" name="tag"/>
    <input type="submit" name="submit"/>
  
</form>

