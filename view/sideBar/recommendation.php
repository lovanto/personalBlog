<div class="border background text-center marginsTop">
	<div class="boldFont">
		Mungkin Anda Sukai
		<hr>
	</div>
	<?php
	$sql = mysqli_query($Open, "SELECT * FROM post ORDER BY RAND() LIMIT 3");
	while ($data = mysqli_fetch_array($sql)) {
		?>
		<a href="index.php?page=<?=$data['title_post']?>">
			<div class="content border zoom blackFont marginsBottom boldFont populerFontSize center">
				<?php echo cl_image_tag($data["image_post"], array("width"=>150))?>
				<div>
					<?php
						echo $data['title_post'];
					?>
				</div>
			</div>
		</a>
		<?php
	}
	?>
</div>