<?php

namespace Flasher\Toastr\Prime;

use Flasher\Prime\Notification\Notification;

final class Toastr extends Notification
{
    /**
     * @var string
     */
    private $title;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        return array_merge(parent::toArray(), array(
            'title' => $this->getTitle(),
        ));
    }
}
