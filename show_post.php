<?php
//Get tittle
$title= $_POST['title'];

//Get category
$category =$_POST['category'];

//Get contect
$content = $_POST['content'];
//Get Publish status
$publish = $_POST['publish'];
//Get keyword
$keyword =$_POST['keyword'];
?>
<h2>Following is returned content</h2>
<p>Title:<?php echo $title;?></p>
<p>Category:<?php echo $category; ?></p>
<p>Content: <?php echo $content;?></p>
<p>Publish:<?php echo $publish;?></p>
<p>Keyword:<?php echo join(", ",$keyword);?></p>
