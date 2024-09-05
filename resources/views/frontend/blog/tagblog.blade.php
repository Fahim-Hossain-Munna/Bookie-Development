@extends('layouts.frontmaster')

@section('content')

<x-front-header-title title="Blog"></x-front-header-title>

<div class="postbox-area pt-80 pb-30">
    <div class="container">
       <div class="row">
          <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
             <div class="postbox pr-20 pb-50">
                @forelse ($blogs as $blog)
                    <article class="postbox__item format-image mb-60 transition-3">
                       <div class="postbox__thumb w-img mb-25">
                          <a href="blog-details.html">
                             <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="blog-thumg">
                          </a>
                       </div>
                       <div class="postbox__content">
                          <div class="postbox__meta mb-15">
                             <span><a href="#"><i class="fal fa-user-alt"></i>{{ $blog->onewithuser->name }}</a></span>
                             <span><i class="fal fa-clock"></i>{{ Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                             <span><a href="#"><i class="far fa-comment-alt"></i> (04) Comments</a></span>
                          </div>
                          <h3 class="postbox__title mb-20">
                             <a href="blog-details.html">{{ $blog->title }}.</a>
                          </h3>
                          <div class="postbox__text mb-30">
                             <p>
                                {!! Str::limit($blog->description,'500') !!}
                             </p>
                          </div>
                          <div class="postbox__read-more">
                             <a href="{{ route('front.blog.single',$blog->id) }}" class="tp-btn tp-color-btn banner-animation">Reade More</a>
                          </div>
                       </div>
                    </article>
                @empty
                <article class="postbox__item format-image mb-60 transition-3">
                    <div class="postbox__thumb w-img mb-25">
                       <a href="blog-details.html">
                          <img src="{{ asset('frontend') }}/assets/img/blog/blog-in-01.jpg" alt="blog-thumg">
                       </a>
                    </div>
                    <div class="postbox__content">
                       <div class="postbox__meta mb-15">
                          <span><a href="#"><i class="fal fa-user-alt"></i> Alextina</a></span>
                          <span><i class="fal fa-clock"></i> Dec 28, 2022</span>
                          <span><a href="#"><i class="far fa-comment-alt"></i> (04) Comments</a></span>
                       </div>
                       <h3 class="postbox__title mb-20">
                          <a href="blog-details.html">Lavoratories used for scientic reseach take many froms.</a>
                       </h3>
                       <div class="postbox__text mb-30">
                          <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                       </div>
                       <div class="postbox__read-more">
                          <a href="blog-details.html" class="tp-btn tp-color-btn banner-animation">Reade More</a>
                       </div>
                    </div>
                 </article>
                @endforelse
                <div class="basic-pagination">
                    {{ $blogs->links() }}

                </div>
             </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12">
             <div class="sidebar__wrapper pl-25 pb-50">
                <div class="sidebar__widget mb-45">
                   <div class="sidebar__widget-content">
                      <h3 class="sidebar__widget-title mb-25">Search</h3>
                      <div class="sidebar__search">
                         <form action="#">
                            <div class="sidebar__search-input-2 p-relative">
                               <input type="text" placeholder="Search post">
                               <button type="submit"><i class="far fa-search"></i></button>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
                <div class="sidebar__widget mb-40">
                   <h3 class="sidebar__widget-title mb-25">Category</h3>
                   <div class="sidebar__widget-content">
                      <ul>
                         @forelse ($categories as $category)
                            <li><a href="blog-details.html">{{ $category->title }}<span>{{ $category->hasmanyblogs->count() }}</span></a></li>
                            @empty
                            <li><a href="blog-details.html">Chemistry<span>03</span></a></li>

                         @endforelse
                      </ul>
                   </div>
                </div>
                <div class="sidebar__widget mb-55">
                   <h3 class="sidebar__widget-title mb-25">Recent Post</h3>
                   <div class="sidebar__widget-content">
                      <div class="sidebar__post rc__post">
                         @forelse ($recentBlogs as $blog)
                            <div class="rc__post mb-20 d-flex align-items-center">
                               <div class="rc__post-thumb">
                                  <a href="blog-details.html"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="blog-sidebar"></a>
                               </div>
                               <div class="rc__post-content">
                                  <div class="rc__meta">
                                     <span>{{ Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</span>
                                  </div>
                                  <h3 class="rc__post-title">
                                     <a href="blog-details.html">{{ $blog->title }}</a>
                                  </h3>
                               </div>
                            </div>
                         @empty
                         <div class="rc__post mb-20 d-flex align-items-center">
                            <div class="rc__post-thumb">
                               <a href="blog-details.html"><img src="{{ asset('frontend') }}/assets/img/blog/blog-in-01.jpg" alt="blog-sidebar"></a>
                            </div>
                            <div class="rc__post-content">
                               <div class="rc__meta">
                                  <span>4 March. 2022</span>
                               </div>
                               <h3 class="rc__post-title">
                                  <a href="blog-details.html">Don't Underestimate Tree for Furniture</a>
                               </h3>
                            </div>
                         </div>
                         @endforelse
                      </div>
                   </div>
                </div>
                <div class="sidebar__widget mb-55">
                   <h3 class="sidebar__widget-title mb-25">Popular Tag</h3>
                   <div class="sidebar__widget-content">
                      <div class="tagcloud">
                         @forelse ($tags as $tag)
                            <a href="blog-details.html">{{ $tag->title }}</a>
                         @empty

                         @endforelse
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


 <style>

    .page-item.active .page-link{
        background: #d51243 !important;
        border-color : #d51243 !important;
    }
    .page-link{
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
    }
 </style>

@endsection
