<?php
require_once '../config/connect.php';


?>
<?php
include 'inc/header.php';
include 'inc/nav.php';
?>
    <section id="content">
        <div class="content-blog">
            <div class="container">
                <table class="table table-striped" style="margin-right:20px; margin-top:40px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Emri Produktit</th>
                            <th>Kategoria</th>
                            <th>Foto</th>
                            <th>Veprime</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                        $sql="SELECT * FROM produkte INNER JOIN kategori ON produkte.kategori_id=kategori.id";
                        $res=mysqli_query($connection,$sql);
                        while ( $r= mysqli_fetch_assoc ($res)) {
                            ?>
                             <th scope="row"><?php echo $r['id'];?></th>
                           <td><?php echo $r['emri'];?> </td>
                           <td><?php echo $r['lloji'];?> </td>
                           <td>
                               <img src="../<?php echo $r['foto'] ?>" style="width:90px; height:90px;">
                           </td>
                            <td><a href="editproduct.php?id=<?php echo $r['id']; ?>">Ndrysho</a> | <a href="
                            delproduct.php?id= <?php echo $r['id']; ?>">Fshi</a></td>
                        </tr>
                    <?php } ?>
    
                    </tbody>
                </table>
                
            </div>
        </div>
    
    </section>
    <?php
include 'inc/footer.php';
?>