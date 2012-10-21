<?php

class CarouselExtension extends DataExtension
{

    static $has_many = array(
        'CarouselItems' => 'CarouselItem'
    );

}