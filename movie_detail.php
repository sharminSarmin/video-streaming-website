<?php
include 'header.php';
?>
        <div class="site-section" data-aos="fade">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="row mb-3">
                            <?php
                            $query = $con->query("SELECT a.*,b.cat_name FROM movies a LEFT JOIN cat b ON b.id = a.cat_id WHERE a.id = '$_GET[id]'");
                            $m = mysqli_fetch_array($query);
                            ?>
                            <h3><?= $m['title']; ?></h3>
                            <?php if ($m['video_type'] == '2') { ?>
                                <video style="width:100%" controls>
                                    <source src="uploads/<?= $m['video']; ?>" type="video/mp4">
                                    Your browser does not support HTML5 video.
                                </video>
                            <?php } else if ($m['video_type'] == '1') { ?>
                                <div class="row">
                                    <?= $m['video']; ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div align="center"><a href="https://click.linksynergy.com/fs-bin/click?id=Co9iEgnoXcA&offerid=572706.47&subid=0&type=4"><IMG border="0"   alt="nordvpn" src="https://ad.linksynergy.com/fs-bin/show?id=Co9iEgnoXcA&bids=572706.47&subid=0&type=4&gridnum=16"></a>
                        </div>
                        <div class="row">
                            <?= $m['long_desc']; ?>
                        </div>



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