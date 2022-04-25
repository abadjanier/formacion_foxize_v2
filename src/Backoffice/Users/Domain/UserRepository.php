<?php


namespace App\Backoffice\Users\Domain;


interface UserRepository
{

    public function byId(int $id):User;


}