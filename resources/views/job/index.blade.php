<x-layout>
    <x-breadcrumbs
        class="mb-4"
        :links="['Jobs' => route('jobs.index')]"
    />

    <x-card class="mb-4 text-sm">
        <form action="{{ route('jobs.index') }}" method="get">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" value="{{ request('search') }}"
                                  placeholder="Search for any text"></x-text-input>
                </div>
                <div>
                    <div>
                        <div class="mb-1 font-semibold">Salary</div>
                        <div class="flex space-x-2">
                            <x-text-input name="min_salary" value="{{ request('min_salary') }}"
                                          placeholder="From"></x-text-input>
                            <x-text-input name="max_salary" value="{{ request('max_salary') }}"
                                          placeholder="To"></x-text-input>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>

                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="" @checked(!request('experience')) />
                        <span class="ml-2">All</span>
                    </label>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="entry" @checked('entry' === request('experience')) />
                        <span class="ml-2">Entry</span>
                    </label>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="intermediate" @checked('intermediate' === request('experience')) />
                        <span class="ml-2">Intermediate</span>
                    </label>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="senior" @checked('senior' === request('experience')) />
                        <span class="ml-2">Senior</span>
                    </label>
                </div>
                <div></div>
            </div>

            <button class="btn ring-1 rounded-md w-full">Filter</button>
        </form>

    </x-card>
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
