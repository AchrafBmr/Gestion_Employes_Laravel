@extends('Employes.layout')

@section('title' , 'Liste Employes')

@section('content')

    @section('style')
    {{ url('css/liste.css') }}
    @endsection
    
    <div class="row">
        <div class="col-md-12">
            <h1 class="title text-center">Les employes</h1>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="table-container">
                <table class="table table-striped text-center">
                    <thead>
                      <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($Employe as $row)
                        <tr>
                            <td>{{$row['nom']}}</td>
                            <td>{{$row['prenom']}}</td>
                            <td>{{$row['email']}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection