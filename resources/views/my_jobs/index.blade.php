<x-layout>
    <x-breadcrumbs :links="['My jobs' => '#']" class="mb-4"/>

    <div class="mb-8 text-right">
        <x-link-button href="{{route('my-jobs.create')}}">Add New</x-link-button>
    </div>

    @forelse($jobs as $job)
        <x-job-card :$job>
            <div class="text-xs text-slate-500">
                <p class="mb-4">
                    @if($job->jobApplications->count())
                        Applications: {{ $job->jobApplications->count() }}
                    @endif
                </p>
                <hr class="mb-4">
                @forelse($job->jobApplications as $application)
                    <div class="mb-2 flex items-center justify-between">
                        <div>
                            <div>{{$application->user->name}}</div>
                            <div>Applied at: {{$application->created_at->diffForHumans()}}</div>
                            <div><a href="#">Download CV</a></div>
                        </div>
                        <div>
                            <div>Salary: ${{number_format($application->expected_salary)}}</div>
                        </div>
                    </div>
                @empty
                    No application yet
                @endforelse

            </div>
        </x-job-card>
    @empty
        <div class="rounded-md border boorder-dashed border-slate-300 p-8">
            <div>No jobs yet</div>
            <div class="text-center">Post your first job offer <a class="text-indigo-500 hover:underline"
                                                                  href="{{route('my-jobs.create')}}">here!</a></div>
        </div>
    @endforelse
</x-layout>
