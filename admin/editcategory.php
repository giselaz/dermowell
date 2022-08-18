<?php
session_start();
require_once "../config/connect.php";
if(isset($_GET)& !empty($_GET)){
    $id=$_GET['id'];
}else{
    header('location: Kategorite.php');
}
if(isset($_POST)& !empty($_POST)){
  $id= mysqli_real_escape_string($connection,$_POST['id']) ;
  $name= mysqli_real_escape_string($connection,$_POST['categoryname']) ;
  $sql="UPDATE kategori SET lloji='$name' WHERE id='$id'";
  $res=mysqli_query($connection,$sql);
  if($res){
    $smsg="Category Updated" ;
  }else{
    $fmsg="Failed Update Category" ;
  }
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
    <form method ="post">
    <div class="form-group">
      <label for="Productname"> Emertimi i kategorise </label>
      <?php     
          $sql="SELECT * FROM kategori WHERE id='$id'";
		  $res=mysqli_query($connection,$sql);
		  $r= mysqli_fetch_assoc($res);
		?>
       <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"> 
      <input type="text" class="form-control" name="categoryname" id="Category name" 
      placeholder="Category Name" value= "<?php echo $r['lloji']?>" > 
    </div>
    <button type = "submit"  class="btn btn-default">Submit </button>
</form>
</div>
</div>
</section>
<?php include 'inc/footer.php';?>