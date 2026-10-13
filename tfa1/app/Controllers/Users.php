<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $data['users'] = $model->findAll();

        return view('users/userAccounts', $data);
    }

    public function new()
    {
        return view('users/userNew');
    }

    public function create()
    {
        $model = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name')
        ];

        if (!$model->insert($data))
        {
            return redirect()->back()
                ->withInput()
                ->with('errors', $model->errors());
        }

        return redirect()->to('/users/userAccounts');
    }

    public function edit($id)
    {
        $model = new UserModel();

        $data['users'] = $model->find($id);

        return view('users/userEdit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();

        $user = $model->find($id);

        $data = [
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name')
        ];

        $file = $this->request->getFile('avatar');

        if ($file && $file->isValid() && !$file->hasMoved())
        {
            $rules = [
                'avatar' => [
                    'rules' => 'max_size[avatar,2048]|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]'
                ]
            ];

            if (!$this->validate($rules))
            {
                return redirect()->back()->withInput();
            }

            $newName = $file->getRandomName();

            $file->move(FCPATH . 'uploads/', $newName);

            \Config\Services::image()
                ->withFile(FCPATH . 'uploads/' . $newName)
                ->fit(150,150,'center')
                ->save(FCPATH . 'uploads/thumb_' . $newName);

            $data['avatar'] = 'thumb_' . $newName;
        }

        $model->update($id, $data);

        return redirect()->to('/users/userAccounts');
    }
}