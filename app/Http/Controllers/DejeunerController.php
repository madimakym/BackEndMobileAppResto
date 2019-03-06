<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Dejeuner;


class DejeunerController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'DÉJEUNER';

        $resultats = DB::table('dejeuner')->select('*')->paginate(10);

        return view('dejeuner.index', compact('resultats', 'title'));

    }

    public function create()
    {
        $title = 'DÉJEUNER';
        return view('dejeuner.create', compact('title'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'description' => 'required',
            'prix' => 'required|integer',
            'image' => 'required'
        ]);

        $libelle = request('libelle');  
        $description = request('description', null);  
        $prix = request('prix');  
        $image = $request['image'];

        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('images',$image->getClientOriginalName());
        }

     

        DB::table('dejeuner')->insert(
            [
                'libelle' => $libelle,
                'description' => $description,
                'prix' => $prix,
                'image' => $imageName
            ]
        );
        return redirect()->route('dejeuner.index')
                        ->with('success','produit ajouté.');
    }

   
    public function show($id)
    {
        $title = 'DÉJEUNER';

        $resultat = DB::table('dejeuner')->where('id', '=', $id)->first();
        return view('dejeuner.show', compact('resultat', 'title'));
    }

    
    public function edit($id)
    {
        $title = 'DÉJEUNER';

        $resultat = DB::table('dejeuner')->where('id', '=', $id)->first();
        return view('dejeuner.edit', compact('resultat', 'title'));
    }

   
    public function update(Request $request, $id)
    {

        $libelle = $request['libelle'];
        $description = $request['description'];
        $prix = $request['prix'];
        $category_id = $request['category_id'];
        $image = $request['image'];
        $old_image = $request['old_image'];

        $image=$request->image;
        
        if($image == null){
            
            $new_image=$old_image;

        } else {
            $new_image = $image->getClientOriginalName();
            $image->move('images',$new_image);
        }

        DB::table('dejeuner')
            ->where('id', '=', $id)
            ->update(
                array(
                    'libelle' => $libelle,
                    'description' => $description,
                    'prix' => $prix,
                    'image' => $new_image
                )
            );
        return redirect()->route('dejeuner.index');
    }

  
    public function destroy($id)
    {
        DB::table('dejeuner')->where('id', '=', $id)->delete();
        return redirect()->route('dejeuner.index')
                        ->with('success','produit supprimé');
    }
    
}
