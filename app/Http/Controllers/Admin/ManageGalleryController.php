<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ManageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = PhotoGallery::paginate(8);
        $album_thumbnails = Image::all()->where('image_type' , '=' , 'ALBUM_THUMBNAIL');


        return view('admin.gallery.photo_gallery',[
            'albums' => $albums,
            'album_thumbnails' => $album_thumbnails,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'album_name'=> 'required',
//            'published_at'=>'required',
        ]);

        $file = $request->input('file');
        if ($file == null)
            return back()->with('error', 'Please Wait until all the files are uploaded Successfully');

        $album = new PhotoGallery;
        $album->album_name = $request->album_name;
//        $album->published_at = $request->published_at;

        $album->save();

        $server_id = $file;
        $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);
        $temporary_path = $filepond->getPathFromServerId($server_id);

        // Path to store in DB
        $db_path = 'uploaded_file/photo_gallery/gallery_thumbnails/' . $album->id . '/' . time() . '.jpg';

        if (!file_exists(storage_path() . '/app/public/photo_gallery/gallery_thumbnails/' . $album->id . '/')) {
            mkdir(storage_path() . '/app/public/uploaded_file/photo_gallery/gallery_thumbnails/' . $album->id . '/', 0777, TRUE);
        }
        $final_location = storage_path('app/public/' . $db_path);
        File::move($temporary_path, $final_location);

        // Deleting the Temporary File
        $path_info = pathinfo($temporary_path, PATHINFO_DIRNAME);
        $path_info = array_filter(explode('/', $path_info));
        $result = array_pop($path_info);

        $path_slice = explode('\\', $result);
        $last_path = end($path_slice);
        File::deleteDirectory(storage_path() . '/app/filepond/' . $last_path);

//        $event_new = Events::find($event->id);
        $image = new Image();
        $image->image_url = $db_path;
        $image->image_type = 'ALBUM_THUMBNAIL';
        $image->album_name = $request->album_name;
        $album->images()->save($image);

        return redirect()->route('gallery_index')->with('success','Album has been added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->input('file');
        $album_name = $request->input('album_name');
//        dd($files);
        $album_id = $request->input('album_id');

        foreach ($files as $index => $file) {
            if ($file == null)
                return back()->with('error', 'Please Wait until all the files are uploaded Successfully');
            $server_id = $file;
            $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);
            $temporary_path = $filepond->getPathFromServerId($server_id);

            // Path to store in DB
            $db_path = 'uploaded_file/photo_gallery/gallery/' . $album_id . '/' . $index . '-' . time() . '.jpg';

            if (!file_exists(storage_path() . '/app/public/uploaded_file/photo_gallery/gallery/' . $album_id . '/')) {
                mkdir(storage_path() . '/app/public/uploaded_file/photo_gallery/gallery/' . $album_id . '/', 0777, TRUE);
            }
            $final_location = storage_path('app/public/' . $db_path);
            File::move($temporary_path, $final_location);

            // Deleting the Temporary File
            $path_info = pathinfo($temporary_path, PATHINFO_DIRNAME);
            $path_info = array_filter(explode('/', $path_info));
            $result = array_pop($path_info);

            $path_slice = explode('\\', $result);
            $last_path = end($path_slice);
            File::deleteDirectory(storage_path() . '/app/filepond/' . $last_path);

            $album =  PhotoGallery::find($album_id);
            $image = new Image();
            $image->image_url = $db_path;
            $image->image_type = 'GALLERY';
            $image->album_name = $album_name;
            $album->images()->save($image);
        }

        return redirect()->route('gallery_show',[$album_id])->with('success', 'Photo uploaded Successfully');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = PhotoGallery::findOrFail($id);
        $images = $album->images()->where('image_type', '=', 'GALLERY')->paginate(8);

        return view('admin.gallery.photo_gallery_show',[
            'album'=>$album,
            'images'=> $images,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'album_name'=> 'required',
            'published_at'=>'required',
        ]);
        $id = $request->input('album_id');
        $album = PhotoGallery::find($id);
        $album->album_name = $request->album_name;
        $album->published_at = $request->published_at;

        $album->save();

        $file = $request->input('file');
        if ($file != null){
            Image::where('image_type', 'ALBUM_THUMBNAIL')->where('imageable_id', $id)->delete();

            $server_id = $file;
            $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);
            $temporary_path = $filepond->getPathFromServerId($server_id);

            // Path to store in DB
            $db_path = 'uploaded_file/photo_gallery/gallery/' . $album->id . '/' . time() . '.jpg';

            if (!file_exists(storage_path() . '/app/public/uploaded_file/photo_gallery/gallery/' . $album->id . '/')) {
                mkdir(storage_path() . '/app/public/uploaded_file/photo_gallery/gallery/' . $album->id . '/', 0777, TRUE);
            }
            $final_location = storage_path('app/public/' . $db_path);
            File::move($temporary_path, $final_location);

            // Deleting the Temporary File
            $path_info = pathinfo($temporary_path, PATHINFO_DIRNAME);
            $path_info = array_filter(explode('/', $path_info));
            $result = array_pop($path_info);

            $path_slice = explode('\\', $result);
            $last_path = end($path_slice);
            File::deleteDirectory(storage_path() . '/app/filepond/' . $last_path);

//        $event_new = Events::find($event->id);
            $image = new Image();
            $image->image_url = $db_path;
            $image->image_type = 'ALBUM_THUMBNAIL';
            $image->album_name = $request->album_name;
            $album->images()->save($image);

        }

        return redirect()->route('gallery_index')->with('success','Album has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('album_id');
        $images = Image::where('imageable_id', $id)->get();
        foreach ($images as $image){
            if (file_exists(storage_path('app/public/' . $image->image_url))){
                unlink(storage_path('app/public/' . $image->image_url));
            }
        }
        PhotoGallery::where('id',$id)->delete();
        Image::where('imageable_id', $id)->delete();
        return redirect()->route('gallery_index')->with('success','Album has been deleted');
    }

    public function goto_upload($album_id)
    {
        $album = PhotoGallery::findOrFail($album_id);
        return view('admin.gallery.photo_upload',[
            'album'=>$album
        ]);
    }

    public function delete_photo(Request $request)
    {


        $id = $request->input('photo_id');
        $album_id = $request->input('album_id');
        $image = Image::where('id',$id)->where('image_type','GALLERY')->first();
        if (file_exists(storage_path('app/public/' . $image->image_url))){
            unlink(storage_path('app/public/' . $image->image_url));
        }

        Image::where('id', $id)->where('image_type', 'GALLERY')->delete();


        return redirect()->route('gallery_show',[$album_id])->with('success', 'Photo has been Deleted Successfully');
    }

    public function showGalleryFront(){
        $albums = PhotoGallery::paginate(8);
        $album_thumbnails = Image::all()->where('image_type' , '=' , 'ALBUM_THUMBNAIL');


        return view('web.gallery.photo-gallery',[
            'albums' => $albums,
            'album_thumbnails' => $album_thumbnails,

        ]);
    }

    public function singleGalleryFront($id){
        $album = PhotoGallery::findOrFail($id);
        $images = $album->images()->where('image_type', '=', 'GALLERY')->paginate(8);

        return view('web.gallery.photo-gallery-single',[
            'album'=>$album,
            'images'=> $images,
        ]);
    }
}
