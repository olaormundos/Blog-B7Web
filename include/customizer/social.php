<?php
  function olmb7_social_customizer($wp_customize){
      // Settings
      $wp_customize->add_setting('olmb7_facebook', array('default' => ''));
      $wp_customize->add_setting('olmb7_instagram', array('default' => ''));
      $wp_customize->add_setting('olmb7_youtube', array('default' => ''));
      
      // Section
      $wp_customize->add_section('olmb7_social_section', array(
        'title'       => 'Redes Sociais',
        'priority'    => '1',
        'description' => 'Adicioine suas redes sociais preferidas',
      ));

      // Controllers
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'olmb7_facebook',
          array(
            'label'    => 'Link do Facebook',
            'section'  => 'olmb7_social_section',
            'settings' => 'olmb7_facebook',
            'type'     => 'text'
          )
        )
      );
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'olmb7_instagram',
          array(
            'label'    => 'Link do Instagram',
            'section'  => 'olmb7_social_section',
            'settings' => 'olmb7_instagram',
            'type'     => 'text'
          )
        )
      );
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'olmb7_youtube',
          array(
            'label'    =>  'Link do Youtube',
            'section'  => 'olmb7_social_section',
            'settings' => 'olmb7_youtube',
            'type'     => 'text'
          )
        )
      );
  }