<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Support\Collection;
use Livewire\Component;

class BulkTable extends Component
{
    public Collection $selected;

    public bool $bulkDisabled = true;

    public Collection $news;

    public Collection $status;

    public ?string $selectedStatus = null;

    public bool $modalOpen = false;

    public function mount()
    {
        $this->news = news::get();
        $this->reloadData();
    }

    public function render()
    {
        $this->selectedStatus = $this->news
            ->filter(fn ($news) => $this->getSelectedProducts()->contains($news->post_id))
            ->map(fn ($news) => $news->status)
            ->unique()
            ->pipe(fn ($news) => $news->count() === 1 ? $news->first() : null);

        $this->bulkDisabled = $this->selected->filter(fn ($p) => $p)->count() < 2;

        return view('livewire.bulk-table');
    }

    // Change status
    public function changeStaus()
    {
        News::query()
            ->whereIn('post_id', $this->selected->filter(fn ($news) => $news)->keys()->toArray())
            ->update(['status' => $this->selectedStatus]);

        $this->reloadData();
    }

    // Delete status
    public function deleteStaus()
    {
        News::query()
            ->whereIn('post_id', $this->selected->filter(fn ($news) => $news)->keys()->toArray())
            ->update(['status' => null]);
        $this->reloadData();
    }

    public function reloadData()
    {
        $this->selectedStatus = null;
        $this->news = News::get();
        $this->selected = $this->news
            ->map(fn ($news) => $news->post_id)
            ->flip()
            ->map(fn ($news) => false);
    }

    private function getSelectedProducts()
    {
        return $this->selected->filter(fn ($p) => $p)->keys();
    }
}
