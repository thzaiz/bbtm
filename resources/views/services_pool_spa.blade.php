@extends('layouts.appPubB')
@section('title', 'Page Title')
@section('content')


    <div class="heading-container">
        <div class="heading-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-wrap">
                            <div class="page-title">
                                <h1>Blog Grid</h1>
                                <div class="page-breadcrumb">
                                    <ul class="breadcrumb">
                                        <li><a href="./" class="home">Home</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li>Blog Grid</li>
                                    </ul>

                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="dh-typed">
                                        <div class="dh-typed-wrap fz-35">


                                            <div class="dh-typed-text-wrap">
                                                <div id="typed-strings">
                                                    @for ($i = 0; $i < 10; $i++)
                                                    @foreach($listServices as $s)
                                                        <p>{{ $s->service_name }}</p>

                                                    @endforeach
                                                        @endfor
                                                    <p>We proudly offer the following swimming pool services:</p>
                                                </div>
                                                <span id="typed"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 main-wrap">
                    <div class="main-content">
                        <div class="posts" data-layout="grid">
                            <div class="col-3 posts-wrap posts-layout-grid row">
                                <div class=" col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog_360x200.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-detail.html">Luxury Fashion trending </a>
                                                </h2>
                                            </div>
                                            <div class="entry-content">
                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                            </div>
                                            <div class="clearfix">
                                                <div class="entry-meta icon-meta">
															<span class="meta-date">
																<i class="fa fa-calendar"></i>
																<span>Aug 11, 2015</span>
															</span>
                                                </div>
                                                <div class="readmore-link">
                                                    <a href="blog-detail.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog_360x200.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-detail.html">Paris Premium perfume </a>
                                                </h2>
                                            </div>
                                            <div class="entry-content">
                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                            </div>
                                            <div class="clearfix">
                                                <div class="entry-meta icon-meta">
															<span class="meta-date">
																<i class="fa fa-calendar"></i>
																<span>Aug 11, 2015</span>
															</span>
                                                </div>
                                                <div class="readmore-link">
                                                    <a href="blog-detail.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog_360x200.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-detail.html">Ladies Fashion vintage </a>
                                                </h2>
                                            </div>
                                            <div class="entry-content">
                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                            </div>
                                            <div class="clearfix">
                                                <div class="entry-meta icon-meta">
															<span class="meta-date">
																<i class="fa fa-calendar"></i>
																<span>Aug 11, 2015</span>
															</span>
                                                </div>
                                                <div class="readmore-link">
                                                    <a href="blog-detail.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog_360x200.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-detail.html">Women’s Beautiful </a>
                                                </h2>
                                            </div>
                                            <div class="entry-content">
                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                            </div>
                                            <div class="clearfix">
                                                <div class="entry-meta icon-meta">
															<span class="meta-date">
																<i class="fa fa-calendar"></i>
																<span>Aug 11, 2015</span>
															</span>
                                                </div>
                                                <div class="readmore-link">
                                                    <a href="blog-detail.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog_360x200.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-detail.html">Rose Printed Dress </a>
                                                </h2>
                                            </div>
                                            <div class="entry-content">
                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                            </div>
                                            <div class="clearfix">
                                                <div class="entry-meta icon-meta">
															<span class="meta-date">
																<i class="fa fa-calendar"></i>
																<span>Aug 11, 2015</span>
															</span>
                                                </div>
                                                <div class="readmore-link">
                                                    <a href="blog-detail.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog_360x200.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-detail.html">Fashion Look book </a>
                                                </h2>
                                            </div>
                                            <div class="entry-content">
                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                            </div>
                                            <div class="clearfix">
                                                <div class="entry-meta icon-meta">
															<span class="meta-date">
																<i class="fa fa-calendar"></i>
																<span>Aug 11, 2015</span>
															</span>
                                                </div>
                                                <div class="readmore-link">
                                                    <a href="blog-detail.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog_360x200.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-detail.html">Milano Fashion </a>
                                                </h2>
                                            </div>
                                            <div class="entry-content">
                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                            </div>
                                            <div class="clearfix">
                                                <div class="entry-meta icon-meta">
															<span class="meta-date">
																<i class="fa fa-calendar"></i>
																<span>Aug 11, 2015</span>
															</span>
                                                </div>
                                                <div class="readmore-link">
                                                    <a href="blog-detail.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog_360x200.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-detail.html">Fall/Winter child </a>
                                                </h2>
                                            </div>
                                            <div class="entry-content">
                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                            </div>
                                            <div class="clearfix">
                                                <div class="entry-meta icon-meta">
															<span class="meta-date">
																<i class="fa fa-calendar"></i>
																<span>Aug 11, 2015</span>
															</span>
                                                </div>
                                                <div class="readmore-link">
                                                    <a href="blog-detail.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog_360x200.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-detail.html">Jewellery collection </a>
                                                </h2>
                                            </div>
                                            <div class="entry-content">
                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                            </div>
                                            <div class="clearfix">
                                                <div class="entry-meta icon-meta">
															<span class="meta-date">
																<i class="fa fa-calendar"></i>
																<span>Aug 11, 2015</span>
															</span>
                                                </div>
                                                <div class="readmore-link">
                                                    <a href="blog-detail.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="paginate">
                                <div class="paginate_links">
                                    <span class='page-numbers current'>1</span>
                                    <a class='page-numbers' href='#'>2</a>
                                    <span class="page-numbers dots">&hellip;</span>
                                    <a class='page-numbers' href='#'>4</a>
                                    <a class="next page-numbers" href="#">
                                        <i class="fa fa-caret-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
