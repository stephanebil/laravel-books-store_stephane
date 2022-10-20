<x-layouts.main-layout title="Bienvenue sur le Dashboard" >
    <div class="py-12 px-20">
        <h1 class="text-center font-bold text-green-700 text-2xl">Hi, {{ Auth::user()->name }}</h1>
		<div class="py-20">
            <a href="{{ route('books.create') }}" class="bg-green-700 p-3 rounded text-white">Ajouter un livre</a> 
        </div>	
        <div class="py-20">
        </div>
			<a href="/" class="bg-green-700 p-3 rounded text-white">Modifier un livre</a>           
        </div>
</x-layouts.main-layout>
