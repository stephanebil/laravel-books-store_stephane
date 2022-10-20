<x-layouts.main-layout title="Bienvenue sur notre librairie">
	<div class="py-20 px-24">
        <h1 class="text-center font-bold text-4xl text-green-700 uppercase">List Books</h1>
        <div class="">
            @props(['title', 'price', 'author'])
        <!-- table -->
            <div class="overflow-x-auto mt-16 ">
                <table class="table w-full border-8">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom du livre</th>
                            <th>prix</th>
                            <th>auteur</th>
                            <th>editer</th>
                            @auth 
                                <th>modifier</th>
                            @endauth
                            @auth
                                <th>Supprimer</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="hover:text-blue-500 border-2 h-16 text-center">
                                <th> {{ $book->id }} </th>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->author }}</td>
                                <td>
                                    <a href="books/{{ $book->id }}" class="hover:font-bold hover:text-xl">voir</a>
                                </td>
                                @auth    
                                    <td>
                                        {{-- update --}}
                                        <a href="{{ route('books.edit', $book->id) }}" class="bg-blue-500 p-2 rounded text-white">Modifier</a>
                                    </td>
                                @endauth
                                @auth    
                                    <td>
                                        {{-- delete --}}
                                        <x-btn-delete :book="$book"/>
                                    </td>
                                @endauth
                            </tr>
                    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="py-10">
            {{ $books->links() }}	
        </div>
    </div>
    
</x-layouts.main-layout>
    
