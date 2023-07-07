<?php

namespace Sedlatschek\GeneralValueTranslations;

class Factory extends \Illuminate\Validation\Factory
{
    /**
     * Resolve a new Validator instance.
     *
     * @return \Illuminate\Validation\Validator
     */
    protected function resolve(array $data, array $rules, array $messages, array $attributes)
    {
        if (is_null($this->resolver)) {
            return new Validator($this->translator, $data, $rules, $messages, $attributes);
        }

        return call_user_func($this->resolver, $this->translator, $data, $rules, $messages, $attributes);
    }
}
