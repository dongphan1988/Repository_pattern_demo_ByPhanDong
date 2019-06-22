<?php

namespace App\Http\Controllers;

use App\Service\BookServiceInterface;
use App\Service\CategoryServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    protected $bookService;
    protected $categoryService;

    public function __construct(BookServiceInterface $bookService,
                                CategoryServiceInterface $categoryService
    )
    {
        $this->bookService = $bookService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $books = $this->bookService->getAll();

        return view('books/index', compact('books'));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function delete($id)
    {
        $book = $this->bookService->getById($id);
        return view('books.delete', compact('book'));
    }

    public function destroy($id)
    {
        $this->bookService->delete($id);
        Session::flash('success', 'DELETE BOOK SUCCESS');
        redirect()->route('book.index');
    }

    public function edit($id)
    {
        $book = $this->bookService->getById($id);
        $categories = $this->categoryService->getAll();
        return view('books/update', compact('book','categories'));
    }

    public function update(Request $request, $id)
    {
        $book = $request->all();
        $this->bookService->update($book,$id);
      return redirect()->route('books.index');
    }

    public function show($id)
    {
    }
}
