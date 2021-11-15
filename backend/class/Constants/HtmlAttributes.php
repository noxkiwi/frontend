<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Constants;

use noxkiwi\core\Constants\Validator;

/**
 * I am the constants storage for HTML Attributes.
 *
 * @package      noxkiwi\frontend\Constants
 * @author       Jan Nox <jan.nox@pm.me>
 * @license      https://nox.kiwi/license
 * @copyright    2020 noxkiwi
 * @version      1.0.0
 * @link         https://nox.kiwi/
 */
abstract class HtmlAttributes
{
    public const  DOM_FOR          = 'for';
    public const  HEIGHT           = 'height';
    public const  WIDTH            = 'width';
    public const  CSS_CLASS        = 'class';
    public const  NAME             = 'name';
    public const  HREF             = 'href';
    public const  DOM_ID           = 'id';
    public const  PLACEHOLDER      = 'placeholder';
    public const  TITLE            = 'title';
    public const  TYPE             = 'type';
    public const  VALUE            = 'value';
    public const  DATA_PLACEHOLDER = 'data-placeholder';
    public const  DATA_DESCRIPTION = 'data-description';
    public const  READONLY         = 'readonly';
    public const  ROLE             = 'role';
    public const  STYLE            = 'style';
    public const  TABINDEX         = 'tabindex';
    public const  TARGET           = 'target';
    public const  ON_CLICK         = 'onClick';
    public const  TYPE_MAP         = [
        self::HEIGHT           => Validator::NUMBER,
        self::WIDTH            => Validator::NUMBER,
        self::CSS_CLASS        => Validator::TEXT,
        self::NAME             => Validator::TEXT,
        self::HREF             => Validator::TEXT,
        self::DOM_ID           => Validator::TEXT,
        self::PLACEHOLDER      => Validator::TEXT,
        self::TYPE             => Validator::TEXT,
        self::DOM_FOR          => Validator::TEXT,
        self::TITLE            => Validator::TEXT,
        self::DATA_PLACEHOLDER => Validator::TEXT,
        self::READONLY         => Validator::TEXT,
        self::DATA_DESCRIPTION => Validator::TEXT,
        self::STYLE            => Validator::TEXT,
        self::VALUE            => Validator::ANY,
        self::TABINDEX         => Validator::NUMBER,
        self::ROLE             => Validator::TEXT,
        self::ON_CLICK         => Validator::TEXT,
        self::TARGET           => Validator::TEXT,
    ];
}
