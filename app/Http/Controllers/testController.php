<?php

namespace App\Http\Controllers;
 
use App\Models\Test;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {


        if (App::environment('local')) {
            // The environment is local
            echo 'Working';
        }
         
        if (App::environment(['local', 'staging'])) {
            // The environment is either local OR staging...
            echo 'Not Working';
        }



        $test = Test::latest()->paginate(5);
        
        return view('test.index',compact('test'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('test.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //dd($request->all());
        
        Test::create($request->all());
         
        return redirect()->route('test.index')
                        ->with('success','Product created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Test $test): View
    {
        return view('test.show',compact('test'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test): View
    {
        return view('test.edit',compact('test'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        $test->update($request->all());
        
        return redirect()->route('test.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test): RedirectResponse
    {
        $test->delete();
         
        return redirect()->route('test.index')
                        ->with('success','Product deleted successfully');
    }
}
?>