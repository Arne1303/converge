<?php

declare(strict_types=1);

namespace Converge\Http\Controllers;

use Converge\ContentMap;
use Converge\Repository;

class ModuleController
{
    protected ContentMap $map;

    public function __construct(ContentMap $map)
    {
        $this->map = $map;
    }

    public function __invoke()
    {

        $repo = resolve(Repository::class);

        $module = $repo->getModule();

        $routeName = $repo->getActiveRouteName();

        if ($module->getId() === $repo->getActiveRouteName()) {
            if ($view = $module->getIndexView()) {
                return $view->render();
            }
        }

        return redirect()->to(route($routeName.'.show', [
            'url' => $this->map->getFirstFileUrl(),
        ]));

        return view('converge::index');
    }
}
