<?
if (!$_SESSION[USERID]) header("Location: Index.php?page=Home");
?>
<table cellpadding="8" cellspacing="8">
	<tr>
		<td colspan="2">
			<center>Choose the type of land you would like to buy.</center>
		</td>
	</tr>
	<tr>
		<td width="50%">
			<table id="Table_01" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="14">
						<img src="images/redbox/RedBox_01.png" width="14" height="12" alt=""></td>
					<td background="images/redbox/RedBox_02.png">
						<img src="images/redbox/RedBox_02.png" width="37" height="12" alt=""></td>
					<td width="12">
						<img src="images/redbox/RedBox_03.png" width="13" height="12" alt=""></td>
				</tr>
				<tr>
					<td width="14" background="images/redbox/RedBox_04.png">
						<img src="images/redbox/RedBox_04.png" width="14" height="41" alt=""></td>
					<td>
						
						<center>Get yourself a Island.</center>
<?
	$DbLink->query("SELECT id, name, description, price FROM stardust_subscriptions Where active='1' ORDER BY price ASC ");
    while (list($id, $name, $description, $price,) = $DbLink->next_record()) {
?>

						<form action="index.php?page=getregion" method="post">
							<table width="100%" bgcolor="#9c0031">
								<tr>
									<td width="50%">Name: <?=$name?></td>
									<td rowspan="4"><img src="images/gvsf/SimImageStub.jpg" /></td>
								</tr>
								<tr>
									<td colspan="2"><?=$description?></td>
								</tr>
								<tr>
									<td align="right" colspan="2">
										<input type="hidden" name="id" value="<?=$id?>" />
										<input type="hidden" name="button_id" value="<?=$button_id?>" />
										<input type="Submit" value="Get It for only <?=$price / 100.0?>" />
									</td>
								</tr>
							</table>
						</form><br/>
<?
}
?>
					</td>
					<td width="12" background="images/redbox/RedBox_06.png">
						<img src="images/redbox/RedBox_06.png" width="13" height="41" alt=""></td>
				</tr>
				<tr>
					<td width="14">
						<img src="images/redbox/RedBox_07.png" width="14" height="11" alt=""></td>
					<td background="images/redbox/RedBox_08.png">
						<img src="images/redbox/RedBox_08.png" width="37" height="11" alt=""></td>
					<td width="12">
						<img src="images/redbox/RedBox_09.png" width="13" height="11" alt=""></td>
				</tr>
			</table>
		</td>
		<td valign="top" width="50%">
			<ul>
				<li>No virutal servers, real server hardware!</li>
				<li>Only running two 256x256 regions per core!</li>
				<li>Varible Regions (sims can be many sizes, not just 256</li>
					<ul><li>64x64, 128x128, 256x256, 512x512</li></ul></li>
				<li>Extra Estate Management Options
					<ul>
						<li>Default Draw Distance</li>
						<li>Force Draw Distance</li>
						<li>Allow Minimap</li>
						<li>May May More</li>
					</ul>
				</li>
				<li>Secure!</li>
				<li>Choose your default avatar when you sign up</li>
				<li>Latest opensource physics engine!</li>
				<li>No purchase fee</li>
				<li>No set up fee</li>
				<li>Free condo in SL with purchases of 256 or larger region</li>
				<li>Daily roll back capabilites as far as 7 days</li>
				<li>Unlimited renaminmg of sim</li>
				<li>Three free moves</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			Note: Certain viewers are required for Islands larger than 256x256
		</td>
	</tr>
</table>