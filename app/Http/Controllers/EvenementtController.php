<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Evenement;
use Illuminate\Http\Request;

class EvenementtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $evenements = Evenement::latest()->paginate($perPage);
        } else {
            $evenements = Evenement::latest()->paginate($perPage);
        }

        return view('add_evenement.evenements.index', compact('evenements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('add_evenement.evenements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Evenement::create($requestData);

        return redirect('admin/evenements')->with('flash_message', 'Evenement added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $evenement = Evenement::findOrFail($id);

        return view('add_evenement.evenements.show', compact('evenement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $evenement = Evenement::findOrFail($id);

        return view('add_evenement.evenements.edit', compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $evenement = Evenement::findOrFail($id);
        $evenement->update($requestData);

        return redirect('admin/evenements')->with('flash_message', 'Evenement updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Evenement::destroy($id);

        return redirect('admin/evenements')->with('flash_message', 'Evenement deleted!');
    }
}
