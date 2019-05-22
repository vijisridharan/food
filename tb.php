<?php
$username='root';
$pass='';
$db='testdb';
$db=new mysqli('localhost',$username,$pass,$db) or die("unable to connect");
?>
item: <?php echo $_POST["ch1"]; ?>
quantity: <?php echo $_POST["q1"]; ?>
cost: <?php echo $_POST["c1"]; ?>
<br>
item: <?php echo $_POST["ch2"]; ?>
quantity: <?php echo $_POST["q2"]; ?>
cost: <?php echo $_POST["c2"]; ?>
<br>
item: <?php echo $_POST["ch3"]; ?>
quantity: <?php echo $_POST["q3"]; ?>
cost: <?php echo $_POST["c3"]; ?>
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>




<div id="divToPrint" style="display:none;">
  <div style="width:200px;height:300px;background-color:teal;">
           <?php echo $html; ?>      
  </div>
</div>
<div>
  <input type="button" value="print" onclick="PrintDiv();" />
</div>