<?php
include 'layout/header.php';
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xxl-4">
                                    <h5 class="card-title mb-3">Product Information</h5>

                                </div>
                                <div class="col-xxl-8">
                                    <form action="simpan_product.php" method="post">
                                        <div class="mb-3">
                                            <label for="productTitle" class="form-label">Nama Produk <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="productTitle" name="nama_produk"
                                                placeholder="Masukkan Nama Barang" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="shortDecs" class="form-label">Deskripsi Singkat <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" name="deskripsi_singkat" id="shortDecs"
                                                placeholder="Must enter minimum of a 100 characters"
                                                rows="3"></textarea>
                                        </div>

                                        <div class="col-lg-4">
                                            <div>
                                                <label class="form-label" for="product-price-input">Harga</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="product-price-addon">Rp.</span>
                                                    <input type="text" class="form-control" id="product-price-input"
                                                        placeholder="Masukkan Harga Barang" name="harga" aria-label="Price"
                                                        aria-describedby="product-price-addon" required="">
                                                    <div class="invalid-feedback">Please Enter a product price.</div>
                                                </div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div>
                                                    <label for="productStocks" class="form-label">Stock <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="stock" id="productStocks"
                                                        placeholder="Stock" required>
                                                </div>
                                            </div><!--end col-->
                                
                                            <div class="hstack gap-2 justify-content-end mb-3">
                                        </div>
                                    </form>
                                    <a href="product.php">    
                                        <button class="btn btn-danger"><i class="ph-x align-middle"></i> Batal</button>
                                        </a>
                                                <button class="btn btn-primary" type="submit" >Simpan</button>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div><!--end col-->
            </div>
        </div><!--end row-->
    </div>
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
include 'layout/footer.php'
    ?>