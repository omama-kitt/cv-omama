
<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Seat Booking</title>
    <link rel="stylesheet" href="booking%20seat.css" />
</head>
<body>

<div class="movie-container">
    <select id="movie">
        <option value="10">Spider Man($10)</option>
        <option value="11">X-Men($11)</option>
        <option value="12">The Foreigner ($12)</option>
        <option value="13">Sentinelle ($13)</option>
        <option value="14">Jackie Chan's VANGUARD($14)</option>
        <option value="15">Below Zero (Bajocero)($15)</option>
        <option value="16">F.E.A.R. ($16)</option>
        <option value="17">Roohi($17)</option>
        <option value="18">Venom Coast($18)</option>
        <option value="19">Dead Air($19)</option>
        <option value="20">For the Sake of Vicious($20)</option>
        <option value="9">Death Ranch($9)</option>
        <option value="8">The Mitchells vs. the Machines($8)</option>
        <option value="7">Raya and the Last Dragon($7)</option>
        <option value="21">Genius Loci ($21)</option>
        <option value="22">Nazha Reborn($22)</option>
        <option value="23">Barbie Princess Adventure ($23)</option>
        <option value="24">Carmen Sandiego: To Steal or Not to Steal($24)</option>
    </select>
</div>

<ul class="showcase">
    <li>
        <div class="seat"></div>
        <small>N/A</small>
    </li>
    <li>
        <div class="seat selected"></div>
        <small>Selected</small>
    </li>
    <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
    </li>
</ul>

<div class="container">
    <div class="screen"></div>

    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>

    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
    </div>

    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>

    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>

    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>

    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>

    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>

    <div class="row">
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
    </div>
</div>

<p class="text">
    You have selected <span id="count">0</span> seats for a price of $<span
        id="total"
    >0</span
    >
</p>

<script src="booking%20seat.js"></script>
</body>
</html>