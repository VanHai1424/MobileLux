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
                                    <h2 class="mb-0">Order Name: <?= $listOrderDetail[0]['order_name'] ?></h2>
                                    
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="row">
                                    <!-- address -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="mb-6">
                                            <h6>Customer Details</h6>
                                            <p class="mb-1 lh-lg">
                                                <?= $listOrderDetail[0]['order_name'] ?>
                                                <br />
                                                <?= $listOrderDetail[0]['user_email'] ?>
                                                <br />
                                                <?= $listOrderDetail[0]['order_phone'] ?>
                                                <br />
                                                <?= $listOrderDetail[0]['order_address'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- Order Details -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="mb-6">
                                            <h6>Order Details</h6>
                                            <p class="mb-1 lh-lg">
                                                Order ID:
                                                <span class="text-dark"><?= $listOrderDetail[0]['order_id'] ?></span>
                                                <br />
                                                Order Date:
                                                <span class="text-dark"><?= date('d/m/Y', strtotime($listOrderDetail[0]['order_date'])) ?></span>
                                                <br />
                                                Order Total:
                                                <span class="text-dark"><?= number_format($listOrderDetail[0]['order_total'], 0, '.', '.') ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <form action="?act=update_status" method="POST">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control my-4">
                                                <option <?= ($listOrderDetail[0]['order_status'] == 1 ? "selected" : "") ?> value="1">Đã duyệt</option>
                                                <option <?= ($listOrderDetail[0]['order_status'] == 2 ? "selected" : "") ?> value="2">Đã xác nhận</option>
                                                <option <?= ($listOrderDetail[0]['order_status'] == 3 ? "selected" : "") ?> value="3">Đang vận chuyển</option>
                                                <option <?= ($listOrderDetail[0]['order_status'] == 4 ? "selected" : "") ?> value="4">Hoàn thành</option>
                                            </select>
                                            <input type="hidden" name="id" value="<?= $listOrderDetail[0]['order_id'] ?>">
                                            <button class="btn btn-primary d-block ms-auto " name="submit" style="width: 100px">Update</button>
                                        </form>
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
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total Price</th>
                                            </tr>
                                        </thead>
                                        <!-- tbody -->
                                        <tbody>
                                            <?php 
                                                foreach ($listOrderDetail as $value) {
                                                    extract($value);    
                                            ?>
                                            <tr>
                                                <td><?= $product_name ?></td>
                                                <td>
                                                    <img src="../upload/<?= $product_img ?>" alt="" class="icon-shape icon-lg" />
                                                </td>
                                                <td><?= number_format($product_price, 0, '.', '.') ?></td>
                                                <td><?= $cart_quantity ?></td>
                                                <td><span class="text-body"><?= number_format($cart_price, 0, '.', '.') ?></span></td>
                                            </tr>
                                            <?php 
                                                }
                                            ?>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td colspan="1" class="fw-semibold text-dark">
                                                    <!-- text -->
                                                    Total
                                                </td>
                                                <td class="fw-semibold text-danger">
                                                    <!-- text -->
                                                    <?= number_format($listOrderDetail[0]['order_total'], 0, '.', '.') ?> <u>đ</u>
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