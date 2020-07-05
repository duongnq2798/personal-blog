@extends('admin.layout.root')

@section('content')
<div class="col-md-12">
  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a class="col-md-offset-5 btn btn-success" href=" {{ route('post.create')}} ">Add Post</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No .</th>
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Create at</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td> {{ $post->title }} </td>
                    <td> {{ $post->subtitle }}</td>
                    <td> {{ $post->created_at }}</td>
                    <td class="text-center"><a href=" {{ route('post.edit', $post->id) }}"><i class="fas fa-edit"></i></a></td>
                    <td class="text-center">
                      <form 
                        id="delete-form-{{ $post->id }}" 
                        action=" {{ route('post.destroy', $post->id) }}"
                        style="display: none"
                        method="POST">
                      @csrf
                      @method('DELETE')
                      </form>
                      <a href=""
                        onclick="
                        if(confirm('Are you sure, You want to delete this?')){
                          event.preventDefault();
                          document.getElementById('delete-form-{{ $post->id }}').submit();
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
                  <th>No .</th>
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Create at</th>
                  <th>Edit</th>
                  <th>Delete</th>
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