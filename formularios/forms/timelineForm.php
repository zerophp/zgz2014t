<?php
$timeline_form = array(
    /*array(
        'name'          => 'startDate',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'startDate',
        'label'         => 'Start Date',
        'placeholder'   => 'Introduce start date',
        'validation'    => array('required', 'date'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    array(
        'name'          => 'endDate',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'endDate',
        'label'         => 'End Date',
        'placeholder'   => 'Introduce end date',
        'validation'    => array('date'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),*/
    array(
        'name'          => 'headline',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'headline',
        'label'         => 'Headline',
        'placeholder'   => 'Introduce headline',
        'validation'    => array('required'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    /*array(
        'name'          => 'text',
        'type'          => 'textarea',
        'defaultValue'  => '',
        'id'            => 'textarea',
        'label'         => 'Text',
        'placeholder'   => 'Introduce text',
        'validation'    => array('max-length'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),*/
    array(
        'name'          => 'media',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'media',
        'label'         => 'Media',
        'placeholder'   => 'Introduce media URL',
        'validation'    => array('uri'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    array(
        'name'          => 'mediaCredit',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'mediaCredit',
        'label'         => 'Media credits',
        'placeholder'   => 'Introduce media credits',
        'validation'    => array('max-length'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    array(
        'name'          => 'mediaCaption',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'mediaCaption',
        'label'         => 'Media caption',
        'placeholder'   => 'Introduce media caption',
        'validation'    => array('max-length'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    array(
        'name'          => 'mediaThumbnail',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'mediaThumbnail',
        'label'         => 'media thumbnail',
        'placeholder'   => 'Introduce media thumbnail URL',
        'validation'    => array('uri'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    /*
    array(
        'name' => 'type',
        'type' => 'select-simple',
        'defaultValue'  => '',
        'id'            => 'type',
        'placeholder'   => '',
        'values' => array('title' => 'Title Slide', 'era' => 'era Slide'),
        'label' => 'End Date',
        'validation' => array('required'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    
    
    
    array(
        'name' => 'tags',
        'type' => 'select-multiple',
        'defaultValue'  => '',
        'id'            => 'type',
        'placeholder'   => '',
        'values' => array('tag1' => 'tag1', 'tag2' => 'tag2', 'tag3' => 'tag3'),
        'label' => 'End Date',
        'validation' => array(
            'required'
        ),
        'options-validation' => array(
            'max' => 6
        ),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),*/
   
    array(
        'name'          => 'id',
        'type'          => 'hidden',
        'defaultValue'  => '-1',
        'id'            => 'id',
        'label'         => '',
        'placeholder'   => '',
        'validation'    => array( 'number'),
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    array(
        'name'          => 'enviar',
        'type'          => 'submit',
        'defaultValue'  => 'Enviar',     
    ),

);