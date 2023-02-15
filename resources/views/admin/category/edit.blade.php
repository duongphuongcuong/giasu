@extends('admin.layout')

@section('title')
  <title>{{$category->name}} - Rabook</title>
@endsection

@section('css')
<style type="text/css">
  .btn-submit{
    margin-top: 15px;
  }
</style>
@endsection

@section('content')
  <main id="main" class="main">
     @include('admin.components.header_content',['name'=> 'Category', 'key' => 'Edit'])

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                <form action="{{route('category.update',['id'=>$category->id])}}" method="post">
                  @csrf
                  <div class="form-group">
                    <label class="col-form-label">Category name</label>
                    <input type="text" value="{{$category->name}}" name="name" class="form-control" required ="" placeholder="Enter category name...">
                  </div>
                  <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                </form>
                </div>

              </div>
            </div>

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        
      </div>
    </section>

  </main>
@endsection
