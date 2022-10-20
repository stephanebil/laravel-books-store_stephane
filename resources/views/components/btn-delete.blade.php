@props(['book'])
<div class="">
        <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Es-tu sûr de vouloir supprimer ce livre?')">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 text-white p-2 rounded" type="submit">Supprimer</button>
    </form>
</div>