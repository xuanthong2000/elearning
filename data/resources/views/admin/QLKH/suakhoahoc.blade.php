@extends('/manage/indexn')
@section('content')
<form method="post" action="admin/QLKH/suakhoahoc/{{ $course->id }}">
@csrf
<section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Khóa Học</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên khóa học</label>
                <input type="text" id="inputName" class="form-control" name="name" value="{{ $course->name }}">
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô tả</label>
                <textarea id="inputDescription" class="form-control"  name="description" value= "{{$course->description}}" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Ảnh</label>
                <input type="file" id="inputImage" class="form-control" name="image" value="{{$course->image}}" multiple>
              </div>
              <div class="form-group">
                <label for="inputStatus">Trạng Thái</label>
                <input type="text" id="inputStatus" class="form-control" name="status" value="{{$course->status}}">
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <a href="/admin/QLKH/quanlykhoahoc" class="btn btn-secondary">Hủy</a>
          <button type="submit"  class="btn btn-success ">lưu</button>
        </div>
      </div>
    </section>
</form>


@endsection