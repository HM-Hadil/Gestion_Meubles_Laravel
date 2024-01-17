<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>create</h1>
<form method="POST" action="{{ route('meubles.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
     <label for="">Name</label>
     <input type="text" name="name" placeholder="nom">
    </div>

    <div>
     <label for="">Couleur</label>
     <input type="text" name="color" placeholder="couleur">
    </div>

    <div>
     <label for="">Quantité</label>
     <input type="text" name="qte" placeholder="quantité">
    </div>

    <div>
     <label for="">Prix</label>
     <input type="text" name="price" placeholder="prix">
    </div>
    <div>
     <label for="">Image</label>
     <input type="file" name="image"   >
    </div>
    <div>
        <input type="submit" value="ajouter">
    </div>
</form>
</body>
</html>
