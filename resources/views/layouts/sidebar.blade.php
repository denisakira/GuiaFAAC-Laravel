<nav id="sidebar">
    <ul class="list-unstyled components">
        <li>
            <a href="#sobreSubmenu" data-toggle="collapse" aria-expanded="false">SOBRE A UNESP</a>
            <ul class="collapse list-unstyled" id="sobreSubmenu">
                @foreach($all_text as $text)
                    @if($text->topico == "Sobre")
                    <li>
                        <a href="/{{ $text->nome }}">{{  $text->titulo }}</a>
                    </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li>
            <a href="/dadica">DIRETÓRIO ACADÊMICO</a>
        </li>
        <li>
            <a href="#caSubmenu" data-toggle="collapse" aria-expanded="false">CENTROS ACADÊMICOS</a>
            <ul class="collapse list-unstyled" id="caSubmenu">
                @foreach($all_text as $text)
                    @if($text->topico == "CA")
                        <li>
                            <a href="/{{ $text->nome }}">{{  $text->titulo }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#coletivosSubmenu" data-toggle="collapse" aria-expanded="false">COLETIVOS</a>
            <ul class="collapse list-unstyled" id="coletivosSubmenu">
                @foreach($all_text as $text)
                    @if($text->topico == "Coletivos")
                        <li>
                            <a href="/{{ $text->nome }}">{{  $text->titulo }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li>
            <a href="/principia">CURSINHO PRINCIPIA</a>
        </li>
    </ul>

</nav>
