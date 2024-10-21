@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-600 group transition-colors duration-300  cursor-pointer ">
    <div>
        <x-employer-logo :employer="$job->employer"/>
    </div>
    <div class="flex-1 flex flex-col ">
        <a href="#" class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>
        <h3 class=" group-hover:text-blue-600 transition-colors duration-300 font-bold text-xl mt-2">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title}}
            </a>
        </h3>
        <p class="text-sm text-gray-500 mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :tag="$tag"/>
        @endforeach

    </div>

</div>
