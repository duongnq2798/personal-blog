@extends('user.layout')

@section('content')
<div id="colorlib-main">
  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row d-flex">
        <div class="col-lg-8 px-md-5 py-5">
          <div class="row pt-md-4">
            <i style="display: inline-block;width: 100%;color: #fa26a0;" class="text-left">
              <span> - Created at </span>
               {{$post->created_at->diffforhumans()}} -
            </i>
            <h1 class="mb-3"> {{ $post->title }}</h1>
            <p>
              <img src="{{Storage::disk('local')->url($post->image)}} " alt="" class="img-fluid">
            </p>
            <p style="display: inline-block; width: 100%;">
              {!!  htmlspecialchars_decode($post->body) !!}
            </p>
          </div><!-- END-->
         
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              @foreach ($post->categories as $category)
                <a href="#" class="tag-cloud-link"> {{$category->name}}</a>
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-lg-4 sidebar ftco-animate bg-light pt-5">
          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Categories</h3>
            <ul class="categories">
              @foreach ($post->categories as $category)
              <li>
              <a href=" {{ route('category',['category'=> $category->slug])}} ">
                  {{ $category->name }}
                </a>
              </li>
              @endforeach
            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Tag Cloud</h3>
            <ul class="tagcloud">
              @foreach ($post->tags as $tag)
                <a href="{{ route('tag',$tag->slug) }}" class="tag-cloud-link">{{ $tag->name}}</a>
              @endforeach
            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Love Book</h3>
            <p>Cô nan</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection