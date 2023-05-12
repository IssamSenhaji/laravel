<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.css')

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h1_font {
            font-size: 45px;
            color: aqua;
            padding-bottom: 40px;
        }

        .input_color {
            color: black;
            width: 250px;
        }

        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid  yellow ;
        }

        table,
        th,
        td {

            border: 1px solid yellow;
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

                    <div class="div_center">


                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            </div>
                        @endif

                        <h1 class="h1_font">Add category</h1>

                        <form action="{{ url('add_category') }}" method="POST">

                            @csrf
                            <input type="text" class="input_color" name="category" placeholder="Write category name">
                            <input type="submit" name="submit" class="btn btn-primary" value="add category">
                        </form>

                    </div>

                    <table class="center">

                        <tr class="tr">
                            <td>Category Name</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->category_name }}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger"
                                        href="{{ url('delete_category', $data->id) }}">Delete</a>
                                    <a class="btn btn-success" href="{{ url('update_category', $data->id) }}">Update</a>
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
