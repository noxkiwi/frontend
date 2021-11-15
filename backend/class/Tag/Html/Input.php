<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Tag\Html;

use noxkiwi\frontend\Tag\HtmlTag;
use noxkiwi\frontend\Constants\HtmlAttributes;

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
class Input extends HtmlTag
{
    protected const HAS_END_TAG = false;
    public const ATTRIBUTES  = [
        HtmlAttributes::NAME,
        HtmlAttributes::DOM_ID,
        HtmlAttributes::VALUE,
        HtmlAttributes::TYPE,
        HtmlAttributes::CSS_CLASS,
        HtmlAttributes::TITLE,
        HtmlAttributes::PLACEHOLDER,
        HtmlAttributes::READONLY,
    ];
}
