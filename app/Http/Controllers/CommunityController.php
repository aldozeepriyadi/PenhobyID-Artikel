<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Hobby;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        $communities = Community::with('hobby')->get();
        return view('communities.index', compact('communities'));
    }

    public function create()
    {
        $hobbies = Hobby::all();
        return view('communities.create', compact('hobbies'));
    }
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'hobby_id' => 'required',
        'logo_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    if ($request->hasFile('logo_url')) {
        // Generate unique name for the image file
        $imageName = time().'.'.$request->logo_url->getClientOriginalExtension();
        
        // Define the path to save the image
        $destinationPath = public_path('uploads/logos/');
        
        // Move the image to the defined path
        $request->file('logo_url')->move($destinationPath, $imageName);
        
        // Save the relative path or URL in the database
        $imageUrl = 'uploads/logos/' . $imageName;
    }

    // Save the community data along with the logo URL to the database
    Community::create([
        'name' => $request->name,
        'hobby_id' => $request->hobby_id,
        'logo_url' => $imageUrl // Save the logo URL here
    ]);

    return redirect()->route('communities.index')
                     ->with('success', 'Community created successfully.');
}




    public function show(Community $community)
    {
        return view('communities.show', compact('community'));
    }

    public function edit($community_id)
    {
        $community = Community::where('community_id', $community_id)->firstOrFail();
        $hobbies = Hobby::all();
        return view('communities.edit', compact('community', 'hobbies'));
    }

    public function update(Request $request, Community $community)
    {
    $request->validate([
        'name' => 'required',
        'hobby_id' => 'required',
        'logo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Validasi untuk file gambar
    ]);

    // Handle file upload
    if ($request->hasFile('logo_url')) {
        // Hapus logo lama jika ada
        if ($community->logo_url && file_exists(public_path($community->logo_url))) {
            unlink(public_path($community->logo_url));
        }

        // Generate unique name for the image file
        $imageName = time().'.'.$request->logo_url->getClientOriginalExtension();
        
        // Define the path to save the image
        $destinationPath = public_path('uploads/logos/');
        
        // Move the image to the defined path
        $request->file('logo_url')->move($destinationPath, $imageName);
        
        // Update the logo URL in the request
        $community->logo_url = 'uploads/logos/' . $imageName;
    }

    // Update the community with the new data
    $community->update([
        'name' => $request->name,
        'hobby_id' => $request->hobby_id,
        'logo_url' => $community->logo_url // Save the logo URL if updated
    ]);

    return redirect()->route('communities.index')
                     ->with('success', 'Community updated successfully.');
}


    public function destroy(Community $community)
    {
        $community->delete();

        return redirect()->route('communities.index')
                         ->with('success', 'Community deleted successfully.');
    }
}
