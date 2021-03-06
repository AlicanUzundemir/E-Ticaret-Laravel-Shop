@extends('frontend.layouts.master')
@section('title')
Products
@endsection
@section('content')

<!-- Start slider -->
<div id="mainBody">
  <div class="container">
    <div class="row">
      <!-- Sidebar ================================================== -->
      @include('frontend.layouts.partials.sidebar')
      <!-- Sidebar end=============================================== -->
      <div class="span9">
        <ul class="breadcrumb">
          <li><a href="{{route('homepage')}}">Home</a> <span class="divider">/</span></li>
          <li class="active">Products Name</li>
        </ul>
        <h3> Products Name <small class="pull-right"> 40 products are available </small></h3>
        <hr class="soft">
        <p>
          Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
        </p>
        <hr class="soft">
        <form class="form-horizontal span6">
          <div class="control-group">
            <label class="control-label alignL">Sort By </label>
            <select>
              <option>Priduct name A - Z</option>
              <option>Priduct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
          </div>
        </form>

        <div id="myTab" class="pull-right">
          <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
          <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
        </div>
        <br class="clr">
        <div class="tab-content">
          <div class="tab-pane" id="listView">
            <div class="row">
              <div class="span2">
                <img src="{{asset('front/themes/images/products/3.jpg')}}" alt="">
              </div>
              <div class="span4">
                <h3>New | Available</h3>
                <hr class="soft">
                <h5>Product Name </h5>
                <p>
                  Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                  that is why our goods are so popular..
                </p>
                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                <br class="clr">
              </div>
              <div class="span3 alignR">
                <form class="form-horizontal qtyFrm">
                  <h3> $140.00</h3>
                  <label class="checkbox">
                    <input type="checkbox"> Adds product to compair
                  </label><br>

                  <a href="{{route('productDetail')}}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                  <a href="{{route('productDetail')}}" class="btn btn-large"><i class="icon-zoom-in"></i></a>

                </form>
              </div>
            </div>
            <hr class="soft">
            <div class="row">
              <div class="span2">
                <img src="{{asset('front/themes/images/products/1.jpg')}}" alt="">
              </div>
              <div class="span4">
                <h3>New | Available</h3>
                <hr class="soft">
                <h5>Product Name </h5>
                <p>
                  Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                  that is why our goods are so popular..
                </p>
                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                <br class="clr">
              </div>
              <div class="span3 alignR">
                <form class="form-horizontal qtyFrm">
                  <h3> $140.00</h3>
                  <label class="checkbox">
                    <input type="checkbox"> Adds product to compair
                  </label><br>

                  <a href="{{route('productDetail')}}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                  <a href="{{route('productDetail')}}" class="btn btn-large"><i class="icon-zoom-in"></i></a>

                </form>
              </div>
            </div>
            <hr class="soft">
            <div class="row">
              <div class="span2">
                <img src="{{asset('front/themes/images/products/3.jpg')}}" alt="">
              </div>
              <div class="span4">
                <h3>New | Available</h3>
                <hr class="soft">
                <h5>Product Name </h5>
                <p>
                  Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                  that is why our goods are so popular..
                </p>
                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                <br class="clr">
              </div>
              <div class="span3 alignR">
                <form class="form-horizontal qtyFrm">
                  <h3> $140.00</h3>
                  <label class="checkbox">
                    <input type="checkbox"> Adds product to compair
                  </label><br>

                  <a href="{{route('productDetail')}}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                  <a href="{{route('productDetail')}}" class="btn btn-large"><i class="icon-zoom-in"></i></a>

                </form>
              </div>
            </div>
            <hr class="soft">
            <div class="row">
              <div class="span2">
                <img src="{{asset('front/themes/images/products/3.jpg')}}" alt="">
              </div>
              <div class="span4">
                <h3>New | Available</h3>
                <hr class="soft">
                <h5>Product Name </h5>
                <p>
                  Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                  that is why our goods are so popular..
                </p>
                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                <br class="clr">
              </div>
              <div class="span3 alignR">
                <form class="form-horizontal qtyFrm">
                  <h3> $140.00</h3>
                  <label class="checkbox">
                    <input type="checkbox"> Adds product to compair
                  </label><br>

                  <a href="{{route('productDetail')}}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                  <a href="{{route('productDetail')}}" class="btn btn-large"><i class="icon-zoom-in"></i></a>

                </form>
              </div>
            </div>

            <hr class="soft">
            <div class="row">
              <div class="span2">
                <img src="{{asset('front/themes/images/products/3.jpg')}}" alt="">
              </div>
              <div class="span4">
                <h3>New | Available</h3>
                <hr class="soft">
                <h5>Product Name </h5>
                <p>
                  Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                  that is why our goods are so popular..
                </p>
                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                <br class="clr">
              </div>
              <div class="span3 alignR">
                <form class="form-horizontal qtyFrm">
                  <h3> $140.00</h3>
                  <label class="checkbox">
                    <input type="checkbox"> Adds product to compair
                  </label><br>
                  <a href="{{route('productDetail')}}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                  <a href="{{route('productDetail')}}" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                </form>
              </div>
            </div>
            <hr class="soft">
            <div class="row">
              <div class="span2">
                <img src="{{asset('front/themes/images/products/3.jpg')}}" alt="">
              </div>
              <div class="span4">
                <h3>New | Available</h3>
                <hr class="soft">
                <h5>Product Name </h5>
                <p>
                  Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                  that is why our goods are so popular..
                </p>
                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                <br class="clr">
              </div>
              <div class="span3 alignR">
                <form class="form-horizontal qtyFrm">
                  <h3> $140.00</h3>
                  <label class="checkbox">
                    <input type="checkbox"> Adds product to compair
                  </label><br>

                  <a href="{{route('productDetail')}}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                  <a href="{{route('productDetail')}}" class="btn btn-large"><i class="icon-zoom-in"></i></a>

                </form>
              </div>
            </div>
            <hr class="soft">
          </div>

          <div class="tab-pane  active">
            <ul class="thumbnails">
              @foreach($products as $product)
              <li>
                <div class="thumbnail">
                  <a href="{{route('product-detail',$product->slug)}}"><img src="{{asset('front/themes/images/products/2.jpg')}}" alt=""></a>
                  <div class="caption">
                    <h5>{{$product->name}}</h5>
                    <p>
                      {{$product->description}}
                    </p>
                    <h4 style="text-align:center"><a class="btn" href="#"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{$product->price}}</a></h4>
                  </div>
                </div>
                @if($product->remain===0)
                <span class="aa-badge aa-sold-out">Sold Out!</span>
                @endif
              </li>
              @endforeach
              
            </ul>
            <hr class="soft">
          </div>
        </div>

        <a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
        <div class="pagination">
          {{$products->appends(['search'=>old('search')])->links()}}
          
        </div>
        <br class="clr">
      </div>
    </div>
  </div>
</div>
@endsection