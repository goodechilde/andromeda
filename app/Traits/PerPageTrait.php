<?php

namespace App\Traits;

trait PerPageTrait
{
    protected $perPageMax = 50;

    /**
     * Get the number of models to return per page.
     *
     * @return int
     */
    public function getPerPage(): int
    {

        // $this->perPage === 15 as default
        $perPage = request('per_page', $this->perPage);
        return max(1, min($this->getPerPageMax(), (int) $perPage));
    }

    private function getPerPageMax(): int
    {
        return $this->perPageMax;
    }
}
