<?php

namespace Laravel\Nova\Fields;

use Illuminate\Support\Facades\Storage;

class Image extends File
{
    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = true;

    /**
     * The maximum width of the component.
     *
     * @var int
     */
    public $maxWidth = 320;

    /**
     * Indicates whether the image should be fully rounded or not.
     *
     * @var bool
     */
    public $rounded = true;

    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|null  $attribute
     * @param  string|null  $disk
     * @param  callable|null  $storageCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $disk = 'public', $storageCallback = null)
    {
        parent::__construct($name, $attribute, $disk, $storageCallback);

        $this->thumbnail(function () {
            return $this->value ? Storage::disk($this->disk)->url($this->value) : null;
        })->preview(function () {
            return $this->value ? Storage::disk($this->disk)->url($this->value) : null;
        });
    }

    /**
     * Set the maximum width of the component.
     *
     * @param  int  $maxWidth
     * @return $this
     */
    public function maxWidth($maxWidth)
    {
        $this->maxWidth = $maxWidth;

        return $this;
    }

    /**
     * Display the image thumbnail with full-rounded edges.
     *
     * @return void
     */
    public function rounded()
    {
        $this->rounded = true;

        return $this;
    }

    /**
     * Display the image thumbnail with square edges.
     *
     * @return $this
     */
    public function squared()
    {
        $this->rounded = false;

        return $this;
    }

    /**
     * Prepare the field element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'maxWidth' => $this->maxWidth,
            'rounded' => $this->rounded,
        ]);
    }
}
