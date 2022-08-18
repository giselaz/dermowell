<?php 
require_once 'config/connect.php';

include 'functions.php'; 
// if (!isLoggedIn()) {
// 	header('location: login.php');
// }?>
<?php include 'inc/header.php';?>
<?php include 'inc/nav.php';?>   
        <div class="small-container">
            <div class="row row-2">
                <h1 style="text-align: center; font-family: Cormorant; color: black;margin-right:40px;">Bli sipas kategorive</h1>

        </div><br><br>
        
        <ul class="links-container">
        <li class="link-item active" ><a href="product.php" class="link">Te gjitha</a></li>
        <?php

					  $catsql = "SELECT * FROM kategori";
							$catres = mysqli_query($connection, $catsql);
							while($catr = mysqli_fetch_assoc($catres)){
						 ?>
           
           	
                          <li class="link-item" ><a href="product.php?id=<?php echo $catr['id']; ?>"class="link"><?php echo $catr['lloji']; ?></a></li>
						<?php } ?>
        </ul> <br><br><br>
    

        
        <div class="row">
        <?php $sql="SELECT * FROM produkte";
                        if(isset($_GET['id'])& !empty($_GET['id'])){ 
                            $id=$_GET['id'];
                            $sql.=" WHERE kategori_id=$id";
                        }
                        $res = mysqli_query($connection, $sql);
                        while($r=mysqli_fetch_assoc($res)){
                            ?>
            <div class="col-4">
                <a href="details.php?id=<?php echo $r['id']; ?>" target="_blank">
                <img  src="<?php echo $r['foto']?>"></a>
                <h4 style="text-align: center; font-family: Nunito Sans; font-size:15px;"><?php echo $r['emri']?></h4>
                <p style="text-align: center;"><?php echo $r['cmimi'] ?>L</p><br>
                <p class="shtoShport">
                <button type = "button" class = "add-cart-btn" style="padding:10px 18px 10px 10px;" onclick="location.href='carthandler.php?cart_id=<?php echo $catr['id'] ?>&cart_name=<?php echo $catr['emri']?> &cart_price=<?php echo $catr['cmimi']?> &cart_img=<?php echo $catr['foto']?>'">
                <i class = "fas fa-shopping-cart" style="padding-right:7px;" ></i>
                SHTO NE SHPORTE </button>
                </p>
                <div class="rating" style="text-align: center;">
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
               
        </div>
        <?php }?>

</body>