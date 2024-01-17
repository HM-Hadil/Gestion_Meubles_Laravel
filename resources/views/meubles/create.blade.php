
@extends('welcome')
@section('content')

<div class="container mt-5">
        <h1>Créer des Meubles</h1>
        <form method="POST" action="{{ route('meubles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Couleur</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Couleur">
            </div>

            <div class="mb-3">
                <label for="qte" class="form-label">Quantité</label>
                <input type="text" class="form-control" id="qte" name="qte" placeholder="Quantité">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prix</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Prix">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
    @endsection
