@extends('admin.layout')

@section('title')
  <title>Nhân viên - Cập nhật</title>
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
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
  <main id="main" class="main">
     @include('admin.components.header_content',['name'=> 'Nhân viên', 'key' => 'Cập nhật'])

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                <form action="{{route('user.update',['id'=>$user->id])}}" method="post">
                  @csrf
                  
                  <div class="form-group">
                    <label class="col-form-label">Tên nhân viên <span style="color:red;">*</span></label>
                    <input value="{{$user->name}}" type="text" name="name"  class="form-control" required placeholder="Nhập tên nhân viên" 
                    oninvalid="this.setCustomValidity('Vui lòng nhập tên nhân viên!')" oninput="this.setCustomValidity('')">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Email <span style="color:red;">*</span></label>
                    <input value="{{$user->email}}" type="text" name="email"  class="form-control" required placeholder="Nhập email" 
                    oninvalid="this.setCustomValidity('Vui lòng nhập email!')" oninput="this.setCustomValidity('')">
                  </div>
                  
                  
                  <div class="form-group">
                    <label class="col-form-label">Chọn vai trò</label>
                     <select class="form-control select2_init" name="role_id[]" multiple>
                          <option value=""></option>
                          @foreach($roles as $role)
                          <option {{ $rolesOfUser->contains('id', $role->id) ? 'selected' : ''}} value="{{$role->id}}">{{$role->name}}</option>
                          @endforeach
                      </select>
                  </div>

                  <button type="submit" class="btn btn-primary btn-submit">Cập nhật</button>
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
@section('js')
<script type="text/javascript">
  $(function(){
          $('.select2_init').select2({
          'placeholder' : 'Chọn vai trò'
    })
  });
</script>
<script src="{{asset('vendors/select2/select2.min.js')}}"></script>
@endsection
