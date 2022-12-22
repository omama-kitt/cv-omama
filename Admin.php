
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="Admin.php">
    <?php

    session_start();
    $F="female";
    $M="male";
    $count1=0;
    $count2=0;
    $count3=0;
    if(isset($_POST['gender']) ) {

        $gender = $_POST['gender'];
        try {

            $conn = new mysqli("localhost", "root", "", "cinema");
            $myq1 = "Select * from signin";
            $res = $conn->query($myq1);

            for ($i = 0; $i < $res->num_rows; $i++) {
                $row = $res->fetch_array();
                if ($row[3] == $F) {
                    $count1++;

                }
                elseif  ($row[3] == $M) {

                    $count2++;
                }


            }


            $conn->close();
        } catch (Exception $exc) {

        }

    }



    ?>

    <div class="container">


        <label for="uname"><b>The ratio of each gender has an account in the golden cinema</b></label><br>
      <input type="text" id="uname" name="gender" style="display: none" >



        <button class="mybutt" onclick="location.href='#'" >
            show up</button>


    </div>

</form>


<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="myChart" width="400" height="400"></canvas>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['female', 'Male'],
            datasets: [{
                label: 'The Gender of Users',
                data: [<?php echo $count1?>, <?php echo $count2?>],
                backgroundColor: [
                    'rgba(255, 159, 64, 0.2)',

                    'rgba(153, 102, 255, 0.2)',


                ],
                borderColor: [

                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>
