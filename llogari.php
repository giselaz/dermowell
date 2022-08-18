<?php
ob_start();
require_once 'config/connect.php';
include 'functions.php';
if (!isLoggedIn()) {
	header('location: login.php');
}
?>
<?php
include'inc/header.php';
include 'inc/nav.php';

$uid=$_SESSION['customerid'];
$cart=$_SESSION['cart'];
?>
<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class=" success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
        <div class="profile_info" style="margin-left:30px;">
        <img src="assets/img/avatar.png" style="width:60px; height:60px;" >
        <div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['roli']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
        </div>
<section id="content">
    <div class="content-blog content-account">
    <div class="cointainer">
         <div class="row">
             <div class="page_header text-center">
                 <h2 style="color:black; font-family:Nunito;">LLOGARIA IME </h2>
             </div>
             <div class="col-md-12">
     <h3 style="color:black; font-family:Nunito;"> Porosite e meparshme</h3>
     <br>
     <table class="cart-table account-table table table-bordered">
         <thead>
             <tr>
                <th>Porosia</th>
                <th>Data</th>
                <th>Statusi</th>
                <th>Menyra e pageses</th>
                <th>Totali</th>
             </tr>
         </thead>
         <tbody>
         <?php
             $ordsql="SELECT * FROM porosia WHERE uid= '$uid' ";
             $ordres=mysqli_query($connection,$ordsql);
             while($ordr = mysqli_fetch_assoc($ordres)){
         ?>
             <tr>
                 <td>
                     <?php echo $ordr['id'];?>
                 </td>
                 <td>
                     <?php echo $ordr['timestamp'];?>
                 </td>
                 <td>
                     <?php echo $ordr['statusi'];?> 
                 </td>
                 <td>
                     <?php echo $ordr['meyra_pageses'];?>
                 </td>
                 <td>
                     <?php echo $ordr['cmimi_total'];?>L
                 </td>
                 <td>
                     <a href="view-order.php?id=<?php echo $ordr['id']; ?>">Shiko</a>
                 </td>
             </tr>
            <?php } ?>
         </tbody>
     </table>
     <br>
     <br>
     <br>
</div>
             
 </div>
             
 </div>
</div>
</section>
        <?php
   include 'inc/footer.php';
   ?>