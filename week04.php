<?php
    //phpinfo();
    $movies = array();
    $movies[] ="sport";
    $movies[] ="Travel";
	print_r($movies);
	
	$songlist = array(
	1 => "high song",
	3 => "Romance song",
	5 => "chill music",
	7 => "Piano music"
	);
	echo "<hr>";
	print_r($songlist);
	echo "<br><hr>";
		$article = array(
	'title' 	=> 	"Don't think unauthorized Win10 will turn to authorised copy",
	'date'		=>	"April-1-2021",
	'author'	=>	"Jack Stanley",
	'url'		=>	"https://www.cnbc.com/2021/02/13/trump-impeachment-trial-nearing-final-vote.html",
	'img'		=>	"https://image.cnbcfm.com/api/v1/image/106840408-1613228477927-gettyimages-1231137479-AFP_92W9QQ.jpeg?v=1613228563&w=740&h=416",
	'content'	=>	"enate Minority Leader Mitch McConnell told his Republican colleagues in an email on Saturday that he will vote to acquit Donald Trump in the former president’s second impeachment trial.
 While a close call, I am persuaded that impeachments are a tool primarily of removal and we therefore lack jurisdiction,” McConnell wrote. The Kentucky Senator also noted that criminal misconduct by a president while in office can be prosecuted after the president exits office."
	 );
	 var_dump($article);
	 echo "<hr><font color=red>";
	 //foreach ($article as $a_article) {
	 foreach ($article as $key => $a_article) {
		 echo "<p>$a_article</p>";
	 }
	 echo "<hr></font>";
	 $otherarticle = array(
	 array(
	'title' 	=> 	"Don't think unauthorized Win10 will turn to authorised copy",
	'date'		=>	"April-1-2021",
	'author'	=>	"Jack Stanley",
	'url'		=>	"https://www.cnbc.com/2021/02/13/trump-impeachment-trial-nearing-final-vote.html",
	'img'		=>	"https://image.cnbcfm.com/api/v1/image/106840408-1613228477927-gettyimages-1231137479-AFP_92W9QQ.jpeg?v=1613228563&w=740&h=416",
	'content'	=>	"enate Minority Leader Mitch McConnell told his Republican colleagues in an email on Saturday that he will vote to acquit Donald Trump in the former president’s second impeachment trial.
 While a close call, I am persuaded that impeachments are a tool primarily of removal and we therefore lack jurisdiction,” McConnell wrote. The Kentucky Senator also noted that criminal misconduct by a president while in office can be prosecuted after the president exits office."
	 ),
	 array(
	'title' 	=> 	"This is Microsoft declare",
	'date'		=>	"April-1-2021",
	'author'	=>	"Jack Stanley",
	'url'		=>	"https://www.cnbc.com/2021/02/13/trump-impeachment-trial-nearing-final-vote.html",
	'img'		=>	"https://image.cnbcfm.com/api/v1/image/106819967-16099540452021-01-06t172608z_985055494_rc2h2l9fywdv_rtrmadp_0_usa-election-trump.jpeg?v=1609954074&w=740&h=416",
	'content'	=>	"enate Minority Leader Mitch McConnell told his Republican colleagues in an email on Saturday that he will vote to acquit Donald Trump in the former president’s second impeachment trial.
 While a close call, I am persuaded that impeachments are a tool primarily of removal and we therefore lack jurisdiction,” McConnell wrote. The Kentucky Senator also noted that criminal misconduct by a president while in office can be prosecuted after the president exits office."
	 )
	 );
	 foreach ($otherarticle as $all_article) {
		 //var_dump($all_article);
		 //echo "<br>";
		 //echo "<p>{$all_article['title']}</p>}";
		 echo "<hr>";
		 echo "<p>Websiite={$all_article['title']}</p>";
		 echo "<p>URL={$all_article['url']}</p>";
		 echo "<p>Image={$all_article['img']}</p>";
		 echo "<hr>";
		 
		  
		 //echo "<p>$value</p>";
	 }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-US-compatible" content="text/html"/>
		<meta charset="UTF-8" />
		<title>Week04</title>
		<style>
			.article, .other_list{
				padding: 20px;
				margin: 10px;
				border: solid 10px #aaa;
				border-radius: 6px;
			}
			.other_list img{
				width: 80px;
			}
		</style>
	</head>
		<body>
			<div class="article">
				<h2><?php echo $article['title'];?></h2>
				<p>Public Date:<?php echo $article['date'];?>|Author:<?php echo $article['author'];?></p>
				<p>Website:<a href='<?php echo $article['url'];?>' target="_blank"><?php echo $article['url'];?></a></p>
				<div class="content">					
					<img src='<?php echo $article['img'];?>'/>
					<li>
					<?php echo $article['content'];?>
					</li>
				</div>				
			</div>
			<div class="other_list">
				<ul>
						<?php foreach ($otherarticle as $list):?>
						<li>
							<img src='<?php echo $list['img'];?>'/>
							<a href='<?php echo $list['url'];?>'target="_blank"><?php echo $list['title'];?></a>
						</li>
						<?php endforeach;?>
									
				</ul>
			</div>
			<!--<h1 align="center"><div style="color: blue">This is practice for week04!</div></h1> --> 
			<?php
			$length = strlen("abcdefg");
			echo 'abcdefg has total characters of:' .$length ."<br>" ;
			
			$str= "abcdefg";
			$get= substr($str, 0,3);
			echo $str."<br>". $get."<br>";
			function show_year(){
				echo "Now is: ".date("Y")."year<hr>";
			}
			show_year();
			show_year();
			function show_level($score){
				$msg='';
				if ($score >=90 && $score <=100) {
					$msg='A+';	
				}
				elseif ($score >= 85 && $score <=89) {
					$msg='A';
				}
				elseif ($score >=80 && $score <=84) {
					$msg= 'A-';
				}
				elseif ($score >=75 &&$score <=79) {
					$msg='B+';
				}
				elseif ($score >=70 && $score <=74) {
					$msg ='B';
				}
				elseif ($score >=65 && $score <=79) {
					$msg='B-';
				}
				elseif ($score >=60 && $score <=64) {
					$msg='C+';
				}
				elseif ($score <60) {
					$msg='D';
				}
				return $msg;
			}
			$str =show_level(59);
			echo "{$str}<br>";
			echo date("M,D,Y");
			
			$students= array(
			array(
			"name" 	=> 	"Jack",
			"score" =>	"100",
			),
			array(
			"name" 	=>	"Josh",
			"score"	=>	"81",	
			)
			);
			foreach ($students as $result) {
				echo "<p>";
				echo "Student:". $result["name"];
				$score = show_level($result["score"]);
				echo "score:" . $score;
				echo "</p>";
			}
			?>
				
			
			
		</body>
	
</html>

