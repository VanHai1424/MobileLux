<div class="main-wrapper">
    <!-- navbar vertical -->
    <?php include_once 'box_left.php' ?>

    <main class="main-content-wrapper">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                        <div>
                            <!-- page header -->
                            <h2>Order Details</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- button -->
                        <div>
                            <a href="?act=list_order" class="btn btn-primary">Back to all orders</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lg">
                        <div class="card-body p-6">
                            <div class="d-md-flex justify-content-between">
                                <div class="d-flex align-items-center mb-2 mb-md-0">
                                    <h2 class="mb-0">Order Name: User</h2>

                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="row">
                                    <!-- address -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="mb-6">
                                            <h6>Customer Details</h6>
                                            <p class="mb-1 lh-lg">
                                                Name <br>
                                                Abc@gmail.com <br>
                                                0124525252 <br>
                                                adrress </p>
                                        </div>
                                    </div>

                                    <!-- Order Details -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="mb-6">
                                            <h6>Order Details</h6>
                                            <p class="mb-1 lh-lg">
                                                Order ID:
                                                <span class="text-dark">52</span>
                                                <br>
                                                Order Date:
                                                <span class="text-dark">12/03/2024</span>
                                                <br>
                                                Order Total:
                                                <span class="text-dark">$300</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table mb-0 text-nowrap table-centered">
                                        <!-- Table Head -->
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Image</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <!-- tbody -->
                                        <tbody>
                                            <tr>
                                                <td>Product 1</td>
                                                <td>
                                                    <img src="../assets/images/products/product-img-1.jpg" alt="" class="icon-shape icon-lg">
                                                </td>
                                                <td>1</td>
                                                <td><span class="text-body">$152</span></td>
                                            </tr>
                                            <tr>
                                                <td>Product 2</td>
                                                <td>
                                                    <img src="../assets/images/products/product-img-2.jpg" alt="" class="icon-shape icon-lg">
                                                </td>
                                                <td>1</td>
                                                <td><span class="text-body">$182</span></td>
                                            </tr>


                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="1" class="fw-semibold text-dark">
                                                    <!-- text -->
                                                    Total
                                                </td>
                                                <td class="fw-semibold text-danger">
                                                    <!-- text -->
                                                    $300
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>