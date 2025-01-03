<?php

namespace App\Http\Controllers\backend;



use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //INDEX
    public function skillIndex() {
       return view('backend.skills.skill');
    }

    // STORE SKILL'S
public function storeSkills(Request $request) {
    $request->validate([
        'title' => 'required',
        'type' => 'required',
    ]);
    
    $skillStore = new Skill();
    $skillStore->year = $request->year;
    $skillStore->institute = $request->institute; // Corrected this line
    $skillStore->title = $request->title;
    $skillStore->description = $request->description;
    $skillStore->type = $request->type;
    $skillStore->skill_range = $request->skill_range;
    $skillStore->save();
    
    // Use with() to flash the success message to the session
    return redirect()->route('backend.skill.all')->with('success', 'Skill stored successfully!'); // Corrected this line
}


// ALL SKILLS
public function allSlills() {
    $skills = Skill::latest()->simplePaginate(10);
    return view('backend.skills.allSkill',compact('skills'));
}


public function editSlill($id) {
    $editSkill = Skill::find($id);
    // dd($editSkill);
    return view('backend.skills.editSkill',compact('editSkill'));
}

// update skill
public function updateSkill(Request $request, $id) {
    $request->validate([
        'title' => 'required',
        'type' => 'required',
    ]);
    $skillUpdate = Skill::find( $id );
    $skillUpdate->year = $request->year;
    $skillUpdate->institute = $request->institute; // Corrected this line
    $skillUpdate->title = $request->title;
    $skillUpdate->description = $request->description;
    $skillUpdate->type = $request->type;
    $skillUpdate->skill_range = $request->skill_range;
    $skillUpdate->save();
    
    // Use with() to flash the success message to the session
    return redirect()->route('backend.skill.all')->with('success', 'Skill Updated successfully!');
    
}

// DELETE 
public function deleteSkill($id) {
    $deleteSkill = Skill::find($id)->delete();
    return redirect()->route('backend.skill.all')->with('delete','data successfully deleted');
}
}
