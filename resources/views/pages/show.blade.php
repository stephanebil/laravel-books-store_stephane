<x-layouts.main-layout title="Bienvenue sur notre librairie">
	
    <div class="px-20 py-20">
        <h1 class="text-xl uppercase text-green-700 font-black  text-center">Book : {{ $book->title }} </h1>
        <img src="{{ asset('storage/' . $book->image ) }}" alt="" class=" mt-20 px-[25%]">
        <div class="pt-5">
                <p class="">Prix: <span class="text-green-700 font-bold text-xl">{{ $book->price }} €</span></p>
                <p class="">Auteur: {{ $book->author }}</p>
                <p class="">Nombre de page: <span class="">{{ $book->nombre_pages }}</span></p>
                <p>{!! nl2br(e($book->description)) !!}</p>
        </div>
        @auth
            <div class="py-6 mt-10">
                <a href="{{ route('books.edit', $book->id) }}" class="bg-blue-500 rounded p-3 text-white">modifier</a>
            </div>
        @endauth
        @auth
            <div class="py-6">
                <x-btn-delete :book="$book"/>
            </div>
        @endauth
        
    </div>
    
</x-layouts.main-layout>