<?php

namespace Xzxzyzyz\LaravelNova\MultiCard;

use Laravel\Nova\Card;

class MultiCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'laravel-nova-multi-card';
    }

    public function title($title)
    {
        return $this->withMeta([
            'title' => $title
        ]);
    }

    public function cards(array $cards)
    {
        return $this->withMeta([
            'cards' => array_map(function ($card) {
                return is_callable($card)? call_user_func($card): $card;
            }, $cards)
        ]);
    }
}
