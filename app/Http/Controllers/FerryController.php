<?php

namespace App\Http\Controllers;

use App\Http\Requests\FerryRequest;
use App\Models\{Ferry, Equipement};
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;    
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class FerryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ferrys = Ferry::all();
        return view('index', compact('ferrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipements = Equipement::all();
        return view('create',compact('equipements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FerryRequest $ferryRequest) : RedirectResponse
    {
        // $ferry = Ferry::create($ferryRequest->all());
        $ferry = new Ferry;
        $ferry->nom = $ferryRequest->input('nom');
        $ferry->longueur = $ferryRequest->input('longueur');
        $ferry->largeur = $ferryRequest->input('largeur');
        $ferry->vitesse = $ferryRequest->input('vitesse');
        $ferry->photo = $ferryRequest->input('photo');
        
        // dd($equipements);

        if ($ferryRequest->hasFile('photo')){
            $ferryRequest->file("photo")->getPathname();
            $imageName=time().'.'.$ferryRequest->photo->extension();
            $ferryRequest->photo->move(public_path('images'), $imageName);
            $ferry->photo = $imageName;
        }
        $ferry->save();
        //dd($ferry);
        $ferry->equipements()->attach($ferryRequest->equipement_id);
        return redirect()->route('ferry.index')->with('info', "Le ferry a bien été ajouter !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Ferry $ferry)
    {
        $equipements = Equipement::all();
        return view('show', compact('ferry', 'equipements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ferry $ferry) : View
    {
        $equipements = Equipement::all();
        return view('edit', compact('ferry' , 'equipements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FerryRequest $ferryRequest, Ferry $ferry) : RedirectResponse
    {
        $ferryRequest->file('photo')->getPathname();
        $imageName = time().'.'.$ferryRequest->photo->extension();
        $ferryRequest->photo->move(public_path('images'), $imageName);
        $ferry->photo = $imageName;

        $ferry->nom= $ferryRequest->input('nom');
        $ferry->longueur= $ferryRequest->input('longueur'); 
        $ferry->largeur= $ferryRequest->input('largeur'); 
        $ferry->vitesse= $ferryRequest->input('vitesse');
        $ferry->equipements()->attach($ferryRequest->equipement_id);
        $ferry->save();
        return redirect()->route('ferry.index')->with('info', "Le ferry a bien été Modifier !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ferry $ferry)
    {
        $ferry->delete();
        return back()->with('info', "le ferry a été supprimer !");
        
    }



    public function creerPDF(){
        $ferrys = Ferry::all();
        $data = ['titre' => 'Liste des ferrys',
                 'date' => date("d/m/y"),
                 'ferrys' => $ferrys,
                ];
        $pdf = PDF::loadView('pdf', $data);
        return $pdf->download('ferrys_pdf.pdf');
    }
    
        
}