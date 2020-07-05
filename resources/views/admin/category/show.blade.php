@extends('admin.layout.root')

@section('content')
<div class="col-md-12">
  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a class="col-md-offset-5 btn btn-success" href=" {{ route('category.create')}} ">Add Category</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No .</th>
                  <th>Category Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td> {{ $category->name }} </td>
                    <td> {{ $category->slug }}</td>
                    <td class="text-center"><a href=" {{ route('category.edit', $category->id) }}"><i class="fas fa-edit"></i></a></td>
                    <td class="text-center">
                      <form 
                        id="delete-form-{{ $category->id }}" 
                        action=" {{ route('category.destroy', $category->id) }}"
                        style="display: none"
                        method="POST">
                      @csrf
                      @method('DELETE')
                      </form>
                      <a href=""
                        onclick="
                        if(confirm('Are you sure, You want to delete this?')){
                          event.preventDefault();
                          document.getElementById('delete-form-{{ $category->id }}').submit();
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