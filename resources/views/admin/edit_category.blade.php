<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .div_deg {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 60px;
        }

        input[type="text"] {
            width: 400px;
            height: 50px;
        }
    </style>


</head>

<body>

    {{-- Header Section  --}}

    @include('admin.header')


    {{-- Sidebar Section --}}

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="color:white">Update Cateogry</h1>

                <div class="div_deg">
                    <form action="{{ url('update_category', $data->id) }}" method="POST">
                        @csrf
                        <input type="text" name="category" value="{{ $data->category_name }}">
                        <input class= "btn btn-primary"type="submit" value="Update Category">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
