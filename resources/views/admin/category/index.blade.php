@extends('admin.layout')

@section('title')
  <title>Category - Rabook</title>
@endsection

@section('css')

@endsection

@section('content')
  <main id="main" class="main">
     @include('admin.components.header_content',['name'=> 'Category', 'key' => 'List'])

    <section class="section dashboard">
      <a href="{{route('category.create')}}" class="btn btn-primary">Create Category</a>
      <?php 
        if(!empty($mess = session()->get('message'))){
      ?>
      <span style="color:blue">{{$mess}}</span>
      <?php 
        session()->put('message', null);
      } 
      ?>
      <div class="row" style="margin-top: 10px;">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                  

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <!-- <th scope="col">Preview</th> -->
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $cate)
                      <tr>
                        <!-- <th scope="row"><a href="#"><img src="{{asset('Admins/assets/img/product-1.jpg')}}" alt=""></a></th> -->
                        <td>{{$cate->id}}</td>
                        <td>{{$cate->name}}</td>
                        <td><a href="{{route('category.edit',['id'=>$cate->id])}}"><i class="ri-edit-fill"></i></a></td>
                        <td><a style="color: red;" href=""><i class="ri-delete-bin-5-line"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->
        <div class="col-md-12">
          {{$categories->links()}}
        </div>
        <!-- Right side columns -->
        
      </div>
    </section>

  </main>
@endsection
