<?php

class UsuarioServicio implements IUsuarioServicio
{

    private IUsuarioServicio $repository;

    public function __construct()
    {
        $this->repository = new UsuarioRepository();
    }



    /* Get all notes */

    public function getUsers(): array
    {

        return $this->repository->getUsers();
    }

    
}

?>