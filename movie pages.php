<?php
include 'header.php';
?>

        <div class="site-section" data-aos="fade">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="row mb-5">
                            <div class="col-12 ">
                                <h2 class="site-section-heading text-center">Movie Lists</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid">
                                <div class="swiper-container images-carousel">
                                    <div class="swiper-wrapper">
                                        <?php

                                        $halaman = 6;
                                        $page = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;
                                        $mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;
                                        $cat_id = $_GET['cat'];
                                        if ($cat_id == 'all') {
                                            $result = $con->query("SELECT a.*,b.cat_name FROM movies a left join cat b on b.id = a.cat_id");
                                        } else {
                                            $result = $con->query("SELECT a.*,b.cat_name FROM movies a left join cat b on b.id = a.cat_id where a.cat_id = '$cat_id'");
                                        }
                                        $total = mysqli_num_rows($result);
                                        $pages = ceil($total / $halaman);

                                        if (empty($_GET['keyword'])) {
                                            if ($cat_id == 'all') {
                                                $query = $con->query("SELECT a.*,b.cat_name FROM movies a left join cat b on b.id = a.cat_id order by id desc LIMIT $mulai, $halaman");
                                            } else {
                                                $query = $con->query("SELECT a.*,b.cat_name FROM movies a left join cat b on b.id = a.cat_id where a.cat_id = '$cat_id' order by id desc LIMIT $mulai, $halaman");
                                            }
                                        } else {
                                            $cari = $_GET['keyword'];
                                            $query = $con->query("SELECT a.*,b.cat_name FROM movies a left join cat b on b.id = a.cat_id where a.nama_barang LIKE '%$cari%' order by id desc LIMIT $mulai, $halaman");
                                        }

                                        $no = $mulai + 1;
                                        while ($m = mysqli_fetch_array($query)) {
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="image-wrap">
                                                    <div class="image-info">
                                                        <h2 class="mb-3"><?= $m['title']; ?></h2>
                                                        <a href="movie_detail.php?id=<?= $m['id']; ?>" class="btn btn-outline-white py-2 px-4">Watch Movie</a>
                                                    </div>
                                                    <img src="uploads/<?= $m['thumbnail']; ?>" alt="Image">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>







                        <div class="row">
                            <center>
                                <div class="pagination">
                                    <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                        <a href="?cat=<?php echo $cat_id; ?>&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    <?php } ?>
                                </div>
                            </center>
                        </div>
                        <!-- /.pagination -->

                    </div>
                </div>
            </div>
        </div>

        <div class="footer py-4">
            <div class="container-fluid text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>





    </div>

    <script src="assets/front/js/jquery-3.3.1.min.js"></script>
    <script src="assets/front/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/front/js/jquery-ui.js"></script>
    <script src="assets/front/js/popper.min.js"></script>
    <script src="assets/front/js/bootstrap.min.js"></script>
    <script src="assets/front/js/owl.carousel.min.js"></script>
    <script src="assets/front/js/jquery.stellar.min.js"></script>
    <script src="assets/front/js/jquery.countdown.min.js"></script>
    <script src="assets/front/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/front/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/front/js/swiper.min.js"></script>
    <script src="assets/front/js/aos.js"></script>

    <script src="assets/front/js/picturefill.min.js"></script>
    <script src="assets/front/js/lightgallery-all.min.js"></script>
    <script src="assets/front/js/jquery.mousewheel.min.js"></script>

    <script src="assets/front/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });
    </script>

</body>

</html>