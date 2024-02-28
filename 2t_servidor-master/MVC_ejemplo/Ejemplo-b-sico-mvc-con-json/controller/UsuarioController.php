<?php
class UsuarioController
{ 
    public int  $id;
    public string $email; 

 
    private const VIEW_FOLDER ="usuario".DIRECTORY_SEPARATOR;

    public function __construct() {
        $this->id = self::VIEW_FOLDER.'list_usuarios';
        $this->email= '';
        $this->usuarioServicio = new UsuarioServicio();
    }

    /* List all notes */

    public function list() {
        $this->view = self::VIEW_FOLDER.'list_usuario';
        $this->page_title = 'Listado de usuarios';
        return $this->usuarioServicio->getUsers();
    }

    /* Load note for edit */

 
} 
