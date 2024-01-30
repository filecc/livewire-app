<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Homepage extends Component
{
    public $title = 'This is the title';

    public $users = [];
    public $seraching_query = '';

    public function mount()
    {
        $decoded = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'));
        usort($decoded, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });
        $this->users = $decoded;
    }

    #[On('searching')]
    public function searching($query)
    {
        if (trim($query) == '') {
            $decoded = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'));
            usort($decoded, function ($a, $b) {
                return strcmp($a->name, $b->name);
            });
            $this->users = $decoded;
            return;
        }
        $filtered_array = array_filter($this->users, function ($user) use ($query) {
            return false !== stristr($user->name, $query);
        });
        usort($filtered_array, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });

        $this->users = $filtered_array;
        $this->seraching_query = $query;
    }



    public function render()
    {
        return view('livewire.homepage')->with([
            'users' => $this->users,
            'query' => $this->seraching_query
        ]);
    }
}
