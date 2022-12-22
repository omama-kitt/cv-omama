<!doctype html>
<html >
<head>
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
            color:white;
            text-decoration:none;
            font-size:1.2vw;
        }


        #Table {
            border-collapse: collapse;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            background-color: black;


        }



        #Table th {
            padding-top: 12px;
            padding-bottom: 12px;

            color: lightpink;
            background-color:slategrey;
            border-color:white;
            text-align:center;
        }
    </style>
    <table style= 'saddlebrown ;font-size: 20px;padding-left: 670px  '>
        <tr>
            <section style=";width: 50%;height: 10%">
                <div class="wrapper">
                    <ul class="nav-area">
                        <li><a href="PART1.php">SYSTEM</a></li>
                        <li><a href="PART3.php">IP</a></li>

                        <li><a href="PART2.php">TCP</a></li>
                    </ul>
                </div>
            </section></tr>
        <br>
        <tr>
            <section style=";width: 50%;height: 10%">
                <div class="wrapper">
                    <ul class="nav-area">
                        <td> <li><a href="PART3.php">IPaddr</a></li></td>
                        <td>  <li><a href="PART4.php">IpNetToMediaTable</a></li></td>
                    </ul>
                </div>
            </section></tr></table>
</head>
<body style="background-image: url(network.jpg);background-repeat: no-repeat;background-size: cover">



<br>
<br>
<br>

<h2 align="center" style="font-family:'Comic Sans MS' ;color:white" >IPNetToMedia Table</h2>
<div style="margin-left:5.5%;padding:1px 16px;width:85%;">
    <table id="Table">

        <tr>
            <th>index</th>
            <th>IPN2M IfIndex</th>
            <th >IPN2M PhysAddress</th>
            <th>IPN2M NetAddress</th>
            <th >IPN2M Type</th>



        </tr>



        <?php
        $ip = "127.0.0.1:161";

        $IPN2MIfIndex = snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.4.22.1.1");
        $IPN2MPhysAddress = snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.4.22.1.2");
        $IPN2MNetAddress = snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.4.22.1.3");
        $IPN2MType = snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.4.22.1.4");



        for($i = 0; $i < count($IPN2MIfIndex); $i++)
        {


            ?>

            <tr>
                <td style= 'color:white;font-size: 15px; text-align:center;'>
                    <?php echo $i?>
                </td>
                <td>
                    <h6 style= 'color:white ;font-size: 15px;padding-left: 90px' ><?php echo$IPN2MIfIndex[$i] ?></h6>
                </td>
                <td>
                    <h6  style= 'color:white ;font-size: 15px;padding-left: 140px ' ><?php echo  $IPN2MPhysAddress[$i]?> </h6>
                </td>
                <td>
                    <h6  style= 'color:white ;font-size: 15px ;padding-left: 120px ' ><?php echo  $IPN2MNetAddress[$i]?> </h6>

                </td>

                <td>
                    <h6  style= 'color:white ;font-size: 15px;padding-left: 80px ' ><?php echo  $IPN2MType[$i]?> </h6>

                </td>


            </tr>
            <?php
        }
        ?>


    </table>
</div>

</body>
</html>