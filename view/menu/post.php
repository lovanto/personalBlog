<?php
$sql = mysqli_query($Open, "SELECT * FROM post WHERE title_post = '$page'");
while ($data = mysqli_fetch_array($sql)) {
	$id_post = $data['id_post'];
	$title_post = $data['title_post'];
	$image_post = $data['image_post'];
	$description_post = $data['description_post'];
	$id_category = $data['id_category'];
	$hit = $data['hit'] + 1;
	?>
	<div>
		<div><?=$data['title_post']?><br></div>
		<img class="marginsBottom marginsTop" src="<?=$data['image_post']?>" width="800"><br>
		<div><?=$data['description_post']?><br></div>
		<div class="boldFont marginsTop">
			<?php 
			if ($data['id_category']==1) {
				echo "Programming";
			}elseif ($data['id_category']==2) {
				echo "Tutorial";
			}elseif ($data['id_category']==3) {
				echo "Emulator";
			}else{
				echo "Lainnya";
			}
			?>
		</div>
	</div>
	<?php
	if ($_SESSION['name'] != "") {
		?>
		<hr>
		<div class="container marginsTop marginsBottom">
			<div class="marginsBottom boldFont">Komentar:</div>
			<textarea class="form-control textUnResize" rows="3"></textarea>
		</div>
		<hr>
		<?php
		$getComment = mysqli_query($Open, "SELECT * FROM comment_user WHERE id_post = '$id_post' ORDER BY id_comment DESC");
		while ($resultComment = mysqli_fetch_array($getComment)) {
			?>
			<div class="container rounded border marginsBottom">
			<div class="marginsTop boldFont"><?=$resultComment['name_user']?></div>
			<div class="space marginsBottom marginsTop"><?=$resultComment['comment_content']?></div>
			</div>
			<?php
		}

		mysqli_query($Open ,"UPDATE post SET 
		title_post='$title_post', 
		image_post='$image_post', 
		description_post=description_post, 
		id_category=id_category, 
		hit='$hit' 
		WHERE id_post='$id_post'") 
		or die(mysqli_error($Open));
	}
}