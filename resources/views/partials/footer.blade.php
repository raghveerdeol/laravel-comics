<footer id="app-footer">
    <section>
        <div class="footer-link">
            <div class="links">
                <div>
                    <h2>
                        dc comics
                    </h2>
                    <ul class="dc-comics">
                        @foreach ($dcComixLinks as $link)
                        <li>
                            {{ $link['title'] }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h2>
                        shop
                    </h2>
                    <ul class="shop">
                        @foreach ($shopLinks as $link)
                        <li>
                            {{ $link['title'] }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h2>
                        dc
                    </h2>
                    <ul class="dc">
                        @foreach ($dcLinks as $link )
                        <li>
                            {{ $link['title'] }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h2>
                        sites
                    </h2>
                    <ul class="sites">
                        @foreach ($sitesLinks as $link)
                        <li>
                            {{ $link['title'] }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="logo">
                <img src="../../img/dc-logo-bg.png" alt="logo">
            </div>
        </div>
        <AppSignUp/>
    </section>
</footer>
