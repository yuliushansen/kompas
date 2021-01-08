<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @forelse ($artikels as $artikel)
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <div class="flex">
                            <div class="flex-shrink-0 flex items-center">
                                <img class="h-8 w-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name={{ str_replace(" ", "+",$artikel->name_user) }}&amp;color=7F9CF5&amp;background=EBF4FF" alt="Yulius Hansen">
                            </div>
                            <div class="sm:-my-px sm:ml-5">
                                <h3 class="font-semibold text-xl text-gray-800 leading-tight capitalize">{{ $artikel->judul }}</h3>
                                <p class="text-xs font-medium text-gray-600 leading-tight capitalize">Penulis: {{ $artikel->name_user }}</p>
                            </div>
                        </div>
                        <div class="hidden sm:flex sm:items-center sm:ml-6">{{ date('l,d-m-Y', strtotime($artikel->created_at)) }}</div>
                    </div>
                    
                
                    <div class="mt-6 text-gray-500">
                        {{ $artikel->berita }}
                    </div>
                </div>
                @empty
                    
                @endforelse
            </div>
        </div>
    </div>
</div>
