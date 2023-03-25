<?php
  function olmb7_cores_customizer($wp_customize){
      // Settings
      $wp_customize->add_setting('olmb7_corbotao', array('default' => '#455482'));
      $wp_customize->add_setting('olmb7_cortitulo', array('default' => '#2d3a64'));
      
      // Section
      $wp_customize->add_section('olmb7_cores_section', array(
        'title'       => 'Cores',
        'priority'    => '3',
        'description' => 'Customize com as suas cores prediletas',
      ));

      // Controllers
      $wp_customize->add_control(
        new WP_Customize_Color_Control(
          $wp_customize,
          'olmb7_corbotao',
          array(
            'label'    => 'Cor dos botões',
            'section'  => 'olmb7_cores_section',
            'settings' => 'olmb7_corbotao'
          )
        )
      );
      $wp_customize->add_control(
        new WP_Customize_Color_Control(
          $wp_customize,
          'olmb7_cortitulo',
          array(
            'label'    => 'Cor dos títulos',
            'section'  => 'olmb7_cores_section',
            'settings' => 'olmb7_cortitulo'
          )
        )
      );
  }