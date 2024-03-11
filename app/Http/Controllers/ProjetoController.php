<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    private $project;

    public function __construct(Projeto $project)
    {
        $this->project = $project;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Projeto::orderby('id', 'DESC')->get();
        return view('admin.pages.project', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // upload de image
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            # code...
            $image = $request->file('img');
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            $image->move(public_path('upload/'), $nameFile);
            $this->project->img = $nameFile;
            $this->project->name = $request->name;
            $this->project->desc = $request->desc;
            $this->project->tec = $request->tec;
            $this->project->link = $request->link;
            $this->project->save();
            return redirect()->back()->with('msg', 'Noticia cadastrada com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projeto $projeto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projeto $projeto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $this->project->destroy($request->id);
        return redirect()->back()->with('msg', 'Projeto deletado com sucesso!');
        
    }
}
