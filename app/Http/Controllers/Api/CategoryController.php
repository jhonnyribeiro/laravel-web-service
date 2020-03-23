<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index(Request $request, Category $category)
    {
        $categories = $category->getResults($request->name);

        return response()->json($categories, 200);
    }

    public function store(Request $request)
    {
        $catgory = $this->category->create($request->all());

        return response()->json($catgory, 201);
    }
}
