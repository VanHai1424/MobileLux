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
                     <h2>Edit New Product</h2>
                     <!-- breacrumb -->
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                           <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                           <li class="breadcrumb-item"><a href="#" class="text-inherit">Products</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Edit New Product</li>
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

                     <div class="row">
                        <!-- input -->
                        <div class="mb-3 col-lg-6">
                           <label class="form-label">ID</label>
                           <input type="text" class="form-control" placeholder="ID" required="" disabled="">
                        </div>
                        <!-- input -->
                        <div class="mb-3 col-lg-6">
                           <label class="form-label">Name</label>
                           <input type="text" name="name" class="form-control" placeholder="Product Name" required="">
                        </div>
                        <!-- input -->
                        <div class="mb-3 col-lg-6">
                           <label class="form-label">Quantity</label>
                           <input type="text" name="quantity" class="form-control" placeholder="Quantity" required="">
                        </div>
                        <!-- input -->
                        <div class="mb-3 col-lg-6">
                           <label class="form-label">Price</label>
                           <input type="text" name="price" class="form-control" placeholder="Price" required="">
                        </div>
                        <!-- input -->
                        <div class="mb-3 col-lg-6">
                           <label class="form-label">Category</label>
                           <select class="form-select" name="id_category">
                              <option>Category</option>
                              <option value="12">Fruits</option>
                              <option value="13">Vegetables</option>
                              <option value="14">Juices</option>
                              <option value="15">Tea</option>
                              <option value="16">Bread</option>
                              <option value="17">Meats</option>
                              <option value="18">Coffee</option>
                              <option value="19">Noodles</option>
                           </select>
                        </div>
                        <div>
                           <div class="mb-3 col-lg-12 mt-5">
                              <!-- heading -->
                              <h4 class="mb-3 h5">Product Images</h4>

                              <!-- input -->
                              <input type="file" name="image" id="">
                           </div>
                        </div>
                        <!-- input -->
                        <div class="mb-3 col-lg-12 mt-5">
                           <h4 class="mb-3 h5">Product Descriptions</h4>
                           <textarea name="desc" id="" cols="93" rows="6" class="form-control"></textarea>

                        </div>

                        <!-- button -->
                        <div class="col-lg-12">
                           <button type="submit" name="submit" class="btn btn-primary">
                              Update Product
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </main>