@extends('Employes.layout')

@section('title' , 'Ajouter Employes')

@section('content')

    @section('style')
    {{ url('css/ajouter.css') }}
    @endsection
    <div class="center">
        <div class="container">
            <h2 class="text-center mb-4">Ajouter Employee</h2>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif

            <form method="POST" action="{{url('Employe')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input name="nom" type="text" class="form-control" id="nom" placeholder="Enter nom">
                    </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Enter prenom">
                    </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-black">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection