@extends('user.layout')

@section('content')
<div id="colorlib-main">
  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row d-flex">
        <div class="col-lg-8 px-md-5 py-5">
          <div class="row pt-md-4">
            <h1 class="mb-3" style="display:inline-block;width:100%"> {{ $post->title }}</h1>
            <i> {{$post->created_at->diffforhumans()}} </i>
            {{-- <p>
              <img src="/user/images/image_1.jpg" alt="" class="img-fluid">
            </p> --}}
            <div>
              <p>
                {!!  htmlspecialchars_decode($post->body) !!}
              </p>
            </div>
          </div><!-- END-->
          @foreach ($post->categories as $category)
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link"> {{$category->name}}</a>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-lg-4 sidebar ftco-animate bg-light pt-5">
          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Categories</h3>
            <ul class="categories">
                @foreach ($post->categories as $category)
                  <li><a href="#">{{ $category->name}} <span>(6)</span></a></li>
                @endforeach
            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Popular Articles</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(user/images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Tag Cloud</h3>
            <ul class="tagcloud">
              @foreach ($post->tags as $tag)
                <a href="#" class="tag-cloud-link">{{ $tag->name}}</a>
              @endforeach
            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
          </div>
        </div><!-- END COL -->
      </div>
    </div>
  </section>
</div>
@endsection