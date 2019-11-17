@section('title')
    {{$blog -> title}}
@endsection

@extends('master')
  @section('konten')
      <!-- START LATEST POST-->
      <section class="site-section py-sm">
        <div class="container">
          <br>
          <br>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                <img src="{{$blog -> gambar}}" alt="Image" class="img-fluid mb-5">
                <div class="post-meta">
                  <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib" class="mr-2"> Colorlib</span>&bullet;
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h1 class="mb-4">{{$blog -> title}}</h1>
                <a class="category mb-5" href="#">{{$blog -> category}}</a> 
        
                <div class="post-content-body">
                  {!!$blog -> content!!}  
                </div>

                <div class="pt-5">
                  <p>Categories:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
                </div>
                  <br><br>
                  <br><br>
              </div>     
            </div>
            
            @include('side')
            <!-- END sidebar -->

          </div>
        </div>
      </section>
  @endsection