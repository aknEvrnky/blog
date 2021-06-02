<?php include 'includes/header.php'; ?>

<?php $title = 'İletişim' ?>

<?php include 'includes/breadcrumb.php'; ?>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="stitle">İletişim Formu</div>
                        <form class="form" action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Adınız*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email Edresiniz*" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Konu*" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="comment" id="" cols="30" rows="10" placeholder="Mesajınız"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <img src="front/images/captcha.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button class="btn-blue">Yorumu Gönder</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-title">Sosyal Medya</div>
                        <ul class="social-box">
                            <li class="social-tw">
                                <a href="#" title="">
                                    <div class="content">
                                        <div class="title">Twitter</div>
                                        <div class="subtitle">/akn_evrnky</div>
                                    </div>
                                    <div class="icon-area">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="social-ig">
                                <a href="#" title="">
                                    <div class="content">
                                        <div class="title">Instagram</div>
                                        <div class="subtitle">/akn_evrnky</div>
                                    </div>
                                    <div class="icon-area">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="social-yt">
                                <a href="#" title="">
                                    <div class="content">
                                        <div class="title">Youtube</div>
                                        <div class="subtitle">/akn_evrnky</div>
                                    </div>
                                    <div class="icon-area">
                                        <i class="fab fa-youtube"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-sticky">
                    <div class="sidebar-box">
                        <div class="sidebar-title">Populer Gönderiler</div>
                        <div class="blog-card-short">
                            <a href="#" title="">
                                <img src="front/images/blog6.jpg" alt="" class="img-fluid">
                            </a>
                            <div class="content">
                                <a href="#" title="" class="title">Gulpfile v4 güncelleme nasıl yapılır?</a>
                                <i class="fal fa-clock"></i> 31.05.2021
                            </div>
                        </div>
                        <div class="blog-card-short">
                            <img src="front/images/blog7.jpg" alt="" class="img-fluid">
                            <div class="content">
                                <a href="#" title="" class="title">PHP Laravel hakkında bilinmesi gerekenler</a>
                                <i class="fal fa-clock"></i> 31.05.2021
                            </div>
                        </div>
                        <div class="blog-card-short">
                            <img src="front/images/blog4.jpg" alt="" class="img-fluid">
                            <div class="content">
                                <a href="#" title="" class="title">PHPSTORM kurulumu ve öğrenci lisansı</a>
                                <i class="fal fa-clock"></i> 31.05.2021
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
