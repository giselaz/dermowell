<?php
include 'functions.php';
?>

<?php
include 'inc/header.php';
?>
    <section class="login-clean">
        <form method="post" action="login.php">
            <h1 class="head-log">Hyrje</h1>
            <?php echo display_error(); ?>
            <div class="mb-3"><label class="form-label">Email</label><input class="form-control" type="email" name="email"></div>
            <div class="mb-3"><label class="form-label">Fjalekalimi</label><input class="form-control" type="password" name="password"></div>
            <div class="mb-3"><button class="btn  d-block w-100" type="submit" style="background-color: #1c6474; color:white; font-family:Nunito;"type="submit" name="login_btn">Hyni</button></div>
     
        </form>
        <h4 class="log-sig text-center">Jeni perdorues i ri?&nbsp;<a href="register1.php" style="color:#1c6474">Regjistrohu</a></h4>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Animated-Filterable-Gallery.js"></script>
    <script src="assets/js/Animated-Filterable-Gallery-1.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
</body>

</html>