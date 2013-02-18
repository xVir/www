<h2>Record Name</h2>
<p>Name: <?php echo $name['Name']['name'] ?></p>
<p>Type: <?php echo $name['Name']['type'] ?></p>
<p>Language: <?php echo $name['Name']['lang'] ?></p>
<p><h3>Documents:</h3>

	<table>
		<tr>
			<th></th>
			<th>Description</th>
			<th>Date</th>
		</tr>

				<tr>
					<td>Begin</td>
					<td><?php echo $name['BeginDocument']['description'] ?></td>
					<td><?php echo $name['BeginDocument']['document_date'] ?></td>
				</tr>

				<tr>
					<td>End</td>
					<td><?php echo $name['EndDocument']['description'] ?></td>
					<td><?php echo $name['EndDocument']['document_date'] ?></td>
				</tr>

			</table>

</p>

