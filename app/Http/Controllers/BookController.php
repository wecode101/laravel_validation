<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\View;

class BookController extends Controller
{

    /**
     * Show the form to store book record.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */

    public function create()

    {

        return view('create');

    }

    /**
 * Store a new book record.
 *

     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */

    public function store(Request $request)

    {

        $request->validate([

            'title' => 'required|unique:books|max:100',

            'author' => 'required',

        ]);

        $title = $request->input('title');

        $author = $request->input('author');

        Book::create(['title' => $title, 'author' => $author]);

        session()->flash('message', 'Book stored successfully.');

        return redirect('/');

    }
}
