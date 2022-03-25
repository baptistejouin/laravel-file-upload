@extends('layouts/template')
@section('title', 'Créer du contenu')
@section('content')
    <main>
        @foreach ($files as $file)
            <h1 class="text-2xl font-bold">WHAOU</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto repellendus quidem distinctio
                voluptatibus
                suscipit placeat nihil eaque veritatis consequatur cum vero dolorum illo perferendis neque, harum, facere
                nemo
                minima aspernatur?</p>
        @endforeach
    </main>
@endsection
