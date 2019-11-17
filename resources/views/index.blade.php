@section('title')
    Family Fun
@endsection

@extends('master')
  @section('konten')
      <!-- START BANNER-->
      <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="owl-carousel owl-theme home-slider">

                {{-- BANNER ITEM --}}
                @foreach ($banners as $item)
                  <div>
                  <a href="/blog/{{$item -> id}}" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{$item -> gambar}}'); ">
                      <div class="text half-to-full">
                        <span class="category mb-5">{{$item -> category}}</span>
                        <div class="post-meta">
                          
                        <span class="author mr-2"><img src="images/img_2.jpg" alt="Colorlib"> Rumah Kita</span>
                          {{-- <span class="mr-2">March 15, 2018 </span> &bullet;
                          <span class="ml-2"><span class="fa fa-comments"></span> 3</span> --}}
                          
                        </div>
                        <h3>{{$item -> title}}</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p> --}}
                      </div>
                    </a>
                </div>
                @endforeach
                
                {{-- BANNER ITEM --}}
                
              </div>  
            </div>
          </div>  
        </div>
      </section>
      <!-- END BANNER-->

      <!-- START LATEST POST-->
      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">

                {{-- ITEM --}}
                @foreach ($blogs as $item)
                  <div class="col-md-6">
                    <a href="/blog/{{$item -> id}}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                      <img style="width:100%" src="{{$item -> gambar}}" alt="Image placeholder">
                      <div class="blog-content-body">
                        <div class="post-meta">
                          <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                          <span class="mr-2">March 15, 2018 </span> &bullet;
                          <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h2>{{$item -> title}}</h2>
                      </div>
                    </a>
                  </div>
                @endforeach
                {{-- ITEM --}}


              </div>

              {{-- START PAGINATION --}}
              <div class="row mt-5">
                <div class="col-md-12 text-center">
                  <nav aria-label="Page navigation" class="text-center">
                    <ul class="pagination">
                      <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            {{-- END PAGINATION --}}


            @include('side')
            <!-- END sidebar -->

          </div>
        </div>
      </section>
  @endsection