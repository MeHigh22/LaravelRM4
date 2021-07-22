@extends("layouts.index")

@section('content')
<section class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">

            <h6>{{$show->id}}</h6>

            {{-- Cards(title) --}}
            <h5 class="card-title">{{$show->nom}}</h5>

            {{-- Cards(num) --}}
            <h6 class="card-subtitle mb-2 text-muted">{{$show->quantity}}</h6>
            </div>
            <div class="row d-flex justify-content-around">
                <a class="btn btn-primary" href="/">Go back</a>
            </div>
        </div>

    </section>
@endsection
