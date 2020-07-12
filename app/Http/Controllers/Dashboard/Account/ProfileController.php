<?php

namespace App\Http\Controllers\Dashboard\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileFormRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __construct()
    {
        #$this->middleware('auth');
    }

    /**
     * Show the data user and
     * Show the form for editing the specified resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('dashboard.account.index');
    }

    public function update(UpdateProfileFormRequest $request)
    {
        $uploadFile = $request->file('avatar');
        Storage::disk('public')->put('images', $uploadFile);
        $path = asset('storage/images/' . $uploadFile->hashName());

        $request->user()->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'poste' => $request->input('poste'),
            'phone_number' => $request->input('phone_number'),
            'avatar' => $path,
        ]);

        return redirect()->route('dashboard.profile');
    }
}
