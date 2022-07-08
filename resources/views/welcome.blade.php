@extends('partials.head')

@section('title')
    Started
@endsection
<br>
@section('content')
<br>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Started</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('articles')}}">Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('created')}}">Creaction</a>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <br>
    <h1>Welcome Your Started</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam ex architecto </p>
    <button>Learn More</button>
    <br>
    <br>

    </div>

@endsection
