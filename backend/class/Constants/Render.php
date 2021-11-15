<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Constants;

/**
 * I am the constants rendering.
 *
 * @package      noxkiwi\frontend\Constants
 * @author       Jan Nox <jan.nox@pm.me>
 * @license      https://nox.kiwi/license
 * @copyright    2020 noxkiwi
 * @version      1.0.0
 * @link         https://nox.kiwi/
 */
abstract class Render
{
    public const   BEGIN_TAG      = '<*>';
    public const   END_TAG        = '</*>';
    public const   ONLY_BEGIN_TAG = '<*/>';
    public const   HAS_END_TAG    = false;
}
