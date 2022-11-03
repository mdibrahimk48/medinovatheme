<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix_my_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Custom Theme Options',
  'menu_slug'  => 'csf-demo',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'Toolbar Options',
  'icon'   => 'fas fa-barcode',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'opt-cell',
      'type'  => 'text',
      'title' => 'Cell No',
    ),

    //
    // A validate email field
    //
    array(
      'id'       => 'opt-validate-email',
      'type'     => 'text',
      'title'    => 'Email',
      'subtitle' => 'This text field only allows validated email address.',
      'default'  => 'info@domain.com',
      'validate' => 'csf_validate_email', 
    ),

//
// Field: group
//
    ///////////////////////////////////////////////////////
    array(
      'id'     => 'opt-social',
      'type'   => 'group',
      'title'  => __('Social Link', 'classicmedinova'),
      'button_title'  => __('Add New Social Field', 'classicmedinova'),
      'fields' => array(
        array(
          'id'    => 'opt-social-title',
          'type'  => 'text',
          'title'  => __('Social Link Title', 'classicmedinova'),
        ),
        array(
          'id'    => 'opt-social-icon',
          'type'  => 'icon',
          'title'  => __('Social Link Icon', 'classicmedinova'),
        ),
        array(
          'id'    => 'opt-social-url',
          'type'  => 'text',
          'title'  => __('Social Link URL', 'classicmedinova'),
        ),
      )
    ),

  )
) );


//
// Create Title & Name
//
CSF::createSection( $prefix, array(
  'title'  => 'Site Name Options',
  'icon'   => 'fas fa-code',
  'fields' => array(
    array(
      'id'     => 'opt-site-name',
      'type'   => 'fieldset',
      'title'  => 'Site Name',
      'fields' => array(
        array(
          'id'      => 'opt-siteicon',
          'type'    => 'icon',
          'title'   => 'Select Site Icon',
        ),
        array(
          'id'      => 'opt-customsitename',
          'type'    => 'text',
          'title'   => 'Site Name',
        ),
        array(
          'id'      => 'opt-customurl',
          'type'    => 'text',
          'title'   => 'Site URL',
        ),
        array(
          'id'      => 'opt-sitetitle',
          'type'    => 'text',
          'title'   => 'Site Title',
        ),
      ),
      'default' => array(
        'opt-siteicon'              => 'fas fa-hand-holding-medical',
        'opt-customsitename'        => 'Medinova',
        'opt-customurl'             => '#',
        'opt-sitetitle'             => 'MEDINOVA - Hospital Website Template',
      )
    ),

  )
) );

//
// Field: fieldset
//


CSF::createSection( $prefix, array(
  'title'  => 'Footer Options',
  'icon'   => 'far fa-clone',
  'fields' => array(

    array(
      'id'     => 'opt-footer-copyright',
      'type'   => 'fieldset',
      'title'  => 'Site Title',
      'fields' => array(
        array(
          'id'      => 'opt-sitename',
          'type'    => 'text',
          'title'   => 'Site Name',
        ),
        array(
          'id'      => 'opt-year',
          'type'    => 'text',
          'title'   => 'Year',
        ),
        array(
          'id'      => 'opt-url',
          'type'    => 'text',
          'title'   => 'Site URL',
        ),
      ),
      'default' => array(
        'opt-sitename'    => 'Medinova',
        'opt-year'        => '2022',
        'opt-url'         => '#',
      )
    ),

    array(
      'id'     => 'opt-footer-team',
      'type'   => 'fieldset',
      'title'  => 'Developer Team',
      'fields' => array(
        array(
          'id'      => 'opt-devteamname',
          'type'    => 'text',
          'title'   => 'Developer Team Name',
        ),
        array(
          'id'      => 'opt-devteamurl',
          'type'    => 'text',
          'title'   => 'Developer Team Site URL',
        ),
      ),
      'default' => array(
        'opt-devteamname'    => 'Team Medinova',
        'opt-devteamurl'     => '#',
      )
    ),

  )
  ));

//
// Dependencies
//
CSF::createSection( $prefix, array(
  'title'       => 'Dependencies',
  'icon'        => 'fas fa-code-branch',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/faq?id=how-to-use-dependency" target="_blank">How to use dependencies</a>',
  'fields'      => array(

    array(
      'type'    => 'subheading',
      'content' => 'Basic Dependencies',
    ),

    //
    // Dependency example 1
    array(
      'id'         => 'opt-depend-switcher',
      'type'       => 'switcher',
      'title'      => 'If switched to (ON)',
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Switched to (ON).',
      'dependency' => array( 'opt-depend-switcher', '==', 'true' ),
    ),

    //
    // Dependency example 2
    array(
      'id'         => 'opt-depend-text',
      'type'       => 'text',
      'title'      => 'If typed something to field',
    ),

    array(
      'type'        => 'notice',
      'style'       => 'success',
      'content'     => 'Success: You typed something.',
      'dependency'  => array( 'opt-depend-text', '!=', '' ),
    ),

    //
    // Dependency example 3
    array(
      'id'          => 'opt-depend-select',
      'type'        => 'select',
      'title'       => 'If selected to (Blue) or (Black)',
      'placeholder' => 'Select a color',
      'options'     => array(
        'blue'      => 'Blue',
        'yellow'    => 'Yellow',
        'green'     => 'Green',
        'black'     => 'Black',
        'white'     => 'White',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Blue) or (Black).',
      'dependency' => array( 'opt-depend-select', 'any', 'blue,black' ),
    ),

    //
    // Dependency example 4
    array(
      'id'      => 'opt-depend-radio',
      'type'    => 'radio',
      'title'   => 'If selected to (Yes, Please)',
      'inline'  => true,
      'options' => array(
        'no'    => 'No, Thanks',
        'yes'   => 'Yes, Please',
        'any'   => 'I am not sure!',
      ),
      'default' => 'no'
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Yes, Please).',
      'dependency' => array( 'opt-depend-radio', '==', 'yes' ),
    ),

    //
    // Dependency example 5
    array(
      'id'       => 'opt-depend-checkbox',
      'type'     => 'checkbox',
      'title'    => 'If selected to (Green) or (Black)',
      'inline'   => true,
      'options'  => array(
        'blue'   => 'Blue',
        'yellow' => 'Yellow',
        'green'  => 'Green',
        'black'  => 'Black',
        'white'  => 'White',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Green).',
      'dependency' => array( 'opt-depend-checkbox', 'any', 'green,black' ),
    ),

    //
    // Dependency example 6
    array(
      'id'       => 'opt-depend-image-select',
      'type'     => 'image_select',
      'title'    => 'If selected to (Blue) box',
      'options'  => array(
        'green'  => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'    => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'   => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'   => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default'  => 'green',
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Blue) box.',
      'dependency' => array( 'opt-depend-image-select', '==', 'blue' ),
    ),

    //
    // Dependency example 6
    array(
      'id'       => 'opt-depend-image-select-any',
      'type'     => 'image_select',
      'title'    => 'If selected to (Red) or (Blue) box',
      'options'  => array(
        'green'  => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'    => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'   => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'   => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default'  => 'green',
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Red) or (Blue) box.',
      'dependency' => array( 'opt-depend-image-select-any', 'any', 'red,blue' ),
    ),

    array(
      'type'    => 'subheading',
      'content' => 'Visible Dependencies',
    ),

    //
    // Dependency example 7
    array(
      'id'          => 'opt-depend-visible-switcher',
      'type'        => 'switcher',
      'title'       => 'Switched to (ON)',
      'label'       => 'Below fields are visibling instead of hiding. Switched to (ON) for use them.',
    ),

    array(
      'id'          => 'opt-depend-visible-text',
      'type'        => 'text',
      'title'       => 'Visible Text',
      'dependency'  => array( 'opt-depend-visible-switcher', '==', 'true', '', 'visible' ),
    ),

    array(
      'id'          => 'opt-depend-visible-select',
      'type'        => 'select',
      'title'       => 'Visible Select',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
      'dependency'  => array( 'opt-depend-visible-switcher', '==', 'true', '', 'visible' ),
    ),

    //
    // Dependency example 8
    array(
      'type'    => 'subheading',
      'content' => 'Nested Dependencies',
    ),

    array(
      'id'    => 'opt-depend-switcher-1',
      'type'  => 'switcher',
      'title' => 'If switched to (ON) --->',
    ),

    array(
      'id'          => 'opt-depend-select-1',
      'type'        => 'select',
      'title'       => '---> and selected to (Blue)',
      'placeholder' => 'Select a color',
      'options'     => array(
        'blue'      => 'Blue',
        'yellow'    => 'Yellow',
        'green'     => 'Green',
        'black'     => 'Black',
        'white'     => 'White',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Switched to (ON) and selected to (Blue).',
      'dependency' => array( 'opt-depend-switcher-1|opt-depend-select-1', '==|==', 'true|blue' ),
    ),

    //
    // Dependency example 9
    array(
      'type'    => 'subheading',
      'content' => 'Another Nested Dependencies',
    ),

    array(
      'id'          => 'opt-nested-select-1',
      'type'        => 'select',
      'title'       => 'If selected to (Black) or (White) --->',
      'placeholder' => 'Select a color',
      'options'     => array(
        'blue'      => 'Blue',
        'yellow'    => 'Yellow',
        'green'     => 'Green',
        'black'     => 'Black',
        'white'     => 'White',
      ),
    ),

    array(
      'id'          => 'opt-nested-select-2',
      'type'        => 'select',
      'title'       => '---> and selected to (Large) --->',
      'placeholder' => 'Select a size',
      'options'     => array(
        'small'     => 'Small',
        'middle'    => 'Middle',
        'large'     => 'Large',
        'xlage'     => 'XLarge',
        'xxlage'    => 'XXLarge',
      ),
      'dependency'  => array( 'opt-nested-select-1', 'any', 'black,white' ),
    ),

    array(
      'id'          => 'opt-nested-select-3',
      'type'        => 'select',
      'title'       => '---> and selected to (Hello)',
      'placeholder' => 'Select a word',
      'options'     => array(
        'hello'     => 'Hello',
        'world'     => 'World',
      ),
      'dependency'  => array( 'opt-nested-select-1|opt-nested-select-2', 'any|==', 'black,white|large' ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Congratulations, You are here now!',
      'dependency' => array( 'opt-nested-select-1|opt-nested-select-2|opt-nested-select-3', 'any|==|==', 'black,white|large|hello' ),
    ),

    //
    // Dependency example 10
    array(
      'type'    => 'subheading',
      'content' => 'Contains Dependencies',
    ),

    array(
      'id'       => 'opt-depend-checkbox-1',
      'type'     => 'checkbox',
      'title'    => 'Select a color or more.',
      'inline'   => true,
      'options'  => array(
        'blue'   => 'Blue',
        'yellow' => 'Yellow',
        'green'  => 'Green',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'info',
      'content'    => 'Selected (blue) color.',
      'dependency' => array( 'opt-depend-checkbox-1', 'contains', 'blue' ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'warning',
      'content'    => 'Selected (yellow) color.',
      'dependency' => array( 'opt-depend-checkbox-1', 'contains', 'yellow' ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Selected (green) color.',
      'dependency' => array( 'opt-depend-checkbox-1', 'contains', 'green' ),
    ),

  )
) );

//
// Sanitize
//
CSF::createSection( $prefix, array(
  'title'       => 'Sanitize',
  'icon'        => 'fas fa-redo',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/faq?id=how-to-use-sanitize" target="_blank">How to use sanitize</a>',
  'fields'      => array(

    array(
      'id'       => 'opt-sanitize-1',
      'type'     => 'text',
      'title'    => 'Sanitize (a) to (b)',
      'subtitle' => 'Replacing letter (a) to letter (b). for eg. apple to bpple',
      'sanitize' => 'csf_sanitize_replace_a_to_b'
    ),

    array(
      'id'       => 'opt-sanitize-2',
      'type'     => 'text',
      'title'    => 'Sanitize Title',
      'subtitle' => 'Converting (space) to (-) and (uppercase) letters to (lowercase) letters. for eg. Hello World to hello-world',
      'sanitize' => 'csf_sanitize_title'
    ),

  )
) );

//
// Field: backup
//
CSF::createSection( $prefix, array(
  'title'       => 'Backup',
  'icon'        => 'fas fa-shield-alt',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=backup" target="_blank">Field: backup</a>',
  'fields'      => array(

    array(
      'type' => 'backup',
    ),

  )
) );
