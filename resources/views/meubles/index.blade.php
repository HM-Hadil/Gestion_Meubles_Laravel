@extends('welcome')
@section('content')


<div class="container mt-5">
        <h1>Liste des Meubles</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Couleur</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Mette à Jour</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($meubles as $meuble)
                <tr>
                    <td>{{$meuble->id}}</td>
                    <td>{{$meuble->name}}</td>
                    <td>{{$meuble->color}}</td>
                    <td>{{$meuble->qte}}</td>
                    <td>{{$meuble->price}}</td>
                    <td><a href="{{ route('meubles.update',['meuble' => $meuble]) }}" class="btn btn-warning">Update</a></td>
                    <td>
                        <form method="post" action="{{route('meubles.destroy',['meuble'=>$meuble])}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
  @endsection
