<?php
include'inc/header.php';
include 'inc/nav.php';
?>
    <section class="getintouch">
        <div class="container modern-form">
            <div class="text-center">
                <h4 style="color: #212529;font-size: 45px;font-family: Amiri, serif;">Na Kontaktoni</h4>
            </div>
            <hr class="modern-form__hr">
            <div class="modern-form__form-container">
                <form action="kontakt1.php" method="post">
                    <div class="row">
                        <div class="col col-contact">
                            <div class="modern-form__form-group--padding-r form-group mb-3"><input class="form-control input input-tr" type="text" placeholder="Emri">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-contact">
                            <div class="modern-form__form-group--padding-l form-group mb-3"><input class="form-control input input-tr"name="email" type="text" placeholder="Email">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="modern-form__form-group--padding-t form-group mb-3"><textarea name="msg" class="form-control input modern-form__form-control--textarea" placeholder="Mesazhi"></textarea>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center"><button class="btn btn-dark submit-now" type="submit" style="width:20%; padding:5px;">Dergo</button></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Animated-Filterable-Gallery.js"></script>
    <script src="assets/js/Animated-Filterable-Gallery-1.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
</body>

</html>