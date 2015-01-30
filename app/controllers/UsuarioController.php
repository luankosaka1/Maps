<?php

class UsuarioController extends BaseController
{
	public function getIndex()
	{
		return View::make('usuario/index')->with('usuarios', Usuario::all());
	}

	public function getAdd()
	{
		return View::make('usuario/add');
	}

	public function postAdd()
	{
		$input = Input::get('usuario');

		$validator = Validator::make($input, [
			'username' => 'required|min:3|unique:usuario,username', 
			'password' => 'required'
		]);

		if ($validator->fails()) {
			return Redirect::to('usuario/add')->withErrors($validator)->withInput();
		} else {
			$usuario = new Usuario;
			$usuario->username = $input['username'];
			$usuario->password = Hash::make($input['password']);

			if ($usuario->save()) {
				return View::make('usuario')->with('flash_message_success', 'Adicionado com sucesso');
			} else {
				return View::make('usuario')->with('flash_message_error', 'Tente novamente mais tarde');
			}	
		}

		return Redirect::to('usuario/add');
	}

	public function getEdit($id)
	{
		return View::make('usuario/edit', ['usuario' => Usuario::find($id)]);
	}

	public function postEdit()
	{
		$input = Input::get('usuario');

		$validator = Validator::make($input, [
			'username' => 'required|min:3|unique:usuario,username,'. $input['id'], 
			'password' => 'required'
		]);

		if ($validator->fails()) {
			return Redirect::to('usuario/edit/'.$input['id'])->withErrors($validator)->withInput();
		} else {
			$usuario = Usuario::find($input['id']);
			$usuario->username = $input['username'];
			$usuario->password = Hash::make($input['password']);

			if ($usuario->save()) {
				return Redirect::to('usuario')->with('flash_message_success', 'Adicionado com sucesso');
			}	
		}

		return Redirect::to('usuario/edit/'.$input['id'])->with('flash_message_error', 'Tente novamente mais tarde');
	}

	public function postDelete($id)
	{
		$usuario = Usuario::find($id);

		if ($usuario) {
			if ($usuario->delete()) {
				return Redirect::to('usuario')->with('flash_message_success', 'Excluido com sucesso');
			}
		}

		return Redirect::to('usuario')->with('flash_message_error', 'Usuário não encontrado');
	}
}