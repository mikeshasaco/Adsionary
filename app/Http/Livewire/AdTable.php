<?php

namespace App\Http\Livewire;
use App\Models\Industry;
use Livewire\Component;
use App\Models\Ad;
use Livewire\WithPagination;
class AdTable extends Component
{
    use WithPagination;

    public $perpage = 10;
    // public $orderAsc =true;
    // public $orderby = 'id';
    // public $sortBy = 'company';
    // public $sortDirection = 'asc';

    public $sortBy = 'company';
    public $sortDirection = 'asc';
    public $search = '';


    public function render()
    {
        // $ads =Ad::get();

        // $ads = Ad::join('industries','industries.id', 'ads.industry_id')
            // ->orderBy($this->orderby, $this->orderAsc ? 'asc' : 'desc')
            // ->paginate($this->perpage);

        // $ads = Ad::query()
        // ->orderBy($this->sortBy, $this->sortDirection)        
        // ->paginate($this->perpage);

        $ads = Ad::search($this->search)
        ->join('industries', 'industries.id', 'ads.industry_id')
        ->join('adtypes', 'adtypes.id', 'ads.adtype_id')
        ->select('ads.*','industries.industryname','adtypes.adtypename')
        ->orderBy($this->sortBy, $this->sortDirection)->
        simplePaginate($this->perpage);
    
        // $ads = Ad::all();
        // dd($ads);

        return view('livewire.ad-table', [
            'ads' => $ads
        ]);
    }

    public function popup()
    {
        // $ad = Ad::where('id', $id)->first();

        // $this->emit('update');
    }

    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        return $this->sortBy = $field;
    }

}
