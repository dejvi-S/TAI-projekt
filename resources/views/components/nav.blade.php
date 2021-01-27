<nav>
    <a href="/">dejviS</a>
    <ul>
        <li><a href="/">Strona główna</a></li>
        <li><a href="/oferta">Oferta</a></li>
        <li><a href="/kontakt">Kontakt</a></li>
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
        <li>
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li>
            <a href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
        </li>
        @endif
        @else
        <li>
            <a id="username" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> {{ __('Wyloguj') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        <li>
            <?php
            $str = <<<END
                <button type="button" class="przycisk" id="przycisk-koszyk" onload="animacjaKoszyka(
                END;
            // $str .= $data Miganie dodanie klasy
            $str .=     <<<END
                    )" onclick="window.location = '/koszyk'"></button>
                END;
            echo $str;
            ?>

        </li>
        @endguest
    </ul>
</nav>