<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index(Category $category)
    {
        return $category->products()->paginate(25);
    }
}
