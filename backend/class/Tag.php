<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Tag;

use noxkiwi\frontend\Renderable;

/**
 * I am a HtmlTag element.
 *
 * @package   noxkiwi\frontend
 * @author    Jan Nox <jan.nox@pm.me>
 *
 * @copyright 2020 noxkiwi
 * @version   1.0.0
 */
abstract class Tag extends Renderable
{
    protected const HAS_END_TAG = true;
}
