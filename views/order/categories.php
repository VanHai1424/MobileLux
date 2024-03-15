<?php
// echo '<pre>';
// print_r($listProduct);
// echo '</pre>';

$resultArray = [];

foreach ($listProduct as $item) {
    $categoryId = $item['id_category'];

    if (!isset($resultArray[$categoryId])) {
        $resultArray[$categoryId] = [];
    }

    array_push($resultArray[$categoryId], $item);
}
// echo '<pre>';
// print_r($resultArray);
// echo '</pre>';

?>
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
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- section -->
    <section class="mt-8 mb-lg-14 mb-8">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-12">
                    <!-- page header -->
                    <?php
                        foreach ($resultArray as $value) {
                    ?>
                        <div class="card mb-4 bg-light border-0 mt-8">
                            <!-- card body -->
                            <div class="card-body p-9">
                                <!-- title -->
                                <h2 class="mb-0 fs-1"><?= $value[0]['category_name'] ?></h2>
                            </div>
                        </div>
                        <!-- list icon -->
                        <div class="d-lg-flex justify-content-between align-items-center">
                            <div>
                                <p class="mb-3 mb-md-0">
                                    <span class="text-dark"><?= count($value) ?></span>
                                    Products found
                                </p>
                            </div>
                            <!-- icon -->
                            <div class="d-md-flex justify-content-between align-items-center">
                                <div class="d-flex mt-2 mt-lg-0">
                                    <div>
                                        <!-- select option -->
                                        <select class="form-select">
                                            <option selected>Sort by: Featured</option>
                                            <option value="Low to High">Price: Low to High</option>
                                            <option value="High to Low">Price: High to Low</option>
                                            <option value="Release Date">Release Date</option>
                                            <option value="Avg. Rating">Avg. Rating</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 mt-2">
                            <?php
                            foreach ($value as $value2) {
                                extract($value2);
                            ?>
                                <div class="col">
                                    <div class="card card-product">
                                        <div class="card-body">
                                            <div class="text-center position-relative">
                                                <div class="d-flex justify-content-center align-items-center mb-3" style="width: 200px; height: 200px;">
                                                    <a href="?act=product_detail&id=<?= $id ?>">
                                                        <img src="./upload/<?= $image ?>" alt="Grocery Ecommerce Template" class="img-fluid h-100" />
                                                    </a>    
                                                </div>
                                            </div>
                                            <h2 class="fs-6"><a href="?act=product_detail&id=<?= $id ?>" class="text-inherit text-decoration-none"><?= $name ?></a></h2>

                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div>
                                                    <span class="text-danger"><?= number_format($price, 0, '.', '.') ?> <u>đ</u></span>
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
                    <?php
                    }
                    ?>
                    <!-- row -->
                    <div class="row mt-8">
                        <div class="col">
                            <!-- nav -->
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link mx-1" href="#" aria-label="Previous">
                                            <i class="feather-icon icon-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link mx-1 active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link mx-1" href="#">2</a></li>

                                    <li class="page-item"><a class="page-link mx-1" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link mx-1" href="#">12</a></li>
                                    <li class="page-item">
                                        <a class="page-link mx-1" href="#" aria-label="Next">
                                            <i class="feather-icon icon-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>