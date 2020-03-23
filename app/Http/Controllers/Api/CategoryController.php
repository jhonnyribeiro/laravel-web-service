<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCategoryFormRequest;
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

    public function store(StoreUpdateCategoryFormRequest $request)
    {
        $catgory = $this->category->create($request->all());

        return response()->json($catgory, 201);
    }

    public function update(StoreUpdateCategoryFormRequest $request, $id)
    {
        $category = $this->category->find($id);

        if (!$category) {
            return response()->json(['error' => 'Not found'], 404);
        }

        $category->update($request->all());

        return response()->json($category);
    }

    public function delete($id)
    {
        $category = $this->category->find($id);

        if (!$category) {
            return response()->json(['error' => 'Not found'], 404);
        }

        $category->delete();

        return response()->json(['success' => true], 204);


    }
}
