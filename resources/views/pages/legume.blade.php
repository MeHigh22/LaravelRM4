@extends("layouts.index")

@section("content")
<ul>
    @foreach ($legume as $legum)
            <li> {{$legum}} </li>
        @endforeach
    </ul>
@endsection
