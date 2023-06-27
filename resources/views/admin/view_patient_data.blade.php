
<!DOCTYPE html>
<html lang="en">
  <head>

  	@include('admin.css')
    <style type="text/css">
     
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
         <h1 class="doc"> All Doctors Times</h1>
         <table>
            <tr style="background-color: blueviolet;" align="center" >
               <th style="padding:10px; cursor: pointer;"> Patient Name </th>
               <th style="padding:10px; cursor: pointer;"> Email </th>
               <th style="padding:10px; cursor: pointer;"> Phone </th>
               <th style="padding:10px; cursor: pointer;"> Appointment Date </th>
               <th style="padding:10px; cursor: pointer;"> Appointment Duration </th>
               <th style="padding:10px; cursor: pointer;"> Appointment Time </th>
            </tr>
           @foreach($data as $approve)
            <tr style="background-color:black;" align="center">
               <td style="padding:10px;"> {{$approve->name}} </td>
               <td style="padding:10px;"> {{$approve->email}} </td>
               <td style="padding:10px;"> {{$approve->phone}} </td>
               <td style="padding:10px;"> {{$approve->date}} </td>
               <td style="padding:10px;"> {{$approve->duration}} </td>
               <td style="padding:10px;"> {{$approve->time}} </td>
              
            </tr>
           @endforeach 
         </table> 
      </div>

       
        
       
      </div>
      
    </div>


    @include('admin.script')

    
  </body>
</html>