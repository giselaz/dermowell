<?php 
require_once 'config/connect.php';
include 'functions.php'; 
if (!isLoggedIn()) {
	$_SESSION['msg'] = "Duhet te logoheni";
	header('location: login.php');
}
include 'inc/header.php';
include 'inc/nav.php';
$cart = $_SESSION['cart'];
$uid =$_SESSION['customerid'];
  if(isset($_POST) & !empty($_POST)){
    $fname= filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
    $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
    $fname= filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
    $address=filter_var($_POST['address'],FILTER_SANITIZE_STRING);
    $city= filter_var($_POST['city'],FILTER_SANITIZE_STRING);
    $zip= filter_var($_POST['zipcode'],FILTER_SANITIZE_NUMBER_INT);
    $phone=filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
    $payment=filter_var($_POST['payment'],FILTER_SANITIZE_STRING);
    $uid =$_SESSION['customerid'];
    
    $sql="SELECT *FROM kliente where uid='$uid'";
    $res = mysqli_query($connection, $sql);
		$r = mysqli_fetch_assoc($res);
		$count = mysqli_num_rows($res);
    if($count==1){
   //updato te dhenat ne tabelen klient
    $usql = "UPDATE kliente SET emri='$fname', mbiemri='$lname', adresa='$address', qyteti='$city',  zip='$zip', telefon='$phone' WHERE uid=$uid";
   $ures = mysqli_query($connection, $usql) or die(mysqli_error($connection));
   if($ures){
	
	$total = 0;
	foreach ($cart as $key => $value) {
		//echo $key . " : " . $value['quantity'] ."<br>";
		$total=$total+$value['item_price']*$value['quantity'];
	}
	echo $iosql = "INSERT INTO porosia (uid, cmimi_total, statusi,meyra_pageses) VALUES ('$uid', '$total', 'Porosia u vendos', '$payment')";
				$iores = mysqli_query($connection, $iosql) or die(mysqli_error($connection));
  }
  if(mysqli_query($connection,$iosql)){
	  	//echo "Order inserted, insert order items <br>";
	  $orderid=mysqli_insert_id($connection);
	  foreach($cart as $key=>$value){
		$pid = $value['item_id'];
		$productprice = $value['item_price'];
		$quantity = $value['quantity'];


						$orditmsql = "INSERT INTO flete_porosi (id_produkt, sasia,porosia_id,cmimi_produktit ) VALUES ('$pid', '$quantity','$orderid', '$productprice' )";
						$orditmres = mysqli_query($connection, $orditmsql) or die(mysqli_error($connection));
						//if($orditmres){
							//echo "Order Item inserted redirect to my account page <br>";
						//}
	  }

  }
  unset($_SESSION['cart']);// heqim produktet nga shporta
  header("location: my-account.php");
  
    }else{
//vendos te dhena ne tabelen klient
  $isql = "INSERT INTO kliente (emri, mbiemri, adresa,qyteti, zip, telefon, uid) VALUES ('$fname', '$lname', '$address', '$city', '$zip','$phone', '$uid')";
			$ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
      if($ires){
		$orderid=mysqli_insert_id($connection);
		foreach($cart as $key=>$value){
		  $pid = $value['item_id'];
		  $productprice = $value['item_price'];
		  $quantity = $value['quantity'];
  
  
						  $orditmsql = "INSERT INTO flete_porosi (id_produkt, sasia,porosia_id,cmimi_produktit ) VALUES ('$pid', '$quantity','$orderid', '$productprice' )";
						  $orditmres = mysqli_query($connection, $orditmsql) or die(mysqli_error($connection));
						  //if($orditmres){
							  //echo "Order Item inserted redirect to my account page <br>";
						  //}
		}
      }
	  unset($_SESSION['cart']);
  header("location: my-account.php");
	      }

  }

?>
		<div class="col-md-4 container bg-default" style="float:left;">
			
			<h4 class="my-4">
					Detaje te pageses
			</h4>
			
			<form method="post">
				<div class="form-row">
					<div class="col-md-6 form-group">
						<label for="fname">Emri</label>
						<input type="text" class="form-control" name="fname" id="fname" value="<?php if(!empty($r['emri'])){ echo $r['emri']; }?>">
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>

					<div class="col-md-6 form-group">
						<label for="lname">Mbiemri</label>
						<input type="text" class="form-control"name="lname" id="lname" value="<?php if(!empty($r['mbiemri'])){ echo $r['mbiemri']; }?>">
						<div class="invalid-feedback">
							Valid last name is required.
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="adress">Adresa</label>
					<input type="text" class="form-control" name="address" id="adress" required value="<?php if(!empty($r['adresa'])){ echo $r['adresa']; };?>">
					<div class="invalid-feedback">
						Please enter your shipping address.
					</div>
				</div>
				<div class="form-group">
					<label>Telefon</label>
					<input type="tel" class="form-control" name="phone" required value="<?php if(!empty($r['telefon'])){ echo $r['telefon'];}?>">
				</div>

					<div class="col-md-4 form-group"style="margin-left:-9px;">
						<label for="city">Qyteti</label>
						<select name="city" type="text" class="form-control" id="city" >
						<option value>Zgjidh qytetin</option>
						
							<?php $sql1="SELECT * FROM qyteti";
                        $res1 = mysqli_query($connection, $sql1);
                        while($r1=mysqli_fetch_assoc($res1)){
                            ?> 
                              
                               <option  value="<?php echo $r1['qyteti']; if(isset($r1['qyteti'])){echo $r1['qyteti'];}?>"><?php echo $r1['qyteti'];?></option>      
                               
                         
                               <?php }?>
                               </select>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>
						
					<div class="col-md-4 form-group" style="margin-top:-85px;">
						<label for="postcode">Kodi Postar</label>
						<input type="text" class="form-control" id="postcode"name="zipcode"  value="<?php if(!empty($r['zip'])){ echo $r['zip']; }elseif(isset($zip)){ echo $zip; }?>">

						
						<div class="invalid-feedback">
							Postcode required.
						</div>
					</div>
				</div>
				<div class="space30"></div>
				<div style="float:right; margin-top:20px; margin-right: 30%; margin-top:5%;" >
				<h4 text-align="center">Porosia Juaj</h4>
				<table class="table table-bordered extra-padding">
				   <tbody>
				   <?php 
				    $total=0;
	                foreach ($cart as $key => $value) {
		
		              $total=$total+$value['item_price']*$value['quantity'];
	
                              	?>
								   <?php } ?>
		                <th> Totali Porosise</th>
						 <td><strong><span class="amount"><?php echo $total?>L<span></strong></td>
					  </tr>
					 
					 
						<th>Transporti</th>
						<td> Transport falas ne gjithe qytetet.
					  </td>
					 </tr>
					 <tr>
					
					</tbody>
					
				</table>
				
				<h4 class="mb-4">Pagesa</h4>
				
				<div class="form-check">
					<input type="radio" class="form-check-input" id="credit" name="payment" checked required>
					<label for="credit" class="form-check-label">Cash kur merret porosia</label>
				</div>
		
				 
				  <div class="space30"></div>
				  <input type="submit" class="button btn-lg" value="Porosit">
				  </div>
				</div>
			</form>
		</div>
		
		<div class="space30"></div>
