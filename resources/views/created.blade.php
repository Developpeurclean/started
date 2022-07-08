@extends('partials.head')

@section('title')
  Createur
@endsection
<style>
    textarea{resize: none}
    .card{width: 70em}
 </style>
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
<br>
   <div class="row card text-dark bg-white">
    <h4 class="card-header">Ajouter Une Annonce & Histoire</h4>
    <div class="card-body">
        <form action="{{route('store')}}" method="POST">
          @csrf
          <div class="form-group">
            <input type="text" name="title" id="title" placeholder="Entrer un Titre" class="form-control @error('title') is-invalid
            @enderror ">
            @error('title')
                <div class="invalid-feedback">{{title}}</div>
            @enderror
          </div>
          <br>
          <div class="form-group">
            <input type="date"  name="created_at" id="title" placeholder="enter date"
            class="form-control @error('created_at') is-invalid
            @enderror ">
            @error('created_at')
                <div class="invalid-feedback">{{'Entrer une date'}}</div>
            @enderror
          </div>
          <br>
          <div class="form-group">
            <input type="text" name="slug" id="title" placeholder="Entrer un slug" class="form-control @error('slug') is-invalid
            @enderror ">
            @error('slug')
                <div class="invalid-feedback">{{'Entrer un slug'}}</div>
            @enderror
          </div>
          <br>
          <div class="form-group">
            <input type="text" name="description" id="title" placeholder="Entrer une description" class="form-control @error('description') is-invalid
            @enderror ">
            @error('description')
                <div class="invalid-feedback">{{'Entrer une description'}}</div>
            @enderror
          </div>
          <br>
          <div class="form-group">
            <textarea name="content" id="" class="form-control @error('content') is-invalid
            @enderror "></textarea>
            @error('content')
                <div class="invalid-feedback">{{'Entrer un contenue'}}</div>
            @enderror
          </div>
          <br>
          <button type="submit">Publier</button>
        </form>
    </div>
   </div>

  </div>
@endsection
