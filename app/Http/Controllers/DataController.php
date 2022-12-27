<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Models\Custom;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id = $id;
				$item = Custom::find($id);		
        $datas = Data::where('parent_id', $id)->get();
        return view('data.index', compact('id', 'datas', 'item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id = $id;
        return view('data.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        if ($request->type == 1) {
            Data::create([
                'name' => $request->name,
                'type' => $request->type,
                'size' => $request->size,
                'value' => $request->value,
                'parent_id' => $id
            ]);
            return redirect()->route('data.index', $id)->with('message', 'Поле было успешно добавлено');
        } else {

            Data::create([
                'name' => $request->name,
                'type' => $request->type,
                'size' => $request->size,
                'value' => $request->data_range,
                'parent_id' => $id
            ]);
            return redirect()->route('data.index', $id)->with('message', 'Поле было успешно добавлено');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Data::find($id);
        Data::destroy($id);
        return redirect()->route('data.index', $item->id)->with('message', 'Поле было успешно удалено');
    }
}
