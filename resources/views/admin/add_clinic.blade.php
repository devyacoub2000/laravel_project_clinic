
<!DOCTYPE html>
<html lang="en">
  <head>

  	@include('admin.css')
    <style type="text/css">
       label {
          display: inline-block;
          width: 200px;
       }
    </style>
   
  </head>


  <body>
    <div class="container-scroller">
        	

  	  @include('admin.sidebar')

     
     
      
        
  	  @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">

  	    <div class="container" align="center" style="padding-top: 100px;">
           @if(session()->has('message'))
                       
                      
                       <div class="alert alert-success">
                        
                      

                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                           </button>

                      {{ session()->get('message')}}

                       </div>

                    @endif 
           <h1 style="font-weight: bold; font-size: 30px; text-transform: uppercase; margin-bottom:40px; cursor: pointer; letter-spacing: 4px;"> 
            Clinic
          </h1>
           <form method="post" action="{{url('post_clinic')}}" enctype="multipart/form-data">
             @csrf
             <div style="padding:15px;">
                 <label> Doctor Name </label>
                  <select name="doctor_name" id="doctor" class="custom-select" required="" style="color:black;">
              <option> Select Doctor</option>
              @foreach($doctor as $doctor)
                <option value="{{$doctor->name}}"> {{$doctor->name}}  </option>
              @endforeach  
            </select>
            </div>
            
          <div style="padding:15px;">
                 <label> Patient Name </label>
                  <select name="Patient_name" id="patient" class="custom-select" required="" style="color:black;">
              <option> Select Doctor</option>
              @foreach($patient as $patient)
                <option value="{{$patient->name}}"> {{$patient->name}}  </option>
              @endforeach  
            </select>
            </div>



              <div style="padding:15px;">
                 <label> Day </label>
                 <input type="text" name="day" style="color:black;" placeholder="Enter Day: " required="">
              </div>

               <div style="padding:15px;">
                 <label> Date </label>
                 <input type="date" name="date" style="color:black;" required="">
              </div>

              <div style="padding:15px;">
                 <label> Start Time </label>
                 <input type="time" name="start_time" style="color:black;">
              </div>

               <div style="padding:15px;">
                 <label> End Time </label>
                 <input type="time" name="end_time" style="color:black;">
              </div>
             

              <div style="padding:15px;">
                 <input type="submit" class="btn btn-success" >
              </div>


           </form>



        </div>

       
        
       
      </div>
      
    </div>


    @include('admin.script')

    
  </body>
</html>