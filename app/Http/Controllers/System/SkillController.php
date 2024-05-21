<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Audit\category;
use App\Models\Audit\skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $skills = skill::all();

        return view('directories.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all(); // Retrieve all skill categories from the database

        return view('directories.skills.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'skill_category_id' => 'required',
            'skill_title' => 'required',
            'skill_description' => 'required',
        ]);
        $skill = new skill([
            'skill_category_id' => $request->get('skill_category_id'),
            'skill_title' => $request->get('skill_title'),
            'skill_description' => $request->get('skill_description'),
        ]);

        $skill->save();

        return redirect()->route('directories.skills.index')->with('success', 'Skill created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $skill = skill::findOrFail(Crypt::decrypt($id));

        return view('summaries.skills.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $encrypted_id)
    {
        $id = Crypt::decrypt($encrypted_id);
        $skill = Skill::findOrFail($id);
        $categories = Category::all();

        return view('directories.skills.edit', compact('skill', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {


        $skill = Skill::findOrFail($id);


        $skill->update([
            'skill_title' => $request->input('skill_title'),
            'skill_description' => $request->input('skill_description'),

        ]);

        return redirect()->route('directories.skills.index')->with('success', 'Skill updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */


    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        //
        $skill = skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('directories.skills.index')->with('success', 'Skill deleted successfully.');
    }
}
