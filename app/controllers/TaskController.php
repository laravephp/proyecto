<?php

class TaskController extends BaseController {

  public function asignTask(){
    $data = Input::only(['folio','oficioReferencia','descripcion']);

    $task = task::create($data);

      return View::make('auth/dash');
  }
}
