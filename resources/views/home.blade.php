@extends('layouts.app')
@section('content')
    <h1 class="text-center">Movies</h1>
    {{-- insert movies from db --}}
    <div class="container">
        <div class="row">
            @foreach ($movies as $elem)
                    <div class="col-3 g-2">
                        <div class="card bg-secondary" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$elem['title']}}</h5>
                                <p class="card-text">Nationality: {{$elem['nationality']}}</p>
                                <p class="card-text">Date: {{$elem['date']}}</p>
                                <p class="card-text">Date: {{$elem['vote']}}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

    </div>
@endsection
