<?php
    namespace App\Services;


    use App\Models\User;

    class userServices{


        public function createUser(array $data):User{
            return User::create($data);
        }
    }
