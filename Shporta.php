<?php
include 'functions.php'; 
// if (!isLoggedIn()) {
// 	header('location: login.php');
// }
include 'inc/header.php';
include 'inc/nav.php';
?>
<body><div class="shopping-cart">
<div class="px-4 px-lg-0">

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Produkti</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Cmimi</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase" style="margin-left:20px;">Sasia</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Ndrysho<i/div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Fshi</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Total</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  $total=0;
                  if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key =>$value){
                      $total=$total+$value['item_price']*$value['quantity'];
                  
                  ?>



                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="details.php" class="text-dark d-inline-block align-middle"><?php echo $value['item_name'];?></a></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong><?php echo $value['item_price'];?>L</strong></td>
                  <form action="cartupdate.php" method="POST">
                  <td class="border-0 align-middle">
                    <input type="number" id="quantity" name="quantity" min="1" style="width:20%; margin-left:20px;" value="<?php echo $value['quantity'] ?>">
                  </td>
                  <td class="border-0 align-middle">
                    <button href="#" class="text-dark" name ="update">Ruaj</button>
                    <input type="hidden" name="item_name" value="<?php echo $value['item_name']?>" >
                    </form>
                  </td>
                  <td class="border-0 align-middle">
                    <form action="cartremove.php" method="POST">
                    <button href="#" class="text-dark" name ="remove"><i class="fa fa-trash" style="color:red;"></i></button>
                    <input type="hidden" name="item_name" value="<?php echo $value['item_name']?>" >
                    </form>
                    </td>
                    <td class="border-0 align-middle"><strong><?php echo $value['item_price']*$value['quantity'];?>L</strong></td>
                </tr>
                <?php
              }
                  }
                  ?>
              </tbody>
            </table>
            <form method="POST" action="emptycart.php">
            <button href="#" class="btn btn-outline btn-danger py-2 btn-block" name ="empty"style="border-color:red; width:20%;">Zbraz Shporten</button>
            </form>
          </div>
          <!-- End -->
        </div>
      </div>

         
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">POROSIA </div>
          <div class="p-4">
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Nentotali</strong><strong><?php echo $total;?>L</strong></li>
            </ul><a href="checkout1.php" class="btn btn-dark  py-2 btn-block">Vazhdo ne checkout</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<?php include'inc/footer.php';?>