<div class="h-auto bg-white shadow-md w-auto flex flex-col border mt-6 rounded-3xl p-8 mb-4">
    <div class="mb-4">
        <label for="export-type" class="block text-sm font-medium text-gray-700">Select Export Type</label>
        <select wire:model.live="selectedOption" id="export-type" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
            <option value="organizational">Organizational Exports</option>
            <option value="divisional">Divisional Exports</option>
            <option value="departmental">Departmental Exports</option>
        </select>
    </div>

    @if ($selectedOption === 'organizational')
    <div class="flex items-center gap-4 p-2 border-b border-slate-200">
        @livewire('reports.loading-button-animation', [
            'label' => 'Export Employee Details',
            'route' => 'reports.employees.export'
        ])
        <div class="flex-1 text-slate-600">
            Export a detailed report of employee data, including names, roles, and other relevant information.
        </div>
    </div>
    <div class="flex items-center gap-4 p-2 border-b border-slate-200">
        @livewire('reports.loading-button-animation', [
            'label' => 'Export Qualifications',
            'route' => 'reports.qualifications.export'
        ])
        <div class="flex-1 text-slate-600">
            Export a detailed report of employee qualification information.
        </div>
    </div>
    <div class="flex items-center gap-4 p-2 border-b border-slate-200">
        @livewire('reports.loading-button-animation', [
            'label' => 'Export Skills',
            'route' => 'reports.skills.export'
        ])
        <div class="flex-1 text-slate-600">
            Export a comprehensive report of skills assessments, detailing individual performance and skill levels.
        </div>
    </div>

@elseif ($selectedOption === 'divisional')
    <div class="space-y-6">
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                CEO's Office
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-division',
                    'divisionName' => "CEO's Office"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Qualifications',
                    'route' => 'reports.qualifications.export-division',
                    'divisionName' => "CEO's Office"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Business Division
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-division',
                    'divisionName' => "Business Division"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Qualifications',
                    'route' => 'reports.qualifications.export-division',
                    'divisionName' => "Business Division"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Finance Division
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-division',
                    'divisionName' => "Finance Division"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Qualifications',
                    'route' => 'reports.qualifications.export-division',
                    'divisionName' => "Finance Division"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Human Resources
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-division',
                    'divisionName' => "Human Resources"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Qualifications',
                    'route' => 'reports.qualifications.export-division',
                    'divisionName' => "Human Resources"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
    </div>

@elseif ($selectedOption === 'departmental')
    <div class="space-y-6">
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Government
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-department',
                    'departmentName' => "Government"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Qualification Details',
                    'route' => 'reports.qualifications.export-department',
                    'departmentName' => "Government"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Wholesales
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-department',
                    'departmentName' => "Wholesales"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Qualification Details',
                    'route' => 'reports.qualifications.export-department',
                    'departmentName' => "Wholesales"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Field Services General
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-department',
                    'departmentName' => "Field Services General"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Qualification Details',
                    'route' => 'reports.qualifications.export-department',
                    'departmentName' => "Field Services General"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Network Operations
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-department',
                    'departmentName' => "Network Operations"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Qualification Details',
                    'route' => 'reports.qualifications.export-department',
                    'departmentName' => "Network Operations"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Commercial General
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-department',
                    'departmentName' => "Commercial General"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Qualification Details',
                    'route' => 'reports.qualifications.export-department',
                    'departmentName' => "Commercial General"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Legal
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-department',
                    'departmentName' => "Legal"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Qualification Details',
                    'route' => 'reports.qualifications.export-department',
                    'departmentName' => "Legal"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
        <details class="rounded-md shadow-md bg-white border border-gray-200">
            <summary class="bg-gray-100 p-4 rounded-t-md cursor-pointer font-semibold flex justify-between items-center">
                Retail & Corporate
                <span class="transition-transform transform group-open:rotate-180">
                    <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9L5 5 1 1" />
                    </svg>
                </span>
            </summary>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Details',
                    'route' => 'reports.employees.export-department',
                    'departmentName' => "Retail & Corporate"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee data, including names, roles, and other relevant information.
                </div>
            </div>
            <div class="flex items-center gap-4 p-2 border-b border-slate-200">
                @livewire('reports.loading-button-animation', [
                    'label' => 'Export Employee Qualification Details',
                    'route' => 'reports.qualifications.export-department',
                    'departmentName' => "Retail & Corporate"
                ])
                <div class="flex-1 text-slate-600">
                    Export a detailed report of employee qualification information.
                </div>
            </div>
        </details>
    </div>
@endif
<div>