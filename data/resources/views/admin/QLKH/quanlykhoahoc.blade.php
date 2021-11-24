@extends('/manage/indexn')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Khóa học</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">khóa học</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Khóa học</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                        STT
                      </th>
                      <th style="width: 20%">
                        Tên khóa học
                      </th>
                      <th style="width: 30%">
                        Ảnh
                      </th>
                      <th>
                        Mô tả
                      </th>
                      <th style="width: 8%" class="text-center">
                        Trạng Thái
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @if(isset($course))
                  @foreach($course as $key=>$row)
                  <tr>
                      <td>
                         {{$key+1}}
                      </td>
                      <td>
                          {{$row->name}}
                      </td>
                      <td>
                         {{$row->image}}
                      </td>
                      <td class="project_progress">
                         
                          {{$row->description}}
                      </td>
                      <td class="project-state">
                      {{$row->status}}
                      </td>
                      <td class="project-actions text-right">
                          
                      <a class="btn btn-info btn-sm" href="/admin/QLKH/suakhoahoc/edit/{{$row->id}}">Edit</a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  
                  
                  </tr>
                  
                  @endforeach
                  @endif
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

@endsection