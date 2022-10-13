@extends('layouts.backend')

@section('content')
     <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Categories</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Categories</li> 
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- categories form start -->
                <div class="row justify-content-center">
                <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-4">
                                    <span>
                                    <h4 class="card-title">Categories List</h4> 
                                    </span>
                                    <a href="categories-add.php" class="btn btn-primary btn-sm">Add</a> 
                                </div>

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Parent Category</th>
                                            <th>Slug</th>
                                            <th>Action</th> 
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">01</td>
                                            <td valign="middle">
                                                <img src="./assets/images/logo-sm-dark.png" alt="Cate" class="img-fluid" width="50">
                                            </td>
                                            <td valign="middle">Fish</td>
                                            <td valign="middle">fish-curry</td>
                                            <td valign="middle">fish-curry-02</td>
                                            <td valign="middle">
                                                <a href="categories-edit.php" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- categories form end -->

            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Qovex.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>

            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>

            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                    data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                    data-appStyle="assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

@endsection