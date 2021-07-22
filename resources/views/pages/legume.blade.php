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
                    @foreach ($legume as $veggie)
                        <tr>
                            <td>{{ $veggie->id }}</td>
                            <td class="{{ strlen($veggie->nom) > 5  ? 'bg-primary' : 'bg-none' }}">{{ $veggie->nom }}</td>
                            <td>{{ $veggie->quantity }}</td>
                            <td><a class="btn btn-primary"href="/showLegumes/{{$veggie->id}}">show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
