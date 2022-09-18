<?php 
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['email'])  ) {
     $d = 45;
if($_SESSION['name']=='abc')
{
     $d = 50;
}
 ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark justify-content-center">
            <a class="navbar-brand" href="#intro"> <img src="images/logo-2.png" alt="" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-center mx-auto flex-sm-column">
                    <li class="nav-item active" style="color: white;">
                        <!-- <img src="/images/home.png" alt="" class="nav-icon"> -->
                        <a class="nav-link" href="home.php">Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="time.php">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
    <div class="header" style="margin-left:10%;">
        <div style="display:flex;">
            <div class="welcome">
                <h1 style="margin-bottom:5px;">Hello,</h1>
                <div style="display:flex; align-items: center;">
                    <p style="font-size:60px;"> <?php echo $_SESSION['name']; ?></p>
                </div>
                <div class="page-break">
                    <hr>
                </div>
            </div>
            <div style="align-items: right; margin-left:
            48%; margin-top:2%;">
                <div class="clock">
                    <div class="date">
                        <p id="date"></p>
                        <div>
                            <p id="day">hi</p>
                            <p id="month">hi</p>
                        </div>

                    </div>
                    <p id="clock">00:00:00PMkkkkk</p>
                    <script src="clock2.js"></script>
                </div>
            </div>
        </div>

    </div>
    <div class="schedule">
        <!-- <p class="day-looks">This is what your day looks like...</p> -->
        <div class="day">
            <div class=" p-2 text-white bg-opacity-50" id="meetings">
                Start time: 14:00 | With : Chirag Mathur
                | 45mins | End at: 14:45
            </div>
            <div class=" p-2 text-white bg-opacity-80" id="meetings">Meeting time | meeting with | duration |
                end time
            </div>
            <div class="p-2 text-white bg-opacity-50" id="meetings"> Meeting time | meeting with | duration |
                end time
            </div>
            <div class="p-2 text-white bg-opacity-80" id="meetings">Meeting time | meeting with | duration |
                end time
            </div>
        </div>
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

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>