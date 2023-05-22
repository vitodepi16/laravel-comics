@extends('layout.general')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3  d-flex p-3 mb-4 mt-4">
                    <div class="card d-flex">
                        <div class="card-img-top">
                            <img class="img-fluid" src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
                        </div>
                        <div class="card-body">
                            <h2>{{ $product['title'] }}</h2>
                            <p>{{ $product['description'] }}</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
<style lang="scss" scoped>
    main {
        background-color: black;
    }
</style>
