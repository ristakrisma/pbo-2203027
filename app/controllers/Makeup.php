<?php

namespace App\Controllers;

use App\Core\Controller;

class Makeup extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Makeup();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('makeup/index', $data);
	}

	public function input()
	{
		$this->dashboard('makeup/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/makeup');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('makeup/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/makeup');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/makeup');
	}
}
