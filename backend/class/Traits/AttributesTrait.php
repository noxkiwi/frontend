<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Traits;

use JetBrains\PhpStorm\Pure;
use noxkiwi\frontend\Constants\HtmlAttributes;
use function array_key_exists;

/**
 * I am the Activitystream class. I work as a collection of entry constants and the static writeEntry method.
 *
 * @package      noxkiwi\frontend\Traits
 * @author       Jan Nox <jan.nox@pm.me>
 * @license      https://nox.kiwi/license
 * @copyright    2021 noxkiwi
 * @version      1.0.1
 * @link         https://nox.kiwi/
 */
trait AttributesTrait
{
    /** @var array $attributes I am the key-value-store of applied attributes. */
    private array $attributes = [];

    /**
     * I will set the given attribute $name to the given $value.
     *
     * @param string $name
     * @param mixed  $value
     */
    final protected function setAttribute(string $name, mixed $value): void
    {
        if (! array_key_exists($name, HtmlAttributes::TYPE_MAP)) {
            return;
        }
        $this->attributes[$name] = $value;
    }

    /**
     * I will return the desired $attribute's value
     * If not specified, I will return the given $default value
     *
     * @param string     $name
     * @param mixed|null $default
     *
     * @return mixed
     */
    #[Pure] protected function getAttribute(string $name, mixed $default = null): mixed
    {
        if (! array_key_exists($name, HtmlAttributes::TYPE_MAP)) {
            return null;
        }

        return $this->attributes[$name] ?? $default;
    }
}
