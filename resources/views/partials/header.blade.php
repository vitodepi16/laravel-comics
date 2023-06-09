<header>

    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-between p-3">
                <a class="logo" href="{{ route('home') }}">
                    <img src="/images/dc-logo.png" alt="logo">
                </a>
                <div>
                    <ul class="d-flex justify-center align-items-center h-100 ">
                        @foreach (['comics', 'movies', 'tv', 'characters', 'games', 'videos', 'mews', 'shop'] as $links)
                            <li class="p-3  ">
                                <a class="head-link" href="/">{{ $links }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<style lang="scss" scoped>
    .head-link {
        text-decoration: none;

        &:hover {
            cursor: pointer;
            color: blue;
            border-bottom: blue solid 1px;
        }

    }
</style>
