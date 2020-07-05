@extends('admin.layout.root')

@section('content')
<section class="content">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Category</h3>
        </div>
        @include('roots.messages')
        <!-- /.card-header -->
        <!-- form start -->
      <form class="form-horizontal" action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Category Tile</label>
              <div class="col-sm-9">
              <input value=" {{ $category->name }} " name="name" type="text" class="form-control" id="inputEmail3" placeholder="Category Tile">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Category Slug</label>
              <div class="col-sm-9">
                <input value=" {{ $category->slug }} " name="slug" type="tetx" class="form-control" id="inputEmail3" placeholder="Category Slug">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer d-flex justify-content-center">
            <div class="form-group row">
              <button type="submit" class="btn btn-info">Submit Category</button>
              <a class="btn btn-success ml-3" href=" {{ route('category.index') }} ">Go Back</a>
            </div>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
@endsection