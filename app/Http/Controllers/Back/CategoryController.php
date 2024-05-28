<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        return view('back.category.index',[
            'categories' => Category::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required|string|min:3|max:255|unique:categories, slug',
        ]);
        Category::create($data);
        return back()->with('success', 'Sukses buat kategori');
    }

    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required|string|min:3|max:255|unique:categories, slug' . $id,
        ]);

        Category::find($id)->update($data);
        return back()->with('success', 'Sukses perbarui kategori');
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return back()->with('success', 'Sukses hapus kategori');
    }

}
