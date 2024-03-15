<main>
    <section class="mt-8">
        <div class="container">
            <div class="hero-slider">
                <div style="background: url(assets/images/slider/slide-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                    <div style="height: 543.2px;"></div>
                </div>
                <div style="background: url(assets/images/slider/slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                    <div style="height: 543.2px;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Section Start-->
    <section class="mb-lg-10 mt-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6">
                    <h3 class="mb-0">Featured Categories</h3>
                </div>
            </div>
            <div class="category-slider">
                <?php
                foreach ($listCategory as $key => $value) {
                ?>
                    <div class="item">
                        <a href="index.php?act=categories&id=<?= $value['id'] ?>" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <div class="d-flex justify-content-center align-item-center m-auto " style="width: 150px; height: 100px;">
                                        <img src="./upload/<?= $value['image'] ?>" alt="Grocery Ecommerce Template" class="mb-3 img-fluid mw-100 mh-100" />
                                    </div>
                                    <div class="text-truncate"><?= $value['name'] ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Popular Products Start-->
    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6">
                    <h3 class="mb-0">Popular Products</h3>
                </div>
            </div>

            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
                <?php
                foreach ($listProductTop10 as $key => $value) {
                ?>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <a href="?act=product_detail&id=<?= $value['id'] ?>">
                                        <div class="d-flex justify-content-center align-items-center mb-3" style="width: 200px; height: 200px;">
                                            <img src="./upload/<?= $value['image'] ?>" alt="Grocery Ecommerce Template" class="img-fluid h-100" />
                                        </div>
                                    </a>
                                </div>
                                <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none"><?= $value['name'] ?></a></h2>

                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="text-danger"><?= number_format($value['price'], 0, '.', '.') ?> <u>đ</u></span>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="assets/images/icons/clock.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Time</h3>
                        <p>Get your order delivered to your doorstep at the earliest from MobileLux pickup stores near you.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="assets/images/icons/gift.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Best Prices & Offers</h3>
                        <p>Get best pricess & offers.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="assets/images/icons/package.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Wide Assortment</h3>
                        <p>Choose from 5000+ products.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="assets/images/icons/refresh-cw.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Easy Returns</h3>
                        <p>
                            Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked
                            <a href="#!">policy</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>