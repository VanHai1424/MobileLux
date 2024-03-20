<main>
    <!-- section-->
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
                            <li class="breadcrumb-item active" aria-current="page">Shop Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- section -->
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <div>
                        <div class="mb-8">
                            <!-- text -->
                            <h1 class="fw-bold mb-0">Checkout</h1>
                            <p class="mb-0">
                                Already have an account? Click here to
                                <a href="?act=signin">Sign in</a>
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <!-- accordion -->
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <!-- accordion item -->
                            <div class="accordion-item py-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- heading one -->
                                    <a href="#" class="mb-10 fs-5 text-inherit collapsed h4" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                        <i class="feather-icon icon-map-pin me-2 text-muted"></i>
                                        Add delivery address
                                    </a>
                                    <!-- collapse -->
                                </div>
                                <form id="flush-collapseOne" class="modal-dialog collapse show" action="?act=order" method="POST">
                                    <div class="modal-content">
                                        <!-- modal body -->
                                        <div class="modal-body">
                                            <!-- row -->
                                            <div class="row g-3">
                                                <!-- col -->
                                                <div class="col-12">
                                                    <input type="text" class="form-control" name="name" placeholder="Name" aria-label="First name" value="<?= (isset($user) ? $user['user'] : "") ?>" required />
                                                </div>
                                                <!-- col -->
                                                <div class="col-12">
                                                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?= (isset($user) ? $user['email'] : "") ?>" required />
                                                </div>
                                                <!-- col -->
                                                <div class="col-12">
                                                    <input type="text" class="form-control" name="tel" placeholder="Phone number" required />
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" name="address" placeholder="Address" required />
                                                </div>
                                                <div class="col-12">
                                                    <!-- button -->
                                                    <select class="form-select" name="pay_method">
                                                        <option value="1">Payment on delivery</option>
                                                        <option value="2">Bank card</option>
                                                    </select>
                                                </div>
                                                <input type="submit" id="submit" value="submit" hidden>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>

                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="mt-4 mt-lg-0">
                            <div class="card shadow-sm">
                                <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
                                <ul class="list-group list-group-flush">
                                    <!-- list group item -->
                                    <?php
                                    $total = 0;
                                    foreach ($_SESSION['cart'] as $value) {
                                        extract($value);
                                        $total += $price * $quantity;
                                    ?>
                                        <li class="list-group-item px-4 py-3">
                                            <div class="row align-items-center">
                                                <div class="col-2 col-md-2">
                                                    <img src="./upload/<?= $img ?>" alt="" class="img-fluid" />
                                                </div>
                                                <div class="col-5 col-md-5">
                                                    <h6 class="mb-0"><?= $name ?></h6>
                                                </div>
                                                <div class="col-2 col-md-1 text-center text-muted p-0 ">
                                                    <span><?= $quantity ?></span>
                                                </div>
                                                <div class="col-3 text-lg-end text-start text-md-end col-md-4">
                                                    <span class="fw-bold"><?= number_format($price * $quantity, 0, '.', '.') ?></span>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <div>Item Subtotal</div>
                                            <div class="fw-bold"><?= number_format($total, 0, '.', '.') ?></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                Service Fee
                                                <i class="feather-icon icon-info text-muted" data-bs-toggle="tooltip" title="Default tooltip"></i>
                                            </div>
                                            <div class="fw-bold">0</div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between fw-bold">
                                            <div>Subtotal</div>
                                            <div class="text-danger"><?= number_format($total, 0, '.', '.') ?> <u>đ</u></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Button -->
                            <div class="col-lg-12 d-flex justify-content-end mt-5">
                                <button <?= (!isset($_SESSION['user']) || ($_SESSION['cart'] == []) ? "disabled" : "") ?> type="submit" name="submit" onclick="placeOrder()" class="btn btn-primary ms-2">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    function placeOrder() {
        const btnSubmit = document.getElementById('submit');
        btnSubmit.click();
    }
</script>