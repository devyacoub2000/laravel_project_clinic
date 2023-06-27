
  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Our Doctors</h1>
      <div class="row mt-5">
        @foreach($doctor as $doctor)
        <div class="col-lg-4 py-2 wow zoomIn">
           
          <div class="card-blog">
            <div class="header">
              
              <a href="blog-details.html" class="post-thumb">
                <img src="doctors/{{$doctor->image}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html"> {{$doctor->speciality}} Speciality</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="doctors/{{$doctor->image}}" alt="">
                  </div>
                  <span>{{$doctor->name}}</span>
                </div>
                
              </div>
            </div>
          </div>
         
        </div>
         @endforeach
       
      </div>
    </div>
  </div> <!-- .page-section -->
