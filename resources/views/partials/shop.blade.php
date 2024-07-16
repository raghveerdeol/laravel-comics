<section id="shop-card">
    <div class="cards">
        <ul>
            @foreach ($shops as $shop)
            <li>
                <img src="{{ Vite::asset($shop['img'])}}" alt="">
                <p>{{ $shop['title'] }}</p>
            </li>
            @endforeach
        </ul>
    </div>
</section>
