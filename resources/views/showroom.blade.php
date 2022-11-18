
@extends('index')
@section('section')
    

 <main class="">

  
   <div class="contianer cars ">
     @foreach($cars as $car)
   <div class="card  cars2" style="">
     <img src="{{url($car->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
     <h5 class="card-title">{{$car->name}}</h5>
     <a href="{{route('car',$car->id)}}" class="btn btn-info btn-lg btn-block">Go </a>
   </div>
 </div>
 @endforeach
</div>




</main>

   