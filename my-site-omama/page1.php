
<?php
$t1=$_REQUEST['T1'];
$t2=$_REQUEST['T2'];
if (!empty($_REQUEST['T1'])||!empty($_REQUEST['T2']))
{
    snmp2_set("localhost","public","1.3.6.1.2.1.1.4.0","s",$t1);
    snmp2_set("localhost","public","1.3.6.1.2.1.1.6.0","s",$t2);
}

$ip = "127.0.0.1:161";
$dis= snmp2_get($ip,"public",".1.3.6.1.2.1.1.1.0"). "<br>";//discrbtion ;;
$id_s= snmp2_get($ip,"public",".1.3.6.1.2.1.1.2.0"). "<br>";//obj id   ;;
$time_s= snmp2_get($ip,"public",".1.3.6.1.2.1.1.3.0"). "<br>";//up time ''
$contact=snmp2_get($ip,"public",".1.3.6.1.2.1.1.4.0")."<br>";
$name_s= snmp2_get($ip,"public",".1.3.6.1.2.1.1.5.0")."<br>";//name ''
$location=snmp2_get($ip,"public",".1.3.6.1.2.1.1.6.0")."<br>";
$sysservice= snmp2_get($ip,"public",".1.3.6.1.2.1.1.7.0")."<br>";//name ''

//$server= snmp2_get($ip,"public",".1.3.6.1.2.1.1.7.0"). "<br>";//srever

?>

<?php echo "Description :\n". $dis."\n"?>
<?php echo "OID: ".$id_s."\n"?>
<?php echo "Time: ".$time_s."\n"?>
<?php echo "Name: ".$name_s."\n"?>
<?php echo "Contact: ".$contact."\n"?>
<?php echo "Location: ".$location."\n"
?>
<?php echo "sysservice: ".$sysservice."\n"
?>

