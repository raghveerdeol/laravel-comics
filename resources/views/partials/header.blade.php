
<header id="app-header">
    <div>
        <section class="main-logo">
            <img src="../img/dc-logo.png" alt="main logo DC">
        </section>

        <nav class="nav-bar">
            <ul>
                {{-- @dd($navLinks) --}}
                @foreach ( $navLinks as $link )
                <li>
                    <a href={{$link['url']}} class="{{$link['active'] === true ? 'active' : ''}}">
                        {{ $link['title'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
