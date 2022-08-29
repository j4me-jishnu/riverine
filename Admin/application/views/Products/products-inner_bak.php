
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <!-- Add your site or application content here -->
    <div class="exporso_wrapper">
        <!-- Add header Here -->
        <?php include('header.php'); ?>
        <!-- Add Header End -->
        <section>
            <div class="container-fluid pd-0 ">
                <div class="col-lg-12 pd-0 ">
                    <img src="assets/img/prdct.jpg" class="img-responsive">
                </div>
            </div>
        </section>
        <div class="breadcrumb_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_inner">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="zmdi zmdi-chevron-right"></i></li>
                                <li>Products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="media-wrp">
            <div class="container">
                <div class="col-lg-12">
                    <div class="row">
                    <?php
                        include_once "lib.dbconnect.php";
                        $id = $_GET['id'];
                        $sql_products = "SELECT * FROM tbl_products WHERE products_status = 1 AND products_id=$id";
                        $result_products = mysqli_query($conn, $sql_products);
                        if (mysqli_num_rows($result_products) > 0) {
                            while ($products = mysqli_fetch_array($result_products)) { ?>
                        <div class="col-lg-4 mb-15">
                            <div class="">
                                <img src="DL-Admin/uploads/products/<?php echo $products['products_img']; ?>" alt="<?php echo $products['products_name']; ?>">
                            </div>
                        </div>
                        <?php } } ?>
                        <div class="col-lg-12 mb-15">
                            <?php
                            include_once "lib.dbconnect.php";
                            $id = $_GET['id'];
                            $sql_products_1 = "SELECT * FROM tbl_products WHERE products_status = 1 AND products_id=$id";
                            $result_products_1 = mysqli_query($conn, $sql_products_1);
                            if (mysqli_num_rows($result_products_1) > 0) {
                                while ($products_1 = mysqli_fetch_array($result_products_1)) { ?>
                            <h3 class="fnt-prd-hed"><?php echo $products_1['products_name']; ?></h3>
                            <?php } } ?>
                            <table class="table table-bordered">
                                <tbody>
                                <?php
                                include_once "lib.dbconnect.php";
                                $id = $_GET['id'];
                                $sql_products_2 = "SELECT * FROM tbl_products WHERE products_status = 1 AND products_id=$id";
                                $result_products_2 = mysqli_query($conn, $sql_products_2);
                                if (mysqli_num_rows($result_products_2) > 0) {
                                    while ($products_2 = mysqli_fetch_array($result_products_2)) { ?>
                                    <tr>
                                        <td><?php echo $products_2['products_feature_1']; ?></td>
                                        <td><?php echo $products_2['products_feature_2']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $products_2['products_feature_3']; ?></td>
                                        <td><?php echo $products_2['products_feature_4']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $products_2['products_feature_5']; ?></td>
                                        <td><?php echo $products_2['products_feature_6']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $products_2['products_feature_7']; ?></td>
                                        <td><?php echo $products_2['products_feature_8']; ?></td>
                                    </tr>
                                <?php } } ?>    
                                </tbody>
                            </table>
                            <div class="r-color_section r-color_block">
                                <ul class="r-color_selector" style="text-align: left;">
                                    <li class="r-color_1" style="   background-image: linear-gradient(310deg, #000000 50%, #eeeeee 100%);"></li>
                                    <li class="r-color_2" style=" background-image: linear-gradient(310deg, #022840 50%, #eeeeee 100%);"></li>
                                    <li class="r-color_3" style="    background-color: rgb(7 12 65);"></li>
                                    <li class="r-color_3" style="    background-color: rgb(207 34 26);"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!--Footer start-->
    <?php include('footer.php'); ?>
    <!--Footer end-->
    </div>
    <!-- all js here -->
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</html>