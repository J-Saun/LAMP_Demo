<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h1>Welcome, thanks for joining!</h1>



    Name:
    <?= $_POST['username'] ?>
    <br>
    Email:
    <?= $_POST['useremail'] ?>
    <br>
    Notes:
    <?= $_POST['notes'] ?>
    <br>
    Favorite Color:
    <?= $_POST['colors'] ?>
    <br>
    I agree:
    <?= $_POST['iagree'] ?>
    Coding Level:
    <?= $_POST['coderLevel'] ?>

</body>

</html>