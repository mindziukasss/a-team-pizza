<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 5/17/2017
 * Time: 9:49 AM
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        $this->comment('Scanning menu item');
        $this->generateMenu();
        $this->comment('-');
    }
}