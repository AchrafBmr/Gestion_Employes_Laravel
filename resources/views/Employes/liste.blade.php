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
                            <th scope="col">Salaire</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Employe as $row)
                        <tr>

                            <td>{{$row['nom']}}</td>
                            <td>{{$row['prenom']}}</td>
                            <td>{{$row['salaire']}}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('Employe.show' , ['Employe' => $row['id']])}}" class="btn btn-info"> <i class="fa fa-eye"></i></a>
                                <a href="{{route('Employe.edit' , ['Employe' => $row['id']])}}" class="btn btn-success"> <i class='fas fa-edit'></i></a>
                                <form action="{{ route('Employe.destroy', ['Employe' => $row['id']]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection