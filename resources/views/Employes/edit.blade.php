@extends('Employes.layout')

@section('title' , 'Modifier Employes')

@section('content')

    @section('style')
    {{ url('css/ajouter.css') }}
    @endsection
    <div class="center">
        <div class="container">
            <h2 class="text-center mb-4">Modifier Employee</h2>
            <form method="POST" action="{{ route('Employe.update', ['Employe' => $emp['id']]) }}">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input name="nom" value="{{$emp['nom']}}" type="text" class="form-control" id="nom">
                    </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input name="prenom" value="{{$emp['prenom']}}" type="text" class="form-control" id="prenom">
                    </div>
                <div class="form-group">
                    <label for="salaire">Salaire</label>
                    <input name="salaire" value="{{$emp['salaire']}}" type="number" class="form-control" id="salaire">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-black">Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection