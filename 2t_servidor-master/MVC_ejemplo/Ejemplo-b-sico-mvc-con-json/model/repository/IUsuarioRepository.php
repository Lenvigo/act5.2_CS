<?php


/**
 *
 * @author mfernandez
 */
interface IUsuarioRepository {

    public function getUsers(): array; 

    /* function getUsuarioById(int $id):Usuario;

    public function updateUsusario(Usuario $usuarioToUpdate): bool;

    public function deleteUsuario(int $id): bool;
    
    public function create(Usuario $usuario):Usuario; */
}
