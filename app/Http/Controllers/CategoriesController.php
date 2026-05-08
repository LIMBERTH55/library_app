<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('books')
            ->orderBy('name')
            ->paginate(20);

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $category->load('books.authors');
        return view('categories.show', compact('category'));
    }

    // Métodos placeholders (Guía 7)
    public function create() { /* pendiente */ }
    public function store(Request $request) { /* pendiente */ }
    public function edit(Category $category) { /* pendiente */ }
    public function update(Request $request, Category $category) { /* pendiente */ }
    public function destroy(Category $category) { /* pendiente */ }
}
