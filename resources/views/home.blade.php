@extends('layout.general')

@section('content')
    <main>
        <div class="h-100">
            <div class="container">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-2">
                            <img src="{{ $product['thumb'] }}" alt="">
                        </div>
                        <h1>{{ $product['title'] }}</h1>
                    @endforeach
                </div>

            </div>
        </div>
    </main>
@endsection
