<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $data['customer'] = $customerModel->findAll();

        return view('customers/customerAccounts', $data);
    }

    public function new()
    {
        return view('customers/customerNew');
    }

    public function create()
    {
        $model = new CustomerModel();

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email')
        ];

        if (!$model->insert($data)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $model->errors());
        }

        return redirect()->to('/customers/customerAccounts');
    }

    public function edit($id)
    {
        $model = new CustomerModel();

        $data['customer'] = $model->find($id);

        return view('customers/customerEdit', $data);
    }

    public function update($id)
    {
        $model = new CustomerModel();

        $model->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email')
        ]);

        return redirect()->to('/customers/customerAccounts');
    }
}