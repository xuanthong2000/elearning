@extends('/manage/indexn')
@section('content')
<form method="post" action="/admin/QLKH/themkhoahoc/store">
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
                <input type="text" id="inputName" class="form-control" name="name" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Tên Chủ Đề</label>
                <select name="category"  class="form-control">
                @foreach($category as $item)
                <option value="{{$item->id}}"> {{$item->name}} </option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô tả</label>
                <textarea id="inputDescription" class="form-control"  name="description" value= "" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Ảnh</label>
                <input type="file" id="inputImage" class="form-control" name="image" value="" multiple>
              </div>
              <div class="form-group">
                <label for="inputStatus">Trạng Thái</label>
                <input type="text" id="inputStatus" class="form-control" name="status" value="">
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
          <button type="submit"  class="btn btn-success ">Thêm Khóa học</button>
        </div>
      </div>
    </section>
</form>


@endsection