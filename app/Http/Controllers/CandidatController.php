<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kids.signUp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valider les entrées utilisateur
    // dd($request);
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|unique:candidats|max:255',
            'niveau' => 'required|string|max:255',
            'ecole' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:150',
            'nom_tuteur' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'ville' => 'required|string|max:255',
            'sexe' => 'required|string|in:homme,femme',
            'annee_edition' => 'required|date'
    ]);
// retourene un 402 si echec de validation
    if ($validator->fails()) {
        return response()->json(['errors'=>$validator->errors()], 422);
    }


// Si les données sont invalides, rediriger vers la page précédente avec les erreurs
    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Creation de L'user en BD
    $candidat = new Candidat();
    $candidat->nom = $request->nom;;
    $candidat->email = $request->email;
    $candidat->niveau = $request->niveau;
    $candidat->ecole = $request->ecole;
    $candidat->age = $request->age;
    $candidat->nom_tuteur = $request->nom_tuteur;
    $candidat->phone = $request->phone;
    $candidat->ville = $request->ville;
    $candidat->sexe = $request->sexe;
    $candidat->annee_edition = $request->annee_edition;
    $candidat->save();


    // Rediriger l'utilisateur vers une page de confirmation ou de succès
    return redirect()->route('acceuil')->with('success', 'L\'utilisateur a été ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidat $candidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
        //
    }
}
