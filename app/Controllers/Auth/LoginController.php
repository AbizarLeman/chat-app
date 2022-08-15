<?php

namespace App\Controllers\Auth;

use CodeIgniter\Shield\Controllers\LoginController as ShieldLogin;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Shield\Authentication\Authenticators\Session;
use App\Entities\UserAccountEntity;
use App\Models\UserAccountModel;

class LoginController extends ShieldLogin
{
    public $session;

    public function __construct() {
        $this->session = \Config\Services::session();
    }

    public function loginView()
    {
        if (auth()->loggedIn()) {
            return redirect()->to(config('Auth')->loginRedirect());
        }

        return view('auth/login');
    }

    public function loginAction(): RedirectResponse
    {
        if (auth()->loggedIn()) {
            return redirect()->to('/');
        }

        $user = new UserAccountModel();
        $userEntity = $user->findByUserName($this->request->getPost('username'));

        if ($userEntity == null) {
            return redirect()->back()->withInput()->with('errors', 'User does not exists!');
        }

        if (password_verify($this->request->getPost('password'), $userEntity->password_hash) == false) {
            return redirect()->back()->withInput()->with('errors', 'Incorrect password!');
        }

        $credentials['username']   = $this->request->getPost('username');
        $credentials['password'] = $this->request->getPost('password');
        $remember = (bool) $this->request->getPost('remember');


        $session_data = [
            'username'  => $this->request->getPost('username'),
            'logged_in' => true,
        ];
        
        $this->session->set(['session_data' => $session_data]);

        return redirect()->to('/');
    }

    public function logoutAction(): RedirectResponse
    {   
        $this->session->remove('session_data');

        return redirect()->to('/');
    }
}
