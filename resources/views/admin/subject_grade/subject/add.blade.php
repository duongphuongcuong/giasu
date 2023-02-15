@extends('admin.layout')

@section('title')
  <title>Thêm môn học</title>
@endsection

@section('css')
<style type="text/css">
  .btn-submit{
    margin-top: 15px;
  }
  .col-form-label{
    font-weight: bold;
  }
</style>
@endsection

@section('content')
  <main id="main" class="main">
     @include('admin.components.header_content',['name'=> 'Môn học', 'key' => 'Thêm'])

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                <form action="{{route('subject.store')}}" method="post">
                  @csrf
                  <div class="form-group">
                    <label class="col-form-label">Tên môn học</label>
                    <input type="text" name="name"  class="form-control" required placeholder="Nhập tên môn học" 
                    oninvalid="this.setCustomValidity('Vui lòng nhập tên môn học!')" oninput="this.setCustomValidity('')">
                  </div>
                  
                  <button type="submit" class="btn btn-primary btn-submit">Thêm</button>
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
