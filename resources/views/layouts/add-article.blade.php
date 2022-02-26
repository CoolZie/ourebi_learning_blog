@extends('app')
@section('title', "ajouter un article")
@section('content')
<div class="bg-light p-5 rounded">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/add-article" method="POST">
        @csrf
         <div class="mb-3">
            <label  class="form-label">Titre de l'article</label>
            <input type="text" name="title"  class="form-control"  placeholder="Titre de l'article">
          </div>
          <div class="mb-3">
            <label  class="form-label">Auteur de l'article</label>
            <input type="text"  name="auteur" class="form-control"  placeholder="Auteur de l'article">
          </div>
          <div class="mb-3">
            <label  class="form-label">Contenu de l'article</label>
            <textarea  class="form-control" name="contenu"  rows="3"></textarea>
          </div>
        <button type="submit" class="btn btn-lg btn-primary"  role="button">Enregistrer</a>
    </form>
   
  </div>
@endsection