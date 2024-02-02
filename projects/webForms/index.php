<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Forms</title>
</head>

<body>
    <a href="../">← Back</a>
    <h1>Web Forms</h1>
    <form action="process.php" method="post">
        Name: <input type="text" name="username" required /><br /><br />
        Email: <input type="email" name="useremail" id="" /><br /><br />
        Notes:<br>
        <textarea name="notes" id="" cols="30" rows="10"></textarea><br><br>
        Colors:<br>
        <select name="colors" id="">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
            <option value="orange">Orange</option>
            <option value="purple">Purple</option>
        </select>
        <br><br>
        <input type="checkbox" name="iagree" id="" required> I agree to everything...<br><br>
        <br><br>

        <button name="signupform" type="submit">Submit</button>
    </form>
</body>

</html>