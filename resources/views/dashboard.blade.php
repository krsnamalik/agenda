<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <button class="btn btn-accent" action="{{ route('agenda.post') }}" method="post">New Post Agenda</button>
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <th>Judul Agenda</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div>
                                <div class="font-bold">Hart Hagerty</div>
                            </div>
                        </div>
                        </td>
                        <td>
                            Zemlak, Daniel and Leannon
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                            <button class="btn btn-ghost btn-xs">delete</button>
                            <button class="btn btn-ghost btn-xs">edit</button>
                            <button class="btn btn-ghost btn-xs">view</button>
                        </th>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div>
                                <div class="font-bold">Hagerty</div>
                            </div>
                        </div>
                        </td>
                        <td>
                            Zemlak and Leannon
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                            <button class="btn btn-ghost btn-xs">delete</button>
                            <button class="btn btn-ghost btn-xs">edit</button>
                            <button class="btn btn-ghost btn-xs">view</button>
                        </th>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div>
                                <div class="font-bold">Hart</div>
                            </div>
                        </div>
                        </td>
                        <td>
                            Daniel and Leannon
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                            <button class="btn btn-ghost btn-xs">delete</button>
                            <button class="btn btn-ghost btn-xs">edit</button>
                            <button class="btn btn-ghost btn-xs">view</button>
                        </th>
                    </tr>
                    </tbody>
                    <!-- foot -->
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Judul Agenda</th>
                            <th>Tanggal</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
