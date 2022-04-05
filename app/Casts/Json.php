<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use JsonException;

class Json implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return mixed
     * @throws JsonException
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return json_decode(json: $value,
            associative: true,
            flags: JSON_THROW_ON_ERROR);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return mixed
     * @throws JsonException
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return json_encode($value,
            JSON_THROW_ON_ERROR
            );
    }
}
