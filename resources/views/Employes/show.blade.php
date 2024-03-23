@extends('Employes.layout')

@section('title' , 'Show Employes')

@section('content')
    <h2 style="padding: 15px">Employee ID: {{$emp['id']}}</h2>
    <div class="card border-success mb-5" style="max-width: 25%; margin-left:37.5%; box-shadow: 5px 10px #888888;">
        <div class="card-body">
            <h6 class="card-title">Nom:</h6>
            <p class="card-text text-center">{{$emp['nom']}}</p>
            <h6 class="card-title">Prenom:</h6>
            <p class="card-text text-center">{{$emp['prenom']}}</p>
            <h6 class="card-title text-right">Email:</h6>
            <p class="card-text text-center">{{$emp['salaire']}}</p>

            <h6 class="card-title text-right">creer a :</h6>
            <p class="card-text text-center">{{ (new DateTime($emp['created_at']))->format('Y-m-d H:i:s')}}</p>

            <h6 class="card-title text-right">modifier a :</h6>
            <p class="card-text text-center">{{ (new DateTime($emp['updated_at']))->format('Y-m-d H:i:s')}}</p>
        </div>
    </div>
@stop