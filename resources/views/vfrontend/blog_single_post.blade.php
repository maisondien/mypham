@extends('layout.frontend.master')
@section('content')

<!-- breadrumbs -->
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
            <li> <a href="shop_grid.html" title="">Blog</a> <span>/ </span> </li>
            <li> <strong>Aliquam vehicula neque</strong> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-sm-9">
          <div class="col-main">
            <div class="blog-wrapper" id="main">
              <div class="site-content" id="primary">
                <div role="main" id="content">
                  <article class="blog_entry"> 
                    
                    <!--blog_entry-header-->
                    <div class="entry-content">
                      <div class="featured-thumb"><a href="#"><img alt="blog-img5" src="/public/frontend/images/blog-lg-img.jpg"></a></div>
                      <header class="blog_entry-header">
                        <div class="blog_entry-header-inner">
                          <h2 class="blog_entry-title">Aliquam vehicula neque ac nibh suscipit</h2>
                        </div>
                        <!--blog_entry-header-inner--> 
                      </header>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2017-05-05</span> </div>
                      <div class="entry-content">
                        <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                        <ul class="vertical_list">
                          <li>Alesuada at, neque. Vivamus eget nibh. </li>
                          <li>Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </li>
                          <li>Vestibulum ante ipsum primis in faucibus orci.</li>
                        </ul>
                        <p>Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In sit amet urna magna. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
                        <blockquote>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer aliquam mi nec dolor placerat a condimentum. </blockquote>
                        <p>Curabitur at vestibulum sem. Aliquam vehicula neque ac nibh suscipit ultrices. Morbi interdum accumsan arcu nec scelerisque. Phasellus eget purus nulla. Suspendisse quam est, tempor quis consectetur non, interdum vitae diam. Pellentesque volutpat mollis ligula in laoreet.</p>
                      </div>
                    </div>
                  </article>
                  <div class="comment-content">
                    <div class="comments-wrapper">
                      <h3> Comments </h3>
                      <ul class="commentlist">
                        <li class="comment">
                          <div class="comment-wrapper">
                            <div class="comment-author vcard">
                              <p class="gravatar"><a href="#"><img width="60" height="60" alt="avatar" src="/public/frontend/images/avatar60x60.jpg"></a></p>
                              <span class="author">John Doe</span> </div>
                            <!--comment-author vcard-->
                            <div class="comment-meta">
                              <time datetime=" 2017-07-10T07:26:28+00:00" class="entry-date">Thu, Jul 10,  2017 07:26:28 am</time>
                              . </div>
                            <!--comment-meta-->
                            <div class="comment-body"> Curabitur at vestibulum sem. Aliquam vehicula neque ac nibh suscipit ultrices. Morbi interdum accumsan arcu nec scelerisque ellentesque id erat sem, ut commodo nulla. </div>
                          </div>
                        </li>
                        <!--comment-->
                        <li class="comment">
                          <div class="comment-wrapper">
                            <div class="comment-author vcard">
                              <p class="gravatar"><a href="#"><img width="60" height="60" alt="avatar" src="/public/frontend/images/avatar60x60.jpg"></a></p>
                              <span class="author">John Doe</span> </div>
                            <!--comment-author vcard-->
                            <div class="comment-meta">
                              <time datetime=" 2017-07-10T07:27:08+00:00" class="entry-date">Thu, Jul 10,  2017 07:27:08 am</time>
                              . </div>
                            <!--comment-meta-->
                            <div class="comment-body"> Curabitur at vestibulum sem. Aliquam vehicula neque ac nibh suscipit ultrices. Morbi interdum accumsan arcu nec scelerisque ellentesque id erat sem, ut commodo nulla. </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!--comments-wrapper-->
                    
                    <div class="comments-form-wrapper">
                      <h3>Leave A reply</h3>
                      <form class="comment-form" method="post" id="postComment" action="">
                        <div class="field">
                          <label for="name">Name<em class="required">*</em></label>
                          <input type="text" class="input-text" title="Name" value="" id="user" name="user_name">
                        </div>
                        <div class="field">
                          <label for="email">Email<em class="required">*</em></label>
                          <input type="text" class="input-text validate-email" title="Email" value="" id="email" name="user_email">
                        </div>
                        <div class="clear"></div>
                        <div class="blog-comment-area">
                          <label for="comment">Comment<em class="required">*</em></label>
                          <textarea rows="3" cols="50" class="input-text" title="Comment" id="comment" name="comment"></textarea>
                        </div>
                        <div style="width:96%" class="button-set">
                          <input type="hidden" value="1" name="blog_id">
                          <button type="submit" class="bnt-comment"><span><span>Add Comment</span></span></button>
                        </div>
                      </form>
                    </div>
                    <!--comments-form-wrapper--> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-right sidebar col-sm-3">
          <div role="complementary" class="widget_wrapper13" id="secondary">
            <div class="popular-posts widget widget__sidebar" id="recent-posts-4">
              <h3 class="widget-title"><span>Most Popular Post</span></h3>
              <div class="widget-content">
                <ul class="posts-list unstyled">
                  <li>
                    <figure class="featured-thumb"> <a href="blog_single_post.html"> <img width="80" height="53" alt="blog image" src="/public/frontend/images/blog-img1.jpg"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title="Pellentesque posuere" href="#/pellentesque-posuere">Pellentesque posuere</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time datetime="2017-07-10T07:09:31+00:00" class="entry-date">Jul 10, 2017</time>
                      .</p>
                  </li>
                  <li>
                    <figure class="featured-thumb"> <a href="blog_single_post.html"> <img width="80" height="53" alt="blog image" src="/public/frontend/images/blog-img2.jpg"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title="Dolor lorem ipsum" href="#/dolor-lorem-ipsum">Dolor lorem ipsum</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time datetime="2017-07-10T07:01:18+00:00" class="entry-date">Jul 10, 2017</time>
                      .</p>
                  </li>
                  <li>
                    <figure class="featured-thumb"> <a href="blog_single_post.html"> <img width="80" height="53" alt="blog image" src="/public/frontend/images/blog-img3.jpg"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title="Aliquam eget sapien placerat" href="#/aliquam-eget-sapien-placerat">Aliquam eget sapien placerat</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time datetime="2017-07-10T06:59:14+00:00" class="entry-date">Jul 10, 2017</time>
                      .</p>
                  </li>
                  <li>
                    <figure class="featured-thumb"> <a href="blog_single_post.html"> <img width="80" height="53" alt="blog image" src="/public/frontend/images/blog-img4.jpg"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title="Pellentesque habitant morbi" href="#/pellentesque-habitant-morbi">Pellentesque habitant morbi</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time datetime="2017-07-10T06:53:43+00:00" class="entry-date">Jul 10, 2017</time>
                      .</p>
                  </li>
                </ul>
              </div>
              <!--widget-content--> 
            </div>
            <div class="popular-posts widget widget_categories">
              <h3 class="widget-title"><span>Blog Categories</span></h3>
              <ul>
                <li class="cat-item"><a href="#">All about clothing</a></li>
                <li class="cat-item"><a href="#">New Arrivals</a></li>
                <li class="cat-item"><a href="#">Beautiful Space</a></li>
                <li class="cat-item"><a href="#">Fashion trends</a></li>
                <ul>
                </ul>
              </ul>
            </div>
            <!-- Banner Ad Block -->
            <div class="custom-slider">
              <div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active"><img src="/public/frontend/images/slide3.jpg" alt="slide3">
                      <div class="carousel-caption">
                        <h3><a title=" Sample Product" href="#">Big sale</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a class="link" href="#">Shop Now</a></div>
                    </div>
                    <div class="item"><img src="/public/frontend/images/slide1.jpg" alt="slide1">
                      <div class="carousel-caption">
                        <h3><a title=" Sample Product" href="#">Bag collection</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <div class="item"><img src="/public/frontend/images/slide2.jpg" alt="slide2">
                      <div class="carousel-caption">
                        <h3><a title=" Sample Product" href="#">New special</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#" data-slide="next"> <span class="sr-only">Next</span> </a></div>
              </div>
            </div>
            
            <div class="block block-tags">
              <div class="block-title">
                <h3> Popular Tags</h3>
              </div>
              <div class="block-content">
                <div class="tags-list"> <a href="#">Fruits</a> <a href="#">Bag</a> <a href="#">Healthy Eating</a> <a href="#">Drinks</a> <a href="#">Backpacks</a> <a href="#">Piper Bag</a> </div>
                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
              </div>
            </div>
            <!-- Banner Text Block -->
            <div class="text-widget widget widget__sidebar">
              <h3 class="widget-title"><span>Text Widget</span></h3>
              <div class="widget-content">Mauris at blandit erat. Nam vel tortor non quam scelerisque cursus. Praesent nunc vitae magna pellentesque auctor. Quisque id lectus.<br>
                <br>
                Massa, eget eleifend tellus. Proin nec ante leo ssim nunc sit amet velit malesuada pharetra. Nulla neque sapien, sollicitudin non ornare quis, malesuada.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- End main-container -->



@endsection