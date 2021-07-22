@extends("layouts.index")


@section("content")
<ul>
    @foreach ($fruit as $frui)
    <li>Id:  {{$frui->id}} </li>
    <li>Nom : {{$frui->nom}} </li>
    <li>Quantité :  {{$frui->quantity}} </li>
        @endforeach
    </ul>
@endsection
