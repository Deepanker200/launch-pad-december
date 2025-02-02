<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style>
        .detail-box {
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section starts -->

        @include('home.header')
        <!-- end header section -->


    </div>

    <!--Product Details Starts-->


    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest Products
                </h2>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="box">
                        <div class="d-flex justify-content-center align-items-center p-4">
                            <img src="/products/{{ $data->image }}" alt="" width="400">
                        </div>
                        <div class="detail-box">
                            <h6>{{ $data->title }}</h6>
                            <h6>
                                Price
                                <span>
                                    {{ $data->price }}
                                </span>
                            </h6>
                        </div>

                        <div class="detail-box">
                            <h6>Category{{ $data->category }}</h6>
                            <h6>
                                Available Quantity
                                <span>
                                    {{ $data->quantity }}
                                </span>
                            </h6>
                        </div>


                        <div class="detail-box">

                            <p>
                                {{ $data->description }}
                            </p>
                        </div>

                        <div>
                            <a class="btn btn-primary" href="{{ url('add_cart', $data->id) }}">Add to cart</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>




    <!--Product Details End Here-->





    <!-- info section -->

    @include('home.footer')


</body>

</html>
