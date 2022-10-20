@php
    $style = "rounded w-full block mb-3"
@endphp

<x-layouts.main-layout title="Bienvenue sur Book Store" >
    <div class="px-20 py-20">
       <h1 class="py-5 text-xl font-black">Create new video</h1>
       <form action="{{ route('books.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="">
                    <input type="text" name="title" placeholder="Votre titre" value="{{ old('title') }}" class="{{ $style }}">
                    <x-error-msg name="title" />
            </div>
            <div class="">
                    <p class="">Résumé du livre</p>
                    <textarea name="description" id="" cols="30" rows="10">{{ old('description') }} </textarea>
                    <x-error-msg name="description" />
            </div>
            <div class="">
                    <input type="text" name="price" placeholder="Prix" value="{{ old('price') }}" class="{{ $style }}">
                    <x-error-msg name="price" />
            </div>
            <div class="">
                    <input type="text" name="author" placeholder="Auteur" value="{{ old('author') }}" class="{{ $style }}">
                    <x-error-msg name="author" />
            </div>
            <div class="">
                    <input type="text" name="nombre_pages" placeholder="Nombre de pages" value="{{ old('nombre_pages') }}" class="{{ $style }}">
                    <x-error-msg name="nombre_pages" />
            </div>
            <div class="">
                    <input type="file" name="image" placeholder="Votre image ici" class="{{ $style }}">
                    <x-error-msg name="image" />
            </div>
            <button type="submit" class="bg-green-700 text-white mt-5 rounded p-2">Envoyer</button>
        </form>
    </div>
</x-layouts.main-layout>