<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Tag;

use noxkiwi\frontend\Renderable;
use noxkiwi\frontend\Traits\HtmlAttributesTrait;

/**
 * I am a HtmlTag element.
 *
 * @package   noxkiwi\frontend\Tag
 * @author    Jan Nox <jan.nox@pm.me>
 *
 * @copyright 2020 noxkiwi
 * @version   1.0.0
 */
abstract class HtmlTag extends Renderable
{
    use HtmlAttributesTrait;
    protected const HAS_END_TAG = true;
}
