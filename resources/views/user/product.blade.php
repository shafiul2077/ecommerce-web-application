
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class=" ">Latest Products</h2>
              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">

              @csrf 

              
              </form>
            </div>
          </div>
          
         @foreach($data as $product)
          <div class="col-md-4">
            <div class="card">
              <a class="card-img-top" href="#"><img height="187" width="200" src="{{ asset('app/'.$product->image)}}" alt=""></a>
              <div class="card-body ">
                <h4 class="card-title">{{$product->title}}</h4>
                <h6 class="card-subtitle mb-2 text-muted">{{$product->price}} TAKA</h6>
                <p class="card-text">{{$product->description}}</p>
                
                <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf

                  <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">

                  <br>


                  <input class="btn btn-primary" type="submit" value="Add Cart">
                </form>

              </div>
            </div>
          </div>
          @endforeach

          @if(method_exists($data,'links'))

          <div class="d-flex justify-content-center">

          {!! $data->links() !!}

          </div>
          @endif



        </div>
      </div>
    </div>