<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
   * Instantiate a new controller instance.
   *
   * @return void
   */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Display a quantity of the resources.
    *
    * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalBooks = Book::count();
        $totalCategories = Category::count();

        return view('dashboard.index', compact('totalBooks', 'totalCategories'));
    }
}
