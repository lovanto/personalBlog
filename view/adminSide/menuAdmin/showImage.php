<div>
	<a href="#" title="Close" class="modal-close"><font size="5">&times;</font></a>
	<div class="row">
		<?php
		$sql = "SELECT * FROM image";
		$query = mysqli_query($Open, $sql);
		$countData = mysqli_num_rows($query);

		while ($showData = mysqli_fetch_array($query)) {
			?>
			<div class="col-md-3 zoom">
				<?=cl_image_tag($showData['data_image'], array("width"=>161));?>
				<div>
					<?=$showData['data_image']?>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>