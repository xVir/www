<h2>Record Location</h2>
<p>Type: <?php echo h($loc['Location']['location_type']); ?></p>
<p><h3>Documents:</h3>

	<table>
		<tr>
			<th></th>
			<th>Description</th>
			<th>Date</th>
		</tr>

				<tr>
					<td>Begin</td>
					<td><?php echo $loc['BeginDocument']['description'] ?></td>
					<td><?php echo $loc['BeginDocument']['document_date'] ?></td>
				</tr>

				<tr>
					<td>End</td>
					<td><?php echo $loc['EndDocument']['description'] ?></td>
					<td><?php echo $loc['EndDocument']['document_date'] ?></td>
				</tr>

			</table>

</p>

<p>
	<?php 
		$locationValue = null;
		switch ($loc['Location']['location_type']) {
			case 'point':
				$locationValue = $loc['Location']['location_point'];

				$latitude = strtok($locationValue, ' (,');
				$longitude = strtok(' (,)');	

				//debug($latitude);
				//debug($longitude);

				echo $this->GoogleMapV3->map(array('latitude'=> $latitude, 'longitude'=>$longitude, 'localize'=>false));
				echo $this->GoogleMapV3->addMarker(array('latitude'=> $latitude,'longitude'=> $longitude, 'windowText'=>'Location'));

				break;
			
			default:
				
				break;
		}

		
		//echo $this->GoogleMapV3->map(); 
		//echo $googleMapV3->addMarker(array('latitude'=>40.69847,'longitude'=>-73.9514));
	 ?>

</p>
