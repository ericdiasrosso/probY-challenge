<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Exibe o formulário de edição do perfil.
     */
    public function edit()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    /**
     * Atualiza as informações do perfil do usuário.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        // Atualiza os dados do usuário
        $user->name = $request->name;
        $user->email = $request->email;

        // Atualiza a senha se for fornecida
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Perfil atualizado com sucesso!');
    }

    /**
     * Exclui a conta do usuário.
     */
    public function destroy()
    {
        $user = Auth::user();

        // Remove a conta do banco de dados
        $user->delete();

        // Encerra a sessão do usuário
        Auth::logout();

        return redirect('/')->with('success', 'Conta excluída com sucesso.');
    }
}
