@extends('/manage/indexn')
@section('content')

<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

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
                          Tên Chủ Đề
                      </th>
                      <th style="width: 30%">
                          Mô Tả
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              @if(isset($category))
                  @foreach($category as $key=>$row)
                  <tr>
                      <td>
                         {{$key+1}}
                      </td>
                      <td>
                          {{$row->name}}
                      </td>
                      
                      <td class="project_progress">
                         
                          {{$row->description}}
                      </td>
                      
                      <td class="project-actions text-right">
                          
                     
                      <form method="POST" action="/admin/QLCD/quanlychude/delete/{{$row->id}}">
                      @method('DELETE')
                    @csrf

                    <a class="btn btn-info btn-sm" href="/admin/QLCD/suachude/edit/{{$row->id}}">Edit</a>
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('bạn đồng ý xóa')" href="">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </button>
                      </form>
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