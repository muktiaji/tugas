@extends('admin.layout.master')
	@section('header')
		
	@endsection

	@section('body')
<section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Project Tugas Akhir E-Commerce</h3>
              <div class="col-12">
                <img src="{{ asset ('static/dist/img/wall.jpg') }}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{ asset ('static/dist/img/unikom.png') }}" alt="Product Image"></div>
                
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Project Tugas Akhir E-Commerce</h3>
              

              <hr>
              <h4>Muktiaji Sarjono (10516070)</h4>
              <h4>Fuadz Rinaldy (10516018)</h4>

              

            </div>
          </div>
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
	@endsection

	@section('footer')

	@endsection

@show