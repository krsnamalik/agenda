<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agenda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-white">
                <div class="card-body">
                    <form action="{{ route('agenda.post') }}" method="post">
                    @csrf
                    <textarea name="title" class="textarea textarea-bordered w-full max-w-full" placeholder="Title" rows="3"></textarea>
                    <textarea name="agenda" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="agenda2" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="agenda3" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="agenda4" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="agenda5" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="location" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="location2" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="location3" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="location4" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="location5" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="pic" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="pic2" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="pic3" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="pic4" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="pic5" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="date" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="date2" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="date3" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="date4" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <textarea name="date5" class="textarea textarea-bordered w-full max-w-full" placeholder="Agenda 1" rows="3"></textarea>
                    <input type="submit" value="Send" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
