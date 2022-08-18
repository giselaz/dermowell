<?php

require_once '../config/connect.php';
include '../functions.php';
if (!isLoggedIn()) {
	$_SESSION['msg'] = "Duhet te logoheni";
	header('location: ../login.php');
}

if(isset($_POST) & !empty($_POST)){
    $name= mysqli_real_escape_string($connection,$_POST['productname']) ;
    $description= mysqli_real_escape_string($connection,$_POST['productdescription']) ;
    $category= mysqli_real_escape_string($connection,$_POST['productcategory']) ;
    $price= mysqli_real_escape_string($connection,$_POST['productprice']) ;

    
if(isset($_FILES) & !empty($_FILES)){
     $target="assets/img/";
    $file_path=$target.basename($_FILES['productimage']['name']);
    $tmp_name=$_FILES['productimage']['tmp_name'];
    $file_name=$_FILES['productimage']['name'];
    $file_store="assets/".$file_name;

if(isset($name) & !empty($name)){

      if(move_uploaded_file($tmp_name,$file_store)){
       // $smsg "Uploaded Successfully" ;
        $sql="INSERT INTO  produkte ( emri,pershkrimi,kategori_id,cmimi,foto) VALUES ('$name','$description','$category',
       '$price', '$file_path')";
        $res=mysqli_query($connection,$sql);
       if($res){
         $smsg="Product Created" ;
       }
      }
      }else{
    $sql="INSERT INTO( produkte ( emri,pershkrimi,kategori_id,cmimi) VALUES ('$name','$description','$category',
    '$price')";
    $res=mysqli_query($connection,$sql);
    if($res){
      $smsg="Product Created" ;
      header('location: produktet.php');
    }
  }
}
}else{
      $fmsg="Failed to Create Product" ;
       }
    
 
  ?>
  <?php include 'inc/header.php';?>
  <?php include 'inc/nav.php';?>
  <section id="content">
  <div class = "content-blog">
  <div class = "container">
  <?php if(isset($fmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fmsg;?> </
      div><?php } ?>
    <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg;?> </
      div><?php } ?>

   <form method ="post" enctype="multipart/form-data">
   <div class="form-group">
      <label for="Productname">Product Name </label>
      <input type="text" class="form-control" name="productname" id="Productname" 
      placeholder= "Product Name">
    </div>
    <div class="form-group">
      <label for="productdescription">Product Description </label>
      <textarea class="form-control" name="productdescription" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="productcategory">Product Category </label>
      <select class="form-control" id="productcategory" name="productcategory">
          <option value ="">---SELECT CATEGORY---</option>
          <?php
          $sql="SELECT * FROM kategori";
          $res=mysqli_query($connection,$sql);
          while($r= mysqli_fetch_assoc($res)){
              ?>
              <option value="<?php echo $r['id'];?>"><?php echo $r['lloji'];?></option>
              <?php } ?>
          </select>
          </div>

          <div class="form-group">
      <label for="productprice">Product Price </label>
      <input type="text" class="form-control" name="productprice" id="productprice"
      placeholder= "Product Price">
    </div>
    <div class="form-group">
      <label for="productimage">Product Image </label>
      <input type="file" name="productimage" id="productimage">
      <p class="help-block">Only jpg/png are allowed.</p>
    </div>
   <button type = "submit"  class="btn btn-default">Submit</button>
</form>
</div>
</div>
</section>
<?php include 'inc/footer.php'?>