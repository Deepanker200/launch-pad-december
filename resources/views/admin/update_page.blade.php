<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style>
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        label {
            display: inline-block;
            width: 200px;
            padding: 20px;
        }

        input[type="text"] {
            width: 300px;
            height: 60px;
        }

        textarea {
            width: 400px;
            height: 100px;
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

                <h2>Update Product</h2>
                <div class="div_deg">
                    <form action="{{ url('edit_product', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $data->title }}">
                        </div>

                        <div>
                            <label>Description</label>
                            <textarea name="description">
                                {{ $data->description }}
                            </textarea>
                        </div>

                        <div>
                            <label>Price</label>
                            <input type="text" name="price" value="{{ $data->price }}">
                        </div>


                        <div>
                            <label>Quantity</label>
                            <input type="number" name="quantity" value="{{ $data->quantity }}">
                        </div>

                        <div>
                            <label>Category</label>

                            <select name="category">
                                <option value="{{ $data->category }}">
                                    {{ $data->category }}
                                </option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->category_name }}">{{ $category->category_name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div>
                            <label>Current Image</label>
                            <img src="/products/{{ $data->image }}" width="150">
                        </div>

                        <div>
                            <label>New Image</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit" value="Update Product">
                        </div>
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
