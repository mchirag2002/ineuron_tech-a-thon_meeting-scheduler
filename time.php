<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "techno_rubix";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM meeting";
	$result = $conn->query($sql);
    $meet = 1;
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			// echo "id: " . $row["id"]. " - Name: "
			// 	. $row["firstname"]. " " . $row["lastname"]. "<br>";
            $email1 = $row["email1"];
            $email2 = $row["email2"];
            $start_time = $row["start_time"];
            $time = DateTime::createFromFormat("H", $start_time);
            $hours = $time->format('H');
            $minutes = 0;
            $table_hours_start = $hours;
            $table_minutes_start = $minutes;
            $duration = $row["duration"];
            $hr = floor($duration / 60);
            if($duration>60)
            {
                $duration = $duration % 60;
            }
            $table_hours_end = $hours + $hr +1 ;
            $table_minutes_end = $minutes + $duration;
		}
	}
    else{
        $meet = 0;
         $email1 = "a";
            $email2 = "a";
            $start_time = "00";
            $time = DateTime::createFromFormat("H", $start_time);
            $hours = $time->format('H');
            $minutes = 0;
            $table_hours_start = $hours;
            $table_minutes_start = $minutes;
            $duration = 0;
            $hr = floor($duration / 60);
            $table_hours_end = $hours + $hr+1;
            $table_minutes_end = $minutes + $duration;
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
        <form action="time.php" method="post">
        <div class="select">
            <label for="admin-select">Choose an admin:</label>

            <select name="admins" id="admin-select">
                <option value="">--Please choose an option--</option>
                <option value="admin1">Admin 1</option>
                <option value="admin2">Admin 2</option>
            </select>
            <label for="duration">Duration</label>
            <input type="text" placeholder="Enter duration in minutes" name="duration">
            <button type="submit" class="btn">Reset</button>
            <input type="submit" name="submit" vlaue="Choose options" class="btn">
        </div>
        </form>
        <form action="time.php" method="get">
        <div class="time" style="background-color:rgb(54, 54, 54); border-radius:10px; width: fit-content;padding:20px; margin-top:45px;">
            <h3> The admin requested is available for this duration starting from:</h3>

            <div class="timed_buttons">
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
                </script>
            <div style="display:flex; flex-direction:column; align-items:center;">
                <p style="margin-top:20px; text-align:center;"> Please enter your notes for the admin's reference.</p>
                <textarea rows="8" cols="95" name="notes" form="" style="margin-top:5px; border-radius:10px;" placeholder="Please enter your notes for the admin's reference.">
                </textarea>
                <input type="submit" name="qsubmit" vlaue="Choose options" class="btn" style="width:100px;margin-top:5px;">
                <a href="runit.php"> Add to calendar </a>
            </div>
        </div></form>
    </div>
    <?php
        $requested_duration_hours = 0;
        $requested_duration_minute = 0;
        if(isset($_POST['submit'])){
            if(!empty($_POST['admins'])) {
                $admin = $_POST['admins'];
                $requested_duration_minute = $_POST['duration'];
            } 
            else 
            {
                echo 'Please select the value.';
            }
        }
        $start_day_hour = 9;
        $start_day_minutes = 0;
        $requested_duration_hours = floor($requested_duration_minute / 60);
        // $requested_duration_minute = $requested_duration_minute % 60;
        
    ?>
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
        <?php
        $requested_duration_hours = 0;
        $requested_duration_minute = 0;
        // $domdoc->getElementById('name')->nodeValue;
        if(isset($_GET['qsubmit'])){
            // echo "sup";
            if (isset($_GET['options-outlined'])) {
                $f_time = '00-00-00';
                if($_GET['options-outlined']=='b9')
                {
                    $f_time = '09-00-00';
                }
                else if($_GET['options-outlined']=='b10')
                {
                    $f_time = '10-00-00';
                }
                else if($_GET['options-outlined']=='b11')
                {
                    $f_time = '11-00-00';
                }
                else if($_GET['options-outlined']=='b12')
                {
                    $f_time = '12-00-00';
                }
                else if($_GET['options-outlined']=='b13')
                {
                    $f_time = '13-00-00';
                }
                else if($_GET['options-outlined']=='b14')
                {
                    $f_time = '14-00-00';
                }
                else if($_GET['options-outlined']=='b15')
                {
                    $f_time = '15-00-00';
                }
                else if($_GET['options-outlined']=='b16')
                {
                    $f_time = '16-00-00';
                }
                else if($_GET['options-outlined']=='b17')
                {
                    $f_time = '17-00-00';
                }
                else if($_GET['options-outlined']=='b18')
                {
                    $f_time = '18-00-00';
                }
                echo $f_time;
                $final_dur = '125';
                $sql = "INSERT INTO meeting (duration, email1, email2, link, start_time, topic) VALUES ($final_dur, 'apoorva@xyz.com', 'abc@xyz.com', 'https://meet.google.com/orx-uzbs-naf', $f_time, 'upgradation descussions')";
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
            }
        }
        $start_day_hour = 9;
        $start_day_minutes = 0;
        $requested_duration_hours = floor($requested_duration_minute / 60);
        // $requested_duration_minute = $requested_duration_minute % 60;
        for($start_day_hour=9;$start_day_hour<18;$start_day_hour++)
        {
            if($start_day_hour + $requested_duration_hours < $table_hours_start || $start_day_hour + $requested_duration_hours > $table_hours_end)
            {
                

            }
        }
    ?>
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
