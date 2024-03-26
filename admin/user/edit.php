<div class="main-wrapper">
    <!-- navbar vertical -->
    <?php include_once 'box_left.php' ?>

    <!-- main -->
    <main class="main-content-wrapper">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <!-- page header -->
                        <div>
                            <h2>Edit New User</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">User</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit New User</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- button -->
                        <div>
                            <a href="?act=list_user" class="btn btn-light">Back to User</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <form action="" method="POST" class="row">
                <div class="col-lg-12 col-12">
                    <!-- card -->
                    <div class="card mb-6 shadow border-0">
                        <!-- card body -->
                        <div class="card-body p-6">
                            <h4 class="mb-4 h5 mt-5">User Information</h4>

                            <div class="row">
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">ID</label>
                                    <input type="text" class="form-control" placeholder="ID" required="" disabled="" name="id" value="<?= $user['id'] ?>">
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">User Name</label>
                                    <input type="text" name="name" class="form-control <?= !empty($_SESSION['errors']['name']) ? 'is-invalid' : '' ?>" placeholder="User Name" value="<?= $user['user'] ?>">
                                    <div class="invalid-feedback">
                                        <?= !empty($_SESSION['errors']['name']) ? $_SESSION['errors']['name'] : '' ?>
                                    </div>
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="pass" class="form-control <?= !empty($_SESSION['errors']['pass']) ? 'is-invalid' : '' ?>" placeholder="Password" value="<?= $user['pass'] ?>">
                                    <div class="invalid-feedback">
                                        <?= !empty($_SESSION['errors']['pass']) ? $_SESSION['errors']['pass'] : '' ?>
                                    </div>
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control <?= !empty($_SESSION['errors']['email']) ? 'is-invalid' : '' ?>" placeholder="Email" value="<?= $user['email'] ?>">
                                    <div class="invalid-feedback">
                                        <?= !empty($_SESSION['errors']['email']) ? $_SESSION['errors']['email'] : '' ?>
                                    </div>
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Role</label>
                                    <select class="form-select <?= !empty($_SESSION['errors']['role']) ? 'is-invalid' : '' ?>" name="role">
                                        <option disabled selected value="<?= $user['id'] ?>"><?= $user['role'] == '0' ? 'Admin' : 'User' ?></option>
                                        <option value="0">Admin</option>
                                        <option value="1">User</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= !empty($_SESSION['errors']['role']) ? $_SESSION['errors']['role'] : '' ?>
                                    </div>
                                </div>

                                <!-- button -->
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Update User</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>