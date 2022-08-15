<?php

namespace App\Controllers\Auth;

use CodeIgniter\Shield\Controllers\RegisterController as ShieldRegister;
use CodeIgniter\Events\Events;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Shield\Authentication\Authenticators\Session;
use CodeIgniter\Shield\Exceptions\ValidationException;
use App\Entities\UserAccountEntity;
use App\Models\UserAccountModel;

class RegisterController extends ShieldRegister
{
    public function registerView()
    {
        if (auth()->loggedIn()) {
            return redirect()->to(config('Auth')->registerRedirect());
        }

        // Check if registration is allowed
        if (! setting('Auth.allowRegistration')) {
            return redirect()->back()->withInput()
                ->with('error', lang('Auth.registerDisabled'));
        }

        return view('auth/register');
    }

    public function registerAction(): RedirectResponse
    {
        if (auth()->loggedIn()) {
            return redirect()->to('/');
        }

        $user = new UserAccountModel();

        $userEntity = new UserAccountEntity();

        if ($this->request->getPost('password') != $this->request->getPost('password_confirm')) {
            return redirect()->back()->withInput()->with('errors', 'Password does not match!');
        }

        if ($user->findByUserName($this->request->getPost('username'))) {
            return redirect()->back()->withInput()->with('errors', 'User already exists!');
        }

        $userData = [
            'user_name' => $this->request->getPost('username'),
            'password_hash' => $this->request->getPost('password')
        ];

        $userEntity->fill($userData);

        try {
            $user->save($userEntity);

            return redirect()->to(config('Auth')->registerRedirect())->with('message', lang('Auth.registerSuccess'));
        } catch (ValidationException $e) {
            return redirect()->back()->withInput()->with('errors', 'Unable to save the entry!');
        }
    }
}
