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
    @if (session('message'))
    <div class="alert alert-success">
       <p>{{session('message')}}</p>
    </div>
    @endif
    <form action="/login" method="POST">
        @csrf
          <div class="mb-3">
            <label  class="form-label">Identifiant</label>
            <input type="text"  name="email" class="form-control"  placeholder="Identifiant">
          </div>
          <div class="mb-3">
            <label  class="form-label">Mot de passe</label>
            <input type="password"  name="password" class="form-control"  placeholder="Mot de passe">
          </div>
          <a href="{{url('register')}}">Creez un compte</a><br>
        <button type="submit" class="btn btn-lg btn-primary"  role="button">Connectez vous</a>
    </form>
   
  </div>
@endsection