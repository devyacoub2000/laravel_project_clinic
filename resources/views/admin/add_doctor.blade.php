
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
           <h1 style="font-weight: bold; font-size: 30px; text-transform: uppercase; margin-bottom:40px; cursor: pointer; letter-spacing: 4px;"> Add Doctor </h1>
           <form method="post" action="{{url('post_doctor')}}" enctype="multipart/form-data">
             @csrf
              <div style="padding:15px;">
                 <label> Doctor Name </label>
                 <input type="text" name="name" style="color:black;" placeholder="Doctor Name: " required="">
              </div>

              <div style="padding:15px;">
                 <label> Doctor Phone </label>
                 <input type="number" name="phone" style="color:black;" placeholder="Doctor Phone: " required="">
              </div>

              <div style="padding:15px;">
                 <label> Speciality </label>
                 <select name="speciality" style="color: black; width: 200px;" required="">
                    <option>--select</option>
                    <option value="skin">skin</option>
                    <option value="heart">heart</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>
                 </select>
              </div>

              <div style="padding:15px;">
                 <label> Doctor Image </label>
                 <input type="file" name="image" required="">
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