<div class="main-wrapper">
    <!-- navbar vertical -->
    <?php include_once 'box_left.php' ?>
    
    <!-- main wrapper -->
    <main class="main-content-wrapper">
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                    <!-- page header -->
                    <div>
                        <h2>Order List</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lg">
                        <div class="p-6">
                            <div class="row justify-content-between">
                                <div class="col-md-4 col-12 mb-2 mb-md-0">
                                    <!-- form -->
                                    <form class="d-flex" role="search">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                                    </form>
                                </div>
                                <div class="col-lg-2 col-md-4 col-12">
                                    <!-- select -->
                                    <select class="form-select">
                                        <option selected>Status</option>
                                        <option value="Success">Success</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body p-0">
                            <!-- table responsive -->
                            <div class="table-responsive">
                                <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Payment Method</th>
                                            <th>Total</th>
                                            <th>Date</th>
                                            <th>ID User</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listOrder as $key => $value) {
                                            extract($value);
                                        ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $value['name'] ?></td>
                                            <td><?= $value['phone'] ?></td>
                                            <td><?= $value['address'] ?></td>
                                            <td><?= $value['pay_method'] ?></td>
                                            <td><?= number_format($value['total'], 0, '.', '.') ?></td>
                                            <td><?= $value['date'] ?></td>
                                            <td><?= $value['id_user'] ?></td>
                                            <td>
                                                <a href="?act=orders_detail&id=<?= $value['id'] ?>" class="text-reset" aria-expanded="false">
                                                    <i class="bi bi-info-circle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                            <span>Showing 1 to 8 of 12 entries</span>
                            <nav class="mt-2 mt-md-0">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled"><a class="page-link" href="#!">Previous</a></li>
                                    <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>