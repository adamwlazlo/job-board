<x-card class="mb-4">
    <div class="mb-4 flex justify-between">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">{{ number_format($job->salary, 2) }} PLN</div>
    </div>

    <div class="mb-4 flex items-center justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-4">
            <div class="class">{{ $job->employer->company_name }}</div>
            <div class="class">{{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <a href="{{route('jobs.index', ['experience' => $job->experience])}}">
                <x-tag>{{ Str::ucfirst($job->experience) }}</x-tag>
            </a>
            <a href="{{route('jobs.index', ['categories' => $job->category])}}">
                <x-tag>{{ $job->category }}</x-tag>
            </a>

        </div>
    </div>


    {{ $slot }}
</x-card>
