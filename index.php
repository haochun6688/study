<?php 
$p = 'index';
if (isset($_GET['p'])) {
    $p= $_GET['p'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <meta name="description" content="">
    <meta name="author" content="Josh">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <nav>
            <ul>
                <li> <a href="index.html">Homepage</a></li>
                <li> <a href="rockman.html">Rockman</a></li>
                <li> <a href="contact_us.html">Contact Us</a></li>

            </ul>
        </nav>
    </div>
    <div class="menu">
        <?php if ($p == "index"):?>
            <h1 class="intro">Welcome</h1>
            <div>
                <p>
                This is a space for people who likes to learn and rich the life. Join us
                and start to explore the new life through this non-stop learning. The world
                is starting to change from the beginning of your decised action! Enrich your
                 life and the world.
                </p>
            <p>
                For detail <a href="http://www.youtube.com" target="_blank">Youtube.com</a>
            </p>
            </div>
    </div>
    <?php endif; ?>
    <?php if ($p == "roackman"):?>
        <div class="main">
        <div class="rockman">          
            <iframe width="790" height="593" src="https://www.youtube.com/embed/DBJ9m_mRayI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="rockman">
            <iframe width="790" height="593" src="https://www.youtube.com/embed/DBJ9m_mRayI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="rockman">
            <iframe width="790" height="593" src="https://www.youtube.com/embed/DBJ9m_mRayI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <?php endif; ?>
    <?php if ($p == "contact_us"):?> 
        <div class="contact_us">
            <form action="">
                <p>
                    <label for="subject">Subject:</label><input type="text">
                </p>
                <p>
                    <label for="contect">Content:</label><input type="text">
                </p>
                <p>
                    <button type="submit">submit</button>
                </p>
            </form>
        </div>
        <?php endif; ?>
</body>
</html>