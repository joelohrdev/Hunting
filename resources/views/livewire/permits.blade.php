<div>
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-9">
        <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-4">
            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-5">
                Add New Permit
            </h3>
            <div>
                <input type="hidden" wire:model="user_id" value="{{ Auth::user()->id }}">
                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Permit Number
                    </label>
                    <div class="mt-1">
                        <input wire:model="number" id="number" name="number" type="text" autocomplete="number" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                    @error('number')<p class="mt-2 text-sm text-red-600" id="email-error">A permit number is required.</p>@enderror
                </div>
                <div>
                    <label for="about" class="block text-sm font-medium text-gray-700">
                        Description
                    </label>
                    <div class="mt-1">
                        <textarea wire:model="description" id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Describe what the permit is for.</p>
                    @error('description')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
                </div>
                <div class="text-right">
                    <button wire:click="store()" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-huntgreen">
                        Save
                    </button>
                </div>
            </div>
        </aside>
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Permit Number
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permits as $permit)
                                <!-- Odd row -->
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $permit->number }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $permit->description }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-huntblue hover:text-huntgreen">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- More rows... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
