<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

   @include('admin.css')

   <style type="text/css">

   .div_center{

    text-align: center;
    padding-top: 40px;
   }
   .h1_font{

    font-size: 40px;
    padding-bottom: 40px;
   }
   .text_color{
    color: black;
    padding-bottom:
   }
   label{
    display: inline-block;
    width: 200px;
   }
   .div_design{
    padding-bottom: 15px;
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
                    <h1 class="h1_font">Update product</h1>

                    <form action="{{url('update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf

                    <div class="div_design">
                    <label for="">product title :</label>
                    <input class="text_color" type="text" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
                    </div>

                    <div class="div_design">
                    <label for="">product description :</label>
                    <input class="text_color" type="text" name="description" placeholder="Write a description" required="" value="{{$product->description}}">
                    </div>

                    <div class="div_design">
                    <label for="">product price :</label>
                    <input class="text_color" type="number" name="price" placeholder="Write a price" required="" value="{{$product->price}}">
                    </div>

                    <div class="div_design">
                     <label for="">Discount Price :</label>
                     <input class="text_color" type="number" name="dis_price" placeholder="Write a discount " value="{{$product->discount_price}}">
                     </div>

                    <div class="div_design">
                    <label for="">product quantity :</label>
                    <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="" value="{{$product->quantity}}">
                    </div>

                    <div class="div_design">
                    <label for="">product category :</label>
                    <select class="text_color" name="category" id="" required="">
                    <option value="{{$product->category}}" selected="">{{$product->category}}</option>

                    @foreach ($category as $category )

                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                    @endforeach

                    </select>
                    </div>

                    <div class="div_design">
                        <label for="">Change Product Image :</label>
                        <img style="margin:auto;" src="{{asset("storage/$product->image")}}" width="100" height="100" alt="">
                        </div>

                    <div class="div_design">
                    <label for="">Change Product Image :</label>
                    <input  type="file" name="image">
                    </div>

                    <div class="div_design">
                    <input type="submit" value="Update Product" class="btn btn-primary">
                    </div>

                    </form>

                </div>

            </div>

        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
</body>
</html>


