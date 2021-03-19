<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dresses = Dress::all();
        
        $data = [
            'dresses'=>$dresses
        ];
        return view('dresses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.create');
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

        //validate
        $request->validate([
            'name' => 'required|max:255',
            'item_id' => 'required|unique:dresses|max:100',
            'color' => 'required|max:20',
            'size' => 'required|max:5',
            'price' => 'required|max:10',
            'overview' => 'required'
        ]);

        $newDress = new Dress;

        // $newDress->name = $data['name'];
        // $newDress->item_id = $data['item_id'];
        // $newDress->color = $data['color'];
        // $newDress->size = $data['size'];
        // $newDress->price = $data['price'];
        // $newDress->overview = $data['overview'];
        $newDress->fill($data);

        $newDress->save();

        return redirect()->route('dresses.index');
        // return redirect()->route('dresses.show', $newDress->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selected_dress = Dress::find($id);
    
        if ($selected_dress) {
            $data = [
                'selected_dress'=>$selected_dress
            ];
            return view('dresses.show', $data);
        }

        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $dress)
    {
        if ($dress) {
            $data = [
                'selected_dress'=>$dress
            ];
            return view('dresses.edit', $data);
        }
        
        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $dress)
    {
        $data = $request->all();

        $dress->update($data);

        return redirect()->route('dresses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $dress)
    {
        $dress->delete();

        return redirect()->route('dresses.index');

        // If no JS
        // return redirect()->route('dresses.index')->with('status', 'Item Deleted!');
    }
}
