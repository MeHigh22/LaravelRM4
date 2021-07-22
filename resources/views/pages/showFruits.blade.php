@extends("layouts.index")

@section('content')

    <section>
        <div class="container p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Retour</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{$show->id}}</th>
                        <td>{{$show->nom}}</td>
                        <td>{{$show->quantity}}</td>
                        <td><a class="btn btn-dark text-white" href="/fruit">Back</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

@endsection
