<?php

namespace Nuhel\FilamentCropper\Concerns;

use Nuhel\FilamentCropper\Values\ViewMode;

trait HasViewMode
{
    protected ViewMode|Closure $viewMode;

    public function viewMode(ViewMode|Clousure $viewMode): static
    {
        $this->viewMode = $viewMode;
        return $this;
    }

    public function getViewMode(): int
    {
        return 3;
    }
}
