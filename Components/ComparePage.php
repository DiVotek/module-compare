<?php

namespace Modules\Compare\Components;

use App\View\Components\PageComponent;

class ComparePage extends PageComponent
{
    public function __construct($entity)
    {
        $component = setting(config('settings.compare.design'), 'Base');
        $component = 'template.' . strtolower(template()) . '.pages.compare.' . strtolower($component);
        parent::__construct($entity, $component);
    }
}
