<?php

/**
 * Fichier contenant les fonctions d'authentification, d'enregistrement et de déconnexion.
 */

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\User;
use App\Models\UserCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * Permet de créer un utilisateur et retourne ses données.
     */
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    /**
     * Permet se connecté et retourne ses données.
     */
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $userCategory = UserCategory::find($user['user_category_id']);
        $userCompany = Companies::find($user['user_company_id']);

        $response = [
            'token' => $token,
            'user' => $user,
            'roles'=>$userCategory,
            'company'=>$userCompany,

        ];

        return response($response, 201);
    }

    /**
     * Permet de se déconnecté et de supprimer le token dans la base de données.
     */
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }

    /**
     * Permet de récupérer toute la table User.
     */
    public function index()
    {
        $users =User::all();
        $response =[];
        foreach($users as $user){
            $userCategory = UserCategory::find($user['user_category_id']);
            $userCompany = Companies::find($user['user_company_id']);
            $user['role']=$userCategory;
            $user['company']=$userCompany;

            $response[]=$user;
        }
        return $response;
    }
}
