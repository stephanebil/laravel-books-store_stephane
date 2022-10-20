@props(['title', 'price', 'author'])
<!-- table -->
    <div class="overflow-x-auto mt-16">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom du livre</th>
                    <th>prix</th>
                    <th>auteur</th>
                    <th>editer</th>
                    <th>modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="hover:text-blue-500">
                        <th>  </th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->author }}</td>
                        <td>
                            <a href="" class="">editer</a>
                        </td>
                        <td>
                            {{-- update --}}
                            <a href="" class="btn btn-success text-white">Modifier</a>
                        </td>
                        <td>
                            {{-- delete --}}
                            <a href="" class="btn btn-success text-white">supprimer</a>
                        </td>
                    </tr>
               
                @endforeach
            </tbody>
        </table>
    </div>
    

<!-- end main content -->