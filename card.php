<!DOCTYPE html>
<html>
<head>

    <?php

    session_start();
    $var="";
    if(true){

        try {
            $conn = new mysqli("localhost", "root", "", "cinema");


            $myq="Select * from login";
            $res=$conn->query($myq);
            for($i=0;$i<$res->num_rows;$i++){
                $row=$res->fetch_array();
                if(($i+1)==$res->num_rows){
               $username= $row[0];
               echo $username;



                }
            }

            $myq="Select * from signin";
            $res=$conn->query($myq);
            for($i=0;$i<$res->num_rows;$i++){
                $row=$res->fetch_array();
                if($row[1]==$username){

                  $fname= $row[1];
                    $time= $row[2];



                }
            }

            $conn->close();
        }

        catch (Exception $exc){

        }

    }

    ?>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 70%;
            position: relative;
            margin: 10%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 20px;

        }

        #customers tr:nth-child(even){background-color: #ffeb99;}
        #customers tr:nth-child(odd){background-color: #FAFAD2;}

        #customers tr:hover {background-color: white;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #e8a405;
            color: white;
        }
    </style>
</head >
<form  method="post" action="card.php"  >
<body style="background-image: url('img_13.png')" >

<table id="customers">
    <tr>
        <th>The Name Of Films</th>
        <th>Specific Time</th>
        <th>Total Price ($)</th>

    </tr>

    <tr>
        <td><?php echo $fname?></td>
        <td><?php echo $time?></td>
        <td><?php echo $time?></td>

    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>


</table>
</form>
</body>
</html>
