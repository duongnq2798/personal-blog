@extends('admin.layout.root')

@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Category</h3>
        </div>
        @include('roots.messages')
        <!-- /.card-header -->
        <!-- form start -->
      <form class="form-horizontal" action="{{ route('tag.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Tag Tile</label>
              <div class="col-sm-9">
              <input value=" {{ $tag->name }}" name="name" type="text" class="form-control" id="inputEmail3" placeholder="Tag Tile">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Tag Slug</label>
              <div class="col-sm-9">
              <input value=" {{ $tag->slug }}" name="slug" type="text" class="form-control" id="inputEmail3" placeholder="Tag Slug">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer d-flex justify-content-center">
            <div class="form-group row">
              <button type="submit" class="btn btn-info">Submit Tag</button>
              <a class="btn btn-success ml-3" href=" {{ route('tag.index') }} ">Go Back</a>
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