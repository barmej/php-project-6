@extends('index')
@section('section')
   <main>
       <div class="card" style="width: 35rem;">
        <img src="{{url($car->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <ul class="list-group list-group-flush">
            <li class="list-group-item ">color  <span>{{$car->color}}</span> </li>
            <li class="list-group-item "> model<span>{{$car->model}}</span> </li>
            <li class="list-group-item "> name<span>{{$car->name}}</span> </li>
            </ul>
        </div>
      </div>
   </main>
@endsection
