<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        \App\Validations\validationLogin::class,
        \App\Validations\validationPassword::class

    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------''

    public $validationSignup = [
        'username'=> [
            'label'=> 'Username',
            'rules'=>'required|min_length[8]|max_length[16]'
        ],
        'email'=>[
            'label' => 'Email',
            'rules' => 'required|valid_email',
        ],
        'password'=>[
            'label'=> 'Password',
            'rules'=> 'required|passwordSignup[password]'
        ],
        'confirmPassword'=>[
            'label'=> 'Confirm Password',
            'rules'=> 'required|matches[password]'
        ]
    ];

    public $validationLogin = [
        'username'=> [
            'label'=> 'Username',
            'rules'=>'required|validateUsername[username]'
        ],
        'password'=>[
            'label'=> 'Password',
            'rules'=> 'required|validatePassword[password]'
        ],
    ];
    
}
