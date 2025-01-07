<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Category;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        $category_id = $request->input('category_id');
        $categories = Category::all();
        
        $films = Film::when($category_id, function($query) use ($category_id) {
            return $query->where('category_id', $category_id);
        })->with('category')->get();

        return view('films.index', compact('films', 'categories', 'category_id'));
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    public function edit(Film $film)
    {
        $categories = Category::all();
        return view('films.edit', compact('film', 'categories'));
    }

    public function update(Request $request, Film $film)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id'
        ]);

        $film->update($validated);
        return redirect()->route('films.index')->with('success', 'Film updated successfully');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')->with('success', 'Film deleted successfully');
    }
}