<?php declare(strict_types = 1);
namespace noxkiwi\frontend;

use noxkiwi\frontend\Interfaces\RenderableInterface;
use noxkiwi\frontend\Traits\RenderableTrait;

/**
 * I am an abstract, renderable object.
 *
 * @package      noxkiwi\core
 * @author       Jan Nox <jan.nox@pm.me>
 * @license      https://nox.kiwi/license
 * @copyright    2020 noxkiwi
 * @version      1.0.0
 * @link         https://nox.kiwi/
 */
abstract class Renderable implements RenderableInterface
{
    use RenderableTrait;
}
