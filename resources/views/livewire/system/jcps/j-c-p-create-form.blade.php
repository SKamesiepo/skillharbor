<x-form-section submit="createJCPInformation">
    <x-slot name="title">
        {{ $pages[$currentPage]['title'] }}
    </x-slot>

    <x-slot name="description">
        {{$pages[$currentPage]['description']}}
    </x-slot>

    <x-slot name="form">
        @if ($currentPage === 1)

        <!-- Profile Photo -->


        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="position_title" value="{{ __('Position Title') }}" />
            <x-input id="position_title" type="text" class="mt-1 block w-full" wire:model="state.position_title" required autocomplete="position_title" />
            <x-input-error for="position_title" class="mt-2" />


        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-label for="duty_station" value="{{ __('Duty Station') }}" />
            <x-input id="duty_station" type="text" class="mt-1 block w-full" wire:model="state.duty_station" required autocomplete="duty_station" />
            <x-input-error for="duty_station" class="mt-2" />


        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-label for="job_grade" value="{{ __('Job Grade') }}" />
            <select id="job_grade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-fuchsia-500 dark:focus:border-fuchsia-500">
              <option selected>Choose the job grade.</option>
              <option value="a1">A1</option>
              <option value="a2">A2</option>
              <option value="a3">A3</option>
              <option value="a4">A4</option>
              <option value="b1">B1</option>
              <option value="b2">B2</option>
              <option value="b3">B3</option>
              <option value="b4">B4</option>
              <option value="bu">BU</option>
              <option value="c1">C1</option>
              <option value="c2">C2</option>
              <option value="c3">C3</option>
              <option value="c4">C4</option>
              <option value="cu">CU</option>
              <option value="d1">D1</option>
              <option value="d2">D2</option>
              <option value="d3">D3</option>
              <option value="d4">D4</option>
              <option value="du">DU</option>
            </select>
        </div>

        <!-- Job Purpose -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="job_prupose" value="{{ __('Job Purpose') }}" />
            <textarea id="job_purpose" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-fuchsia-500 focus:border-fuchsia-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-fuchsia-500 dark:focus:border-fuchsia-500" placeholder="Write your thoughts here..."></textarea>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-fuchsia-300 dark:peer-focus:ring-fuchsia-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-fuchsia-600"></div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">JCP Active</span>
              </label>


        </div>
        {{-- Prerequisite Information --}}
        @elseif ($currentPage === 2 )
        <div class="col-span-full sm:col-span-4">
                <x-label for="qualifications" value="{{ __('Qualifications') }}" />

                <select id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected>Choose Qualifications</option>
                @forelse ($qualifications as $qualification)
                    <option value="{{ $qualification->id }}">{{ $qualification->qualification_title }}</option>
                @empty
                    <option value="">No Qualifications Found</option>
                @endforelse


                </select>

        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-label for="licenses" value="{{ __('Licenses') }}" />

            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700 mb-2">
                <input checked id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No Drivers License Required</label>
            </div>
            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700 mb-2">
                <input id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Code B: Drivers License</label>
            </div>
            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700 mb-2">
                <input id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Code C: Drivers License</label>
            </div>
            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700 mb-2">
                <input id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Forklift License</label>
            </div>
        </div>
        {{-- Skills Information --}}
        @elseif ($currentPage === 3 )

        @endif

    </x-slot>

    <x-slot name="actions">
        @if ($currentPage === 1)

        @else
        <x-secondary-button wire:click='previousPage' class="mr-2">
            {{ __('Previous') }}
        </x-button>
        @endif

        @if($currentPage === count($pages))
        <x-button wire:click='submit'>
            {{ __('Register JCP') }}
        </x-button>
        @else
        <x-secondary-button wire:click='nextPage'>
            {{ __('Next') }}
        </x-button>

        @endif
    </x-slot>
</x-form-section>
