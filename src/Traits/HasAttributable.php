<?php

namespace BalajiDharma\LaravelAttributes\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasAttributable
{
    /**
     * Get attributes relationship.
     */
    public function attributes(): MorphMany
    {
        return $this->morphMany(
            config('attributes.models.attributes'),
            'attributable'
        )->orderBy('weight');
    }

    /**
     * Attach a single attribute.
     */
    public function attachAttribute(
        string $name, 
        string $value, 
        ?string $data_type = 'string', 
        ?int $weight = 0
    ): Model {
        return $this->attributes()->create([
            'data_type' => $data_type,
            'name' => $name,
            'value' => $value,
            'attributable_id' => $this->getKey(),
            'attributable' => $this->getMorphClass(),
            'weight' => $weight,
        ]);
    }

    /**
     * Attach multiple attributes.
     */
    public function attachAttributes(array $values): self
    {
        $attributes = collect($values)->map(function ($value, $index) {
            return array_merge($value, [
                'attributable_id' => $this->getKey(),
                'attributable' => $this->getMorphClass(),
                'weight' => $value['weight'] ?? $index + 1,
            ]);
        })->all();

        $this->attributes()->createMany($attributes);

        return $this;
    }

    /**
     * Check if attribute has specific value.
     */
    public function hasAttributeValue(string $value): bool
    {
        return $this->getAttributeQuery()
            ->where('value', $value)
            ->exists();
    }

    /**
     * Check if attribute has specific name.
     */
    public function hasAttributeName(string $name): bool
    {
        return $this->getAttributeQuery()
            ->where('name', $name)
            ->exists();
    }

    /**
     * Check if attribute has specific data type.
     */
    public function hasAttributeDataType(string $dataType): bool
    {
        return $this->getAttributeQuery()
            ->where('data_type', $dataType)
            ->exists();
    }


    /**
     * Delete all attributes.
     */
    public function deleteAllAttributes(): self
    {
        $this->getAttributeQuery()->delete();
        return $this;
    }

    /**
     * Delete attribute by name and value.
     */
    public function deleteAttribute(string $name, string $value): int
    {
        return $this->getAttributeQuery()
            ->where('name', $name)
            ->where('value', $value)
            ->delete();
    }

    /**
     * Delete attribute by name.
     */
    public function deleteAttributeByName(string $name): int
    {
        return $this->getAttributeQuery()
            ->where('name', $name)
            ->delete();
    }

    /**
     * Delete attribute by value.
     */
    public function deleteAttributeByValue(string $value): int
    {
        return $this->getAttributeQuery()
            ->where('value', $value)
            ->delete();
    }

    /**
     * Delete attribute by value.
     */
    public function deleteAttributeByDataType(string $dataType): int
    {
        return $this->getAttributeQuery()
            ->where('data_type', $dataType)
            ->delete();
    }

    /**
     * Get base attribute query.
     */
    private function getAttributeQuery(): MorphMany
    {
        return $this->attributes()
            ->where('attributable_id', $this->getKey())
            ->where('attributable', $this->getMorphClass());
    }
}
