<?php
require_once '../config/connect.php';
?>

<?php
include 'inc/header.php';
include 'inc/nav.php';
?>
 <section id="content">
	<div class="content-blog">
		<div class="container">
			<table class="table table-striped" style="margin-top:15px;">
				<thead>
					<tr>
						<th>#</th>
						<th>Emertimi i kategorise</th>
						<th>Veprimi</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT * FROM kategori ";
					$res = mysqli_query($connection, $sql); 
					while ($r = mysqli_fetch_assoc($res)) {
				?>
                    <tr>
					<th scope="row"><?php echo $r['id']; ?></th>
						<td><?php echo $r['lloji']; ?></td>
						<td><a href="editcategory.php?id=<?php echo $r['id']; ?>">Ndrysho</a> | <a href="delcategory.php?id=<?php echo $r['id']; ?>">Fshi</a></td>
					</tr>
				
				</tbody>
				<?php } ?>
			</table>
			
		</div>
	</div>

</section>
<?php
include 'inc/footer.php';
?>