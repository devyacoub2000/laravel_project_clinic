  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('make_appaintment')}}" method="post">

        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="name" placeholder="Patient name" required="">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="email" name="email" class="form-control" placeholder="Email address.." required="">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="string" name="number" class="form-control" placeholder="Phone Number:" required="">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="doctor" class="custom-select" required="">
              <option> Select Doctor</option>
              @foreach($doctor as $doctor)
                <option value="{{$doctor->name}}"> {{$doctor->name}} --speciality-- {{$doctor->speciality}}  </option>
              @endforeach  
            </select>
          </div>


          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control" required="">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
             <select name="duration" id="duration" class="custom-select" required="">
              <option> Select Duration</option>
              <option> 15 minutes</option>
              <option> 30 minutes</option>
              <option> 45 minutes</option>
              <option> 60 minutes</option>
              
            </select>
          </div>

         <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
             <select name="time" id="time" class="custom-select" required="">
              <option> Select Time</option>
              <option> 09:00</option>
              <option> 09:15</option>
              <option> 09:30</option>
              <option> 09:45</option>
              <option> 10:00</option>
              
              
            </select>
          </div>


        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->