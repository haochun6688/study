<?php
$songlist= array (
    array( 
        'name'  => 'Woody Allen',
        'img'   =>  'https://yt3.ggpht.com/ytc/AKedOLQnremNjRoewRLYEqESCX7BojrLYqe3F_d3SHVPhg=s900-c-k-c0x00ffffff-no-rj',
        'url'   => 'https://en.wikipedia.org/wiki/Woody_Allen',
        ),
    array( 
        'name'  => 'Saint Peter',
        'img'   =>  'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Pope-peter_pprubens.jpg/220px-Pope-peter_pprubens.jpg',
        'url'   => 'https://en.wikipedia.org/wiki/Saint_Peter',
        ),

    array( 
        'name'  => 'David',
        'img'   =>  'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/David_SM_Maggiore.jpg/220px-David_SM_Maggiore.jpg',
        'url'   => 'https://en.wikipedia.org/wiki/David',
        ),


                );
$booklist =array("josh","peter",true,false,999,"david");
print_r($booklist);
$newbooklist = join("  ----",$booklist);
echo $newbooklist;

foreach ($songlist as $list) {
    # code...
    echo "<p>Singer Information: {$list['url']}</p>";
}
//array_push practice 8/5/2021
$test = array();
    for ($i=10; $i <=100 ; $i+=10) 
    { 
        # code...
        if ($i !=70 && $i !=90) 
        {
            array_push($test,$i);
        }
    }                   
echo join(", ",$test);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homeworkw04</title>
    <style>
        .otherlist img{
            width:80px;
        }
    </style>
</head>
<body>
    <div class="otherlist">
    <h2>Homework_for_week04!</h2>
    <?php foreach ($songlist as $list):?>
    <li>
        <a href="<?php echo $list['url'];?>" target="_blank"><img src="<?php echo $list['img'];?>" alt=""></a>
    </li>
    <?php endforeach ?>
    </div>
</body>
</html>