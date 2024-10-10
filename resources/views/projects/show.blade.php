<x-layouts.app>
    <a href="{{ route('projects.index') }}">Todos projetos</a>

    <livewire:projects.show :project="request()->route('project')" />
</x-layouts.app>
