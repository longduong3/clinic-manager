<?php
session_start();
error_reporting(0);
include('include/config.php');
if(!$_COOKIE['username-director']):
	header('location:index.php');
endif;
?>
<?php

?>
 <?php

include './view-dr/header.php';
 include './view-dr/sidebar_start.php';
?>



<div class="container-fluid" style="margin-left:150px">
<!---->
<div class="card sha mb-4">
	<div class="card-header py-3">
	<center><h3 style="color: black;">CẬP NHẬT TIN TỨC</h3></center> 
	</div>
	<div class="card-body">
		<?php

				
				if(isset($_POST['edit_btn']))
				{
					$id = $_POST['edit_id'];

					$query = "SELECT * FROM tin_tuc WHERE id = '$id' ";
					$query_run= mysqli_query($con,$query);
					foreach ($query_run as $row) 
					{
						 ?>
			
						<form action="tin_tuc_codesa.php" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
							<div class="form-group">
				                <label>Tiêu Đề</label>
				                <input type="text" name="edit_tuade" value="<?php echo $row['TuaDe'] ?>" class="form-control" >
            				</div>
							<div class="form-group">
				                <label>Nội Dung</label>

				                 <textarea name="edit_tintuc" id="tt" rows="15"  class="form-control"><?php echo $row['TinTuc'] ?></textarea> 	
            				</div>
            				<div class="form-group">
				                <label>Hình Đại Diện</label>
								<br>
								
				                <input type="file" name="edit_image" value="" class="form-control" required><?php echo "view-dr/image/".$row['img']." " ?><br><img src=anh_nhan_vien/<?php echo $row['img']?> />	</input> 
				            </div>				           
				             <div class="form-group">
				                <label>Đường dẫn URL</label>
				                <input type="text" name="edit_url" value="<?php echo $row['url'] ?>" class="form-control" >
				            </div>
							<div class="form-group">
				                <label>Tin Tức</label>
				                <input type="text" name="edit_ten_url" value="<?php echo $row['ten_url'] ?>" class="form-control" >
				            </div>
							<button type="submit" name="update_btn" class="btn btn-danger"> Cập nhật</button>
							<a href="news.php" class="btn btn-secondary"> Đóng</a>	
						</form>
						<?php 
					}
				}	
						 ?>
	</div>
</div>
</div>
<script>CKEDITOR.replace('tt');

</script>
<?php 

 ?> 