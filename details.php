<?php require_once 'config/connect.php';?>
<?php

include 'functions.php'; 
include'inc/header.php';
include 'inc/nav.php';
// if(!isLoggedIn()){
//     header('location:login.php');
// }

if(isset($_GET['id']) & !empty($_GET['id'])){
    $id=$_GET['id'];
    $prodslq="SELECT * FROM produkte WHERE id=$id";
    $prodres=mysqli_query($connection,$prodslq);
    $prodr=mysqli_fetch_assoc($prodres);

}else{
    header('location:product.php');
}
?>
    <div class = "main-wrapper1">
        <div class = "container1">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img class="imazhi"src = "<?php echo $prodr['foto']?>" alt = "produkt" style="width:450px; height:500px;">
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name"><?php echo $prodr['emri']?></span>
                    <br>
                    <span class = "product-price">"<?php echo $prodr['cmimi']?>L</span>
                    <div class = "product-rating" style=" display: flex; align-items: center; margin-top: 12px;">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class = "product-description">"<?php echo $prodr['pershkrimi']?></p>
    
                    <div class = "btn-groups">
        
                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                      <i class="fs-16 zmdi zmdi-plus"></i>
                   </div>
                    <button onclick="location.href='carthandler.php?cart_id=<?php echo $prodr['id'] ?>&cart_name=<?php echo $prodr['emri']?> &cart_price=<?php echo $prodr['cmimi']?> &cart_img=<?php echo $prodr['foto']?>'"class = "add-cart-btn" style="margin-top:20px;" name="addtocart"  >
                     <i class = "fas fa-shopping-cart" style="padding-right:7px;" ></i>Shto ne shporte </button>
            
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include 'inc/footer.php';
?>