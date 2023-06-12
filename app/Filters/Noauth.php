<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Noauth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (session()->get('isLoggedIn')) {
            if (session()->get('role') == 'admin')
                return redirect()->to('/admin/dashboard');
            else if (session()->get('role') == 'student') {
                return redirect()->to('/student/dashboard');
            } else if (session()->get('role') == 'counsellor') {
                return redirect()->to('/counsellor/dashboard');
            } else {
                return redirect()->to('/receptionist/dashboard');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
