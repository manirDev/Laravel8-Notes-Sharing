
<section class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    @foreach($datalist as $rs)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="single-blog.html" class="d-block">
                                    <img src="{{ Storage::url($rs->image) }}" alt="image">
                                </a>
                                <div class="tag">
                                    <a href="#">{{$rs->slug}}</a>
                                </div>
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="post-author">

                                        @if($rs->user->profile_photo_path)
                                            <img src="{{Storage::url($rs->user->profile_photo_path)}}" class="d-inline-block rounded-circle mr-2" alt="image">
                                        @endif
                                        By: <a href="#" class="d-inline-block">{{$rs->user->name}}</a>
                                    </li>
                                    <li><a href="#">{{$rs->created_at}}</a></li>
                                </ul>
                                <h3><a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-inline-block">{{$rs->title}}</a></h3>
                                <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">
                    <section class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit"><i class="bx bx-search-alt"></i></button>
                        </form>
                    </section>
                    <section class="widget widget_raque_posts_thumb">
                        <h3 class="widget-title">Popular Posts</h3>
                        <article class="item">
                            <a href="single-blog.html" class="thumb">
                                <span class="fullimage cover bg1" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2021-06-30">June 10, 2021</time>
                                <h4 class="title usmall"><a href="single-blog.html">Making Peace With The Feast Or Famine Of Freelancing</a></h4>
                            </div>
                            <div class="clear"></div>
                        </article>
                        <article class="item">
                            <a href="single-blog.html" class="thumb">
                                <span class="fullimage cover bg2" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2021-06-30">June 21, 2021</time>
                                <h4 class="title usmall"><a href="single-blog.html">I Used The Web For A Day On A 50 MB Budget</a></h4>
                            </div>
                            <div class="clear"></div>
                        </article>
                        <article class="item">
                            <a href="single-blog.html" class="thumb">
                                <span class="fullimage cover bg3" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2021-06-30">June 30, 2021</time>
                                <h4 class="title usmall"><a href="single-blog.html">How To Create A Responsive Popup Gallery?</a></h4>
                            </div>
                            <div class="clear"></div>
                        </article>
                    </section>
                    <section class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="#">Design <span class="post-count">(03)</span></a></li>
                            <li><a href="#">Lifestyle <span class="post-count">(05)</span></a></li>
                            <li><a href="#">Script <span class="post-count">(10)</span></a></li>
                            <li><a href="#">Device <span class="post-count">(08)</span></a></li>
                            <li><a href="#">Tips <span class="post-count">(01)</span></a></li>
                        </ul>
                    </section>
                    <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Raque Tags</h3>
                        <div class="tagcloud">
                            <a href="#">IT <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Raque <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Games <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                        </div>
                    </section>
                    <section class="widget widget_instagram">
                        <h3 class="widget-title">Instagram</h3>
                        <ul>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/1.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/2.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/3.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/4.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/5.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-block">
                                    <img src="assets/img/blog/6.jpg" alt="image">
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section class="widget widget_contact">
                        <div class="text">
                            <div class="icon">
                                <i class='bx bx-phone-call'></i>
                            </div>
                            <span>Emergency</span>
                            <a href="#">+0987-9876-8753</a>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>

