
<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')
    <style type="text/css">
      .image {
        width: 150px;
        height: 100px;
      }

      .doc {
        font-weight: bold;
        font-size: 25px;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin: 20px 0px;
      }
    </style>
   
  </head>


  <body>
    <div class="container-scroller">
          

      @include('admin.sidebar')

     
     
      
        
      @include('admin.navbar')
<div class="container-fluid page-body-wrapper">
      
      <div align="center" style="padding:100px;">
            @if(session()->has('message'))
                       
                      
                       <div class="alert alert-success">
                        
                      

                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                           </button>

                      {{ session()->get('message')}}

                       </div>

                    @endif 
          <h1 class="doc"> All Doctors</h1>
         <table>
            <tr style="background-color: blueviolet;" align="center" >
               <th style="padding:10px; cursor: pointer;"> Doctor Name </th>
               <th style="padding:10px; cursor: pointer;"> Doctor Phone  </th>
               <th style="padding:10px; cursor: pointer;"> Doctor Speciality </th>
               <th style="padding:10px; cursor: pointer;"> Image </th>
               <th style="padding:10px; cursor: pointer;"> Action </th>

            </tr>
           @foreach($data as $data)
            <tr style="background-color:black;" align="center">
               <td style="padding:10px;"> {{$data->name}} </td>
               <td style="padding:10px;"> {{$data->phone}} </td>
               <td style="padding:10px;"> {{$data->speciality}} </td>
               <td style="padding:10px;"> <img class="image" src="doctors/{{$data->image}}"> </td>
               
               <td style="padding:10px;"> 
                   <a href="{{url('updateddd_doctor', $data->id)}}" onclick="return confirm('Are You sure to Edit This ? ')" class="btn btn-success"> Edit </a>
               </td>
               <td style="padding:10px;"> 
                   <a href="{{url('remove_doctor', $data->id)}}" onclick="return confirm('Are You sure to Delete This ? ')" class="btn btn-danger"> Remove </a>
               </td>
            </tr>
           @endforeach 
         </table> 
      </div>

       
        
       
      </div>
      
    </div>


    @include('admin.script')

    
  </body>
</html>