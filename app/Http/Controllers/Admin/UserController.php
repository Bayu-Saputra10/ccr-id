<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         if (auth()->user()->role != 'admin') {
            abort(403);
        }

        $keyword = $request->keyword;

        $users = User::when($keyword, function ($query) use ($keyword) {
                $query->where('name', 'like', "%{$keyword}%")
                      ->orWhere('email', 'like', "%{$keyword}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

            $totalUser = User::count();

$totalAdmin = User::where('role', 'admin')->count();

$totalViewer = User::where('role', 'viewer')->count();

return view('admin.users.index', compact(
    'users',
    'keyword',
    'totalUser',
    'totalAdmin',
    'totalViewer'
));

        return view('admin.users.index', compact('users', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|max:255',

            'email' => 'required|email|unique:users,email',

            'role' => 'required|in:admin,viewer',

            'password' => 'required|min:8|confirmed',

        ]);

        User::create([

            'name' => $request->name,

            'email' => $request->email,

            'role' => $request->role,

            'password' => $request->password,

        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([

            'name' => 'required|max:255',

            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],

            'role' => 'required|in:admin,viewer',

            'password' => 'nullable|min:8|confirmed',

        ]);

        // Admin yang sedang login tidak boleh menurunkan role dirinya sendiri
if (
    $user->id === auth()->id() &&
    $user->role === 'admin' &&
    $request->role === 'viewer'
) {
    return back()
        ->withInput()
        ->with('error', 'Anda tidak dapat mengubah role akun Anda sendiri menjadi Viewer.');
}

        $user->name = $request->name;

        $user->email = $request->email;

        $user->role = $request->role;

        if ($request->filled('password')) {

            $user->password = $request->password;

        }

        $user->save();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
          if ($user->id == auth()->id()) {

            return back()->with('error', 'Anda tidak dapat menghapus akun sendiri.');

        }

        if ($user->role == 'admin') {

            $totalAdmin = User::where('role', 'admin')->count();

            if ($totalAdmin <= 1) {

                return back()->with('error', 'Minimal harus ada satu Admin.');

            }

        }

        $user->delete();

        return back()->with('success', 'User berhasil dihapus.');
    }
}