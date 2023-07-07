<?php

namespace Sedlatschek\GeneralValueTranslations;

class Validator extends \Illuminate\Validation\Validator
{
    /**
     * Get the displayable name of the value.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return string
     */
    public function getDisplayableValue($attribute, $value)
    {
        if (isset($this->customValues[$attribute][$value])) {
            return $this->customValues[$attribute][$value];
        }

        $key = "validation.values.{$attribute}.{$value}";

        if (($line = $this->translator->get($key)) !== $key) {
            return $line;
        }

        $key = "validation.general-values.{$value}";

        if (($line = $this->translator->get($key)) !== $key) {
            return $line;
        }

        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        if (is_null($value)) {
            return 'empty';
        }

        return (string) $value;
    }
}
