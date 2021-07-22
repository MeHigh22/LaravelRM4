@extends("layouts.index")


@section("content")
<ul>
    @foreach ($fruit as $frui)
            <li>{{ $frui }}</li>
        @endforeach
    </ul>
@endsection
