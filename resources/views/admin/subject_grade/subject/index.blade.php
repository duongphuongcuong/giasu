@extends('admin.layout')

@section('title')
  <title>Môn học</title>
@endsection

@section('css')

@endsection

@section('content')
  <main id="main" class="main">
     @include('admin.components.header_content',['name'=> 'Môn học', 'key' => 'Liệt kê'])

    <section class="section dashboard">
      <a href="{{route('subject.create')}}" class="btn btn-primary">Thêm môn học</a>
      
      <div class="row" style="margin-top: 10px;">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Top Selling -->
            <div class="col-10">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                  

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên môn</th>
                        <th scope="col">Chỉnh sửa</th>
                        <th scope="col">Xoá</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($subjects as $sub)
                      <tr>
                        <td>{{$sub->id}}</td>
                        <td>{{$sub->ten_mon_hoc}}</td>
                        
                        <td><a href="{{route('subject.edit',['id'=>$sub->id])}}"><i class="ri-edit-fill"></i></a></td>
                        <td><a onclick="return confirm('Bạn có chắc muốn xoá môn {{$sub->ten_mon_hoc}}?');" style="color: red;" href="{{route('subject.delete',['id'=>$sub->id])}}"><i class="ri-delete-bin-5-line"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div>

          </div>
        </div>
        <div class="col-md-12">
          
        </div>
       
        
      </div>
    </section>

  </main>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script type="text/javascript">
  
</script>
@endsection
