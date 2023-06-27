
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
          <h1 class="doc"> View Clinic Times</h1>
         <table>
            <tr style="background-color: blueviolet;" align="center" >
               <th style="padding:10px; cursor: pointer;"> Doctor Name </th>
               <th style="padding:10px; cursor: pointer;"> Patient Name </th>
               <th style="padding:10px; cursor: pointer;"> Days  </th>
               <th style="padding:10px; cursor: pointer;"> Date </th>
               <th style="padding:10px; cursor: pointer;"> Start Time </th>
               <th style="padding:10px; cursor: pointer;"> End Time </th>
               <th style="padding:10px; cursor: pointer;"> Action </th>

            </tr>
           @foreach($data as $data)
            <tr style="background-color:black;" align="center">
               <td style="padding:10px;"> {{$data->doctor_name}} </td>
               <td style="padding:10px;"> {{$data->Patient_name}} </td>
               <td style="padding:10px;"> {{$data->day}} </td>
               <td style="padding:10px;"> {{$data->date}} </td>
               <td style="padding:10px;" class="{{$data->start_time == 'empty_time' ? 'text-danger' : 'text-success'}}"> {{$data->start_time}} </td>
               <td style="padding:10px;" class="{{$data->end_time == 'empty_time' ? 'text-danger' : 'text-success'}}"> {{$data->end_time}} </td>
              
               <td style="padding:10px;"> 
                   <a href="{{url('delete_clinic', $data->id)}}" onclick="return confirm('Are You sure to Delete This ? ')" class="btn btn-danger"> Remove </a>
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