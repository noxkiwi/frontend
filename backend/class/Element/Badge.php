<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Element;

use noxkiwi\frontend\Constants\HtmlAttributes;
use noxkiwi\frontend\Tag\Html\Div;

/**
 * I am a badge.
 * Nothing more to tell.
 *
 * @package   noxkiwi\frontend\Element
 *
 * @author    Jan Nox <jan.nox@pm.me>
 *
 * @copyright 2021 noxkiwi
 * @version   1.0.0
 */
final class Badge extends Div
{
    public function render($data = null): string
    {
        $classes = $this->getClassString();
        if (empty($classes)) {
            $classes = 'bg-secondary';
        }

        return <<<HTML
<span class="badge badge-xs {$classes}" title="{$this->getAttribute(HtmlAttributes::TITLE)}">{$this->renderInner($data)}</span>
HTML;
    }
}
