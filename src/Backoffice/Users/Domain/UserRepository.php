<?php


namespace App\Backoffice\Users\Domain;


interface UserRepository
{

    public function save(User $user):void;
    public function byId(int $id):User;


}