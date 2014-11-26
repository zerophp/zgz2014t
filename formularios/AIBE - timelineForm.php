<?php
$timeline_form = array(
    array(
        'name'          => 'startDate',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'startDate',
        'label'         => 'Start Date',
        'placeholder'   => 'Introduce start date',
        
        'validation'    => array('required', 'date', /*period*/),
        
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
    ),
    array(
        'name'          => 'headline',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'headline',
        'label'         => 'Headline',
        'placeholder'   => 'Introduce headline',
    
        'validation'    => array('required', 'text'),
    
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    array(
        'name'          => 'text',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'text',
        'label'         => 'Text',
        'placeholder'   => 'Introduce text',
    
        'validation'    => array('max-length'),
    
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
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
    
        'validation'    => array('max-length', 'text'),
    
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    array(
        'name'          => 'mediaCaption',
        'type'          => 'text',
        'defaultValue'  => '',
        'id'            => 'mediaCaption',
        'label'         => 'Media caption',
        'placeholder'   => 'Introduce media caption',
    
        'validation'    => array('max-length', 'text'),
    
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
    array(
        'name'          => 'type',
        'type'          => 'select',
        'defaultValue'  => '',
        'values'        => array(
                                array(  'name' => 'era', 
                                        'type' => 'option',
                                        'defaultvalue'  => 'era',
                                        'text'          => 'Era'
                                    ),
                                array(  'name' => 'title', 
                                        'type' => 'option',
                                        'defaultvalue'  => 'title',
                                        'text'          => 'Title'
                                    ),
                            ),
        'id'            => 'type',
        'label'         => 'Type',
        'placeholder'   => 'Introduce type',
    
        'validation'    => array('text'),
    
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    array(
        'name'          => 'type',
        'type'          => 'select',
        'defaultValue'  => '',
        'values'        => array(
                                array(  'name'          => 'tag1', 
                                        'type'          => 'option',
                                        'defaultvalue'  => 'tag1',
                                        'text'          => 'Tag 1'
                                    ),
                                array(  'name'          => 'tag2', 
                                        'type'          => 'option',
                                        'defaultvalue'  => 'tag2',
                                        'text'          => 'Tag 2'
                                    ),
                                array(  'name'          => 'tag3', 
                                        'type'          => 'option',
                                        'defaultvalue'  => 'tag3',
                                        'text'          => 'Tag 3'
                                    ),
                                array(  'name' => 'tag4', 
                                        'type' => 'option',
                                        'defaultvalue'  => 'tag4',
                                        'text'          => 'Tag 4'
                                    ),
                                array(  'name'          => 'tag5', 
                                        'type'          => 'option',
                                        'defaultvalue'  => 'tag5',
                                        'text'          => 'Tag 5'
                                    ),
                            ),
        'multiple'      => true,
        'id'            => 'type',
        'label'         => 'Type',
        'placeholder'   => 'Introduce type',
    
        'validation'    => array('text'),
    
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    array(
        'name'          => 'id',
        'type'          => 'hidden',
        'defaultValue'  => '-1',
        'id'            => 'id',
        'label'         => '',
        'placeholder'   => '',
    
        'validation'    => array('required', 'number'),
    
        'filters'       => array('stripTrim', 'stripTags', 'escape'),
    ),
    
);