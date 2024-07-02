<main>
    <div class="container">
        <ul class="d-flex flex-wrap">
            @foreach ($movies as $movie)
            <li class="col-3 p-3" style="list-style: none">
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