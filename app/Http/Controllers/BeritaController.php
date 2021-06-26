<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Models\Berita;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    private $fileName = "";
    
    public function index()
    {
        $articles = Berita::all();
        return view('news', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateNewsRequest $request)
    {
        $news = Berita::create([
            'title' => $request->title,
            'author' => $request->author,
            'user_id' => Auth::user()->id,
            'kementerian_id' => Auth::user()->kementerian_id,
            'content' => $request->editor,
            'filename' => $this->fileName
        ]);
        return redirect()->back()->with('success', 'News Uploaded');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $this->fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $this->fileName = $this->fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $this->fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $this->fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita, Request $request)
    {
        $berita = $berita->find($request->id);
        $berita->delete();
        return redirect()->route('news')->with('message', 'News deleted successfully');
    }

    public function index_berita() {
        $articles = Berita::all();
        return view('berita', ['articles' => $articles]);
    }

    public function getNews($id) {
        $articles = Berita::find($id);
        return view('isiberita', ['articles' => $articles]);
    }
}
