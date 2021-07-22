@extends("layouts.index")

@section("content")
<ul>
    @foreach ($legume as $legum)
        <li>Id:  {{$legum->id}} </li>
        <li>Nom : {{$legum->nom}} </li>
        <li>Quantité :  {{$legum->quantity}} </li>
    @endforeach
    </ul>
@endsection
