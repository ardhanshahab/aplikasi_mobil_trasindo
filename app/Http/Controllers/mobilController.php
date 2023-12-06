<?php

namespace App\Http\Controllers;
use App\Models\mobil;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class mobilController extends Controller
{
   /**
     * index
     *
     * @return View
     */
    public function index()
    {
        //get posts
        $posts = mobil::latest()->paginate(5);

        //render view with posts
        return view('admin.index', compact('posts'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required|min:5',
            'merek'     => 'required|min:5',
            'jenis'     => 'required|min:5',
            'tahun'     => 'required|min:4',
            'cc'     => 'required|min:4',
            'plat'     => 'required|min:5',
            'warna'     => 'required|min:1',
            'status'     => 'required|min:1',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        mobil::create([
            'image'     => $image->hashName(),
            'nama'     => $request->nama,
            'merek'     => $request->merek,
            'jenis'     => $request->jenis,
            'tahun'     => $request->tahun,
            'cc'     => $request->cc,
            'plat'     => $request->plat,
            'warna'     => $request->warna,
            'status'     => $request->status,
        ]);

        //redirect to index
        return redirect()->route('index.mobil')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id)
    {
        //get post by ID
        $post = mobil::findOrFail($id);

        //render view with post
        return view('admin.show', compact('post'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id)
    {
        //get post by ID
        $post = mobil::findOrFail($id);

        //render view with post
        return view('admin.edit', compact('post'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required|min:5',
            'merek'     => 'required|min:5',
            'jenis'     => 'required|min:5',
            'tahun'     => 'required|min:5',
            'cc'     => 'required|min:5',
            'plat'     => 'required|min:5',
            'warna'     => 'required|min:5',
            'status'     => 'required|min:5',
        ]);

        //get post by ID
        $post = mobil::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'nama'     => $request->nama,
                'merek'     => $request->merek,
                'jenis'     => $request->jenis,
                'tahun'     => $request->tahun,
                'cc'     => $request->cc,
                'plat'     => $request->plat,
                'warna'     => $request->warna,
                'status'     => $request->status,
            ]);

        } else {

            //update post without image
            $post->update([
                'nama'     => $request->nama,
                'merek'     => $request->merek,
                'jenis'     => $request->jenis,
                'tahun'     => $request->tahun,
                'cc'     => $request->cc,
                'plat'     => $request->plat,
                'warna'     => $request->warna,
                'status'     => $request->status,
            ]);
        }

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id)
    {
        //get post by ID
        $post = mobil::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
