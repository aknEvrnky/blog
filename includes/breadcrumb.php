<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title"><?= $title ?? 'Title' ?></h1>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <ul class="bread">
                    <li>
                        <a href="index.php" title="homepage"><i class="fal fa-home-lg-alt"></i>Home</a>
                    </li>
                    <li>
                        <a href="#" title="categories">Categories</a>
                    </li>
                    <li class="active">
                        <?= $title ?? 'Title' ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>