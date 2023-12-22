<?php

namespace App\Http\Livewire;

use App\Models\Categories;
use Illuminate\Support\Collection;
use Livewire\Component;

class BulkTableCategories extends Component
{
    public Collection $selectedItem;

    public bool $bulkDisabled = true;

    public Collection $categories;

    public Collection $status;

    public ?string $selectedStatus = null;

    public bool $modalOpen = false;

    public function mount()
    {
        $this->categories = Categories::get();
        $this->reloadData();
    }

    public function render()
    {
        $this->selectedStatus = $this->categories
            ->filter(fn ($categories) => $this->getSelectedProducts()->contains($categories->category_id))
            ->map(fn ($categories) => $categories->status)
            ->unique()
            ->pipe(fn ($categories) => $categories->count() === 1 ? $categories->first() : null);

        $this->bulkDisabled = $this->selectedItem->filter(fn ($p) => $p)->count() < 2;

        return view('livewire.bulk-table-categories');
    }

    // Change status
    public function changeStaus()
    {
        Categories::query()
            ->whereIn('category_id', $this->selectedItem->filter(fn ($categories) => $categories)->keys()->toArray())
            ->update(['status' => $this->selectedStatus]);

        $this->reloadData();
    }

    // Delete status
    public function deleteStaus()
    {
        Categories::query()
            ->whereIn('category_id', $this->selectedItem->filter(fn ($categories) => $categories)->keys()->toArray())
            ->update(['status' => null]);
        $this->reloadData();
    }

    public function reloadData()
    {
        $this->selectedStatus = null;
        $this->categories = Categories::get();
        $this->selectedItem = $this->categories
            ->map(fn ($categories) => $categories->category_id)
            ->flip()
            ->map(fn ($categories) => false);
    }

    private function getSelectedProducts()
    {
        return $this->selectedItem->filter(fn ($p) => $p)->keys();
    }
}
