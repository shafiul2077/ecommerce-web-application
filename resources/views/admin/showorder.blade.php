
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
   
      <!-- partial -->

      @include('admin.sidebar')

      @include('admin.navbar')

      
    
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">

            <table>
                <tr Style="background-color: black">
                    <td Style="padding:20px; color:red;">Customer name</td>
                    <td Style="padding:20px; color:red;">Phone</td>
                    <td Style="padding:20px; color:red;">Address</td>
                    <td Style="padding:20px; color:red;">Product title</td>
                    <td Style="padding:20px; color:red;">Price</td>
                    <td Style="padding:20px; color:red;">Quantity</td>
                    <td Style="padding:20px; color:red;">Status</td>
                    <td Style="padding:20px; color:red;">Action</td>
                </tr>

                @foreach($order as $orders)

                <tr align="center" background-color:black;>
                    <td style="padding:10px; color:blue;">{{$orders->name}}</td>
                    <td style="padding:10px; color:blue;">{{$orders->phone}}</td>
                    <td style="padding:10px; color:blue;">{{$orders->address}}</td>
                    <td style="padding:10px; color:blue;">{{$orders->product_name}}</td>
                    <td style="padding:10px; color:blue;">{{$orders->price}}</td>
                    <td style="padding:10px; color:blue;">{{$orders->quantity}}</td>
                    <td style="padding:10px; color:blue;">{{$orders->status}}</td>
                    <td style="padding:10px; color:blue;"><a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Delivered</a></td>
                </tr>
                @endforeach
            </table>

            </div>
            </div>
      
          <!-- partial -->
        @include('admin.script')
  </body>
</html>