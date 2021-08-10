<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show_post</title>
</head>
<body>
</div>
    <form method="GET" action="show_get.php">
        <div>Title: <input type="text" name="title"></div>
            <div>
            category:
            <select name="category">
            <option value="The Most Updated News">The Most Updated News</option>
            <option value="Personal project">Personal Project</option>
            </select>
            </div>
    <div>
        <!-- Content: <textarea name="content" id="" cols="30" rows="10"></textarea></div> -->
        Content: <textarea name="content"></textarea></div>
    <div>
        <label><input type="radio" name="publish" value="1">Publish</label>
        <label><input type="radio" name="publish" value="0">No Publish</label>
    </div>
    <div>
        <label><input type="checkbox" name="keyword[]" value="php">php</label>
        <label><input type="checkbox" name="keyword[]" value="html">html</label>
        <label><input type="checkbox" name="keyword[]" value="css">css</label>
        <label><input type="checkbox" name="keyword[]" value="javascript">javascript</label>
    </div>
        <button type="submit">Release</button>
</form>
</body>
</html>