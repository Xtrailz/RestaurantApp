<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.index',[
            "menus" => menu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("menu.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nameMenu' => 'required',
            'descMenu' => 'required',
            'photoMenu' => 'image|file',
            'price' => 'required'
        ]);

        if( $request->file('photoMenu')){
            $validatedData['photoMenu'] = $request->file('photoMenu')->store('images');
        }

        Menu::create( $validatedData);

        return redirect("/menu")->with('success', "Menu data has bee created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        Menu::destroy( $Menu->id );

        if( $menu->photoMenu ) {
            Storage::delete( $menu->photoMenu);
        }

        return redirect("/menu")->with('success', "Menu data has been deleted");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', [
            'menu' => $menu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $rules = [
            'nameMenu' => 'required',
            'descMenu' => 'required',
            'photoMenu' => 'image|file',
            'price' => 'required'
        ];

        $validatedData = $request->validate( $rules );

        if( $request->file('photoMenu') ) {
            Storage::delete($menu->photoMenu);
            $validatedData['photoMenu'] = $request->file('photoMenu')->store('images');
        }

        Menu::where("id", $menu->id)->update( $validatedData );

        return redirect('/menu')->with('success', 'Menu data has been deleted');
    }
}
