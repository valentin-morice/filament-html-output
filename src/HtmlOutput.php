<?php

namespace ValentinMorice\HtmlOutput;

use Filament\Forms\Components\Field;

class HtmlOutput extends Field
{
    protected string $view = 'filament-html-output::index';

    public string $html = '';

    public static function make(?string $name = ''): static
    {
        $static = app(static::class, ['name' => $name]);
        $static->configure();

        return $static;
    }

    public function inline(string $html): static
    {
        $this->html = $html;

        return $this;
    }

    public function getHtml(): string
    {
        return $this->html;
    }
}
