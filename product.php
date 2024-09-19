<?php
include 'layout/header.php'
?>
 <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Products</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Products</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div id="productList">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- <div class="card-body"> -->
                                        <!-- <div class="row g-3"> -->
                                            <!-- <div class="col-xxl">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search" placeholder="Search products, price etc...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>end col -->
                                            <div class="col-xxl col-sm-6">
                                                <!-- <div>
                                                    <select class="form-control" data-choices data-choices-search-false data-choices-removeItem multiple data-choices-limit="Required Limit" data-choices-text-unique-true>
                                                        <option value="">Select Brands</option>
                                                        <option value="Adidas">Adidas</option>
                                                        <option value="Boat" selected>Boat</option>
                                                        <option value="Puma" selected>Puma</option>
                                                        <option value="Realme">Realme</option>
                                                    </select>
                                                </div>
                                            </div>  end col -->
                                            <!-- <div class="col-xxl col-sm-6">
                                                <div>
                                                    <select class="form-control" id="idCategory" data-choices data-choices-search-false data-choices-removeItem>
                                                        <option value="all">Select Category</option>
                                                        <option value="Appliances">Appliances</option>
                                                        <option value="Automotive Accessories">Automotive Accessories</option>
                                                        <option value="Electronics">Electronics</option>
                                                        <option value="Fashion">Fashion</option>
                                                        <option value="Furniture">Furniture</option>
                                                        <option value="Grocery">Grocery</option>
                                                        <option value="Headphones">Headphones</option>
                                                        <option value="Kids">Kids</option>
                                                        <option value="Luggage">Luggage</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="Watches">Watches</option>
                                                    </select>
                                                </div>
                                            </div>end col -->
                                            <!-- <div class="col-xxl-2 col-sm-6">
                                                <div>
                                                    <select class="form-control" id="idDiscount"  data-choices data-choices-search-false data-choices-removeItem>
                                                        <option value="all">Select All Discount</option>
                                                        <option value="50">50% or more</option>
                                                        <option value="40">40% or more</option>
                                                        <option value="30">30% or more</option>
                                                        <option value="20">20% or more</option>
                                                        <option value="10">10% or more</option>
                                                        <option value="0">Less than 10%</option>
                                                    </select>
                                                </div>
                                            </div>  end col -->
                                            <!-- <div class="col-xxl-auto col-sm-6">
                                                <button type="button" class="btn btn-secondary w-md" onclick="filterData();"><i class="bi bi-funnel align-baseline me-1"></i> Filters</button>
                                            </div>end col -->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Products <span class="badge bg-dark-subtle text-dark ms-1">254</span></h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="d-flex flex-wrap align-items-start gap-2">
                                                <a href="add_product.php">
                                                <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Product</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-centered align-middle table-nowrap mb-0">
                                                <thead class="table-active">
                                                    <tr>
                                                        <th>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                                                <label class="form-check-label" for="checkAll"></label>
                                                            </div>
                                                        </th>
                                                        <th class="sort cursor-pointer" data-sort="products">Products</th>
                                                        <th class="sort cursor-pointer" data-sort="stock">Stock</th>
                                                        <th class="sort cursor-pointer" data-sort="price">Price</th>
                                                        <th class="sort cursor-pointer" data-sort="orders">Orders</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                <?php
                                                    include "koneksi.php";
                                                    $no = 1;
                                                    $data = mysqli_query($koneksi, "select * from products");
                                                    while ($row = mysqli_fetch_array($data)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $row['product_name']; ?></td>
                                                        <td><?php echo $row['description']; ?></td>
                                                        <td><?php echo $row['price']; ?></td>
                                                        <td><?php echo $row['stock']; ?></td>
                                                        <td>
                                                        <a href="edit_product.php?id_product=<?php echo $row['id_product'] ?>">
                                                        <button type="button" class="btn btn-warning add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ph-pencil align-middle me-1"></i></button>
                                                        </a>
                                                        <a href="delete_product.php?id_product=<?php echo $row['id_product'] ?>">
                                                        <button type="button" class="btn btn-danger add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ph-trash align-middle me-1"></i></button>
                                                        </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div><!--end table-responsive-->
    
                                        <div class="noresult" style="display: none">
                                            <div class="text-center py-4">
                                                <div class="avatar-md mx-auto mb-4">
                                                    <div class="avatar-title bg-light text-primary rounded-circle fs-4xl">
                                                        <i class="bi bi-search"></i>
                                                    </div>
                                                </div>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ products We did not find any products for you search.</p>
                                            </div>
                                        </div>
                                        <!-- end noresult -->

                                        <div class="row mt-3 align-items-center" id="pagination-element">
                                            <div class="col-sm">
                                                <div class="text-muted text-center text-sm-start">
                                                    Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">35</span> Results
                                                </div>
                                            </div>

                                            <div class="col-sm-auto mt-3 mt-sm-0">
                                                <div class="pagination-wrap hstack gap-2 justify-content-center">
                                                    <a class="page-item pagination-prev disabled" href="#">
                                                        <i class="mdi mdi-chevron-left align-middle"></i>
                                                    </a>
                                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                                    <a class="page-item pagination-next" href="#">
                                                        <i class="mdi mdi-chevron-right align-middle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end pagination-element -->
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
<?php
include 'layout/footer.php'
?>