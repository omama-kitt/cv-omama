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
            color:#ffffff;
            text-decoration:none;
            font-size:1.2vw;
        }


        #Table {
            background-color: black;
            border-collapse: collapse;
            width: 1000px;
            border-radius: 4px;
            cursor: pointer;

        }

        #Table td, #Table th {
            padding-left: 70px;
            margin-bottom: 10px;
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
            </section></tr></table>ction>
</head>
<body style="background-image: url(network.jpg); background-repeat: no-repeat; background-size: cover">

<br>

<br>
<br>
<br>

<h2 align="center" style="font-family:'Comic Sans MS' ;color:white" >IPaddress Table</h2>
<div style="margin-left:12.5%;padding:1px 16px;width:95%;">
    <table id="Table" style="width:75%;">
        <tr >
            <th >index</th>
            <th>IPAT IP Address</th>
            <th>IPAT IfIndex</th>
            <th>IPAT Net Mask</th>
            <th>IPAT Broadcast Address</th>
            <th>IPAT Reassemble Max Size</th>
        </tr>
        <?php
        $ip = "127.0.0.1:161";

        $IPATIPAddress = snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.4.20.1.1");
        $IPATIfIndex= snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.4.20.1.2");
        $IPATNetMask= snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.4.20.1.3");
        $IPATBroadcastAddress= snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.4.20.1.4");
        $IPATReassembleMaxSize= snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.4.20.1.5");



        for($i = 0; $i < count($IPATIPAddress); $i++)
        {


        ?>
            <tr>
                <td style= 'color:white ;font-size: 15px; text-align:center;'>
                    <?php echo $i?>
                </td>
                <td>
                    <h6 style= 'color:white ;font-size: 15px; padding-left: -40px' ><?php echo $IPATIPAddress[$i] ?></h6>
                </td>
                <td>
                    <h6  style= 'color:white ;font-size: 15px; padding-left: -40px ' ><?php echo  $IPATIfIndex[$i]?> </h6>
                </td>
                <td>
                    <h6  style= 'color:white ;font-size: 15px; padding-left: -40px ' ><?php echo $IPATNetMask[$i] ?> </h6>
                </td>
                <td>
                    <h6  style= 'color:white ;font-size: 15px ' ><?php echo  $IPATBroadcastAddress[$i] ?> </h6>
                </td>
                <td>
                    <h6  style= 'color:white ;font-size: 15px ' ><?php echo  $IPATReassembleMaxSize[$i] ?> </h6>
                </td>

            </tr>
            <?php
        }
        ?>
    </table>
</div>

</body>
</html>