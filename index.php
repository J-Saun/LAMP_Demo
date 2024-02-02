<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=h1, initial-scale=" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects/">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sandbox/">Sandbox</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron text-center">
            <div class="row">
                <h1>Hello, I'm Joshua</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur
                    quis quas odit labore minus veniam accusantium facere! Inventore
                    quis exercitationem minus, molestiae rerum dolorem eum harum nobis
                    repudiandae enim ea illum sit expedita eius recusandae nisi ipsam.
                    Necessitatibus, nam. Corrupti, nam nostrum repudiandae saepe ducimus
                    laboriosam vel quo doloremque eveniet?
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <h3>Project 1</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis unde
                    eaque provident molestias quia, et voluptate sunt consectetur illum
                    animi id laudantium, corporis repellendus repellat.
                </p>
            </div>
            <div class="col-sm-4">
                <h3>Project 2</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
                    maiores beatae, delectus sapiente architecto enim accusamus,
                    aspernatur fuga ratione voluptas est, sit nam earum dolore harum?
                    Iure, necessitatibus dolorum earum cumque esse sequi totam. Ab.
                </p>
            </div>
            <div class="col-sm-4">
                <h3>Project 3</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nemo
                    vero pariatur dolor corporis. Repellendus expedita quaerat dolore
                    nobis asperiores!
                </p>
            </div>
        </div>
    </div>
    <div>
        <h3>Contact</h3>
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
            <button name="signupform" type="submit">Submit</button>
        </form>
    </div>
    <div class="footer bg-dark text-light">
        <p>SaundersCodes &copy</p>
        <a href="#">View on Github</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>