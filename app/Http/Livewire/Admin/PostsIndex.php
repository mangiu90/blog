<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class PostsIndex extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $posts = Post::where('user_id', auth()->id())
            ->where('name', 'like', '%'.$this->search.'%')
            ->latest('id')
            ->paginate();
        return view('livewire.admin.posts-index', compact('posts'));
    }
}
