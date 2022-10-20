<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('updated_at','DESC')->paginate(10);
        return view('pages.home', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|max:255',
            'description'=>'required|max:1000',
            'image'=> 'required|max:2000|mimes:png,jpg',
            'author'=>'required|max:50',
            'price'=>'required|max:3',
            'nombre_pages' =>'required|max:4',
        ]);

        $validateImg = $request->file('image')->store('cover');

        // save to db
        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $validateImg,
            'author' => $request->author,
            'price' => $request->price,
            'nombre_pages' => $request->nombre_pages,
            'created_at' =>now()
        ]);

        // redirect
        return redirect()->route('home')->with('status', 'Livre enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('pages.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('pages.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        // validate form
         $request->validate([
            'title'=> 'required|max:255',
            'description'=>'required|max:1000',
            'image'=> 'required|sometimes|max:2000|mimes:png,jpg',
            'author'=>'required|max:50',
            'price'=>'required|max:3',
            'nombre_pages' =>'required|max:4',
        ]);


        // 2 if image
        if ($request->hasFile('image')){
        //delete the images
        Storage::delete($book->image);
        // store new image in storage
        $book->image = $request->file('image')->store('cover');
        }

        //3 update and store to DB
        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $book->image,
            'author' => $request->author,
            'price' => $request->price,
            'nombre_pages' => $request->nombre_pages,
            'created_at' =>now()
        ]);

        //4 redirect
        return redirect()->route('books.show', $book->id)->with("status", 'modification ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('home')->with('status', 'livre supprimé!');

    }
}
