<?php


namespace App\Console\Commands;

use App\models\Users;
use Illuminate\Console\Command;
use Ramsey\Uuid\Uuid;

class CreateAdmin extends Command
{
    /**
     * Name of the command
     *
     * @var string
     */
    protected $signature = 'pz:admin';

    /**
     * Console command description
     *
     * @var string
     */
    protected $description = 'Creates admin user';

    public function handle () {
        $this->comment('Creating admin user');
        $name = $this->ask('insert name');
        $email = $this->ask('insert email');
        $password = $this->secret('insert password');
        $phone = $this->ask('insert phone');
        $address = $this->ask('insert address');
        $comment = $this->ask('additional comments?');


        $record = Users::create([
            'id' => Uuid::uuid4(),
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'phone' => $phone,
            'address' => $address,
            'comment' => $comment
        ]);
        $record->role()->sync('super-admin');
    }
}