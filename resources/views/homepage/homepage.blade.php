@extends('homepage.index')
@section('header')
    <title>mktjs Jual Gedget dan Komputer</title>

@endsection
@section('slide')
  @include('homepage.layout.slider')
@endsection
@section('contents')
<div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-12">
              <p class="text-muted lead text-center">Jual Komputer dan Gedget terlengkap.</p>
              <div class="products-big">
                <div class="row products">
                  @foreach($products as $product)
                  <div class="col-lg-3 col-md-4">
                    <div class="product">
                      <div class="image">
                        <a href="{{ url('product/detail/'.$product->slug) }}"><img src="{{ url($product->photo) }}" alt="" class="img-fluid image1"></a></div>
                      <div class="text">
                        <h3 class="h5"><a href="{{ url('product/detail/'.$product->slug) }}">
                          {{ $product->name }}
                        </a></h3>
                        <p class="price">Rp. {{ number_format($product->price) }}</p>
                      </div>
                    </div>
                  </div>

                  @endforeach
                </div>
              </div>
              <div class="pages">
                
              </div>
            </div>
          </div>
        </div>
  </div>

@endsection

@section('footer')

@endsection
@show