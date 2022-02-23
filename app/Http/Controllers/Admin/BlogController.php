<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('blog_category')->get();

        return view('admin.blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.create', ['categories' => $categories]);
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
            'category_id' => 'required',
            'author_name' => 'required',
            'title' => 'required',
            'detail' => 'required',
            'thumbnail_image' => 'required',
        ]);


        $detail = htmlentities($request->detail);

        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('imageFile');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $detail = $dom->saveHTML();

        $blog = new Blog();
        $blog->user_id = Auth::id();
        $blog->blog_category_id = $request->category_id;
        $blog->author_name = $request->author_name;
        $blog->title = $request->title;
        $blog->tags = $request->tags;
        $blog->published_date = now();
        $blog->detail = $detail;

        $blog->save();



        $thumbnail_path = $full_image_path = null;
        if ($request->has('thumbnail_image')) {
            $thumbnail_path = $request->thumbnail_image->storeAs('/blogs/blog_no_' . $blog->id, 'thumbnail_image.jpg', 'public');
        }

        if ($request->has('full_image')) {
            $full_image_path = $request->full_image->storeAs('/blogs/blog_no_' . $blog->id, 'full_image.jpg', 'public');
        }

        $blog->thumbnail_image = $thumbnail_path;
        $blog->full_image = $full_image_path;
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('admin.blogs.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        return view('admin.blogs.edit', ['categories' => $categories, 'blog' => $blog]);
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
            'category_id' => 'required',
            'author_name' => 'required',
            'title' => 'required',
            'detail' => 'required',
            'published_date' => 'required',
        ]);

//        dd($request->all());

        $blog =  Blog::find($request->blog_id);

        $detail = htmlentities($request->detail);

        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('imageFile');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $detail = $dom->saveHTML();


        $blog =  Blog::find($request->blog_id);
//        $full_img_url_old = $blog->full_image;

//        dd($full_img_url_old);
        $blog->user_id = Auth::id();
        $blog->blog_category_id = $request->category_id;
        $blog->author_name = $request->author_name;
        $blog->title = $request->title;
        $blog->detail = $detail;
        $blog->tags = $request->tags;
        $blog->published_date = $request->published_date;


        $thumbnail_path = $blog->thumbnail_image;
        $full_image_path = $blog->full_image;
//        dd($full_image_path);
        if ($request->has('thumbnail_image')) {
            $thumbnail_path = $request->thumbnail_image->storeAs('blogs/blog_no_' . $blog->id, 'thumbnail_image.jpg', 'public');
        }

        if ($request->has('full_image')) {
            $full_image_path = $request->full_image->storeAs('blogs/blog_no_' . $blog->id, 'full_image.jpg', 'public');
        }

        $blog->thumbnail_image = $thumbnail_path;
        $blog->full_image = $full_image_path;
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog Edited successfully');

//        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return back()->with('success', 'Blog Deleted Successfully');
    }

    public function home_blogs(){
        $blogs = Blog::with('blog_category')->get();

        return view('web.blogs.blogs', ['blogs' => $blogs]);
    }

    public function single_blog($blog_id)
    {
        $blog = Blog::find($blog_id);
        return view('web.blogs.single-blog', compact('blog'));
    }

}
