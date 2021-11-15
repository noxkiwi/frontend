<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Interfaces;

use Stringable;

/**
 * I represent a Stack of elements of the same type.
 */
interface RenderableInterface extends Stringable
{
    /**
     * I will render the object into DOM.
     *
     * @param array $data
     */
    public function render(array $data): string;

    /**
     * I will add the given $element to the render stack.
     *
     * @param \noxkiwi\frontend\Interfaces\RenderableInterface|string $element
     * @param int|null                                                       $position
     */
    public function add(RenderableInterface|string $element, ?int $position = null): void;
}
