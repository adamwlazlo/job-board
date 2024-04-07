<x-layout>
    @foreach($jobs as $job)
        <div class="mb-4 rounded-md border border-slate-300 bg-white p-4 shadow-sm">{{ $job->title }}</div>
    @endforeach
</x-layout>
