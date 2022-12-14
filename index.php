<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>

<body>
	<style>
		<?php include 'login.css'?>
		</style>
    <div class="base">

        <div class="login">
     <form action="login.php" method="post">

            <div class="he">
                <p id="welcome">WELCOME BACK</p>
                <P id="log">Log into your account</P>
            </div>
            <div class="b">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="field">
                    <label for="email">Username: </label>
                    <input type="email" name="email" id="email" placeholder="Email / Username">
                </div>
                <div class="field">
                    <label for="password">Password: </label>
                    <input id="password" type="password" placeholder="Password" name="password">
                </div>
                <div class="field">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <p>Forgot Password</p>
                    </a>
                </div>
                <div class="field">
                    <a href="index.html"><button type="submit" class="btn">Sign-In</button></a>
                </div>
            </div>

        </div>
    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
</body>

</html>