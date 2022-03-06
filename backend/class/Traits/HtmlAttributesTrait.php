<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Traits;

use JetBrains\PhpStorm\Pure;
use noxkiwi\frontend\Constants\HtmlAttributes;
use function explode;
use function implode;
use function is_string;
use function str_contains;

/**
 * I am the Activitystream class. I work as a collection of entry constants and the static writeEntry method.
 *
 * @package      noxkiwi\frontend\Traits
 * @author       Jan Nox <jan.nox@pm.me>
 * @license      https://nox.kiwi/license
 * @copyright    2021 noxkiwi
 * @version      1.0.0
 * @link         https://nox.kiwi/
 */
trait HtmlAttributesTrait
{
    use AttributesTrait;

    /**
     * I will add the given class to the set of classes.
     *
     * @param string $className
     */
    final public function addClass(string $className): void
    {
        if (str_contains($className, ' ')) {
            $cssClasses = explode(' ', $className);
            foreach ($cssClasses as $cssClass) {
                if (! is_string($cssClass)) {
                    continue;
                }
                $this->addClass($cssClass);
            }
        }
    }

    /**
     * I will get all classes as the array they are in.
     * @return array
     */
    #[Pure] final public function getClasses(): array
    {
        return $this->attributes[HtmlAttributes::CSS_CLASS] ?? [];
    }

    /**
     * I will override all classes with the given ones.
     *
     * @param array $classes
     */
    final public function setClasses(array $classes): void
    {
        $this->attributes[HtmlAttributes::CSS_CLASS] = $classes;
    }

    /**
     * I will set the class attribute.
     *
     * @param string $class
     */
    final public function setClass(string $class): void
    {
        $this->attributes[HtmlAttributes::CSS_CLASS] = [$class];
    }

    /**
     * I will set the style attribute.
     *
     * @param string $style
     */
    final public function setStyle(string $style): void
    {
        $this->attributes[HtmlAttributes::STYLE] = $style;
    }

    /**
     * I will return the classes as string for HTML output.
     * @return string
     */
    #[Pure] final public function getClassString(): string
    {
        return implode(' ', $this->getClasses());
    }

    /**
     * I will
     *
     * @param string $title
     */
    final public function setTitle(string $title): void
    {
        $this->setAttribute(HtmlAttributes::TITLE, $title);
    }

    /**
     * I will return the title.
     * @return string
     */
    #[Pure] final public function getTitle(): string
    {
        return (string)$this->getAttribute(HtmlAttributes::TITLE);
    }

    /**
     * I will
     *
     * @param string $title
     */
    final public function setFor(string $title): void
    {
        $this->setAttribute(HtmlAttributes::DOM_FOR, $title);
    }

    /**
     * I will
     *
     * @param string $title
     */
    final public function setId(string $title): void
    {
        $this->setAttribute(HtmlAttributes::DOM_ID, $title);
    }

    /**
     * I will
     *
     * @param string $title
     */
    final public function setName(string $title): void
    {
        $this->setAttribute(HtmlAttributes::NAME, $title);
    }

    /**
     * I will
     *
     * @param $value
     */
    final public function setValue($value): void
    {
        $this->setAttribute(HtmlAttributes::VALUE, $value);
    }

    /**
     * I will
     *
     * @param string $value
     */
    final public function setType(string $value): void
    {
        $this->setAttribute(HtmlAttributes::TYPE, $value);
    }

    /**
     * I will
     *
     * @param string $value
     */
    final public function setDataPlaceholder(string $value): void
    {
        $this->setAttribute(HtmlAttributes::DATA_PLACEHOLDER, $value);
    }

    /**
     * I will
     *
     * @param string $value
     */
    final public function setDataDescription(string $value): void
    {
        $this->setAttribute(HtmlAttributes::DATA_DESCRIPTION, $value);
    }

    /**
     * I will
     *
     * @param bool $readOnly
     */
    final public function setReadOnly(bool $readOnly = true): void
    {
        $this->setAttribute(HtmlAttributes::READONLY, $readOnly);
    }

    #[Pure] final public function getTarget(): string
    {
        return (string)$this->getAttribute(HtmlAttributes::TARGET);
    }

    final public function setTarget(string $target): void
    {
        $this->setAttribute(HtmlAttributes::TARGET, $target);
    }

    #[Pure] final public function getHref(): string
    {
        return (string)$this->getAttribute(HtmlAttributes::HREF);
    }

    final public function setHref(string $href): void
    {
        $this->setAttribute(HtmlAttributes::HREF, $href);
    }

    /**
     * I will set the onclick attribute.
     *
     * @param string $onClick
     */
    final public function setOnClick(string $onClick): void
    {
        $this->setAttribute(HtmlAttributes::ON_CLICK, $onClick);
    }

    /**
     * I will get the onclick attribute.
     * @return string
     */
    #[Pure] final public function getOnClick(): string
    {
        return (string)$this->getAttribute(HtmlAttributes::ON_CLICK);
    }
}
