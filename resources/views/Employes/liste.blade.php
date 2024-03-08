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
                <div class="t1 title-success">
                    <p>{{ $message }}</p>
                    <a href="{{url('Employe')}}" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
            @endif
            <div class="table-container">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Employe as $row)
                        <tr>

                            <td>{{$row['nom']}}</td>
                            <td>{{$row['prenom']}}</td>
                            <td>{{$row['email']}}</td>
                            <td>
                                <a href="{{route('Employe.show' , ['Employe' => $row['id']])}}" class="btn btn-info"> <i class="fa fa-eye"></i></a>
                                <a class="btn btn-success" type="submit"><i class='fas fa-edit'></i></a>
                                <a class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection