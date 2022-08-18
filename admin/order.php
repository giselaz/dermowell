<?php
require_once "../config/connect.php";
?>
<?php
include 'inc/header.php';
include 'inc/nav.php';
?>
    <section id="content">
        <div class="content-blog">
            <div class="container">
                <table class="table table-striped" style="margin-right:20px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Emri Klientit</th>
                            <th>Cmimi Total</th>
                            <th>Statusi</th>
                            <th>Pagesa</th>
                            <th>Porosia u vendos </th>
                            <th>Veprime</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                        $sql="SELECT o.id,o.cmimi_total,o.statusi,o.meyra_pageses,o.timestamp,
                        u.emri,u.mbiemri FROM porosia  o INNER JOIN kliente u ON o.uid= u.uid ";
                        $res=mysqli_query($connection,$sql);
                        while ( $r= mysqli_fetch_assoc($res)) {
                            ?>
                             <th scope="row"><?php echo $r['id'];?></th>
                           <td><?php echo $r['emri']." ".$r['mbiemri'];?> </td>
                           <td><?php echo $r['cmimi_total'];?> </td>
                           <td><?php echo $r['statusi'];?> </td>
                           <td><?php echo $r['meyra_pageses'];?> </td>
                           <td><?php echo $r['timestamp'];?> </td>
                            <td><a href="order-process.php?id=<?php echo $r['id']; ?>">Process Order</a></td>
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