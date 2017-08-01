   <div class="home-inner col-xs-12">
   	<div class="envelope col-xs-12">
   		<?php 
   		$query = "SELECT * FROM `envelope` WHERE `login`='$login' ";
   		$res = mysql_query($query) or die(mysql_error());
   		$row = mysql_num_rows($res);
   		while ($row = mysql_fetch_array($res)) {
   			?>
   			<form class="delform col-xs-3">
   				<?php echo "<input hidden name='id' id='id-del' value=".$row['id'].">"; ?>
   				<div class="enve-i"><i class="fa fa-envelope" aria-hidden="true"></i></div>
   				<?php echo "<span id='nameEnvelope' class='name-envelope'>".$row['nameEnvelope']."</span>";?>
   			</form>
   			<?php }?>

   		</div>
   	</div>
