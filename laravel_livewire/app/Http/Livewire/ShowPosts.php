<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $post='jayson';

    // public $title;
    // public $content;
 
    // public function mount($post)
    // {
    //     $this->title = $post->title;
    //     $this->content = $post->content;
    // }
    public function render()
    {
        return view('livewire.show-posts');
    }
}
