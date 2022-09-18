<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "techno_rubix";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM meeting where email2='abc@xyz.com'";
	$result = $conn->query($sql);
    $meet = 1;
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			// echo "id: " . $row["id"]. " - Name: "
			// 	. $row["firstname"]. " " . $row["lastname"]. "<br>";
            $email1 = $row["email1"];
            // $email2 = $row["email2"];
            $hours = $row["start_time"];
            // $time = DateTime::createFromFormat("H", $start_time);
            // $hours = $time->format('H');
            $minutes = 0;
            $table_hours_start = $hours;
            $table_minutes_start = $minutes;
            $duration = $row["duration"];
        $notes = $row["topic"];
       
    }
	}
    else{
        $meet = 0;
         $email1 = "a";
            $notes = "a";
            $start_time = "00";
            $time = DateTime::createFromFormat("H", $start_time);
            $hours = $time->format('H');
            $minutes = 0;
            $table_hours_start = $hours;
            $table_minutes_start = $minutes;
            $duration = 0;
           
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_meeting.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark justify-content-center">
            <!-- <a class="navbar-brand" href="#intro"> <img src="images/logo-2.png" alt="" id="logo"></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-center mx-auto flex-sm-column">
                    <li class="nav-item active" style="color: white;">
                        <!-- <img src="/images/home.png" alt="" class="nav-icon"> -->
                        <a class="nav-link" href="admin.php">Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_meeting.php">Admin</a>
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
        <h1>The following meetings have been requested:</h1>
        
        
        <form action="time.php" method="get">
        <div class="time" style="background-color:rgb(54, 54, 54); border-radius:10px; width: fit-content;padding:20px; margin-top:45px;">
            <!-- <h3> The admin requested is available for this duration starting from:</h3> -->
            <div class="admin-req" style="display:flex">
                <div class="email">
                    EMAIL
                    <hr>
                    <div class="p-2 text-white bg-opacity-50" id="email">
                        email
                     </div>
                </div>
                <div class="duration">
                    DURATION
                    <hr>
                    <div class="p-2 text-white bg-opacity-50" id="duration">
                        duration
                     </div>
                </div>
                <div class="start_time">
                    START TIME
                    <hr>
                    <div class="p-2 text-white bg-opacity-50" id="start">
                    <p id="start_time"></p>
                     </div>
                </div>
                <div class="notes">
                    NOTE
                    <hr>
                    <div class="p-2 text-white bg-opacity-50" id="note">
                    note
                     </div>
                </div>
            </div>
                <script>
                    let email = '<?=$email1?>';
                    console.log(email);
                    document.getElementById("email")
                        .innerHTML = email;
                    let duration = '<?=$duration?>';
                    document.getElementById("duration")
                        .innerHTML = duration;
                    let start = '<?=$hours?>';
                    document.getElementById("start_time")
                        .innerHTML = start;
                    let notes = '<?=$notes?>';
                    document.getElementById("note")
                        .innerHTML = notes;
                    </script>

                   
            </div>
            <!-- <div class="timed_buttons">
                <input type="radio" class="btn-check" name="options-outlined" id="b9" autocomplete="off" checked value="b9" >
                <label class="btn" for="b9" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">9:00</label>
                <input type="radio" class="btn-check" name="options-outlined" id="b10" autocomplete="off" value="b10">
                <label class="btn" for="b10" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">10:00</label>
                <input type="radio" class="btn-check" name="options-outlined" id="b11" autocomplete="off" value="b11">
                <label class="btn" for="b11" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">11:00</label>
                <input type="radio" class="btn-check" name="options-outlined" id="b12" autocomplete="off" value="b12">
                <label class="btn" for="b12" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">12:00</label>
                <input type="radio" class="btn-check" name="options-outlined" id="b13" autocomplete="off" value="b13">
                <label class="btn" for="b13" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">13:00</label>
                <br>  
                <input type="radio" class="btn-check" name="options-outlined" id="b14" autocomplete="off" value="b14">
                <label class="btn" for="b14" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">14:00</label>
                <input type="radio" class="btn-check" name="options-outlined" id="b15" autocomplete="off" value="b15">
                <label class="btn" for="b15" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">15:00</label>
                <input type="radio" class="btn-check" name="options-outlined" id="b16" autocomplete="off" value="b16">
                <label class="btn" for="b16" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">16:00</label>
                <input type="radio" class="btn-check" name="options-outlined" id="b17" autocomplete="off" value="b17">
                <label class="btn" for="b17" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">17:00</label>
                <input type="radio" class="btn-check" name="options-outlined" id="b18" autocomplete="off" value="b18">
                <label class="btn" for="b18" style="background-color: #9548ae; color: white; width:100px; margin-top:20px; margin-left:20px;">18:00</label>
            </div> -->
            <script>
                document.getElementById("b9").disabled=true;
        document.getElementById("b10").disabled=true;
        document.getElementById("b11").disabled=true;
        document.getElementById("b12").disabled=true;
        document.getElementById("b13").disabled=true;
        document.getElementById("b14").disabled=true;
        document.getElementById("b15").disabled=true;
        document.getElementById("b16").disabled=true;
        document.getElementById("b17").disabled=true;
        document.getElementById("b18").disabled=true;
                </script>
            <!-- <div style="display:flex; flex-direction:column; align-items:center;">
                <p style="margin-top:20px; text-align:center;"> Please enter your notes for the admin's reference.</p>
                <textarea rows="8" cols="95" name="notes" form="" style="margin-top:5px; border-radius:10px;" placeholder="Please enter your notes for the admin's reference.">
                </textarea>
                <input type="submit" name="qsubmit" vlaue="Choose options" class="btn" style="width:100px;margin-top:5px;">
            </div>
        </div></form>
        <input type="text" id="name" value=> -->
    </div>
   
    <script>
        document.getElementById("b9").disabled=true;
        document.getElementById("b10").disabled=true;
        document.getElementById("b11").disabled=true;
        document.getElementById("b12").disabled=true;
        document.getElementById("b13").disabled=true;
        document.getElementById("b14").disabled=true;
        document.getElementById("b15").disabled=true;
        document.getElementById("b16").disabled=true;
        document.getElementById("b17").disabled=true;
        document.getElementById("b18").disabled=true;
        function myFunct(the_text) {
        document.getElementById('name').value = the_text;
    return;
    }
        let admin = '<?=$admin?>';
        let busy_hour_start = '<?=$table_hours_start?>';
        let busy_hour_end = '<?=$table_hours_end?>';
        let busy_minute_start = '<?=$table_minutes_start?>';
        let busy_minute_end = '<?=$table_minutes_end?>';
        let start_day_hour = 9;
        let start_day_minutes = 0;
        let table_duration_hour = '<?=$hr?>';
        let table_duration_minutes = '<?=$duration?>';
        let requested_duration_minutes = '<?=$requested_duration_minute?>';
        let x = requested_duration_minutes;
        let requested_duration_hours = 0;
        for(let x=requested_duration_minutes;x>=60;x=x-60)
        {
            requested_duration_hours = requested_duration_hours+1;
        }
        requested_duration_minutes = requested_duration_minutes%60;
        
        
        for(start_day_hour;start_day_hour<=18;start_day_hour++)
        {
            if(start_day_hour+requested_duration_hours<busy_hour_start)
            {
                let name = "b"+start_day_hour;
                const button = document.getElementById(name);
                button.disabled = false;
            }
            else if(start_day_hour>=busy_hour_end && start_day_hour+requested_duration_hours <18)
            {
                let name = "b"+start_day_hour;
                const button = document.getElementById(name);
                button.disabled = false;
            }
        }
        const buttons = document.querySelectorAll("input[type='radio']");

// adding event to all radio buttons
// buttons.forEach(button => {
//   button.onclick = () => {
//     if (button.checked) {
//         //button.value
      
//     }
//   }
// })
        function deleteSomething(secondValue) {
      alert("I am going to clear text box data only...");
      document.getElementById("txtName").value = "";
   }
        </script>
       
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
	$conn->close();
?>
