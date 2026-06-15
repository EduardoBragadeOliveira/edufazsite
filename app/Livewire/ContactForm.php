<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $message = '';

    public bool $submitted = false;

    /**
     * @return array<string, array<int, string>>
     */
    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:1000'],
        ];
    }

    /**
     * @return array<string, string>
     */
    protected function messages(): array
    {
        return [
            'name.required' => 'Por favor, informe seu nome.',
            'name.min' => 'O nome deve ter pelo menos 3 caracteres.',
            'email.required' => 'Por favor, informe seu e-mail.',
            'email.email' => 'Por favor, informe um e-mail válido.',
            'message.required' => 'Por favor, escreva sua mensagem.',
            'message.min' => 'A mensagem deve ter pelo menos 10 caracteres.',
        ];
    }

    public function updated(string $property): void
    {
        $this->validateOnly($property);
    }

    public function submit(): void
    {
        $this->validate();

        $text = "*Novo Contato - Edu Faz Site*\n\n";
        $text .= "*Nome:* ".$this->name."\n";
        $text .= "*E-mail:* ".$this->email."\n\n";
        $text .= "*Mensagem:*\n".$this->message;

        $url = 'https://wa.me/5565999846500?text='.urlencode($text);

        $this->submitted = true;
        $this->reset(['name', 'email', 'message']);
        $this->dispatch('open-url', url: $url);
    }

    public function resetForm(): void
    {
        $this->submitted = false;
        $this->reset(['name', 'email', 'message']);
        $this->resetValidation();
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.contact-form');
    }
}
