@extends('admin.layout')

@section('title')
  <title>Thêm lớp học</title>
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
     @include('admin.components.header_content',['name'=> 'Lớp học', 'key' => 'Thêm'])

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-10">
          <div class="row">
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                <form action="{{route('grade.store')}}" method="post">
                  @csrf
                  <div class="form-group">
                    <label class="col-form-label">Lớp </label>
                    <input type="text" name="name"  class="form-control" required placeholder="Nhập lớp học" 
                    oninvalid="this.setCustomValidity('Vui lòng nhập lớp học!')" oninput="this.setCustomValidity('')">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Chọn lớp học tương ứng </label>
                    <!-- <input type="text" name="name"  class="form-control" required placeholder="Nhập lớp học" 
                    oninvalid="this.setCustomValidity('Vui lòng nhập lớp học!')" oninput="this.setCustomValidity('')"> -->
                    <div class="row">
                      @foreach($subjects as $subject)
                      <div class="col-3">
                        <input value="{{$subject->id}}" name="subject[]" type="checkbox"> {{$subject->ten_mon_hoc}}
                      </div>
                      @endforeach
                    </div>
                   
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
