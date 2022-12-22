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
            padding-left: 50px;
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




<br>
<br>

<br>


<h2  style="font-family:'Comic Sans MS' ;padding-left:800px;color:white" >TCP Table</h2>
<br>
<br>

<br>

<div style="margin-left:12.5%;padding:1px 16px;width:75%;padding-left:100px">
    <table id="Table">

    <tr >
        <th >index</th>
        <th>tcpConnState</th>
        <th>tcpConnLocalAddress</th>
        <th>tcpConnLocalPort</th>
        <th>tcpConnRemAddress</th>
    </tr>



    <?php
    $ip = "127.0.0.1:161";

    $tcpConnState = snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.6.13.1.1");
    $tcpConnLocalAddress= snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.6.13.1.2");
    $tcpConnLocalPort = snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.6.13.1.3");
    $tcpConnRemAddress= snmp2_walk("127.0.0.1", "public", ".1.3.6.1.2.1.6.13.1.4");
    for($i = 0; $i < count($tcpConnState); $i++)
    {


        ?>

        <tr>
            <td style= 'color:white ;font-size: 15px; text-align:center;'>
                <?php echo $i?>
            </td>
            <td>
                <h6 style= 'color:white ;font-size: 15px; ' ><?php echo $tcpConnState[$i] ?></h6>
            </td>
            <td>
                <h6  style= 'color:white ;font-size: 15px ' ><?php echo  $tcpConnLocalAddress[$i]?> </h6>
            </td>
            <td>
                <h6  style= 'color:white ;font-size: 15px ' ><?php echo $tcpConnLocalPort[$i] ?> </h6>
            </td>
            <td>
                <h6  style= 'color:white ;font-size: 15px ' ><?php echo  $tcpConnRemAddress[$i] ?> </h6>
            </td>

        </tr>
        <?php
    }
    ?>


    </table>
</div>

</body>
</html>