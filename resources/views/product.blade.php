@extends('layout')
@section('content')

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($products as $item)
                <div class="col" class="w-50 p-3">
                <div class="card">
                    <img src="{{ $item['gallery'] }}" class="card-img-top img-responsive"  alt="...">
                    <div class="card-body">
                    <h5 class="card-title"> {{ $item['name'] }} </h5>
                    <a href="detail/{{ $item['id'] }}" class="btn btn-info">Részletek</a><br>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
