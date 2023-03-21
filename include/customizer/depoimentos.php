<?php
 function olmb7_depoimentos_customizer($wp_customize){
    // Settings
    $wp_customize->add_setting('olmb7_depo1_url', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo1_txt', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo1_autor', array('default' => ''));

    $wp_customize->add_setting('olmb7_depo2_url', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo2_txt', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo2_autor', array('default' => ''));

    $wp_customize->add_setting('olmb7_depo3_url', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo3_txt', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo3_autor', array('default' => ''));

    $wp_customize->add_setting('olmb7_depo4_url', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo4_txt', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo4_autor', array('default' => ''));

    $wp_customize->add_setting('olmb7_depo5_url', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo5_txt', array('default' => ''));
    $wp_customize->add_setting('olmb7_depo5_autor', array('default' => ''));

    // Panel
    $wp_customize->add_panel('olmb7_depoimentos', array(
      'title'    =>    'Depoimentos',
      'priority' =>    '2'
    ));
    //Sections
    $wp_customize->add_section('olmb7_depo1', array(
      'title'    =>    'Depoimento 1',
      'priority' =>    '1',
      'panel'    =>    'olmb7_depoimentos'
    ));
    $wp_customize->add_section('olmb7_depo2', array(
      'title'    =>    'Depoimento 2',
      'priority' =>    '2',
      'panel'    =>    'olmb7_depoimentos'
    ));
    $wp_customize->add_section('olmb7_depo3', array(
      'title'    =>    'Depoimento 3',
      'priority' =>    '3',
      'panel'    =>    'olmb7_depoimentos'
    ));
    $wp_customize->add_section('olmb7_depo4', array(
      'title'    =>    'Depoimento 4',
      'priority' =>    '4',
      'panel'    =>    'olmb7_depoimentos'
    ));
    $wp_customize->add_section('olmb7_depo5', array(
      'title'    =>    'Depoimento 5',
      'priority' =>    '5',
      'panel'    =>    'olmb7_depoimentos'
    ));

    // Controllers
    // Depoimentos
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo1_txt',
        array(
          'label'     =>   'Texto:',
          'section'   =>   'olmb7_depo1',
          'settings'  =>  'olmb7_depo1_txt',
        )
      )
    );
        $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo2_txt',
        array(
          'label'     =>   'Texto:',
          'section'   =>   'olmb7_depo2',
          'settings'  =>  'olmb7_depo2_txt',
        )
      )
    );
        $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo3_txt',
        array(
          'label'     =>   'Texto:',
          'section'   =>   'olmb7_depo3',
          'settings'  =>  'olmb7_depo3_txt',
        )
      )
    );
        $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo4_txt',
        array(
          'label'     =>   'Texto:',
          'section'   =>   'olmb7_depo4',
          'settings'  =>  'olmb7_depo4_txt',
        )
      )
    );
        $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo5_txt',
        array(
          'label'     =>   'Texto:',
          'section'   =>   'olmb7_depo5',
          'settings'  =>  'olmb7_depo5_txt',
        )
      )
    );
    
    // Autor
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo1_autor',
        array(
          'label'     =>   'Autor:',
          'section'   =>   'olmb7_depo1',
          'settings'  =>  'olmb7_depo1_autor',
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo2_autor',
        array(
          'label'     =>   'Autor:',
          'section'   =>   'olmb7_depo2',
          'settings'  =>  'olmb7_depo2_autor',
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo3_autor',
        array(
          'label'     =>   'Autor:',
          'section'   =>   'olmb7_depo3',
          'settings'  =>  'olmb7_depo3_autor',
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo4_autor',
        array(
          'label'     =>   'Autor:',
          'section'   =>   'olmb7_depo4',
          'settings'  =>  'olmb7_depo4_autor',
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olmb7_depo5_autor',
        array(
          'label'     =>   'Autor:',
          'section'   =>   'olmb7_depo5',
          'settings'  =>  'olmb7_depo5_autor',
        )
      )
    );

    // Imagem do autor
    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'olmb7_depo1_url',
        array(
          'label'     =>   'Imagem:',
          'section'   =>   'olmb7_depo1',
          'settings'  =>  'olmb7_depo1_url',
        )
      )
    );
        $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'olmb7_depo2_url',
        array(
          'label'     =>   'Imagem:',
          'section'   =>   'olmb7_depo2',
          'settings'  =>  'olmb7_depo2_url',
        )
      )
    );
        $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'olmb7_depo3_url',
        array(
          'label'     =>   'Imagem:',
          'section'   =>   'olmb7_depo3',
          'settings'  =>  'olmb7_depo3_url',
        )
      )
    );
        $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'olmb7_depo4_url',
        array(
          'label'     =>   'Imagem:',
          'section'   =>   'olmb7_depo4',
          'settings'  =>  'olmb7_depo4_url',
        )
      )
    );
        $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'olmb7_depo5_url',
        array(
          'label'     =>   'Imagem:',
          'section'   =>   'olmb7_depo5',
          'settings'  =>  'olmb7_depo5_url',
        )
      )
    );

 }