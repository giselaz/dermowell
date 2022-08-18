<?php
session_start();
require_once '../config/connect.php';

if(isset($_GET)& !empty($_GET)){
    $id=$_GET['id'];
}else{
    header('location: produktet.php');
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
      $file_store="assets/img/".$file_name;
  
    if(isset($name) & !empty($name)){
         
          if(move_uploaded_file($tmp_name,$file_store)){
            $smsg ="Uploaded Successfully" ;
          }
           }else{
             $fmsg ="Failed to Upload";
           }
  
      $file_store=$_POST['filepath'];
    
    
    $sql=" UPDATE produkte SET emri='$name',pershkrimi='$description',kategori_id='$category',cmimi='$price',
    foto='$file_store' WHERE id=$id";
    $res=mysqli_query($connection,$sql);
    if($res){
      $smsg="Product Updated" ;
    }
    }
  }else{
      $fmsg="Failed to Update Product" ;
    }
  
?>
<?php
include 'inc/header.php';
include 'inc/nav.php';
?>
<section id="content">
  <div class = "content-blog">
  <div class = "container">
  <?php if(isset($fmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fmsg;?> </
      div><?php } ?>
    <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg;?> </
      div><?php } ?>
  <?php
  $sql="SELECT * FROM produkte WHERE id=$id";
  $res=mysqli_query($connection,$sql);
  $r= mysqli_fetch_assoc($res);
  ?>
<form method ="post" enctype="multipart/form-data">
   <div class="form-group">
       <input type="hidden" name="filepath" value="<?php echo $r['foto']; ?>">
    <label for="Productname">Product Name </label>
      <input type="text" class="form-control" name="productname" id="Productname" 
      placeholder= "Product Name" value="<?php echo $r['emri']; ?>">
    </div>
    <div class="form-group">
      <label for="productdescription">Product Description </label>
      <textarea class="form-control" name="productdescription" rows="3"> <?php echo $r['pershkrimi']; ?> 
    </textarea>
    </div>
    <div class="form-group">
      <label for="productcategory">Product Category </label>
      <select class="form-control" id="productcategory" name="productcategory">
      <?php
          $catsql="SELECT * FROM kategori";
          $catres=mysqli_query($connection,$catsql);
          while($catr= mysqli_fetch_assoc($catres)){
            ?>
            <option value="<?php echo $catr['id'];?>" <?php if( $catr['id'] == $r['kategori_id']){
                echo "selected";}?>> <?php echo $catr['lloji'];?></option>
              <?php } ?>
          </select>
          </div>
     <div class="form-group">
      <label for="productprice">Product Price </label>
      <input type="text" class="form-control" name="productprice" id="productprice"
      placeholder= "Product Price" value="<?php echo $r['cmimi']; ?>" >
    </div>
    <div class="form-group">
      <label for="productimage">Product Image </label>
      <?php if(isset ($r['foto'])& !empty($r['foto'])){ ?>
      <br>
      <img src="<?php echo $r['foto'] ?>" width="100px" height="100px">
      <a href="delprodimg.php?id=<?php echo $r['id'];?>">Delete Image </a>
      <?php } else { ?>
      
      <input type="file" name="productimage" id="productimage">
      <p class="help-block">Only jpg/png are allowed.</p>
      <?php } ?>
    </div>
   <button type = "submit"  class="btn btn-default">Submit</button>
</form>
</div>
</div>
</section>
<?php include 'inc/footer.php'?>