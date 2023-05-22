<header>

    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <a href="{{ route('home') }}">
                    <img src="/images/dc-logo.png" alt="logo">
                </a>
                <div>
                    <ul class="d-flex justify-center align-items-center h-100 ">
                        @foreach (['comics', 'movies', 'tv', 'characters', 'games', 'videos', 'mews', 'shop'] as $links)
                            <li class="p-3 ">
                                <a class="" href="">{{ $links }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
