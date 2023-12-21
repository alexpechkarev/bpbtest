<?php

namespace App\Livewire;

use Livewire\Component;

class LoginForm extends Component
{

    /**
     * Form data
     *
     * @var array
     */
    public $form = [
        'email'     => '',
        'password'  => '',
    ];

    public $email = '';

    public $password = '';


    /**
     * Validation
     * 
     * - delay the process for 1 second
     * - validate the form data
     * - reset the form data
     * - flash a message
     *
     * @return void
     */
    public function save()
    {
        sleep(1);
        $validated = $this->validate([
          'email' => 'email:rfc,dns|required',
          'password' => 'required|min:3'
        ]);

        Post::create($validated);

        return redirect()->to('/two');
    }

   


    /**
     * Rendering the component
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.login-form');
    }
}
