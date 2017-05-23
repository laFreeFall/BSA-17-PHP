<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    public function generate()
    {
        $emojis = ['😀', '😃', '😄', '😁', '😆', '😅', '😂'];
        //Didn't extract emojis to a class private member variable, cause the task was to expand generate() method only
        foreach($emojis as $emoji) {
            yield $emoji;
        }
    }
}
