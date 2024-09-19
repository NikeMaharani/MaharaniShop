<?php
include 'layout/header.php';
?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        
                            

                        

                                    

                            
                            

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card" id="contactList">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Latest Orders</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown sortble-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                    </span><span class="text-muted dropdown-title">Order Date</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <button class="dropdown-item sort" data-sort="order_date">Order Date</button>
                                                    <button class="dropdown-item sort" data-sort="order_id">Order ID</button>
                                                    <button class="dropdown-item sort" data-sort="amount">Amount</button>
                                                    <button class="dropdown-item sort" data-sort="status">Status</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="text-muted table-light">
                                                    <tr>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="order_date">Order Date</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="order_id">Order ID</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="shop">Shop</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="customer">Customers</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="products">Products</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="amount">Amount</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="rating">Rating</th>
                                                    </tr>
                                                </thead>
                                                
                                            </table><!-- end table -->
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find any transactions for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h4 class="card-title mb-0 flex-grow-1">Popular Products</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase">Sort by:
                                                    </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Yesterday</a>
                                                    <a class="dropdown-item" href="#">Last 7 Days</a>
                                                    <a class="dropdown-item" href="#">Last 30 Days</a>
                                                    <a class="dropdown-item" href="#">This Month</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0">
                                        <div data-simplebar class="px-3" style="max-height: 333px;">
                                            <div class="vstack gap-2">
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="assets/images/products/32/img-1.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Craft Women Black Sling Bag</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 487
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 936
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$15.99</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="assets/images/products/32/img-2.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Unique Men's Wrist Watch</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 452
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 1420
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$84.99</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="assets/images/products/32/img-3.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Twiala Floral Dress</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 562
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 1348
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$149.99</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="assets/images/products/32/img-4.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Tokyo Fancy Bomber Jacket</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 644
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 1540
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$245.00</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="assets/images/products/32/img-5.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Aster Dress 2XL / Royal Blue</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 841
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 985
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$74.63</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="assets/images/products/32/img-6.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Craft Women Black Sling Bag</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 763
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 763
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$245.74</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="card-title mb-0 flex-grow-1">Orders Status</h5>
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ph-dots-three-outline-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Current Years</a>
                                                <a class="dropdown-item" href="#">Last Years</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 pb-1 text-center">
                                            <h6 class="mb-0">01 Jan, 2022 - 01 Jan, 2023</h6>
                                        </div>

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">New</p>
                                                    <h6 class="mb-0">307</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 50%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Pending</p>
                                                    <h6 class="mb-0">177</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 37%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Rejected</p>
                                                    <h6 class="mb-0">39</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 12%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Returns</p>
                                                    <h6 class="mb-0">17</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger bg-opacity-75" style="width: 3%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Dispatched</p>
                                                    <h6 class="mb-0">661</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 57%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Delivered</p>
                                                    <h6 class="mb-0">1320</h6>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 86%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Cancelled</p>
                                                    <h6 class="mb-0">74</h6>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 13%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                        </div><!--end row-->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
<?php
include 'layout/footer.php';
?>
               