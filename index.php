<?php 
require_once 'config/connect.php'; 
include 'functions.php';
// if(!isLoggedIn()){
//     header('location:login.php');
// }
?>
<?php

include'inc/header.php';
include 'inc/nav.php';
?>
  


    
    <section id="carousel">
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="bg-light border rounded border-light pulse animated hero-n1 carousel-hero jumbotron py-5 px-4">
                        <div class="inner-2"><img id="isntree" src="assets/img/Isntree-logo-brand-banner.png">
                            <p id="la-2" class="hero-subtitle">A healthy way to take care of your skin.</p>
                            <p class="text-start"><a class="btn hero-button plat" role="button" href="#" style="background: rgba(0,0,0,0.1);">BLI TANI</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-light border rounded border-light pulse animated hero-photography carousel-hero jumbotron py-5 px-4">
                        <div class="inner-2">
                            <h1 id="hero" class="hero-title">LA ROCHE-POSAY</h1>
                            <p id="la-1" class="hero-subtitle">A healthy way to take care of your skin.</p>
                            <p class="text-start"><a class="btn text-center hero-button plat" role="button" href="#" style="color: rgb(0,0,0);background: rgba(0,0,0,0.1);">BLI TANI</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4">
                        <div class="text-start inner-4">
                            <h1 class="text-start hero-title dr-jart" style="font-size: 50px;">DR.JART+</h1>
                            <p class="text-start d-xl-flex hero-subtitle" style="margin-top: -10px;">Not a medicine.It's derma cosmetic.</p>
                            <p class="text-start"><a class="btn btn-dark hero-button plat" role="button" href="#" style="background: rgba(0,0,0,0.1);transform: translate(2px) scale(1.04);color: rgb(0,0,0);">BLI TANI</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2" class="active"></li>
            </ol>
        </div>
    </section>
    <section id="about">
        <div class="about-us">
            <h1 class="text-center d-xxl-flex justify-content-center align-items-xxl-end slogan">Skin Temple</h1><div id="lotus"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 479.995 479.995"
style=" fill:#000000; margin-bottom:20%;"><path d="M443.143,363.426c9.579-9.648,18.604-20.804,26.926-33.305c11.399-17.132,4.201-40.447-14.837-48.202 c-12.321-5.012-24.515-8.844-36.391-11.454c17.945-34.197,27.974-78.94,22.188-137.413c-1.925-19.503-20.802-33.354-40.394-28.53 c-17.952,4.421-34.806,10.063-50.093,16.768c-4.046,1.775-5.888,6.494-4.113,10.54c1.774,4.046,6.493,5.887,10.54,4.113 c14.45-6.338,30.429-11.682,47.492-15.885c9.885-2.435,19.599,4.434,20.607,14.573c9.088,90.121-21.147,164.341-99.823,205.213 c-3.921,2.037-5.448,6.866-3.411,10.787c2.043,3.933,6.879,5.442,10.787,3.411c27.191-14.125,56.267-35.849,77.701-68.994 c12.564,2.375,25.617,6.296,38.878,11.69c9.68,3.943,13.334,15.824,7.549,24.518c-10.205,15.33-21.482,28.43-33.516,38.936 c-49.396,43.107-111.979,41.39-169.834,12.419c56.638-56.971,92.247-132.34,77.074-212.524 c-8.101-42.81-30.305-85.119-65.997-125.754c-12.964-14.759-36.003-14.748-48.946-0.016 c-28.645,32.607-48.657,66.371-59.602,100.512c-21.999-13.018-47.7-23.197-76.569-30.307c-19.338-4.763-38.383,8.699-40.354,28.53 C26.197,262.501,90.89,324.677,147.416,354.042c3.92,2.036,8.75,0.51,10.787-3.411c2.037-3.921,0.51-8.75-3.411-10.787 c-52.141-27.086-111.791-84.677-99.863-205.213c1.007-10.132,10.713-17.01,20.606-14.574c31.115,7.663,58.223,19.013,80.571,33.735 c4.863,3.204,10.891,0.586,12.257-4.539c9.392-35.245,29.306-70.362,59.188-104.378c6.581-7.492,18.316-7.487,24.904,0.014 c128.735,146.565,37.449,269.122-12.476,318.519c-30.274-29.828-76.759-87.727-78.002-162.831 c-0.073-4.417-3.698-7.933-8.131-7.867c-4.417,0.073-7.939,3.714-7.867,8.131c1.382,83.483,54.096,146.516,85.999,177.099 c-0.353,20.737-7.099,36.575-20.104,47.086c-20.129,16.267-55.786,20.072-97.831,10.438c-19.181-4.396-48.632-19.874-85.688-1.511 c-5.361,2.657-11.689-0.859-12.186-6.844c-1.888-22.74,12.042-43.926,33.548-51.893c13.4,11.096,27.797,19.551,43.11,25.275 c20.238,7.653,36.036,9.525,56.788,9.196c15.85-0.254,30.814-2.572,45.747-7.085c4.229-1.278,6.622-5.743,5.343-9.972 c-1.278-4.229-5.744-6.622-9.972-5.344c-13.494,4.078-27.027,6.173-41.373,6.403c-17.347,0.275-31.911-0.993-50.901-8.174 c-31.69-11.847-56.387-35.98-75.211-64.258c-5.791-8.704-2.122-20.58,7.548-24.52c4.092-1.667,6.058-6.335,4.391-10.427 c-1.667-4.092-6.334-6.058-10.427-4.391c-19.062,7.765-26.214,31.095-14.832,48.202c8.365,12.566,17.352,23.674,26.917,33.31 C12.89,375.664-2.037,401.187,0.226,428.434c1.427,17.192,19.743,27.533,35.235,19.857c30.84-15.283,54.311-1.971,75.01,2.771 c36.708,8.411,82.166,10.086,111.461-13.59c14.777-11.943,23.305-28.715,25.489-49.937 c61.607,30.736,128.694,32.482,182.835-12.326c21.516,7.959,35.456,29.153,33.567,51.902c-0.493,5.939-6.786,9.519-12.186,6.844 c-30.339-15.034-55.535-7.379-73.932-1.791c-31.306,9.51-74.736,14.144-102.884-2.498c-3.803-2.248-8.709-0.989-10.958,2.815 c-2.249,3.803-0.989,8.709,2.815,10.958c29.214,17.272,69.817,15.19,102.844,7.622c20.72-4.747,44.177-18.05,75.01-2.771 c15.523,7.691,33.811-2.693,35.235-19.856C482.032,401.183,467.102,375.655,443.143,363.426z"></path></svg></div>
        </div>
    </section>
    <div class="container cont1">
        <div class="row g-0 fbox3">
            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                <div class="container-fluid cont1"><a class="container" data-fancybox="gallery" data-caption="Hero Image Nature" href="assets/img/hero-background-nature.jpg"><img class="img-fluid" src="assets/img/GT_Foam_Cleanser_520abe06-8af1-4209-acca-a9bcec4e6575_1440x.jpg" alt="Hero Image Nature"></a>
                    <div class="text1">
                        <h1 class="des-head">Cleanser</h1>
                        <p><button class=" text-center link-light d-lg-flex butoni-moist" type="button"><a style="color:white; text-decoration:none;"  href="product.php?id=9">BLI TANI</a></button></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                <div class="container-fluid cont1"><a class="container" data-fancybox="gallery" data-caption="Hero Image Nature" href="assets/img/hero-background-nature.jpg"><img class="img-fluid" src="assets/img/Soko-Glam-Some-By-Mi-Miracle-Serum-Light-Skin-Care-Korean-Texture_860x.jpg" alt="Hero Image Nature"></a>
                    <div class="text1">
                        <h1 class="des-head">Serums</h1>
                        <p><button class="text-center link-light d-lg-flex butoni-moist"><a style="color:white; text-decoration:none;"  href="product.php?id=4">BLI TANI</a></button></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                <div class="container-fluid cont1"><a class="container" data-fancybox="gallery" data-caption="Hero Image Nature" href="assets/img/hero-background-nature.jpg"><img class="img-fluid" src="assets/img/CryoSoothing_Hover_1024x1024.jpg" alt="Hero Image Nature"></a>
                    <div class="text1">
                        <h1 class="des-head">Facial Masks</h1>
                        <p><button class=" text-center link-light d-lg-flex butoni-moist" type="button" ><a style="color:white; text-decoration:none;"  href="product.php?id=5">BLI TANI</a></button></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xl-5 offset-xl-0 d-flex justify-content-center align-items-center moist-pic"><a data-fancybox="gallery" data-caption="Hero Image Food" href="assets/img/hero-background-food.jpg"><img class="img-fluid img-moist" src="assets/img/8470774eee35ceb4224ac44952109863.jpg" alt="Hero Image Food"></a></div>
            <div class="col moist-des">
                <h1 id="moist"><br>Advanced Snail 92 All in One Cream<br><br></h1>
                <p class="moist-sub"><br>That plump skin with full of nourishment!<br>Moisturizer enriched with snail mucin 92% which gives the skin nourishment and moisture without oiliness.<br><br><br><button class=" link-light butoni-moist" type="button">BLI TANI</button></p>
            </div>
        </div>
    </div>
  <?php
  include 'inc/footer.php';
  ?>