@extends('admin.layout')

@section('title')
  <title>Lớp học</title>
@endsection

@section('css')

@endsection

@section('content')
  <main id="main" class="main">
     @include('admin.components.header_content',['name'=> 'Lớp học', 'key' => 'Liệt kê'])

    <section class="section dashboard">
      <a href="{{route('grade.create')}}" class="btn btn-primary">Thêm</a>
      
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
                        <th scope="col">STT</th>
                        <th scope="col">Lớp</th>
                        <th scope="col">Các môn</th>
                        <th scope="col">Chỉnh sửa</th>
                        <th scope="col">Xoá</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $stt = 1;?>
                      @foreach($grades as $grade)
                      <tr>
                        <td><?php echo $stt; ?></td>
                        <td>{{$grade->ten_khoi_lop}}</td>
                        <td></td>
                        <td><a href="{{route('grade.edit',['id'=>$grade->id])}}"><i class="ri-edit-fill"></i></a></td>
                        <td><a onclick="return confirm('Bạn có chắc muốn xoá môn {{$grade->ten_khoi_lop}}?');" style="color: red;" href="{{route('grade.delete',['id'=>$grade->id])}}"><i class="ri-delete-bin-5-line"></i></a></td>
                      </tr>
                      <?php $stt++; ?>
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
