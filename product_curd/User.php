<?php

include_once __DIR__."./DB.php";
include_once __DIR__."./helper.php";

class User
{
    static public function all()
    {
        $sql = "select * from users";
        $users = DB::execute($sql);

       return $users;

    }

    static public function create($dataCreate){
        $sql = "INSERT INTO users (firstname, lastname, age, email) values (:firstname, :lastname, :age, :email)";
        DB::execute($sql, $dataCreate);


    }

    static public function find($id)
    {
        $sql = "select * from users where id=:id";
        $dataFind = ['id' => $id];

        $user = DB::execute($sql, $dataFind);

        return count($user) > 0 ? $user[0] : [];
    }

    static public function update($dataUpdate)
    {
        $sql = "UPDATE users set firstname=:firstname, lastname=:lastname, age=:age, email=:email where id=:id";
        DB::execute($sql, $dataUpdate);

    }
    static public function destroy($id){
        $sql = "DELETE FROM users WHERE id=:id";
        $dataDelete = ['id' => $id];
        DB::execute($sql, $dataDelete);
    }

}