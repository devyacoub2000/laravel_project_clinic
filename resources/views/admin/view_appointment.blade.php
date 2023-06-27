
<!DOCTYPE html>
<html lang="en">
  <head>

  	@include('admin.css')
   
  </head>


  <body>
    <div class="container-scroller">
        	

  	  @include('admin.sidebar')

     
     
      
        
  	  @include('admin.navbar')
<div class="container-fluid page-body-wrapper">
      
  	  <div align="center" style="padding:100px;">
         <table>
            <tr style="background-color: blueviolet;" align="center" >
               <th style="padding:10px; cursor: pointer;"> Patient Name </th>
               <th style="padding:10px; cursor: pointer;"> Doctor Name </th>
               <th style="padding:10px; cursor: pointer;"> Email </th>
               <th style="padding:10px; cursor: pointer;"> Phone </th>
               <th style="padding:10px; cursor: pointer;"> Appointment Date </th>
               <th style="padding:10px; cursor: pointer;"> Appointment Duration </th>
               <th style="padding:10px; cursor: pointer;"> Appointment Time </th>
               <th style="padding:10px; cursor: pointer;"> Status </th>
               <th style="padding:10px; cursor: pointer;"> Approved </th>
               <th style="padding:10px; cursor: pointer;"> Cancel </th>
            </tr>
           @foreach($data as $approve)
            <tr style="background-color:black;" align="center">
               <td style="padding:10px;"> {{$approve->name}} </td>
               <td style="padding:10px;"> {{$approve->doctor}} </td>
               <td style="padding:10px;"> {{$approve->email}} </td>
               <td style="padding:10px;"> {{$approve->phone}} </td>
               <td style="padding:10px;"> {{$approve->date}} </td>
               <td style="padding:10px;"> {{$approve->duration}} </td>
               <td style="padding:10px;"> {{$approve->time}} </td>
               <td style="padding:10px;"> {{$approve->status}} </td>
               <td style="padding:10px;"> 
                   <a href="{{url('approved', $approve->id)}}" class="btn btn-success"> Approved </a>
               </td>
               <td style="padding:10px;"> 
                   <a href="{{url('remove_appoint', $approve->id)}}" class="btn btn-danger"> Cancel </a>
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