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
              <li class="breadcrumb-item active">Khách Hàng</li>
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
                        Tên Khách Hàng
                      </th>
                      <th style="width: 30%">
                       Email
                      </th>
                      <th>
                       SDT
                      </th>
                      
                      
                  </tr>
              </thead>
              <tbody>
                @if(isset($users))
                  @foreach($users as $key=>$row)
                  <tr>
                      <td>
                         {{$key+1}}
                      </td>
                      <td>
                          {{$row->name}}
                      </td>
                      <td>
                         {{$row->email}}
                      </td>
                      <td class="project_progress">
                         
                          {{$row->phone}}
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