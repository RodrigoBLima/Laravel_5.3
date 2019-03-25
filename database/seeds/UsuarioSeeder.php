<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //criando uma seed para gerar um user admin
       $dados = [
           'name'=> "Rodrigo",
           'email'=> "admin@admin.com",
           'password' => bcrypt("123456"),
       ];
       if (User::where('email','=',$dados['email'])-> count()){

            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario alterado";
       }else{
            User::create();
            echo "Usuario criado"
       }
    }
}
