@extends('layouts.frontmaster')

@section('content')

<x-front-header-title title="Blog Details"></x-front-header-title>


      <!-- postbox area start -->
      <div class="postbox-area pt-80 pb-60">
        <div class="container">
           <div class="row">
              <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
                 <div class="postbox__wrapper pr-20">
                    <article class="postbox__item format-image mb-50 transition-3">
                       <div class="postbox__thumb w-img mb-30">
                          <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="">
                       </div>
                       <div class="postbox__content">
                          <div class="row">
                             <div class="col-lg-12">
                                <div class="postbox__content postbox__content-area mb-55">
                                   <div class="postbox__meta mb-15">
                                      <span><a href="#"><i class="fal fa-user-alt"></i> {{ $blog->onewithuser->name }}</a></span>
                                      <span><i class="fal fa-clock"></i> {{Carbon\Carbon::parse($blog->created_at)->format('d M, Y')}}</span>
                                      <span><a href="#"><i class="far fa-comment-alt"></i> (04) Comments</a></span>
                                   </div>
                                   <h4 class="mb-35">
                                      {{ $blog->title }}
                                   </h4>
                                   <p>{!! $blog->description !!}.</p>

                             </div>
                          </div>
                          {{-- <div class="row">
                             <div class="col-lg-6 col-md-6">
                                <div class="postbox__content-area mb-60">
                                   <h4>Our Approach</h4>
                                   <div class="postbox__text mb-30">
                                      <p>Must explain to you how all praising uts pain was born and I will gives you a itself completed account of the system, and sed expounds the ut actual teachings of that greater </p>
                                      <div class="postbox__text-list">
                                         <ul>
                                            <li><i class="fal fa-check"></i>Extramural Funding</li>
                                            <li><i class="fal fa-check"></i>Bacteria Markers</li>
                                            <li><i class="fal fa-check"></i>Nam nec mi euismod euismod</li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="postbox__meta-img w-img mb-60"><img src="{{ asset('frontend') }}/assets/img/blog/blog-in-02.jpg" alt=""></div>
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-lg-12">
                                <div class="postbox__content-area mb-40">
                                   <h4 class="mb-25">What Is A Business Technology Roadmap?</h4>
                                   <p>Unlike detailed blueprints that lay out all tasks, deadlines, bug reports, and more along the way, technology roadmaps are high-level visual summaries highlighting a company’s vision or plans.
                                   </p>
                                   <p>In an Agile approach, a technology roadmap feeds the sprint and grooming processes, providing insight into how the product will travel from start to finish. It makes it easier for development teams to:</p>
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="postbox__meta-img mb-60">
                                   <img src="{{ asset('frontend') }}/assets/img/blog/blog-in-05.jpg" alt="">
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="postbox__meta-img mb-60">
                                   <img src="{{ asset('frontend') }}/assets/img/blog/blog-in-04.jpg" alt="">
                                </div>
                             </div>
                          </div> --}}
                          <div class="postbox__tag-border">
                             <div class="row align-items-center">
                                <div class="col-xl-7 col-md-12">
                                   <div class="postbox__tag">
                                      <div class="postbox__tag-list tagcloud">
                                         <span>Tag</span>
                                         @foreach ($blog->manywithtags as $tag)
                                            <a href="blog.html">{{ $tag->title }}</a>
                                         @endforeach
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xl-5 col-md-12">
                                   <div class="postbox__social-tag">
                                      <span>Share</span>
                                      <a class="blog-d-lnkd" href="#"><i class="fab fa-linkedin-in"></i></a>
                                      <a class="blog-d-pin" href="#"><i class="fab fa-pinterest-p"></i></a>
                                      <a class="blog-d-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                      <a class="blog-d-tweet" href="#"><i class="fab fa-twitter"></i></a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </article>
                    <div class="postbox__comment mb-65">
                       <h3 class="postbox__comment-title">({{ $comments->count() }}) Comment</h3>
                       <ul>
                        @foreach ($comments as $comment)
                           <li>
                              <div class="postbox__comment-box d-flex">
                                 <div class="postbox__comment-info">
                                    <div class="postbox__comment-avater mr-25">
                                        @if ($comment->onewithuser->image == "default.png" )
                                        <img src="{{ asset('uploads/default') }}/{{ $comment->onewithuser->image }}" alt="{{ $comment->onewithuser->image }}">
                                        @else
                                        <img src="{{ asset('uploads/profile') }}/{{ $comment->onewithuser->image }}" alt="{{ $comment->onewithuser->image }}">

                                        @endif
                                    </div>
                                 </div>
                                 <div class="postbox__comment-text">
                                    <div class="postbox__comment-name">
                                       <h5>{{ $comment->name }}</h5>
                                       <span class="post-meta">{{ Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</span>
                                    </div>
                                    <p>{{ $comment->comment }}</p>
                                    <div class="postbox__comment-reply">
                                       <a onclick="myID({{ $comment->id }})"><i class="fas fa-reply-all"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </li>
                            @foreach ($comment->hasmanyreplies as $reply)
                               <li class="children mb-30">
                                  <div class="postbox__comment-box d-flex">
                                     <div class="postbox__comment-info">
                                        <div class="postbox__comment-avater mr-25">
                                            @if ($reply->onewithuser->image == "default.png" )
                                            <img src="{{ asset('uploads/default') }}/{{ $reply->onewithuser->image }}" alt="{{ $comment->onewithuser->image }}">
                                            @else
                                            <img src="{{ asset('uploads/profile') }}/{{ $reply->onewithuser->image }}" alt="{{ $comment->onewithuser->image }}">

                                            @endif
                                        </div>
                                     </div>
                                     <div class="postbox__comment-text">
                                        <div class="postbox__comment-name">
                                           <h5>{{ $reply->name }}</h5>
                                           <span class="post-meta">{{ Carbon\Carbon::parse($reply->created_at)->format('d M, Y') }}</span>
                                        </div>
                                        <p>I{{ $reply->comment }}.</p>
                                        <div class="postbox__comment-reply">
                                           <a href="#"><i class="fas fa-reply-all"></i></a>
                                        </div>
                                     </div>
                                  </div>
                               </li>
                            @endforeach
                           @endforeach
                        </ul>
                    </div>
                    <div class="postbox__comment-form">
                       <h3 class="postbox__comment-form-title">Leave a Reply</h3>
                       <p>Your email address will not be published. Required fields are marked *</p>
                       <form action="{{ route('front.comment.store') }}" method="POST">
                        @csrf
                          <div class="row">
                             <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="postbox__comment-input">
                                   <input type="text" placeholder="Enter your Name" name="name">
                                   <input hidden name="blog_id" value="{{ $blog->id }}">
                                   <input hidden value="" id="parent_id" name="parent_id">
                                </div>
                             </div>
                             <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="postbox__comment-input">
                                   <input type="email" placeholder="Enter your email" name="email">
                                </div>
                             </div>
                             <div class="col-xxl-12">
                                <div class="postbox__comment-input">
                                   <textarea placeholder="Type your comment" name="comment"></textarea>
                                </div>
                             </div>
                             <div class="col-xxl-12">
                                <div class="postbox__comment-btn ">
                                   <button type="submit" class="tp-color-btn tp-btn banner-animation">Post Comment</button>
                                </div>
                             </div>
                          </div>
                       </form>
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
     <!-- postbox area end -->


     <script>
        let hiddenParentid = document.querySelector('#parent_id');
        function myID(id){
            hiddenParentid.value = id;
        }
     </script>

@endsection
