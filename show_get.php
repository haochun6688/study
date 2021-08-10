<?php
//Get tittle
$title= $_GET['title'];

//Get category
$category =$_GET['category'];

//Get contect
$content = $_GET['content'];
//Get Publish status
$publish = $_GET['publish'];
//Get keyword
$keyword =$_GET['keyword'];
?>
<h2>Following is returned content</h2>
<p>Title:<?php echo $title;?></p>
<p>Category:<?php echo $category; ?></p>
<p>Content: <?php echo $content;?></p>
<p>Publish:<?php echo $publish;?></p>
<p>Keyword:<?php echo join(", ",$keyword);?></p>
