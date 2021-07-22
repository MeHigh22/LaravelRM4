@extends("layouts.index")


@section("content")
<div class="container">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Quantity</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fruit as $frui)
                        <tr>
                            <td>{{ $frui->id }}</td>
                            <td class="{{ strlen($frui->nom) > 5  ? 'bg-primary' : 'bg-none' }}">{{ $frui->nom }}</td>
                            <td>{{ $frui->quantity }}</td>
                            <td><a class="btn btn-primary"href="/showFruits/{{$frui->id}}">show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
