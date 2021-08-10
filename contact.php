<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <form method="POST" action="show_contact.php">
        <div>
            Status:
            <select name="status" id="">
                <option value="Urgent">Urgent</option>
                <option value="Normal">Normal</option>
            </select>
        </div>
        <div>Title: <input type="text" name="title"></div>
        <div>
            Email_address:
            <input type="email" name="email">
        </div>
        <div>
            Your_nickname:
            <input type="text" name="nickname">
        </div>
        <div>
            Your_Gender:
            <label><input type="radio" name="gender" value="Male">Male</label>
            <label><input type="radio" name="gender" value="Female">Female</label>
        </div>
        <div>Content:

            <textarea name="content"></textarea>
        </div>
        <button type="submit">Release</button>
    </form>

</body>
</html>