<?php

namespace App\Channels\Messages;

class WhatsAppMessage
{
    /**
     * The message content.
     *
     * @var string
     */
    public $content;

    /**
     * Set the message content.
     *
     * @param  string  $content
     *
     * @return $this
     */
    public function content($content)
    {
        $this->content = $content;

        return $this;
    }
}
