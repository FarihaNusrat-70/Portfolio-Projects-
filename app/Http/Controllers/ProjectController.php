<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        try {
            $projectDatas = Project::all();
            return view('portfolioProjects.index', compact('projectDatas'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        return view('portfolioProjects.create');
    }

    public function saveProject(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $filename);
            }

            $project = new Project;
            $project->title = $request->title;
            $project->description = $request->description;
            $project->project_url = $request->project_url;
            $project->image = $filename ?? null;
            $project->status = $request->status;
            $project->save();

            return redirect()->route('index')->with('success', 'Project created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function viewProjectData($id)
    {
        try {
            $projectData = Project::findOrFail($id);
            return view('portfolioProjects.view', compact('projectData'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function editProject($id)
    {
        try {
            $projectData = Project::findOrFail($id);
            return view('portfolioProjects.edit', compact('projectData'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateProject(Request $request)
    {
        try {
            $project = Project::findOrFail($request->id);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $filename);
                $project->image = $filename;
            }

            $project->title = $request->title;
            $project->description = $request->description;
            $project->project_url = $request->project_url;
            $project->status = $request->status;
            $project->save();

            return redirect()->route('index')->with('success', 'Project updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deleteProject($id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->delete();
            return redirect()->route('index')->with('success', 'Project deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
