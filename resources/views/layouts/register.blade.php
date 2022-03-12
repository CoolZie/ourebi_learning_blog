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
    
    <form action="/register" method="POST">
        @csrf
          <div class="mb-3">
            <label  class="form-label">Name</label>
            <input value="{{old('name')}}" type="text"  name="name" class="form-control"  placeholder="Votre nom">
          </div>
          <div class="mb-3">
            <label  class="form-label">Email</label>
            <input value="{{old('email')}}" type="text"  name="email" class="form-control"  placeholder="Votre email">
          </div>
          <div class="mb-3">
            <label  class="form-label">Mot de passe</label>
            <input  type="password"  name="password" class="form-control"  placeholder="Mot de passe">
          </div>
          <div class="mb-3">
            <label  class="form-label">Confirmer votre mot de passe</label>
            <input type="password"  name="password_confirmation" class="form-control"  placeholder="Mot de passe">
          </div>
          <a href="{{url('login')}}">Connectez vous</a><br>
        <button type="submit" class="btn btn-lg btn-primary"  role="button">Inscrivez vous</a>
    </form>
   
  </div>
@endsection