@extends('layouts/template')
@section('title', 'Créer du contenu')
@section('content')
<main class="bg-slate-700 h-full">
    
    <form class="flex justify-center pt-8 ">
        <div class="shadow-xl p-10 bg-white max-w-xl rounded ">
            <h1 class="text-4xl font-black mb-4">Upload your face</h1>
            <h2  class="text-blue-500 font-semibold text-xs mb-1">Name</h2>
            <div class="mb-4 relative">
                <input class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-slate-500 focus:outline-none active:outline-none active:border-slate-500" id="email" type="text" autofocus>
            </div>
           
            <div>
                <label class="text-blue-500 font-semibold text-xs mb-1">Upload Photo</label>
        <div class='flex items-center justify-center w-full mb-5'>
            <label class='flex flex-col border-2 border-dashed rounded w-full h-32 hover:bg-gray-100 hover:border-slate-300 group hover:cursor-pointer'>
                <div class='flex flex-col items-center justify-center pt-7'>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="text-slate-500" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M13.09 20H6l6-6l1.88 1.88c.62-.98 1.48-1.78 2.52-2.28L18 12v1.09c.33-.05.66-.09 1-.09c.34 0 .67.04 1 .09V8l-6-6H6c-1.11 0-2 .89-2 2v16a2 2 0 0 0 2 2h7.81c-.35-.61-.6-1.28-.72-2M13 3.5L18.5 9H13V3.5M8 9a2 2 0 1 1 0 4c-1.11 0-2-.89-2-2s.9-2 2-2m12 6v3h3v2h-3v3h-2v-3h-3v-2h3v-3h2Z"></path></svg>
                    <p class='text-slate-500 font-semibold text-xs mt-4 mb-1'>Select a photo</p>
                    <input type='file' class="file:hidden " />
                </div>
              
            </label>
            </div>
            
            <button type="submit" class="bg-blue-500  hover:bg-blue-dark text-white font-bold py-3 px-6 rounded" accept="image/*">Send my face</button>
        </div>
    </format>
</main>
@endsection
