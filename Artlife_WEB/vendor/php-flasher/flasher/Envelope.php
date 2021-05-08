<?php

namespace Flasher\Prime;

use Flasher\Prime\Notification\NotificationInterface;
use Flasher\Prime\Stamp\PresentableStampInterface;
use Flasher\Prime\Stamp\StampInterface;

final class Envelope implements NotificationInterface
{
    /**
     * @var NotificationInterface
     */
    private $notification;

    /**
     * @var StampInterface[]
     */
    private $stamps = array();

    /**
     * @param NotificationInterface $notification
     * @param StampInterface[]      $stamps
     */
    public function __construct(NotificationInterface $notification, $stamps = array())
    {
        $this->notification = $notification;
        $this->with(is_array($stamps) ? $stamps : array_slice(func_get_args(), 1));
    }

    /**
     * Makes sure the notification is in an Envelope and adds the given stamps.
     *
     * @param NotificationInterface $notification
     * @param StampInterface[]      $stamps
     *
     * @return Envelope
     */
    public static function wrap(NotificationInterface $notification, $stamps = array())
    {
        $envelope = $notification instanceof self ? $notification : new self($notification);

        return $envelope->with(is_array($stamps) ? $stamps : array_slice(func_get_args(), 1));
    }

    /**
     * @param array|StampInterface $stamps
     *
     * @return Envelope a new Envelope instance with additional stamp
     */
    public function with($stamps)
    {
        $stamps = is_array($stamps) ? $stamps : func_get_args();

        foreach ($stamps as $stamp) {
            $this->withStamp($stamp);
        }

        return $this;
    }

    /**
     * @param StampInterface $stamp
     *
     * @return $this
     */
    public function withStamp(StampInterface $stamp)
    {
        $this->stamps[get_class($stamp)] = $stamp;

        return $this;
    }

    /**
     * @param string $stampFqcn
     *
     * @return StampInterface|null
     */
    public function get($stampFqcn)
    {
        if (!isset($this->stamps[$stampFqcn])) {
            return null;
        }

        return $this->stamps[$stampFqcn];
    }

    /**
     * All stamps by their class name
     *
     * @return StampInterface[]
     */
    public function all()
    {
        return $this->stamps;
    }

    /**
     * The original notification contained in the envelope
     *
     * @return NotificationInterface
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @inheritDoc
     */
    public function getType()
    {
        return $this->notification->getType();
    }

    /**
     * @inheritDoc
     */
    public function setType($type)
    {
        $this->notification->setType($type);
    }

    /**
     * @inheritDoc
     */
    public function getMessage()
    {
        return $this->notification->getMessage();
    }

    /**
     * @inheritDoc
     */
    public function setMessage($message)
    {
        $this->notification->setMessage($message);
    }

    /**
     * @inheritDoc
     */
    public function getOptions()
    {
        return $this->notification->getOptions();
    }

    /**
     * @inheritDoc
     */
    public function setOptions(array $options)
    {
        $this->notification->setOptions($options);
    }

    /**
     * @inheritDoc
     */
    public function getOption($name, $default = null)
    {
        return $this->notification->getOption($name, $default);
    }

    /**
     * @inheritDoc
     */
    public function setOption($name, $value)
    {
        $this->notification->setOption($name, $value);
    }

    /**
     * @inheritDoc
     */
    public function unsetOption($name)
    {
        $this->notification->unsetOption($name);
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        $array = array(
            'notification' => $this->notification->toArray(),
        );

        foreach ($this->all() as $stamp) {
            if ($stamp instanceof PresentableStampInterface) {
                $array = array_merge($array, $stamp->toArray());
            }
        }

        return $array;
    }
}
