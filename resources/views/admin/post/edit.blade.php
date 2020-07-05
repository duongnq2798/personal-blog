@extends('admin.layout.root')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add Title</h3>
        </div>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        <!-- /.card-header -->
        <!-- form start -->
      <form method="POST" action="{{ route('post.update', $post->id) }}" >
        @csrf
        @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Title" value=" {{ $post->title }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sub Title</label>
              <input name="subtitle" type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Title" value=" {{ $post->subtitle}} " >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Slug</label>
              <input name="slug" type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Slug"  value=" {{ $post->slug}} " >
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input name="image" type="file" class="custom-file-input" id="exampleInputFile" value="">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-check">
              <input value="1" type="checkbox" class="form-check-input" id="exampleCheck1" name="status"
                @if ($post->status == 1)
                    checked
                @endif
              >
              <label class="form-check-label" for="exampleCheck1">Public</label>
            </div>
            <div class="mt-3" >
              <div class="form-group" data-select2-id="39">
                <label>Tags</label>
                <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select Tag" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="tags[]">
                  @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                      @foreach ($post->tags as $postTag)
                          @if ($postTag->id == $tag->id)
                              selected
                          @endif
                      @endforeach  
                      
                    >{{ $tag->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="mt-3" >
              <div class="form-group" data-select2-id="39">
                <label>Categories</label>
                <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select Category" style="width: 100%;" data-select2-id="6" tabindex="-1" aria-hidden="true"  name="categories[]">
                  @foreach ($categories as $category)
                    <option value=" {{ $category->id }}"
                      @foreach ($post->categories as $postCategory)
                          @if ($postCategory->id == $category->id)
                              selected
                          @endif
                      @endforeach  
                      
                      > {{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Content
                  <small>Create</small>
                </h3>
                <!-- tools box -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              
              <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">
                <textarea  name="body" class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 540px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{ $post->body }}
                  </textarea>
                </div>
              </div>
              <div class="card-footer d-flex justify-content-center">
                <div class="form-group row">
                  <button type="submit" class="btn btn-info">Submit Post</button>
                  <a class="btn btn-success ml-3" href=" {{ route('post.index') }} ">Go Back</a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
    
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
@endsection