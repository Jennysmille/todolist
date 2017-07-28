@extends('layout.layout')

@section('content')
<h1>Tâches de la journée</h1>

<form action="/save" method="post">
  {{csrf_field()}}
  <div>
    <label for="titre">A vous de jouer !</label>
    <input type="text" name="titre" id="titre" placeholder="Ajoutez">
    <label for=""></label>
    <select class="" name="category_id">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
    <button>Valider !</button>
  </div>
</form>
<h1>Listes:</h1>
<ul>
  @foreach($tabTasks as $tabtask)
  <li><h3>{{$tabtask->titre}} - {{$tabtask->categories}}
    <form class="" action="/list/delete" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" id="id" value="{{$tabtask->id}}"></br></br>
        <button type="submit">Supprimer</button>

  </h3></li>
@endforeach
</ul>
@endsection
