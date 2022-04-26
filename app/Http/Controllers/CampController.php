<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampCreateRequest;
use App\Http\Requests\CampUpdateRequest;
use App\Models\Camp;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\View\View;


class CampController extends Controller
{

    public function index(): View
    {
        return view('camp.index', [
            'camps' => Camp::paginate(10),
        ]);
    }


    public function create(): View
    {
        return view('camp.create')->with([
            'options' => City::all(),
        ]);
    }


    public function store(CampCreateRequest $request)
    {
        Camp::create($request->validated());

        return to_route('camps.index');
    }


    public function show(Camp $camp): View
    {
        return view('camp.show', [
            'camp' => $camp,
        ]);
    }


    public function edit(Camp $camp): View
    {
        return view('camp.edit', [
            'camp' => $camp,
            'options' => City::all(),
            'selected' => $camp->city->id,
        ]);
    }


    public function update(Camp $camp, CampUpdateRequest $request)
    {
        $camp->update($request->validated());

        return to_route('camps.index', $camp);
    }


    public function destroy(Camp $camp)
    {
        $camp->delete();

        return to_route('camps.index');
    }
}
