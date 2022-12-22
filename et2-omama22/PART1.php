<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TCP</title>
    <style>
        body,html{
            margin:0;
            padding:0;

        }
        header{
            width:100%;
            height:70px;
            background-color:darkcyan;
        }
        h6{
            position:absolute;
            padding:3px;
            float:left;
            margin-left:2%;
            margin-top:10px;
            color:white;
        }
        ul{
            width:auto;
            float:right;
            margin-top:8px;
        }
        li{
            display:inline-block;
            padding:15px 30px;
            height:100%;
        }
        a{
            text-align:center;
            color:#ffffff;
            text-decoration:none;
            font-size:1.2vw;
        }


        #Table {
            background-color: rgba(18,17,17,0.48);
            border-collapse: collapse;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;

        }

        #Table td, #Table th {


            padding-left: 100px;
            margin-bottom: 10px;
            size: 50px;
        }

        #Table th {
            padding-top: 12px;
            padding-bottom: 12px;

            color: aliceblue;
            //background-color:slategrey;
            border-color:white;
            text-align:center;

        }
    </style>
    <section style=";width: 50%;height: 10%">
        <div class="wrapper">
            <ul class="nav-area">
                <li><a href="PART1.php">SYSTEM</a></li>
                <li><a href="PART3.php">IP</a></li>

                <li><a href="PART2.php">TCP</a></li>

            </ul>
        </div>
    </section>
</head>
<body style="background-image: url(network.jpg); background-repeat: no-repeat; background-size: cover">
<?php
if (!empty($_POST['con']))
{
    snmp2_set("localhost","public","1.3.6.1.2.1.1.4.0","s",$_POST['con']);
}
if (!empty($_POST['loc']))
{
    snmp2_set("localhost","public","1.3.6.1.2.1.1.6.0","s",$_POST['loc']);
}
?>

<?php
$ip = "127.0.0.1:161";
$dis= snmp2_get($ip,"public",".1.3.6.1.2.1.1.1.0"). "<br>";//discrbtion ;;
$id_s= snmp2_get($ip,"public",".1.3.6.1.2.1.1.2.0"). "<br>";//obj id   ;;
$time_s= snmp2_get($ip,"public",".1.3.6.1.2.1.1.3.0"). "<br>";//up time ''
$contact=snmp2_get($ip,"public",".1.3.6.1.2.1.1.4.0")."<br>";
$name_s= snmp2_get($ip,"public",".1.3.6.1.2.1.1.5.0")."<br>";
$location= snmp2_get($ip,"public",".1.3.6.1.2.1.1.6.0")."<br>";
$sysservice= snmp2_get($ip,"public",".1.3.6.1.2.1.1.7.0")."<br>";

// $location=snmp2_get($ip,"public",".1.3.6.1.2.1.1.6.0")."<br>";
//$server= snmp2_get($ip,"public",".1.3.6.1.2.1.1.7.0"). "<br>";//srever

?>
<div style="margin-left:12.5%;padding:1px 16px;width:75%;">
    <table id="Table">
        <tr>
            <th>Description</th>
            <td style= 'color:white ;font-size: 15px; text-align:center;'><?php echo $dis?></td>
        </tr>
        <tr>
            <th>OID</th>
            <td style= 'color:white ;font-size: 15px; text-align:center;'><?php echo $id_s?></td>
        </tr>
        <tr>
            <th>Time</th>
            <td style= 'color:white ;font-size: 15px; text-align:center;'><?php echo $time_s?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td style= 'color:white ;font-size: 15px; text-align:center;'><?php echo $name_s?></td>
        </tr>
        <tr>
            <th>Location</th>
            <td id="b" onsubmit="fun()" style= 'color:white ;font-size: 15px; text-align:center;'><?php echo $location?></td>
        </tr>
        <tr>
            <th>sysService</th>
            <td style= 'color:white ;font-size: 15px; text-align:center;'><?php echo $sysservice?></td>
        </tr>
        <tr>
            <th>Contact</th>
            <td id="a" onsubmit="myfun()" style= 'color:white ;font-size: 15px; text-align:center;'><?php echo $contact?></td>
        </tr>

    </table>
    <h2 style="font-family:'Comic Sans MS';margin-left:10.5%; color:white" > Submit value: </h2>
    <form action="PART1.php" method="post">
        <table>
            <tr>
                <td style="font-family:'Comic Sans MS'; color:white;font-weight: bold"><label for="con" style="margin-left: 150px"> Contact</label></td>
                <td ><input type="text" id="con" name="con" style="margin-left: 50px"></td>
            </tr>
            <tr>
                <td style="font-family:'Comic Sans MS'; color:white;font-weight: bold"><label for="loc" style="margin-left: 150px"> Location</label></td>
                <td ><input type="text" id="loc" name="loc" style="margin-left: 50px"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Change" onclick="fun" style="margin-top: 20px;margin-left: 50px; background-color: white; color: blue; font-size: 20px"></td>
            </tr>
        </table>
    </form>
</div>


</body>
</html>