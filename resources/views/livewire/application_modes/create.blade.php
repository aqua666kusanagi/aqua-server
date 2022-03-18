<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closeModalPopover()" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>


        <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
            <div>
                <div class="mx-auto flex items-center justify-center h-12 w-48 rounded-full bg-gray-100">
                    <!-- Heroicon name: outline/check -->
                    {{--<svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>--}}
                    <h3 class="items-center">NUEVO MODOS DE APLICACION</h3>
                </div>
                <div class="mt-3 text-center sm:mt-5">
                    <div class="mt-2">
                        <form>
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full rounded-full" placeholder="description" wire:model="description">
                                        @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse flex justify-between">
                                <div class="mt-5 sm:mt-6">
                                    <button wire:click.prevent="store()" type="button"
                                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-primary text-base leading-6 font-bold text-white shadow-sm hover:border-gray-900 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                        Save
                                    </button>
                                </div>
                                <div class="mt-5 sm:mt-6">
                                    <button wire:click="closeModalPopover()" type="button"
                                            class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2  bg-red-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
