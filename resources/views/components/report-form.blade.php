<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div>
        <div class="mt-4 mb-6 text-xl">
            {{$thisWeek}}
        </div>
        <div class="col-span-6 sm:col-span-4 mt-2">
            {{--        @forEach()--}}
            <form>
                @csrf
                <div class="block">
                    <x-jet-input id="name" type="text" class="w-3/4 mt-1 mr-2 inline-block"
                                 wire:model.defer="state.name"
                                 autocomplete="name"/>
                    <x-jet-input-error for="name" class="mt-2"/>
                    <x-jet-button>
                        {{ __('Save') }}
                    </x-jet-button>
                </div>
            </form>
            {{--        @endforeach--}}
        </div>
    </div>

    <hr class="mt-10 mb-10"/>

    <div>
        <div class="mt-10 mb-6 text-xl">
            {{$nextWeek}}
        </div>
        <div class="col-span-6 sm:col-span-4 mt-2">
            {{--        @forEach()--}}
            <form>
                @csrf
                <div class="block">
                    <x-jet-input id="name" type="text" class="w-3/4 mt-1 mr-2 inline-block"
                                 wire:model.defer="state.name" autocomplete="name"/>
                    <x-jet-input-error for="name" class="mt-2"/>
                    <x-jet-button>
                        {{ __('Save') }}
                    </x-jet-button>
                </div>
            </form>
            {{--        @endforeach--}}
        </div>
    </div>
</div>
