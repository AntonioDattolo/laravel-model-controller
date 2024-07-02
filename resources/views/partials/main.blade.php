<main>
    <div class="container">

        <ul>
            @foreach ($movies as $movie)
            <li>
                <h5>
                    {{$movie->title}}
                </h5>
                <h6>
                    Titolo originale : {{$movie->original_title}}
                </h6>
                <h6>
                    Data di uscita : {{$movie->date}}
                </h6>
            </li>
            @endforeach
        </ul>
    </div>
</main>