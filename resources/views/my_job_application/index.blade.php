<x-layout>
    <x-breadcrumbs
        class="mb-4"
        :links="['My Job Applicaions' => '#']"
    />
    @forelse($applications as $application)

        <x-job-card :job="$application->job" class="mb-4 text-sm">
        </x-job-card>
    @empty
        <x-card class="mb-4 text-sm">
            No applications

        </x-card>
    @endforelse
</x-layout>
