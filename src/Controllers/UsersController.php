<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $title = 'Users';
        $users = User::all();
        view('users/index', compact('title', 'users'));
    }

    public function view() {
        $user = User::find($_GET['id']);
        if($user) {
            return view('users/view', compact('user'));
        }
        echo 404;
    }

    public function edit() {
        $user = User::find($_GET['id']);
        if($user) {
            return view('users/edit', compact('user'));
        }
        echo 404;
    }

    public function update(){
        $user = User::find($_GET['id']);
        if($user) {
            // password hash is salted with name and email, so changing them needs a new password
            $nameOrEmailChanged = $_POST['name'] !== $user->name || $_POST['email'] !== $user->email;
            if(($nameOrEmailChanged && !$_POST['password']) || $_POST['password'] !== $_POST['password_confirm']) {
                return redirect('/admin/users/edit?id=' . $user->id);
            }
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];
            if($_POST['password']) {
                $user->password = password_hash($_POST['name'] . $_POST['email'] . $_POST['password'] . md5('yolo'), PASSWORD_BCRYPT);
            }
            $user->save();
            return redirect('/admin/users');
        }
        echo 404;
    }

    public function delete() {
        $user = User::find($_GET['id']);
        if($user) {
           $user->delete();
           return redirect('/admin/users');
        }
        echo 404;
    }
}
