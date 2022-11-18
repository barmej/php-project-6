<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>
<body>
     


<header>

   <div class="container">
      <nav class="navbar navbar-light  fixed-top">
       
        <a href="{{url('/')}}">  <h1> {{__('messages.title') }} </h1></a>


  <div class="dropdown col-md-2">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           {{__('messages.language')}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                 <a class="dropdown-item" type="button"href="/toArabic"> العربية</a>     
                <a class="dropdown-item"type="button"href="/toEnglish"> الإتجليزية</a>
            </div>
  </div>




    
      
       



       
     </nav>
    </div>
</header>
  

@yield('section')
 
 
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
