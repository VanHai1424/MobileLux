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
                     <h2>Add New Product</h2>
                     <!-- breacrumb -->
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                           <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                           <li class="breadcrumb-item"><a href="#" class="text-inherit">Products</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                        </ol>
                     </nav>
                  </div>
                  <!-- button -->
                  <div>
                     <a href="?act=list_product" class="btn btn-light">Back to Product</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- row -->
         <form action="" method="POST" class="row" enctype="multipart/form-data">
            <div class="col-lg-12 col-12">
               <!-- card -->
               <div class="card mb-6 shadow border-0">
                  <!-- card body -->
                  <div class="card-body p-6">
                     <h4 class="mb-4 h5 mt-5">Product Information</h4>

                     <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                           <!-- input -->
                           <div class="mb-3 col-lg-6">
                              <label class="form-label">Name</label>
                              <input type="text" name="name" class="form-control <?= !empty($_SESSION['errors']['name']) ? 'is-invalid' : '' ?>" placeholder="Product Name">
                              <div class="invalid-feedback">
                                 <?= !empty($_SESSION['errors']['name']) ? $_SESSION['errors']['name'] : '' ?>
                              </div>
                           </div>

                           <!-- input -->
                           <div class="mb-3 col-lg-6">
                              <label class="form-label">Price</label>
                              <input type="text" name="price" class="form-control <?= !empty($_SESSION['errors']['price']) ? 'is-invalid' : '' ?>" placeholder="Price">
                              <div class="invalid-feedback">
                                 <?= !empty($_SESSION['errors']['price']) ? $_SESSION['errors']['price'] : '' ?>
                              </div>
                           </div>

                           <div class="mb-3 col-lg-6">
                              <label class="form-label">Color</label>
                              <input type="text" name="color" class="form-control <?= !empty($_SESSION['errors']['color']) ? 'is-invalid' : '' ?>" placeholder="Color">
                              <div class="invalid-feedback">
                                 <?= !empty($_SESSION['errors']['color']) ? $_SESSION['errors']['color'] : '' ?>
                              </div>
                           </div>

                           <div class="mb-3 col-lg-6">
                              <label class="form-label">Memory</label>
                              <input type="text" name="memory" class="form-control <?= !empty($_SESSION['errors']['memory']) ? 'is-invalid' : '' ?>" placeholder="Memory">
                              <div class="invalid-feedback">
                                 <?= !empty($_SESSION['errors']['memory']) ? $_SESSION['errors']['memory'] : '' ?>
                              </div>
                           </div>
                           <!-- input -->
                           <div class="mb-3 col-lg-6">
                              <label class="form-label">Quantity</label>
                              <input type="text" name="quantity" class="form-control <?= !empty($_SESSION['errors']['qty']) ? 'is-invalid' : '' ?>" placeholder="Quantity">
                              <div class="invalid-feedback">
                                 <?= !empty($_SESSION['errors']['qty']) ? $_SESSION['errors']['qty'] : '' ?>
                              </div>
                           </div>
                           <!-- input -->
                           <div class="mb-3 col-lg-6">
                              <label class="form-label">Category</label>
                              <select class="form-select <?= !empty($_SESSION['errors']['category']) ? 'is-invalid' : '' ?>" name="id_category">
                                 <option value="" disabled selected>Chọn Category</option>
                                 <?php foreach ($dataCategory as $key => $value) : ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                 <?php endforeach  ?>
                              </select>
                              <div class="invalid-feedback">
                                 <?= !empty($_SESSION['errors']['category']) ? $_SESSION['errors']['category'] : '' ?>
                              </div>
                           </div>
                           <div>
                              <div class="mb-3 col-lg-12 mt-5">
                                 <!-- heading -->
                                 <h4 class="mb-3 h5">Product Images</h4>

                                 <!-- input -->
                                 <input type="file" name="image" id="" class="form-control <?= !empty($_SESSION['errors']['image']) ? 'is-invalid' : '' ?>">
                                 <div class="invalid-feedback">
                                    <?= !empty($_SESSION['errors']['image']) ? $_SESSION['errors']['image'] : '' ?>
                                 </div>
                              </div>
                           </div>
                           <!-- input -->
                           <div class="mb-3 col-lg-12 mt-5">
                              <h4 class="mb-3 h5">Product Descriptions</h4>
                              <textarea name="desc" id="" cols="93" rows="6" class="form-control <?= !empty($_SESSION['errors']['desc']) ? 'is-invalid' : '' ?>"></textarea>
                              <div class="invalid-feedback">
                                 <?= !empty($_SESSION['errors']['desc']) ? $_SESSION['errors']['desc'] : '' ?>
                              </div>
                           </div>

                           <!-- button -->
                           <div class="col-lg-12">
                              <button type="submit" name="submit" class="btn btn-primary">Create
                                 Product</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </main>