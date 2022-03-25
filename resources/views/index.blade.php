@extends('layouts/template')
@section('title', 'Créer du contenu')
@section('content')
    <main class="py-4">
        <div class="px-4">
            <div class="block md:flex justify-between md:-mx-2">
                @foreach ($files as $file)
                    <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
                        <div class="bg-white rounded-lg overflow-hidden shadow relative">
                            <img class="h-56 w-full object-cover object-center" src="/storage/{{ $file->photo }}" alt="">
                            <div class="p-4 h-auto">
                                <p href="#"
                                    class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                    {{ $file->description }}

                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
@endsection
