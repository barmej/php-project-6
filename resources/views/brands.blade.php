@extends('index')

@section('section')
    

<main>

     

 <div class="contianer card1 ">

 
     @foreach ($brands as $item)
      <div class="card mb-3" style="max-width: 650px;">
    <a href="{{route('cars',$item->id)}}">
  <div class="row no-gutters">
      
    <div class="col-md-4">
      <img src="{{$item->image}}" class="card-img" alt="...">
    </div>
    
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title">{{$item->name}}</h4>
        <hr><br>
        <p class="card-text">{{$item->description}}</p>
        <p class="card-text"><small class="text-muted">
    <!--date-->
        </small></p>
      </div>
    </div>
  </div>
  </a>
</div>
     @endforeach
     
</div>
