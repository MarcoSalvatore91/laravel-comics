@extends("layouts.main")

@section('content')

<section class="comics">
    <div class="container">
        <ul class="image-comics">
            @forelse($comics as $index => $comic)
            <li>
                <div>
                    <a href="{{ route('comic', ['id' => $index ]) }}">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </a>
                    <p>{{ $comic['series'] }}</p>
                </div>
            </li>
            @empty
            <p>Nessuna Immagine Inserita</p>
            @endforelse
        </ul>
    </div>

    <div class="loader">
        <span>LOAD MORE</span>
    </div>
</section>

@endsection