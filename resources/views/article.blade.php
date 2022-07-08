@extends('partials.head')

@section('title')
  {{$annonces->title}}
@endsection

@section('content')
<br>
<br>
 <div class="container">
    <a href="{{route('articles')}}"> retour</a>
    <br>
    <br>
    <div class="row card text-white bg-white">
        <h4 class="card-header text-dark">{{$annonces->title}}</h4>
     </div>
     <span class="text-dark">{{$annonces->created_at}}</span>
     <div class="card-body">
        <h5 class="card-subtitle text-dark">{{$annonces->slug}}</h5>
        <div class="form-group">
          <p class="text-dark">{{$annonces->content}}</p>
        </div>
      </div>
 </div>
@endsection
