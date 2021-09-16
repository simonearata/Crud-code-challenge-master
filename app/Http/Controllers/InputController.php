<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputs = Input::all();
        return view('inputs.index', compact('inputs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inputs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_input = new Input();
        $new_input->nome_input = $data['nome_input'];
        $new_input->title = $data['title'];
        $new_input->content = $data['content'];
        $new_input->url = $data['url'];
        $new_input->save();

        return redirect()->route('inputs.index', $new_input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $input = Input::find($id);
        if($input){
            return view('inputs.show', compact('input'));
        }
        abort(404, 'Input non presente nel database');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $input = Input::find($id);
        if($input){
            return view('inputs.edit', compact('input'));
        }
        abort(404, 'Input non presente nel database');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Input $input)
    {
        $data = $request->all();
        $input->update($data);

        return redirect()->route('inputs.show', $input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Input $input)
    {
        $input->delete();

        return redirect()->route('inputs.index');
    }
}
