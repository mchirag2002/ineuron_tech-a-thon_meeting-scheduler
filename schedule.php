<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="schedule.css">
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
                        <a class="nav-link" href="schedule.html">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="base">
        <h1>Who would you like to schedule a meeting with?</h1>
        <form action=""></form>
        <div class="select">
            <label for="admin-select">Choose an admin:</label>

            <select name="admins" id="admin-select">
                <option value="">--Please choose an option--</option>
                <option value="admin1">Admin 1</option>
                <option value="admin2">Admin 2</option>
            </select>
            <label for="duration">Duration</label>
            <input type="text" placeholder="Enter duration">
            <button type="button" class="btn">Check Availability</button>
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