<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <h1>Meubles</h1>
  <table border="1">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>couleur</th>
        <th>quantité</th>
        <th>prix</th>
        <th>mette à jour</th>
        <th>supprimer</th>
    </tr>
    @foreach($meubles as $meuble)
     <tr>
        <td>{{$meuble->id}}</td>
        <td>{{$meuble->name}}</td>
        <td>{{$meuble->color}}</td>
        <td>{{$meuble->qte}}</td>
        <td>{{$meuble->price}}</td>
        <td> <a href="{{ route('meubles.update',['meuble' => $meuble]) }}">update</a></td>
        <td>
        <form method="post" action="{{route('meubles.destroy',['meuble'=>$meuble])}}">
            @csrf
            @method('delete')
           <input type="submit" value="supprimer">
         </form></td>
    </tr>
    @endforeach

  </table>
</body>
</html>
