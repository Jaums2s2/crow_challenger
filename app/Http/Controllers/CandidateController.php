<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidateRequest;
use App\Models\Model\ModelCandidate;

class CandidateController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidate = ModelCandidate::all();
        return view('index', compact('candidate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateRequest $request)
    {
     $cad=ModelCandidate::create([
            'nome'=>$request->nome,
            'logradouro'=>$request->logradouro,
            'cep'=>$request->cep,
            'celular'=>$request->celular,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'numero'=>$request->numero,
            'complemento'=>$request->complemento,
            'cidade'=>$request->cidade,
            'uf'=>$request->uf,
            'resumo'=>$request->resumo
        ]);
        if($cad){
            return redirect('candidates');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate=ModelCandidate::find($id);
        return view('show',compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate=ModelCandidate::find($id);
        return view('create', compact('candidate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CandidateRequest $request, $id)
    {
        ModelCandidate::where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'logradouro'=>$request->logradouro,
            'cep'=>$request->cep,
            'celular'=>$request->celular,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'complemento'=>$request->complemento,
            'cidade'=>$request->cidade,
            'uf'=>$request->uf,
            'resumo'=>$request->resumo
        ]);
        return redirect("candidates");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = ModelCandidate::destroy($id);
        return($del)?"sim":"não";
    }
}
