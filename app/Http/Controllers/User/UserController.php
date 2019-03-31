<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\models\Users;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        abort(404);
    }

    public function create()
    {
        abort(404);
    }

    public function store(UserRequest $request)
    {
        DB::beginTransaction();
        
        $user = new Users;
        $messageUser = $user->createUser($request);

        if ($messageUser["code"] == 200) {
            DB::commit();
        } else {
            DB::rollBack();
        }

        return response($messageUser, $messageUser["code"]);
    }

    public function show($id)
    {
        abort(404);
    }

    public function edit($id)
    {
        abort(404);
    }

    public function update(Request $request, $id)
    {
        abort(404);
    }

    public function destroy($id)
    {
        abort(404);
    }
}
