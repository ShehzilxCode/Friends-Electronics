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
                            <h4 class="mb-sm-0">Category</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Category</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="customerList">
                            <div class="card-header border-bottom-dashed">

                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="card-title mb-0">Category List</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <button class="btn btn-soft-danger" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i> Add Category</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom-dashed border-bottom">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xl-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search"
                                                    placeholder="Search for customer, email, phone, status or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xl-6">
                                            <div class="row g-3">
                                                <div class="col-sm-4">
                                                    <div class="">
                                                        <input type="text" class="form-control" id="datepicker-range"
                                                            data-provider="flatpickr" data-date-format="d M, Y"
                                                            data-range-date="true" placeholder="Select date">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-sm-4">
                                                    <div>
                                                        <select class="form-control" data-plugin="choices" data-choices
                                                            data-choices-search-false name="choices-single-default"
                                                            id="idStatus">
                                                            <option value="">Status</option>
                                                            <option value="all" selected>All</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Block">Block</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-sm-4">
                                                    <div>
                                                        <button type="button" class="btn btn-primary w-100"
                                                            onclick="SearchData();"> <i
                                                                class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th class="sort" data-sort="Id">S.No</th>
                                                    <th class="sort" data-sort="Category">Category</th>
                                                    <th class="sort" data-sort="Date">Date</th>
                                                    <th class="sort" data-sort="status">Status</th>
                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all" id="tbody">

                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                    colors="primary:#121331,secondary:#08a88a"
                                                    style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ customer We did not
                                                    find any customer for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="#">
                                                Next
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light p-3">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="close-modal"></button>
                                            </div>
                                            <form id="category-form">
                                                <div class="modal-body">
                                                    {{-- <input type="hidden" id="id-field" /> --}}
                                                    <div class="mb-3">
                                                        <label for="customername-field" class="form-label">Category
                                                        </label>
                                                        <input type="text" name="categoryinput" class="form-control"
                                                            id="category-name" placeholder="Add Category">
                                                    </div>
                                                    <div>
                                                        <label for="status-field" class="form-label">Status</label>
                                                        <select class="form-control" name="status" data-choices
                                                            data-choices-search-false name="status-field"
                                                            id="status-field">
                                                            <option value="" selected disabled>Status</option>
                                                            <option value="0">Active</option>
                                                            <option value="1">Block</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" id="add-btn">Add
                                                            Customer</button>
                                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" id="deleteRecord-close"
                                                    data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mt-2 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                                        colors="primary:#f7b84b,secondary:#f06548"
                                                        style="width:100px;height:100px"></lord-icon>
                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                        <h4>Are you sure ?</h4>
                                                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove
                                                            this record ?</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                    <button type="button" class="btn w-sm btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn w-sm btn-danger"
                                                        id="delete-record">Yes, Delete It!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end modal -->
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
    <!-- end main content-->
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
                                $('#tbody').empty();

                                $('#showModal').modal('hide');
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
                            let statusText = response.data[i]['Status'] === 0 ? 'Active' : 'Inactive';
                            let badgeClass = response.data[i]['Status'] === 0 ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger';
                            let createdAt = new Date(response.data[i]['created_at']);
                    let formattedDate = createdAt.toLocaleString('en-US', {
                        year: 'numeric',
                        month: '2-digit',
                        day: '2-digit',
                        hour: '2-digit',
                        minute: '2-digit',
                        hour12: true
                    });

                            $('#tbody').append(`
                                <tr>
                                     <td>` + (i + 1) + `</td>
                                    <td>` + response.data[i]['Category'] + `</td>
                                    <td>` + formattedDate + `</td>
                                    <td>  <span class="badge ` + badgeClass + ` text-uppercase">` + statusText + `</td>
                                    <td>
                               <ul class="list-inline hstack gap-2 mb-0">
                                   <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                       <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                        <i class="ri-pencil-fill fs-16"></i>
                                      </a>
                                   </li>
                                   <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                           <i class="ri-delete-bin-5-fill fs-16"></i>
                                      </a>
                                 </li>
                             </ul>
                          </td>
                                </tr>
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
    </script>
@endpush
