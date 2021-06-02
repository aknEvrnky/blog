<?php include 'includes/header.php'; ?>

<?php $title = 'Blog Detayı' ?>

<?php include 'includes/breadcrumb.php'; ?>

<section class="blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-img-large">
                    <img src="front/images/blog-detail1.jpg" alt="" class="img-fluid">
                    <div class="stats">
                        <a href="#" title="5 yorum"><i class="fas fa-comment"></i>5</a>
                        <span title="341 görüntülenme"><i class="fal fa-eye"></i>341</span>
                        <span title="2 dakika"><i class="fas fa-clock"></i>2</span>
                    </div>
                </div>

                <div class="author-area">
                    <div class="author">
                        <img src="front/images/user.jpeg" alt="">
                        <a href="#" title="Akın">Akın Evrenkaya</a>
                    </div>
                    <div class="date">
                        31.05.2021
                    </div>
                </div>

                <div class="content-wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos ea expedita fugit ipsum magni minima, nesciunt possimus unde. Autem beatae culpa cum ducimus eius et expedita facilis fugit impedit maxime modi mollitia necessitatibus neque nesciunt non odio quidem ratione recusandae reiciendis repudiandae sed sequi sunt vitae, voluptatem voluptatum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id ipsam iure odit provident rem, soluta sunt! Consectetur cum esse itaque quidem sequi tenetur voluptate! Accusamus dicta minima unde voluptatum.</p>
                    <ul>
                        <li>
                            Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            Lorem ipsum dolor.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </li>
                    </ul>
                </div>

                <div class="share-area">
                    <div class="title">Yazıyı paylaş</div>
                    <ul class="share">
                        <li>
                            <a href="" title="" class="btn"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="" title="" class="btn-blue"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <button class="copy btn-blue"><i class="fal fa-copy"></i></button>
                            <input type="hidden" id="link" value="https://www.akinevrenkaya.com">
                        </li>
                        <li>
                            <a href="" title="" class="btn"><i class="fab fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="category-area">
                    <i class="fal fa-tags"></i>
                    <a href="#" title="">PHP,&nbsp;</a>
                    <a href="#" title="">CSS</a>
                </div>

                <div class="post-nav">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="title">Önceki Post</div>
                            <div class="blog-card-nav prev">
                                <a href="#" title="blog" class="blog-img">
                                    <img src="front/images/blog4.jpg" alt="" class="img-fluid">
                                    <div class="btn-blue"><i class="fal fa-angle-left"></i></div>
                                </a>
                                <div class="blog-content">
                                        <div class="date">
                                            <i class="fal fa-clock"></i>
                                            31.05.2021
                                        </div>
                                    <a href="#" class="title">Gulpfile v4 güncelleme nasıl yapılır?</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-2 line"></div>
                        <div class="col-md-5">
                            <div class="title-next">Sonraki Post</div>
                            <div class="blog-card-nav next">
                                <a href="#" title="blog" class="blog-img">
                                    <img src="front/images/blog4.jpg" alt="" class="img-fluid">
                                    <div class="btn-blue"><i class="fal fa-angle-right"></i></div>
                                </a>
                                <div class="blog-content">
                                    <div class="date">
                                        <i class="fal fa-clock"></i>
                                        31.05.2021
                                    </div>
                                    <a href="#" class="title">Gulpfile v4 güncelleme nasıl yapılır?</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="comment-area">
                    <div class="big-title">
                        Yorumlar
                    </div>
                    <div class="comment-card">
                        <div class="name">İdil Demirbüken</div>
                        <div class="comment">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus distinctio itaque iure magni nihil perferendis sed similique sunt ut vel?
                        </div>
                    </div>
                    <div class="comment-card">
                        <div class="name">Ecem Traş</div>
                        <div class="comment">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus distinctio itaque iure magni nihil perferendis sed similique sunt ut vel?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam, architecto asperiores commodi corporis, et exercitationem expedita harum labore mollitia nemo optio praesentium quo quos reprehenderit tenetur ut voluptates voluptatibus.
                        </div>
                    </div>

                    <div class="comment-card">
                        <div class="title">
                            hiç yorum yapılmamış. İlk yorum yapan sen ol!
                        </div>
                    </div>
                </div>

                <div class="do-comment">
                    <div class="big-title">Yorum Yap</div>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Adınız*" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Email Edresiniz*" required>
                                    <p>Email adresiniz yorumlarda gözükmeyecektir.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="comment" id="" cols="30" rows="10" placeholder="Yorumunuz"></textarea>
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
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-title">Kategoriler</div>
                        <ul class="categories">
                            <li class="color-1">
                                <a href="#" title="">PHP (13)</a>
                            </li>
                            <li class="color-2">
                                <a href="#" title="">CSS (4)</a>
                            </li>
                            <li class="color-3">
                                <a href="#" title="">HTML (6)</a>
                            </li>
                            <li class="color-4">
                                <a href="#" title="">JQUERY (10)</a>
                            </li>
                        </ul>
                    </div>
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
                            <a href="" title="">
                                <img src="front/images/blog6.jpg" alt="" class="img-fluid">
                            </a>
                            <div class="content">
                                <a href="#" title="" class="title">Gulpfile v4 güncelleme nasıl yapılır?</a>
                                <i class="fal fa-clock"></i> 31.05.2021
                            </div>
                        </div>
                        <div class="blog-card-short">
                            <a href="#" title="">
                                <img src="front/images/blog7.jpg" alt="" class="img-fluid">
                            </a>
                            <div class="content">
                                <a href="#" title="" class="title">PHP Laravel hakkında bilinmesi gerekenler</a>
                                <i class="fal fa-clock"></i> 31.05.2021
                            </div>
                        </div>
                        <div class="blog-card-short">
                            <a href="#" title="">
                                <img src="front/images/blog4.jpg" alt="" class="img-fluid">
                            </a>
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
