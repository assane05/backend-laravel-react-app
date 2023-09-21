<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        //return json response
        // affichage de tous les users
        return response()->json([
            'results' => $users
        ], 200);
    }

    public function store(UserStoreRequest $request) {
        try {
            // creation de l'utilisation 
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            // si le user est crée il retourne cette response
            return response()->json([
                'message' => 'user crée avec succès'
            ],200);
        } catch (\Exception $e) {
            // sinon il retourne cette response
            return response()->json([
                'message' => 'Woops il y a un probleme'
            ],500);
        }
    }

    public function show($id) {
        // user details
        // affichage des details du user a l'aide de son id  
        $users = User::find($id);
        // si l'id est different il va afficher un message d'erreur
        if(!$users){
            return response()->json([
                'message' => 'user not found'
            ], 404);
        }
        //si l'id est correcte il return la reponse en format json 
        return response()->json([
            'users' => $users
        ], 200);
    }

    public function update(UserStoreRequest $request, $id) {
        try {
            // mise à jour du user à l'aide de l'id
            $users = User::find($id);
            if(!$users){
              return response()->json([
                'message'=>'User Not Found.'
              ],404);
            }
       
            $users->name = $request->name;
            $users->email = $request->email;
            $users->password = $request->password;
       
            // mise à jour du User
            $users->save();
       
            // Return Json Response
            return response()->json([
                'message' => "User successfully updated."
            ],200);
        } catch (\Exception $e) {
            // Return Json Response
            return response()->json([
                'message' => "Something went really wrong!"
            ],500);
        }
    }

    public function destroy($id)
    {
        // Details 
        $users = User::find($id);
        if(!$users){
          return response()->json([
             'message'=>'User Not Found.'
          ],404);
        }
         
        // suppression du user
        $users->delete();
       
        // Return Json Response
        return response()->json([
            'message' => "User successfully deleted."
        ],200);
    }
}
