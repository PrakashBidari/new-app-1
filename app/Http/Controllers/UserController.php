<?php

namespace App\Http\Controllers;

use App\Models\DonationForm;
use App\Models\RequestForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class UserController extends Controller
{

    public function dashboard()
    {
        $bloods = DonationForm::get();
        $blood_requests = RequestForm::get();
        return view('admin.index', compact('bloods','blood_requests'));
    }

    public function index()
    {
        $users = User::all();
        return view('admin.auth.user', compact('users'));
    }

    public function edit($userId)
    {
        $user = User::find($userId);
        return view('admin.auth.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        echo "Hello World";
        $data = $request->validate([
            'role' => 'required'
        ]);

        $user->update($data);

        return redirect(route('admin.user'))->with('success', 'User Update Successfully');
    }

    public function deleteUser($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->delete();

            return redirect(route('admin.user'))->with('success', "User with ID $userId has been deleted.");
        } else {
            return redirect(route('admin.user'))->with('success', "User with ID $userId has not found.");
        }
    }
}
