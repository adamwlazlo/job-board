<x-layout>
    @foreach($jobs as $job)
        <x-job-card class="mb-4" :$job>
            <div class="class">
                <x-link-button :href="route('jobs.show', $job)">
                    Show details
                </x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
