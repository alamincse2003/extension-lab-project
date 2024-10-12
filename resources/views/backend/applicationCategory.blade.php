@extends('backend.layouts.layout')

@section('css')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/vendors/css/charts/apexcharts.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/vendors/css/extensions/dragula.min.css') }}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/dark-layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/semi-dark-layout.css') }}">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/css/pages/dashboard-analytics.css') }}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
<!-- END: Custom CSS-->
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Others Section</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="bx bx-home-alt"></i></a>
                        </li>

                        <li class="breadcrumb-item active">Application Category Section
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">

    {{-- Validation Error Message --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success: </strong>{{ Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <form
                            action="@if ($applicationCategory) {{ route('application-category', $applicationCategory->id) }} @else {{ route('application-category') }} @endif"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-12">
                                        <fieldset>
                                            <h5>Name <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    aria-describedby="basic-Createon1" name="name"
                                                    value="@if ($applicationCategory) {{ old('name', $applicationCategory->name) }} @endif">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-lg-12">
                                        <fieldset class="mt-2">
                                            <h5>Description</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <textarea class="form-control" id="description" rows="3"
                                                    name="description">
@if ($applicationCategory) {{ old('description', $applicationCategory->description) }} @endif
</textarea>
                                        </fieldset>

                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Image <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-file"></i></span>
                                                </div>
                                                <input type="file" class="form-control"
                                                    aria-describedby="basic-Createon1" name="image"
                                                    value="@if ($applicationCategory) {{ old('image', $applicationCategory->image) }} @endif"
                                                    onchange="loadFile(event)">
                                            </div>
                                        </fieldset>
                                        @if ($applicationCategory)
                                        @if ($applicationCategory->image != null)
                                        <img src="{{ asset('images/applicationCategory/' . $applicationCategory->image) }}"
                                            id="bg" alt="bg" width="200px" height="200px" class="mt-2 mx-1">
                                        @endif
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Status <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-file"></i></span>
                                                </div>
                                                <select name="status" id="" class="form-control">
                                                    <option @if ($applicationCategory) @if ($applicationCategory->status
                                                        == 'Active')
                                                        selected @endif
                                                        @endif value="Active">Active</option>
                                                    <option @if ($applicationCategory) @if ($applicationCategory->status
                                                        == 'Inactive')
                                                        selected @endif
                                                        @endif value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>

                                </div>

                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-primary mt-2 btn-lg">
                                        @if ($applicationCategory->id)
                                        Update
                                        @else
                                        Create
                                        @endif
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Application Category List</h5>

                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($applicationCategory)
                                        @foreach ($applicationCategories as $applicationCategory)
                                        <tr>
                                            <td><a
                                                    href="{{ route('application-category', $applicationCategory->id) }}">{{ $applicationCategory->name }}</a>
                                            </td>
                                            <td>{!! Str::words( $applicationCategory->description,20)!!}</td>
                                            <td class="text-bold-600"><img
                                                    src="{{ asset('images/applicationCategory/' . $applicationCategory->image) }}"
                                                    alt="" height="150px"></td>
                                            <td>{{ $applicationCategory->status }}</td>
                                        </tr>
                                        @endforeach
                                        @else
                                        {{ 'No Data Found' }}
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->

</div>

<script>
    var loadBg = function (event) {
        var output = document.getElementById('bg');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.height = '400';
    }

</script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });

</script>
@endsection


@section('js')
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin_template/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/extensions/dragula.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('admin_template/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/components.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/footer.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_template/app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
<!-- END: Page JS-->
@endsection
