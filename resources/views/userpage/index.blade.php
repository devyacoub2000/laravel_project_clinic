
<!DOCTYPE html>
<html lang="en">
<head>

   @include('userpage.css')
  
</head>
<body>


   @include('userpage.header')

   

  

   @include('userpage.about')


   @include('userpage.Latest_News')

  
   @if(session()->has('message'))
                                   
     <div class="alert alert-success">
      
    

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
         </button>

    {{ session()->get('message')}}

     </div>
  @endif 


   @include('userpage.Appointment')



   @include('userpage.footer')

  

   @include('userpage.script')


  
</body>
</html>