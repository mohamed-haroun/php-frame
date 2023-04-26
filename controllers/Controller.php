<?php
declare(strict_types=1);

namespace controllers;

class Controller {
    public function render(string $view, string $layout = 'main', array $args = []):void
    {
        $view = $this->getViewContent($view);
        $layout = $this->renderLayout($layout);
        $layout_view = str_replace(["{{content}}", ...array_keys($args)], [$view, ...array_values($args)], $layout);

        echo $layout_view;
    }

    private function renderLayout(string $layout):string
    {
        ob_start();
        include_once LAYOUT_PATH . $layout . '.php';
        return ob_get_clean();
    }

    private function getViewContent(string $view):string
    {
        ob_start();
        include_once VIEW_PATH . $view . '.php';
        return ob_get_clean();
    }

}