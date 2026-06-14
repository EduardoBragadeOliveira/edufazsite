<?php

use App\Livewire\ContactForm;
use Livewire\Livewire;

it('renders the contact form successfully', function () {
    Livewire::test(ContactForm::class)
        ->assertStatus(200);
});

it('validates required fields', function () {
    Livewire::test(ContactForm::class)
        ->call('submit')
        ->assertHasErrors(['name' => 'required', 'email' => 'required', 'message' => 'required']);
});

it('validates email format', function () {
    Livewire::test(ContactForm::class)
        ->set('name', 'John Doe')
        ->set('email', 'not-an-email')
        ->set('message', 'Hello, this is a test message.')
        ->call('submit')
        ->assertHasErrors(['email' => 'email']);
});

it('validates minimum lengths', function () {
    Livewire::test(ContactForm::class)
        ->set('name', 'Jo') // min 3
        ->set('email', 'john@example.com')
        ->set('message', 'Short') // min 10
        ->call('submit')
        ->assertHasErrors(['name' => 'min', 'message' => 'min']);
});

it('successfully submits the form', function () {
    Livewire::test(ContactForm::class)
        ->set('name', 'John Doe')
        ->set('email', 'john@example.com')
        ->set('message', 'Hello, this is a valid test message with enough characters.')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('submitted', true)
        ->assertSet('name', '')
        ->assertSet('email', '')
        ->assertSet('message', '');
});

it('can reset the form to send another message', function () {
    Livewire::test(ContactForm::class)
        ->set('submitted', true)
        ->call('resetForm')
        ->assertSet('submitted', false);
});
