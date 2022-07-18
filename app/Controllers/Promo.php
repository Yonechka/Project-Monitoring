<?php

namespace App\Controllers;

use \App\Models\PromosModel;


class Promo extends BaseController
{
    protected $promosModel, $convertTgl;

    public function __construct()
    {
        $this->promosModel = new PromosModel();
    }


    public function index()
    {
        $project = $this->promosModel->findAll();

        $data = [
            'title' => 'Project Monitoring | Data',
            'project' => $project
        ];


        return view('monitoring/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Project Monitoring | Add Data'
        ];

        return view('monitoring/add', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'p-name' => 'required',
            'client' => 'required',
            'pleader' => 'required',
            'pleader-photo' => 'required',
            'start-date' => 'required',
            'end-date' => 'required',
            'progress' => 'required'
        ]))

            $this->promosModel->save([
                'p-name' => $this->request->getVar('p-name'),
                'client' => $this->request->getVar('client'),
                'pleader' => $this->request->getVar('pleader'),
                'pleader-photo' => $this->request->getVar('pleader-photo'),
                'start-date' => $this->request->getVar('start-date'),
                'end-date' => $this->request->getVar('end-date'),
                'progress' => $this->request->getVar('progress')
            ]);

        session()->setFlashdata('Message', 'Data Added');

        return redirect()->to('/project-monitoring');
    }

    public function delete($id)
    {
        $this->promosModel->delete($id);

        return redirect()->to('/project-monitoring');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Project Monitoring | Edit Data',
            'validation' => \Config\Services::validation(),
            'project' => $this->promosModel->getPromos($id)
        ];

        return view('monitoring/edit', $data);
    }

    public function update($id)
    {

        // validasi inputan
        if (!$this->validate([

            // panggil name input dari form
            'p-name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
            'client' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
            'pleader' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],

            'pleader-photo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],

            'start-date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],

            'end-date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],

            'progress' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],


        ])) {

            return redirect()->to('/project-monitoring/edit/' . $this->request->getVar('id'))->withInput();
        }

        $this->promosModel->save([
            'id' => $id,
            'p-name' => $this->request->getVar('p-name'),
            'client' => $this->request->getVar('client'),
            'pleader' => $this->request->getVar('pleader'),
            'pleader-photo' => $this->request->getVar('pleader-photo'),
            'start-date' => $this->request->getVar('start-date'),
            'end-date' => $this->request->getVar('end-date'),
            'progress' => $this->request->getVar('progress'),
        ]);

        session()->setFlashdata('Message', 'Data Updated');

        return redirect()->to('/project-monitoring' . $this->request->getVar('id'));
    }
}
