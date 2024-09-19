<?php
namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = Hobby::all();
        return view('hobbies.index', compact('hobbies'));
    }

    public function create()
    {
        return view('hobbies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Hobby::create($request->all());

        return redirect()->route('hobbies.index')
                         ->with('success', 'Hobby created successfully.');
    }
    public function show($hobby_id)
    {
        $hobby = Hobby::where('hobby_id', $hobby_id)->firstOrFail();
        return view('hobbies.show', compact('hobby'));
    }
    
    public function edit($hobby_id)
    {
        $hobby = Hobby::where('hobby_id', $hobby_id)->firstOrFail();
        return view('hobbies.edit', compact('hobby'));
    }
    
    public function destroy($hobby_id)
    {
        $hobby = Hobby::where('hobby_id', $hobby_id)->firstOrFail();
        $hobby->delete();
    
        return redirect()->route('hobbies.index')
                         ->with('success', 'Hobby deleted successfully.');
    }
    public function update(Request $request, Hobby $hobby)
{
    $request->validate([
        'name' => 'required'
    ]);

    $hobby->update($request->all());

    return redirect()->route('hobbies.index')
                     ->with('success', 'Hobby updated successfully.');
}
    
}
