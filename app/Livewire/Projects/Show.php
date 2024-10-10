<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Show extends Component
{
    #[Locked]
    public Project $project;

    public function render()
    {
        return view('livewire.projects.show');
    }
}
