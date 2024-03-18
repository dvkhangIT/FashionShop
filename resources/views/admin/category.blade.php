<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <div class="main-panel">
                <div class="content-wrapper">
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show"
                            role="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close">X</button>
                        </div>
                    @endif
                    <div class="text-center mt-10">
                        <h2 class="font-size">Add category</h2>
                        <form action="{{ url('/add_category') }}" method="post">
                            @csrf
                            <input type="text" name="category" class="input-color"
                                placeholder="Write category name">
                            <button type="submit" name="add_category"
                                class="btn btn-primary">Add
                                category</button>
                        </form>
                    </div>
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
        </div>
    </div>
    @include('admin.script')
</body>

</html>
