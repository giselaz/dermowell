# dermowell

Simple E-Commerce System: A web interface that implements an e-commerce system using PHP and MySQL.

Used Tools:
==========
- Apache/2.2.22 (Ubuntu)
- MySQL client version: 5.5.24
- PHP extension: mysqli

- phpMyAdmin version: 3.4.10.1deb1

Application Structure:
=====================
This app is divided into to main sections : The Store part and the admin panel. The admin's role is to perform CRUD operations on Categories and Products. 


Index.php
---------
<img width="953" alt="Capture" src="https://user-images.githubusercontent.com/64612896/199003005-1fc61623-9cea-44e5-b446-cb038076d65b.PNG">

First page of the application. This page shows the store window with products, price and store availability.
The user can Log In if he's already registered or Sign Up if he's not.
Doing the Log In, the user will be redirected to the Store page.

register1.php
-------------
This module gets the user paramters from the Registration Form, performs the appropriate checks and writes the user data in the database (user table).


product.php
---------
<img width="936" alt="products" src="https://user-images.githubusercontent.com/64612896/199084733-0144adc9-fff0-440a-a516-aea964a2913d.PNG">
In this page the user can choose the products he wants to buy. 
Dependencies:
	product.php -> Add Items to the Cart -> carthandler.php
  product.php-> View details of the product->details.php
	store.php -> Show the Cart -> shporta.php
  
  shporta.php
-----------
![shporta](https://user-images.githubusercontent.com/64612896/199087514-416da06b-143b-4541-ae76-5213960a7d8f.PNG)

This page shows the Cart with products, quantity and total amount of chosen products.
The user can pay for the chosen products (putting the credit card parameters), empty the cart or go back to the store.
Dependencies:
	shporta.php -> Checkout -> checkout1.php
	shporta.php -> Empty Cart -> emptycart.php
	shporta.php -> product.php

emptycart.php
-------------
This module deletes from the database the data from the cart table for the currently logged on user.
At the end of all the operations, the module redirects the user to the Products page.
Dependencies:
	emptycart.php -> product.php

Checkout1.php
-------
This module gets the user delivery address parameters from the Form, checks if the chosen products are still available on the store and places the order.

LOGOUT
------
It's possible do the Log Out from different pages.
The Log Out operation redirects the user to the Index page.



  
