<main>
    <div class="mt-4">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Apple</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Product 1</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- img slide -->
                    <div class="product" id="product">
                        <div>
                            <!-- img -->
                            <div class="d-flex align-items-center justify-content-center" style="width: 628px; height: 471px">
                                <img src="assets/images/products/product-img-1.jpg" alt="" class="mw-100 mh-100 " />
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ps-lg-10 mt-6 mt-md-0">
                        <!-- content -->
                        <a href="#!" class="mb-4 d-block">Apple</a>
                        <!-- heading -->
                        <h1 class="mb-1">Product 1</h1>
                        <hr class="my-6" />
                        <div>
                            <!-- table -->
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>Product Code:</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Quantity:</td>
                                        <td>30</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- hr -->
                        <hr class="my-6" />
                        <div>
                            <!-- input -->
                            <div class="input-group input-spinner">
                                <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                            </div>
                        </div>

                        <div class="mt-3 row justify-content-start g-2 align-items-center">
                            <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                                <!-- button -->
                                <!-- btn -->
                                <button type="button" class="btn btn-primary">
                                    <i class="feather-icon icon-shopping-bag me-2"></i>
                                    Add to cart
                                </button>
                            </div>
                            <!-- <div class="col-md-4 col-4">
                              <a class="btn btn-light" href="#" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              <a class="btn btn-light" href="shop-wishlist.html" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                           </div> -->
                        </div>
                        <div class="mt-8">
                            <!-- dropdown -->
                            <div class="dropdown">
                                <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Share</a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-facebook me-2"></i>
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-twitter me-2"></i>
                                            Twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-instagram me-2"></i>
                                            Instagram
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-lg-14 mt-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
                        <!-- nav item -->
                        <li class="nav-item" role="presentation">
                            <!-- btn -->
                            <button class="nav-link active" id="product-tab" data-bs-toggle="tab" data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane" aria-selected="true">
                                Product Details
                            </button>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item" role="presentation">
                            <!-- btn -->
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane" aria-selected="false" tabindex="-1">
                                Reviews
                            </button>
                        </li>
                        <!-- nav item -->
                    </ul>
                    <!-- tab content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- tab pane -->
                        <div class="tab-pane fade active show" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab" tabindex="0">
                            <div class="my-8">
                                <div class="mb-5">
                                    <!-- text -->
                                    <p class="mb-0">Product details</p>
                                </div>

                            </div>
                        </div>
                        <!-- tab pane -->
                        <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
                            <div class="my-8">
                                <!-- row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="me-lg-12 mb-6 mb-md-0">
                                            <div class="mb-5">
                                                <!-- title -->
                                                <h4 class="mb-3">Customer reviews</h4>
                                                <span>
                                                    <!-- rating -->
                                                    <small class="text-warning">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-half"></i>
                                                    </small>
                                                    <span class="ms-3">4.1 out of 5</span>
                                                    <small class="ms-3">11,130 global ratings</small>
                                                </span>
                                            </div>
                                            <div class="mb-8">
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">5</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">53%</span>
                                                </div>
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">4</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">22%</span>
                                                </div>
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">3</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="35"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">14%</span>
                                                </div>
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">2</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="22"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">5%</span>
                                                </div>
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">1</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="14"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">7%</span>
                                                </div>
                                            </div>
                                            <div class="d-grid">
                                                <h4>Review this product</h4>
                                                <p class="mb-0">Share your thoughts with other customers.</p>
                                                <a href="#!" class="btn btn-outline-gray-400 mt-4 text-muted">Write the
                                                    Review</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-8">
                                        <div class="mb-10">
                                            <div class="d-flex justify-content-between align-items-center mb-8">
                                                <div>
                                                    <!-- heading -->
                                                    <h4>Reviews</h4>
                                                </div>
                                                <div>
                                                    <select class="form-select">
                                                        <option selected="">Top Reviews</option>
                                                        <option value="Most Recent">Most Recent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex border-bottom pb-6 mb-6">
                                                <div class="ms-5">
                                                    <h6 class="mb-1">User 1</h6>
                                                    <!-- select option -->
                                                    <!-- content -->
                                                    <p class="small">
                                                        <span class="text-muted">07/12/2023</span>
                                                    </p>

                                                    <p>Nice</p>
                                                    <!-- icon -->
                                                    <div class="d-flex justify-content-end mt-4">
                                                        <a href="#" class="text-muted">
                                                            <i class="feather-icon icon-thumbs-up me-1"></i>
                                                            Helpful
                                                        </a>
                                                        <a href="#" class="text-muted ms-4">
                                                            <i class="feather-icon icon-flag me-2"></i>
                                                            Report abuse
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex border-bottom pb-6 mb-6">
                                                <!-- <img src="./assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-lg" /> -->
                                                <div class="ms-5">
                                                    <h6 class="mb-1">User 2</h6>
                                                    <!-- select option -->
                                                    <!-- content -->
                                                    <p class="small">
                                                        <span class="text-muted">07/12/2023</span>
                                                    </p>
                                                    <p>Nice</p>
                                                    <!-- icon -->
                                                    <div class="d-flex justify-content-end mt-4">
                                                        <a href="#" class="text-muted">
                                                            <i class="feather-icon icon-thumbs-up me-1"></i>
                                                            Helpful
                                                        </a>
                                                        <a href="#" class="text-muted ms-4">
                                                            <i class="feather-icon icon-flag me-2"></i>
                                                            Report abuse
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex border-bottom pb-6 mb-6">
                                                <!-- <img src="./assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-lg" /> -->
                                                <div class="ms-5">
                                                    <h6 class="mb-1">User 3</h6>
                                                    <!-- select option -->
                                                    <!-- content -->
                                                    <p class="small">
                                                        <span class="text-muted">07/12/2023</span>
                                                    </p>

                                                    <p>Nice</p>
                                                    <!-- icon -->
                                                    <div class="d-flex justify-content-end mt-4">
                                                        <a href="#" class="text-muted">
                                                            <i class="feather-icon icon-thumbs-up me-1"></i>
                                                            Helpful
                                                        </a>
                                                        <a href="#" class="text-muted ms-4">
                                                            <i class="feather-icon icon-flag me-2"></i>
                                                            Report abuse
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="text-align: right;">
                                                <a href="#" class="btn btn-outline-gray-400 text-muted">Read More Reviews</a>
                                            </div>
                                        </div>
                                        <form action="" method="POST" id="create-review">
                                            <!-- rating -->
                                            <h3 class="mb-5">Create Review</h3>
                                            <div class="py-4 mb-4">
                                                <!-- heading -->
                                                <h5>Add a written review</h5>
                                                <textarea name="content" class="form-control" rows="3" placeholder="What did you like or dislike?"></textarea>
                                            </div>
                                            <!-- button -->
                                            <input type="hidden" name="id" value="25">
                                            <div class="d-flex justify-content-end">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section -->
    <section class="my-lg-14 my-14">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <!-- heading -->
                    <h3>Related Items</h3>
                </div>
            </div>
            <!-- row -->
            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <a href="?act=product_detail"><img src="assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                            </div>
                            <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Product
                                    1</a></h2>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-danger">$182</span>
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
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <a href="?act=product_detail"><img src="assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                            </div>
                            <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Product
                                    2</a></h2>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-danger">$182</span>
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
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <a href="?act=product_detail"><img src="assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                            </div>
                            <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Product
                                    3</a></h2>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-danger">$182</span>
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
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <a href="?act=product_detail"><img src="assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                            </div>
                            <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Product
                                    4</a></h2>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-danger">$182</span>
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
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <a href="?act=product_detail"><img src="assets/images/products/product-img-5.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                            </div>
                            <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Product
                                    5</a></h2>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-danger">$182</span>
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
            </div>
        </div>
    </section>
</main>