<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

/**
 * Class SearchController
 */
class SearchController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function searchInEverything(Request $request)
  {
      $word=$request->adminlteSearch;
      $books = Category::where('name', 'LIKE', '%'.$word.'%')->paginate();
      $categories = Book::where('name', 'LIKE', '%'.$word.'%')->paginate();
      return view('dashboard.resultSearch', compact('categories'))
          ->with('i', (request()->input('page', 1) - 1) * $categories->perPage());
  }
}
