<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;


class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'pagina Card';

         $cards = Card::All();

        return view('welcome', compact('title', 'cards'));
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
    public function store(Request $request)
    {

        $request->validate(
            [    
            'title' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'description' => 'required',
            ],
            [   
            'title.required' => 'non hai compilato il campo titolo',
            'thumb.required' => 'non hai compilato il campo img',
            'price.required' => 'non hai compilato il campo prezzo',
            'series.required' => 'non hai compilato il campo serie',
            'sale_date.required' => 'non hai compilato il campo serie',
            'description.required' => 'non hai compilato il campo descizione',
            ]
        );

         $form_data = $request->all();
         $new_card = new Card();
         $new_card->fill( $form_data );

         $new_card->save();



          return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $card = Card::findOrFail($id);
    
       return view('show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card = Card::findOrFail($id);
        return view('edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $form_data = $request->all();
        $card = Card::findOrFail($id);
        $card->update($form_data);


        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $card = Card::findOrFail($id);
        $card->delete();
        return redirect()->route('home');
    }
}
