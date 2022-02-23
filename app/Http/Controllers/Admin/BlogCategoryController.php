<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_categories = BlogCategory::all();
        return view('admin.blog_categories.index', ['blog_categories' => $blog_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);


        $blog_category = new BlogCategory();
        $blog_category->title = $request->title;
        $blog_category->detail = $request->detail;
        $blog_category->save();


        $image_path = null;
        if ($request->has('image')) {
            $image_path = $request->image->storeAs('/blog_category/category_no_' . $blog_category->id, 'image.jpg', 'public');
        }

        $blog_category->image = $image_path;
        $blog_category->save();


        return redirect()->route('blog_categories.index')->with('success', 'Blog Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog_category = BlogCategory::findOrFail($id);
        return view('admin.blog_categories.edit', ['blog_category' => $blog_category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'blog_id' => 'required',
            'title' => 'required',
        ]);


        $blog_category = BlogCategory::find($request->blog_id);
        $blog_category->title = $request->title;
        $blog_category->detail = $request->detail;
        $blog_category->save();


        $image_path = $blog_category->image;
        if ($request->has('image')) {
            $image_path = $request->image->storeAs('/blog_category/category_no_' . $blog_category->id, 'image.jpg', 'public');
        }

        $blog_category->image = $image_path;
        $blog_category->save();

        return redirect()->route('blog_categories.index')->with('success', 'Blog Edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_category = BlogCategory::findOrFail($id);

        try {
            $blog_category->delete();
        } catch (\Exception $exception) {
            return back()->with('error', 'Blog Category Cannot be deleted. This category is already present in a blog. ');
        }

        return back()->with('success', 'Blog Category Deleted Successfully');
    }
}
