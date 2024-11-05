<x-layout>
    <x-breadcrumbs
        class="mb-4"
        :links="['Jobs' => route('jobs.index'), $job->title => route('jobs.show', $job), 'Apply' => '#']"
    />

    <x-job-card :$job/>

    <x-card>

        <h2 class="mb-4 text-lg font-medium">
            Your job application
        </h2>

        <form action="{{route('job.application.store', $job)}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="expected_salary" class="mb-2 block text-sm font-medium text-slate-900">Expected
                    salary</label>
                <x-text-input type="number" name="expected_salary"/>
            </div>

            <div class="mb-4">
                <label for="" class="mb-2 block text-sm font-medium text-slate-900">Upload file</label>
                <x-text-input type="file" name="cv" />
            </div>

            <x-button class="w-full">Apply</x-button>
        </form>
    </x-card>
</x-layout>
