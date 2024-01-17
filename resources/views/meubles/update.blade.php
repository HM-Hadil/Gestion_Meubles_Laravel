@extends('welcome')
@section('content')

<div class="container mt-5">
        <h1>Update Meubles</h1>

        <form method="POST" action="{{ route('meubles.edit',['meuble'=> $meuble]) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="{{$meuble->name}}">
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Couleur</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Couleur" value="{{$meuble->color}}">
            </div>

            <div class="mb-3">
                <label for="qte" class="form-label">Quantité</label>
                <input type="text" class="form-control" id="qte" name="qte" placeholder="Quantité" value="{{$meuble->qte}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prix</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Prix" value="{{$meuble->price}}">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>


@endsection
