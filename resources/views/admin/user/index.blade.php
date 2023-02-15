@extends('admin.layout')

@section('title')
  <title>Nhân viên</title>
@endsection

@section('css')

@endsection

@section('content')
  <main id="main" class="main">
     @include('admin.components.header_content',['name'=> 'Nhân viên', 'key' => 'Liệt kê'])

    <section class="section dashboard">
      <a href="{{route('user.create')}}" class="btn btn-primary">Thêm</a>
      
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
                        <th scope="col">STT</th>
                        <th scope="col">Tên nhân viên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xoá</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $stt = 1; ?>
                      @foreach($users as $user)
                      <tr>
                        <td><?php echo $stt ?></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{route('user.edit',['id'=>$user->id])}}"><i class="ri-edit-fill"></i></a></td>
                        <td><a onclick="return confirm('Bạn có chắc muốn xoá?');" style="color: red;" href="{{route('user.delete',['id'=>$user->id])}}"><i class="ri-delete-bin-5-line"></i></a></td>
                      </tr>
                      <?php $stt++ ?>
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
