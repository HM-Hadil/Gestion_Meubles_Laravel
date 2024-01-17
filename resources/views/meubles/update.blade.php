<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>update</h1>
<form method="POST" action="{{ route('meubles.edit',['meuble'=> $meuble]) }}">
    @csrf
    @method('put')
    <div>
     <label for="">Name</label>
     <input type="text" name="name" placeholder="nom" value="{{$meuble->name}}">
    </div>

    <div>
     <label for="">Couleur</label>
     <input type="text" name="color" placeholder="couleur" value="{{$meuble->color}}">
    </div>

    <div>
     <label for="">Quantité</label>
     <input type="text" name="qte" placeholder="quantité" value="{{$meuble->qte}}">
    </div>

    <div>
     <label for="">Prix</label>
     <input type="text" name="price" placeholder="prix" value="{{$meuble->price}}">
    </div>
    <div>
        <input type="submit" value="update">
    </div>
</form>
</body>
</html>
