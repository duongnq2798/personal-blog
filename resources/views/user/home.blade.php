@extends('user.layout')

@section('content')
<div id="colorlib-main">
  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row d-flex">
        <div class="col-xl-8 py-5 px-md-5">
          <div class="row pt-md-4">
            <div class="col-md-12">
              @foreach ($posts as $post)
              <div class="blog-entry ftco-animate d-md-flex">
                <a
                  href=" {{ route('post', $post->slug) }}"
                  class="img img-2"
                  style="background-image: url(user/images/js.png);"
                ></a>
                <div class="text text-2 pl-md-4">
                  <h3 class="mb-2">
                    <a href=" {{ route('post', $post->slug) }}">
                      {{$post->title}}
                    </a>
                  </h3>
                  <div class="meta-wrap">
                    <p class="meta">
                      <span>
                        <i class="icon-calendar mr-2"></i>
                        {{$post->created_at->diffForHumans()}}
                      </span>
                      @foreach ($post->categories as $category)
                      <span>
                        <a href="/">
                          <i class="icon-folder-o mr-2"></i>
                          {{$category->name}}
                        </a>
                      </span>
                      @endforeach
                    </p>
                  </div>
                  <p class="mb-4">
                    {{$post->subtitle}}
                  </p>
                  <p>
                    <a href=" {{ route('post', $post->slug) }}" class="btn-custom">
                      Read More
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </p>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <!-- END-->
          <div class="row">
            <div class="col">
              <div class="block-27">
                <ul>
                  {{ $posts->links('roots.pagination')}}
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
          
          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Categories</h3>
            <ul class="categories">
              @foreach ($post->categories as $category)
              <li>
                <a href="#">
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
                <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>
              @endforeach
            </ul>
          </div>

   

          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Love Book</h3>
            <p>
              "Không phải chưa đủ năng lực - Mà là chưa đủ kiên định"
            </p>
          </div>
        </div>
        <!-- END COL -->
      </div>
    </div>
  </section>
</div>
@endsection