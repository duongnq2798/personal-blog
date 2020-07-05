@extends('admin.layout.root')

@section('content')
<div class="col-md-12">
  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a class="col-md-offset-5 btn btn-success" href=" {{ route('tag.create')}} ">Add Tag</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No .</th>
                  <th>Tag Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($tags as $tag)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td> {{ $tag->name }} </td>
                    <td> {{ $tag->slug }}</td>
                    <td class="text-center"><a href=" {{ route('tag.edit', $tag->id) }}"><i class="fas fa-edit"></i></a></td>
                    <td class="text-center">
                      <form 
                        id="delete-form-{{ $tag->id }}" 
                        action=" {{ route('tag.destroy', $tag->id) }}"
                        style="display: none"
                        method="POST">
                      @csrf
                      @method('DELETE')
                      </form>
                      <a href=""
                        onclick="
                        if(confirm('Are you sure, You want to delete this?')){
                          event.preventDefault();
                          document.getElementById('delete-form-{{ $tag->id }}').submit();
                        }else{
                            event.preventDefault();
                        }
                          ">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>
@endsection