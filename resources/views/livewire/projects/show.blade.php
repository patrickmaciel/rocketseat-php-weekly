<div>
    <a href="{{ route('projects.index') }}">Todos projetos</a>

    <h1>{{ $project->id }}) {{ $project->title }}</h1>

    {!! $project->description !!}

    <livewire:projects.proposals :$project />
</div>
