<?php
namespace App\Livewire\Reports;

use Livewire\Component;

class LoadingButtonAnimation extends Component
{
    public $label;
    public $route;
    public $divisionName;
    public $departmentName;

    public function mount($label, $route, $divisionName = null, $departmentName = null)
    {
        $this->label = $label;
        $this->route = $route;
        $this->divisionName = $divisionName;
        $this->departmentName = $departmentName;
    }

    public function triggerExport()
    {
        if ($this->divisionName) {
            return redirect()->route($this->route, ['divisionName' => $this->divisionName]);
        } elseif ($this->departmentName) {
            return redirect()->route($this->route, ['departmentName' => $this->departmentName]);

        } else {
            return redirect()->route($this->route);
        }
    }

    public function render()
    {
        return view('livewire.reports.loading-button-animation');
    }
}
