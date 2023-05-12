<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

   @include('admin.css')

   <style type="text/css">

   label{
    display:inline-block;
    width: 200px;
    font-size: 20px;
    font-weight: bold;
    color: rgb(30, 238, 238);
   }
   .h1_font{
    text-align: center;
    color:yellow;
    font-size: 30px;
   }
   .span{
        color: yellow;
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



                    <h1 class="h1_font">Send Email To {{$order->email}}</h1>

                    <form action="{{url('send_user_email',$order->id)}}" method="POST">
                        @csrf

                        <div style="padding-left:35%; padding-top:30px">
                            <label for="">Email Greeting <span class="span">:</span></label>
                            <input style="color: black;" type="text" name="greeting">
                        </div>

                        <div style="padding-left:35%; padding-top:30px">
                            <label for="">Email Firstline <span class="span">:</span></label>
                            <input style="color: black;" type="text" name="firstline">
                        </div>

                        <div style="padding-left:35%; padding-top:30px">
                            <label for="">Email body <span class="span">:</span></label>
                            <input style="color: black;" type="text" name="body">
                        </div>

                        <div style="padding-left:35%; padding-top:30px">
                            <label for="">Email Button Name <span class="span">:</span></label>
                            <input style="color: black;" type="text" name="button">
                        </div>

                        <div style="padding-left:35%; padding-top:30px">
                            <label for="">Email url <span class="span">:</span></label>
                            <input style="color: black;" type="text" name="url">
                        </div>

                        <div style="padding-left:35%; padding-top:30px">
                            <label for="">Email Last Line <span class="span">:</span></label>
                            <input style="color: black;" type="text" name="lastline">
                        </div>

                        <div style="padding-left:35%; padding-top:30px" >

                            <input type="submit" value="Send Email" class="btn btn-primary">
                        </div>

                    </form>

                </div>



            </div>

        </div>
    </div>
        <!-- container-scroller -->
        <!-- plugins:js -->

        @include('admin.script')
</body>

</html>

