<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateCompany extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'company:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new company';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $domains = ['gmail.com', 'yahoo.com', 'hotmail.com'];

        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $randomString = '';
        $length = 5;

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        $domain = $domains[array_rand($domains)];

        $email = $randomString . '@' . $domain;
        
        $username = '';
        $digits = '1234567890';
        $digitslength = 13;
        for ($i = 0; $i < $digitslength; $i++) {
            $username .= $digits[rand(0, strlen($digits) - 1)];
        }
        
        $password = '12346678';

        $user = User::create([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'role' => 'Company',
            'state' => 'guest',
        ]);

        $this->info('Company created successfully');
    }
}
