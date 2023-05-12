<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.css')

    <style type="text/css">
        .center {
            margin: auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
            color: aqua;
        }

        .img_size {
            width: 150px;
            height: 150px;
        }

        .th_size {
            background-color: rgb(26, 199, 78);
        }

        .th_deg {
            padding: 30px;
        }

        table,
        th,
        td {

            border: 1px solid white;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        @include('admin.header')
        <!-- partial -->

        <div class="main-panel">

            <div class="content-wrapper">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    </div>
                @endif

                <h1 class="font_size">All product</h1>

                <table class="center">


                    <tr class="th_size">
                        <th class="th_deg">product title</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Category</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Discount</th>
                        <th class="th_deg">Quantity</th>
                        <th class="th_deg">Product image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Edit</th>
                    </tr>

                    @foreach ($product as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount_price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <img src="{{ asset("storage/$product->image") }}" alt="" class="img_size">
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{ url('delete_product', $product->id) }}"
                                    onclick="return confirm('Are you sure to delete this')">Delete</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ url('update_product', $product->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                </table>

            </div>

        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->

        @include('admin.script')
</body>

</html>
