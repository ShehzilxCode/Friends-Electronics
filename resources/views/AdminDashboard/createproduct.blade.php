@extends('AdminDashboard.layout')
@section('item')
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Create Product</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Create Product</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <form id="insert-product" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="product-title-input">Product Title</label>
                                        <input type="hidden" class="form-control" id="formAction" name="formAction"
                                            value="add">
                                        <input type="text" name="producttitle" class="form-control" id="product-title-input" value=""
                                            placeholder="Enter product title">
                                        <div class="invalid-feedback">Please Enter a product title.</div>
                                    </div>

                                </div>
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Gallery</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <h5 class="fs-14 mb-1">Product Image</h5>
                                        <p class="text-muted">Add Product main Image.</p>
                                        <div class="text-center">
                                            <div class="position-relative d-inline-block">
                                                <div class="position-absolute top-100 start-100 translate-middle">
                                                    <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" title="Select Image">
                                                        <div class="avatar-xs">
                                                            <div
                                                                class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                <i class="ri-image-fill"></i>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <input name="productmainimage" class="form-control d-none" value=""
                                                        id="product-image-input" type="file"
                                                        accept="image/*">
                                                </div>
                                                <div class="avatar-lg">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="#" id="product-img" class="avatar-md h-auto" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                                <h5 class="fs-14 mb-1">Product Gallery</h5>
                                                <p class="text-muted">Add Product Gallery Images.</p>

                                                <div class="dropzone">
                                                    <div class="fallback">
                                                        <input type="file" id="product-images" name="file[]" multiple accept="image/*" required>
                                                    </div>
                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                        </div>

                                                        <h5>Drop files here or click to upload.</h5>
                                                    </div>
                                                </div>

                                                <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                    <li class="mt-2" id="dropzone-preview-list">
                                                        <!-- This is used as the file preview template -->
                                                        <div class="border rounded">
                                                            <div class="d-flex p-2">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <div class="avatar-sm bg-light rounded">
                                                                        <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Product-Image" />
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="pt-1">
                                                                        <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                        <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-3">
                                                                    <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- end dropzon-preview -->
                                            </div>
                                </div>
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info"
                                                role="tab">
                                                General Info
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- end card header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="stocks-input">SKU</label>
                                                        <input type="text" name="productsku" class="form-control" id="stocks-input"
                                                            placeholder="SKU">
                                                        <div class="invalid-feedback">Please Enter a product stocks.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="product-price-input">Price</label>
                                                        <div class="input-group has-validation mb-3">
                                                            <span class="input-group-text" id="product-price-addon">$</span>
                                                            <input name="productprice" type="text" class="form-control"
                                                                id="product-price-input" placeholder="Enter price"
                                                                aria-label="Price" aria-describedby="product-price-addon">
                                                            <div class="invalid-feedback">Please Enter a product price.
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="product-discount-input">Discount</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"
                                                                id="product-discount-addon">%</span>
                                                            <input type="text" name="productdiscount" class="form-control"
                                                                id="product-discount-input" placeholder="Enter discount"
                                                                aria-label="discount"
                                                                aria-describedby="product-discount-addon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="orders-input">Total</label>
                                                        <input name="productTotal" class="form-control" id="orders-input"
                                                            placeholder="Orders">
                                                        <div class="invalid-feedback">Please Enter a product orders.</div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end tab-pane -->


                                    </div>
                                    <!-- end tab content -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                            <div class="text-end mb-3">
                                <button type="submit" id="addproductbtn" class="btn btn-success w-sm">Submit</button>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Publish</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <label for="choices-publish-visibility-input"
                                            class="form-label">Visibility</label>
                                        <select name="productstatus" class="form-select" id="choices-publish-visibility-input" data-choices
                                            data-choices-search-false>
                                            <option value="Public" selected>Public</option>
                                            <option value="Hidden">Hidden</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Categories</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-2"> <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#signupModals" class="float-end text-decoration-underline">Add
                                            New</a>Select product category</p>
                                    <select class="form-select" id="categorydropdown" name="productcategory"
                                        data-choices data-choices-search-false>
                                        {{-- <option selected disabled>Choose Category...</option> --}}

                                    </select>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->




                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Short Description</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-2">Add short description for product</p>
                                    <textarea name="productdesc" class="form-control" id="textarea" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </form>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
    <!-- end main content-->
    {{-- category modal --}}
    <div id="signupModals" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-header p-3">
                    <h4 class="card-title mb-0">Add Category</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="category-form">
                        {{-- @csrf --}}
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Category</label>
                            <input type="text" name="categoryinput" class="form-control" id="category-name"
                                placeholder="Add Category">
                        </div>
                        <div>
                            <label for="status-field" class="form-label">Status</label>
                            <select class="form-control" name="status" data-choices data-choices-search-false
                                name="status-field" id="status-field">
                                <option value="" selected disabled>Status</option>
                                <option value="0">Active</option>
                                <option value="1">Block</option>
                            </select>
                        </div>
                        <div class="text-end">
                            <button type="submit" id="btn" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#category-form').submit(function(e) {
                e.preventDefault(); // This prevents the default form submission
                var categoryname = $('#category-name').val();
                var status = $('#status-field').val();
                // console.log(status);

                if (categoryname == null || categoryname == "") {
                    Toastify({

                        text: "Category is Required",

                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #713107, #ff0000)",
                        },

                    }).showToast();
                } else if (status == null || status == "") {
                    Toastify({

                        text: "Status is Required",

                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #713107, #ff0000)",
                        },

                    }).showToast();
                } else {
                    $.ajax({
                        url: '{{ route('categroy.insert') }}',
                        type: 'POST',
                        data: {
                            categoryname: categoryname,
                            status: status
                        },
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.status == "success") {
                                Toastify({
                                    text: response.message,
                                    duration: 3000,
                                    style: {
                                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                                    },
                                }).showToast();
                                $('#categorydropdown').empty();

                                $('#signupModals').modal('hide');
                                $('#category-form')[0].reset();
                                fetchdata();
                            } else {
                                Toastify({

                                    text: response.error,

                                    duration: 3000,
                                    style: {
                                        background: "linear-gradient(to right, #713107, #ff0000)",
                                    },

                                }).showToast();
                            }
                        },
                        error: function() {
                            Toastify({

                                text: "An error occurred while processing the request.",

                                duration: 3000,
                                style: {
                                    background: "linear-gradient(to right, #713107, #ff0000)",
                                },

                            }).showToast();
                        }
                    });
                }
            });
        });

        function fetchdata() {
            $.ajax({
                url: '{{ route('categroy.fetch') }}',
                type: 'get',
                success: function(response) {
                    console.log(response)
                    if (response.data.length > 0) {
                        $('#categorydropdown').append(`
                                <option selected disabled>Choose Category</option>
                            `)
                        for (let i = 0; i < response.data.length; i++) {
                            $('#categorydropdown').append(`
                                <option value="`+ response.data[i]['id'] +`">` + response.data[i]['Category'] + `</option>
                            `)
                        }
                    } else {
                        $('#categorydropdown').append('<option selected disabled >No Data</option>')
                    }
                },
                error: function(e) {
                    console.log(e.responseText)
                }
            })
        };
        fetchdata();

$(document).ready(function () {
    $('#insert-product').on('submit', function (e) {
        e.preventDefault();
        handleFormUploadForm(
            'POST',
            '#insert-product',
            '#addproductbtn',
            "{{ route('product.create') }}",
            "{{ route('product.dashboard.page') }}"
        );
    });
});

    </script>
@endpush
