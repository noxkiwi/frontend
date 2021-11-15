<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Tag\Html;

use noxkiwi\frontend\Tag\HtmlTag;

/**
 * I am the <abbr> tag.
 *
 * @package   noxkiwi\frontend\Tag\Html;
 *
 * @author    Jan Nox <jan.nox@pm.me>
 *
 * @copyright 2021 noxkiwi
 * @version   1.0.0
 */
class Anchor extends HtmlTag
{
    protected const HAS_END_TAG  = true;
    public const    TARGET_TOP   = '_top';
    public const    TARGET_BLANK = '_blank';
    public const    TARGET_MODAL = 'modal';
    private const   TARGETS      = [
        self::TARGET_TOP,
        self::TARGET_BLANK,
        self::TARGET_MODAL
    ];
}
