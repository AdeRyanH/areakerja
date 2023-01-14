<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $post = Article::all();

        return view('admin.article.index', compact('post'));
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'ringkasan' => 'required',
            'content'   => 'required',
            'gambar'    => 'required',
        ]);

        $namaFile = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img/artikel'), $namaFile);
        $post       = Article::all();
        $slug_judul = Str::slug($request->get('judul'));
        $post       = Article::create([
            'judul'     => $request->judul,
            'ringkasan' => $request->ringkasan,
            'content'   => $request->content,
            'gambar'    => $namaFile,
            'slug'      => $slug_judul,
        ]);

        return redirect()->route('admin.article.index');
    }

    public function destroy(Article $posts, $id)
    {
        $article = Article::find($id);
        $article->delete();

        return back();
    }

    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, $id)
    {
        // $namaFile = time().'.'.$request->gambar->extension();
        // $request->gambar->move(public_path('img/artikel'), $namaFile);

        // return redirect()->route('admin.article.index', compact('post'));

        // $article->update($request->all());
        // $post = Article::all();
        $article = Article::find($id);

        if ($request->gambar !== '') {
            $path     = public_path() . '/img/artikel';
            $namaFile = time() . '.' . $request->gambar->extension();
            $file     = $request->gambar;
            $filename = $namaFile;
            $file->move($path, $filename);

            $post_data = [
                'judul'     => $request->judul,
                'ringkasan' => $request->ringkasan,
                'content'   => $request->content,
                'gambar'    => $filename,
            ];

            $article->update($post_data);
        }

        return redirect()->route('admin.article.index');
    }

    public function show(Article $article)
    {
        return view('admin.article.show', compact('article'));
    }
}
