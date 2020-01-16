<?php
namespace ffb255\Botter\Constants;

class APIConstants
{
    const BASE_API_URL = 'https://api.telegram.org/bot%s/';

    const UPLOADABLE = [
        'photo',
        'audio',
        'document',
        'video',
        'animation',
        'voice',
        'video_note',
        'thumb',
        'sticker',
        'png_sticker'
    ];

    const HTTP_DEFAULT_TIMEOUT = 10.0;
}