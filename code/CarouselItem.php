<?php

class CarouselItem extends DataObject
{

    static $db = array(
        'Title' => 'Varchar(255)',
        'Content' => 'HTMLText',
        'LinkType' => 'Enum(\'None,Page,External\',\'None\')',
        'ExternalLink' => 'Varchar(255)'
    );

    static $has_one = array(
        'Image' => 'Image',
        'ExtraImage' => 'Image',
        'File' => 'File',
        'LinkedPage' => 'SiteTree',
        'Page' => 'Page'
    );

    public function getCMSFields()
    {

        $fields = new FieldSet();

        $fields->push(new TextField('Title', 'Title'));
        $fields->push(new TextareaField('Content', 'Content'));

        $fields->push(new FileAttachmentField('Image', 'Image'));
        $fields->push(new FileAttachmentField('ExtraImage', 'Extra Image'));

        $fields->push($this->dbObject('LinkType')->formField('Link Type'));

        $fields->push(new SimpleTreeDropdownField('LinkedPageID', 'Linked Page', 'SiteTree'));

        $fields->push(new TextField('ExternalLink', 'External Link'));

        return $fields;

    }

}