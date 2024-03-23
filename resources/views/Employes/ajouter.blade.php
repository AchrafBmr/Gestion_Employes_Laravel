@extends('Employes.layout')

@section('title' , 'Ajouter Employes')

@section('content')

    @section('style')
    {{ url('css/ajouter.css') }}
    @endsection
    <div class="center">
        <div class="container">
            <h2 class="text-center mb-4">Ajouter Employee</h2>

            <form method="POST" action="{{url('Employe')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input name="nom" type="text" class="form-control" id="nom" placeholder="Enter nom">
                    @error('nom')
                        <div style="color :red">
                            {{$message}}
                            <a href="{{url('Employe/create')}}" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>
                    @enderror
                    </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Enter prenom">
                    @error('prenom')
                        <div style="color :red">
                            {{$message}}
                            <a href="{{url('Employe/create')}}" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>
                   @enderror
                    </div>
                <div class="form-group">
                    <label for="salaire">Salaire</label>
                    <input name="salaire" type="number" class="form-control" id="salaire" placeholder="Enter salaire">
                    @error('salaire')
                        <div style="color :red">
                            {{$message}}
                            <a href="{{url('Employe/create')}}" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>
                   @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-black">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection