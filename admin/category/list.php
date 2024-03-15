<div class="main-wrapper">
	<!-- navbar vertical -->
	<?php include_once 'box_left.php' ?>

	<!-- main -->
	<main class="main-content-wrapper">
		<div class="container">
			<!-- row -->
			<div class="row mb-8">
				<div class="col-md-12">
					<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
						<!-- pageheader -->
						<div>
							<h2>Categories</h2>
							<!-- breacrumb -->
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0">
									<li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Categories</li>
								</ol>
							</nav>
						</div>
						<!-- button -->
						<div>
							<a href="?act=add_category" class="btn btn-primary">Add New Category</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 col-12 mb-5">
					<!-- card -->
					<div class="card h-100 card-lg">
						<div class="px-6 py-6">
							<div class="row justify-content-between">
								<div class="col-lg-4 col-md-6 col-12 mb-2 mb-md-0">
									<!-- form -->
									<form class="d-flex" role="search">
										<input class="form-control" type="search" placeholder="Search Category" aria-label="Search" />
									</form>
								</div>
								<!-- select option -->
								<div class="col-xl-2 col-md-4 col-12">
									<select class="form-select">
										<option selected>Status</option>
										<option value="Published">Published</option>
										<option value="Unpublished">Unpublished</option>
									</select>
								</div>
							</div>
						</div>
						<!-- card body -->
						<div class="card-body p-0">
							<!-- table -->
							<div class="table-responsive">
								<table class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox">
									<thead class="bg-light">
										<tr>
											<th>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkAll" />
													<label class="form-check-label" for="checkAll"></label>
												</div>
											</th>
											<th>ID</th>
											<th>Name</th>
											<th>Image</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="categoryOne" />
													<label class="form-check-label" for="categoryOne"></label>
												</div>
											</td>
											<td>1</td>
											<td><a href="#" class="text-reset">Apple</a></td>
											<td>
												<a href="#!"><img src="../assets/images/category/apple.jpg" alt="" class="icon-shape icon-md object-fit-cover " /></a>
											</td>
											<td>
												<div class="dropdown">
													<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="feather-icon icon-more-vertical fs-5"></i>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a class="dropdown-item" href="#">
																<i class="bi bi-trash me-3"></i>
																Delete
															</a>
														</li>
														<li>
															<a class="dropdown-item" href="?act=edit_category">
																<i class="bi bi-pencil-square me-3"></i>
																Edit
															</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="categoryOne" />
													<label class="form-check-label" for="categoryOne"></label>
												</div>
											</td>
											<td>2</td>
											<td><a href="#" class="text-reset">Samsung</a></td>
											<td>
												<a href="#!"><img src="../assets/images/category/samsung.png" alt="" class="icon-shape icon-md object-fit-contain " /></a>
											</td>
											<td>
												<div class="dropdown">
													<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="feather-icon icon-more-vertical fs-5"></i>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a class="dropdown-item" href="#">
																<i class="bi bi-trash me-3"></i>
																Delete
															</a>
														</li>
														<li>
															<a class="dropdown-item" href="?act=edit_category">
																<i class="bi bi-pencil-square me-3"></i>
																Edit
															</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="categoryOne" />
													<label class="form-check-label" for="categoryOne"></label>
												</div>
											</td>
											<td>3</td>
											<td><a href="#" class="text-reset">Xiaomi</a></td>
											<td>
												<a href="#!"><img src="../assets/images/category/xiaomi.jpg" alt="" class="icon-shape icon-md object-fit-contain " /></a>
											</td>
											<td>
												<div class="dropdown">
													<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="feather-icon icon-more-vertical fs-5"></i>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a class="dropdown-item" href="#">
																<i class="bi bi-trash me-3"></i>
																Delete
															</a>
														</li>
														<li>
															<a class="dropdown-item" href="?act=edit_category">
																<i class="bi bi-pencil-square me-3"></i>
																Edit
															</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="categoryOne" />
													<label class="form-check-label" for="categoryOne"></label>
												</div>
											</td>
											<td>4</td>
											<td><a href="#" class="text-reset">Oppo</a></td>
											<td>
												<a href="#!"><img src="../assets/images/category/oppo.jpg" alt="" class="icon-shape icon-md object-fit-contain " /></a>
											</td>
											<td>
												<div class="dropdown">
													<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="feather-icon icon-more-vertical fs-5"></i>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a class="dropdown-item" href="#">
																<i class="bi bi-trash me-3"></i>
																Delete
															</a>
														</li>
														<li>
															<a class="dropdown-item" href="?act=edit_category">
																<i class="bi bi-pencil-square me-3"></i>
																Edit
															</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="categoryOne" />
													<label class="form-check-label" for="categoryOne"></label>
												</div>
											</td>
											<td>5</td>
											<td><a href="#" class="text-reset">Vivo</a></td>
											<td>
												<a href="#!"><img src="../assets/images/category/vivo.png" alt="" class="icon-shape icon-md object-fit-contain " /></a>
											</td>
											<td>
												<div class="dropdown">
													<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="feather-icon icon-more-vertical fs-5"></i>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a class="dropdown-item" href="#">
																<i class="bi bi-trash me-3"></i>
																Delete
															</a>
														</li>
														<li>
															<a class="dropdown-item" href="?act=edit_category">
																<i class="bi bi-pencil-square me-3"></i>
																Edit
															</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
						<div class="border-top d-flex justify-content-between align-items-md-center px-6 py-6 flex-md-row flex-column gap-4">
							<span>Showing 1 to 8 of 12 entries</span>
							<nav>
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