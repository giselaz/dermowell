<?php
require_once 'config/connect.php';
include 'functions.php';
if (!isLoggedIn()) {
	header('location: login.php');
}
include 'inc/header.php';
include 'inc/nav.php';
$uid=$_SESSION['customerid'];
$cart=$_SESSION['cart'];
?>
<section id="content">
    <div class="content-blog content-account">
    <div class="cointainer">
         <div class="row">
             <div class="page_header text-center">
                 <h2>LLOGARIA IME </h2>
             </div>
             <div class="col-md-12">
     <h3> Porosite e meparshme</h3>
     <br>
     <table class="cart-table account-table table table-bordered">
         <thead>
             <tr>
                <th>Emri i produktit</th>
                <th>Sasia</th>
                <th>Cmimi</th>
                <th> </th>
                <th>Cmimi total</th>
             </tr>
         </thead>
         <tbody>
         <?php
            if(isset($_GET['id']) & !empty ($_GET['id'])){
                $oid=$_GET['id'];
            }
             $ordsql="SELECT * FROM porosia WHERE uid= $uid AND id='$oid'";
             $ordres=mysqli_query($connection,$ordsql);
             $ordr = mysqli_fetch_assoc($ordres);
             $orditmsql = "SELECT * FROM flete_porosi o INNER  JOIN produkte p  ON  o.id_produkt=p.id";
             $orditmres=mysqli_query($connection,$orditmsql);
             $total=0;
             while($orditmr = mysqli_fetch_assoc($orditmres)){
             $total= $total+$orditmr['cmimi_produktit']* $orditmr['sasia'];
         ?>
             <tr>
                 <td>
                 <a href=""><?php echo substr($orditmr['emri'], 0, 25); ?></a>
                 </td>
                 <td>
                     <?php echo $orditmr['sasia'];?>
                 </td>
                 <td>
                     <?php echo $orditmr['cmimi_produktit'];?>L
                 </td>
                 <td>
                    
                 </td>
                 <td>
                 <?php echo $orditmr['cmimi_produktit']*$orditmr['sasia']; ?>L
                 </td>
                
             </tr>
            <?php } ?>
            <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>
                     Totali i porosise
                    </td>
                 <td>
                     <?php echo $total ?>L
                 </td>
                 
             </tr>
             <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>
                     Statusi
                    </td>
                 <td>
                     <?php echo $ordr['statusi'];?>
                 </td>
                 
             </tr>
             <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>
                     Porosia e kryer me:
                    </td>
                 <td>
                     <?php echo $ordr['timestamp'];?>
                 </td>
                 
             </tr>
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
<?php include 'inc/footer.php' ;?>
     