@extends('admin.layout')

@section('title')
  <title>Role - Edit</title>
@endsection

@section('css')
<style type="text/css">
  .btn-submit{
    margin-top: 15px;
  }
  .col-form-label{
    font-weight: bold;
  }
  #card-title-font-fml{
    text-transform: uppercase;font-family:  'Times New Roman', Times, serif;
  }
  #label-card-fml{
    font-family:  'Times New Roman', Times, serif;
    font-size: 20px;
  }
  #lable-check_all{
    color: #012970;
    font-size: 16px;
    font-family:  'Times New Roman', Times, serif;
    text-transform: uppercase;
    font-weight: bold;
  }
  .div-checkall{
    margin-bottom: 10px;
  }
  
</style>
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
  <main id="main" class="main">
     @include('admin.components.header_content',['name'=> 'Vai trò', 'key' => 'Chỉnh sửa'])

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <form action="{{route('role.update',['id'=>$role->id])}}" method="post" style="width: 100%;">
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                <!-- <form action="{{route('role.store')}}" method="post"> -->
                  @csrf
                  <div class="form-group">
                    <label class="col-form-label">Tên nhóm / vai trò <span style="color:red;">*</span></label>
                    <input type="text" value="{{$role->name}}"  maxlength="50" name="name"  class="form-control" required placeholder="Nhập tên vai trò" 
                    oninvalid="this.setCustomValidity('Vui lòng nhập tên nhóm / vai trò!')" oninput="this.setCustomValidity('')">
                  </div>
                  <div class="form-group" style="margin-bottom: 20px;">
                    <label class="col-form-label">Mô tả</label>
                    <input type="text" value="{{$role->display_name}}" name="display_name"  class="form-control" required placeholder="Nhập mô tả vai trò" >
                  </div>
                  <div class="form-group" style="margin-bottom: 10px;">
                    <label class="col-form-label">
                      Thiết lập quyền cho vài trò (nhóm)
                    </label>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 div-checkall">
                          <label id="lable-check_all">
                              <input type="checkbox" class="check_all"> Chọn tất cả
                          </label>
                      </div>
                      @foreach($permissionParent as $permissionParrentItem)
                      <div class="card border-primary mb-3 col-12 checkbox_parent_card" style="background-color: #a5c3ed;">
                        <div class="card-title card-module-parent" style="font-size: 16px;">
                          <label class="col-form-label" id="card-title-font-fml">
                            <input type="checkbox" class="checkbox_parent" value="" name="">
                            Module {{$permissionParrentItem->name}}
                          </label>
                        </div>

                        <div class="row" style="background-color: #fff;">
                          @foreach($permissionParrentItem->permissionsChildrent as $pmsChildrent)
                          <div class="card-body text-primary col-3">
                            <p class="card-title">
                              <label id="label-card-fml">
                                <input type="checkbox" 
                                class="checkbox_childrent" 
                                {{$permissionChecked->contains('id',$pmsChildrent->id) ? 'checked' : ''}} 
                                value="{{$pmsChildrent->id}}" 
                                name="permission_id[]">
                                {{$pmsChildrent->name}}
                              </label>
                            </p>
                          </div>
                          @endforeach
                        </div>

                      </div>
                      @endforeach

                    </div>
                    
                  </div>
                  

                  <button type="submit" class="btn btn-primary btn-submit">Cập nhật</button>
                
                </div>

              </div>
            </div>
          </form>

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        
      </div>
    </section>

  </main>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('Admins/role/add.js')}}"></script>
<script type="text/javascript">
  $(function(){
          $('.select2_init').select2({
          'placeholder' : 'Chọn vai trò'
    })
  });
</script>
<script src="{{asset('vendors/select2/select2.min.js')}}"></script>
@endsection
