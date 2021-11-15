<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Traits;

use noxkiwi\frontend\Constants\Render;
use noxkiwi\frontend\Interfaces\RenderableInterface;
use function in_array;
use function method_exists;

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
trait RenderableTrait
{
    protected string $tagName;
    /** @var RenderableInterface[] $elements */
    private array $elements = [];
    /** @var array $attributes */
    private array $attributes = [];

    /**
     * @inheritDoc
     */
    public function add(RenderableInterface|string $element, ?int $position = null): void
    {
        if ($position !== null) {
            $i      = 0;
            $result = [];
            foreach ($this->elements as $value) {
                if ($i === $position) {
                    $result[] = $element;
                }
                $result[] = $value;
                $i++;
            }
            $this->elements = $result;
        } else {
            $this->elements[] = $element;
        }
    }

    /**
     * I will return the string representation of the class.
     * @return string
     */
    public function __toString(): string
    {
        return $this->render();
    }

    /**
     * I will return the freshly rendered output of the current Renderbale object.
     *
     * @param mixed $data
     *
     * @return string
     */
    public function render($data = null): string
    {
        if (method_exists($this, 'output')) {
            return $this->output($data);
        }

        return <<<HTML
{$this->renderStart()}
    {$this->renderInner()}
{$this->printEndTag()}
HTML;
    }

    /**
     * I will
     * @return string
     */
    private function renderStart(): string
    {
        $tags = $this->getTagName() . ' ';
        if (Render::HAS_END_TAG) {
            $output = Render::BEGIN_TAG;
        } else {
            $output = Render::ONLY_BEGIN_TAG;
        }
        $tags .= $this->renderAttributes();
        if (! empty($tags)) {
            $tags = substr($tags, 0, -1);
        }

        return str_replace('*', $tags, $output);
    }

    /**
     * I will return the tag name of the current element to render.
     * @return string
     */
    final protected function getTagName(): string
    {
        if (! empty($this->tagName)) {
            return $this->tagName;
        }
        $a = explode('\\', static::class);

        return strtolower($a[count($a) - 1]);
    }

    /**
     * I will solely return the complete set of attributes as string for the output.
     * @return string
     */
    private function renderAttributes(): string
    {
        $tags = '';
        foreach ($this->attributes as $name => $value) {
            if (in_array($value, [false, ''], true)) {
                continue;
            }
            if ($value === 'attribut_only') {
                $tags .= $name . ' ';
                continue;
            }
            $delimiter = '"';
            if (is_array($value)) {
                $value = implode(' ', $value);
            }
            if (! is_string($value)) {
                $value = (string)$value;
            }
            if (strpos($value, '"') !== false) {
                $delimiter = "'";
            }
            $tags .= "{$name}={$delimiter}{$value}{$delimiter} ";
        }

        return $tags;
    }

    /**
     * I will
     * @return string
     */
    final protected function renderInner(): string
    {
        $output = '';
        foreach ($this->elements as $element) {
            if ($element instanceof self) {
                $output .= $element;
            } else {
                $output .= is_array($element) || is_object($element) ? '' : $element;
            }
        }

        return $output;
    }

    /**
     * I will
     * @return string
     */
    private function printEndTag(): string
    {
        if (! Render::HAS_END_TAG) {
            return '';
        }
        $output = Render::END_TAG;

        return str_replace('*', $this->getTagName(), $output);
    }
}
