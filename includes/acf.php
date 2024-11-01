<?php
$wpscreens_valid_licance = get_option( 'wpscreens_valid_licance' );


$wp_screens_addon_valid_licence = get_option('wpscreens_valid_licence_addon');

if ( function_exists( 'acf_add_local_field_group' ) ) :
	if ( '1' === $wpscreens_valid_licance || '2' === $wpscreens_valid_licance || '3' == $wp_screens_addon_valid_licence ){
		
		acf_add_local_field_group(
			array(
				'key'                   => 'group_5e76272fa9d3a',
				'title'                 => 'Header',
				'fields'                => array(
					array(
						'key'               => 'field_5e762e54187e5',
						'label'             => 'Content',
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'placement'         => 'top',
						'endpoint'          => 0,
					),
					array(
						'key'               => 'field_5e762c61f82e1',
						'label'             => 'Left',
						'name'              => 'top-left',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '33',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'none'      => 'None',
							'logo'      => 'Logo',
							'date-time' => 'Date/Time',
							'weather'   => 'Weather',
						),
						'default_value'     => array(),
						'allow_null'        => 1,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_5e762caef82e2',
						'label'             => 'Center',
						'name'              => 'top-center',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '33',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'none'      => 'None',
							'logo'      => 'Logo',
							'date-time' => 'Date/Time',
							'weather'   => 'Weather',
						),
						'default_value'     => array(),
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_5e762cbcf82e3',
						'label'             => 'Right',
						'name'              => 'top-right',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '33',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'none'      => 'None',
							'logo'      => 'Logo',
							'date-time' => 'Date/Time',
							'weather'   => 'Weather',
						),
						'default_value'     => array(),
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_5e762ddf266ae',
						'label'             => 'Logo',
						'name'              => 'logo',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e762c61f82e1',
									'operator' => '==',
									'value'    => 'logo',
								),
							),
							array(
								array(
									'field'    => 'field_5e762cbcf82e3',
									'operator' => '==',
									'value'    => 'logo',
								),
							),
							array(
								array(
									'field'    => 'field_5e762caef82e2',
									'operator' => '==',
									'value'    => 'logo',
								),
							),
						),
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'url',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),
					array(
						'key'               => 'field_5e762da75b93c',
						'label'             => 'Script for weather',
						'name'              => 'weather',
						'type'              => 'textarea',
						'instructions'      => 'Script for weather, create your personal script at <a href="https://weatherwidget.io/" target="_blank">weatherwidget.io</a>',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e762c61f82e1',
									'operator' => '==',
									'value'    => 'weather',
								),
							),
							array(
								array(
									'field'    => 'field_5e762caef82e2',
									'operator' => '==',
									'value'    => 'weather',
								),
							),
							array(
								array(
									'field'    => 'field_5e762cbcf82e3',
									'operator' => '==',
									'value'    => 'weather',
								),
							),
						),
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'maxlength'         => '',
						'rows'              => '',
						'new_lines'         => '',
					),
					array(
						'key'               => 'field_5e762e65187e6',
						'label'             => 'Display',
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'placement'         => 'top',
						'endpoint'          => 0,
					),
					array(
						'key'               => 'field_5e762e76187e7',
						'label'             => 'Background',
						'name'              => 'background',
						'type'              => 'button_group',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'none'  => 'None',
							'image' => 'Image',
							'color' => 'Color',
						),
						'allow_null'        => 0,
						'default_value'     => '',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					),
					array(
						'key'               => 'field_5e762eb1187e8',
						'label'             => 'Backgrund Image',
						'name'              => 'top_backgrund_image',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e762e76187e7',
									'operator' => '==',
									'value'    => 'image',
								),
							),
						),
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'url',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),
					array(
						'key'               => 'field_5e762ede187e9',
						'label'             => 'Background size',
						'name'              => 'top_background_size',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e762e76187e7',
									'operator' => '==',
									'value'    => 'image',
								),
							),
						),
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'cover'  => 'Cover',
							'repeat' => 'Repeat',
						),
						'default_value'     => array(),
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_5e7632d622d4f',
						'label'             => 'Background color',
						'name'              => 'top_background_color',
						'type'              => 'color_picker',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e762e76187e7',
									'operator' => '==',
									'value'    => 'color',
								),
							),
						),
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
					),
					array(
						'key'               => 'field_5e7632f522d50',
						'label'             => 'Opacity',
						'name'              => 'top_opacity',
						'type'              => 'number',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e762e76187e7',
									'operator' => '==',
									'value'    => 'color',
								),
							),
						),
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '%',
						'min'               => 0,
						'max'               => 100,
						'step'              => '',
					),
					array(
						'key'               => 'field_5e771b1cfeeac',
						'label'             => 'Color',
						'name'              => 'top_color',
						'type'              => 'color_picker',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
					),
					array(
						'key'               => 'field_5e76339b75da6',
						'label'             => 'Shadow',
						'name'              => 'top_shadow',
						'type'              => 'true_false',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'message'           => '',
						'default_value'     => 0,
						'ui'                => 1,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					),
					array(
						'key'               => 'field_5e7633ac75da7',
						'label'             => 'Shadow color',
						'name'              => 'top_shadow_color',
						'type'              => 'color_picker',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e76339b75da6',
									'operator' => '==',
									'value'    => '1',
								),
							),
						),
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
					),
					array(
						'key'               => 'field_5e8cdfa833d7f',
						'label'             => 'Rotate',
						'name'              => 'rotate',
						'type'              => 'true_false',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'message'           => '',
						'default_value'     => 0,
						'ui'                => 1,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'displays',
						),
					),
				),
				'menu_order'            => 1000,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
			)
		);

		acf_add_local_field_group(
			array(
				'key'                   => 'group_5e7633fe06135',
				'title'                 => 'Footer',
				'fields'                => array(
					array(
						'key'               => 'field_5e7633fe1c051',
						'label'             => 'Content',
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'placement'         => 'top',
						'endpoint'          => 0,
					),
					array(	
						'key'               => 'field_5e7634609b3cf',
						'label'             => 'Content',
						'name'              => 'feed_type',
						'type'              => 'radio',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'choices'  => array(
		                    "newsfeed"=> "NewsFeed",
		                    "message_ticker"=> "Custom Message Ticker"
		                ),
						'message'           => '',
						'layout' => 'horizontal',
						'default_value'     => 0,
						'ui'                => 1,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					),
					array(
						'key'               => 'field_5e76347f9b3d0',
						'label'             => 'Newsfeed url',
						'name'              => 'newsfeed_url',
						'type'              => 'url',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e7634609b3cf',
									'operator' => '==',
									'value'    => 'newsfeed',
								),
							),
						),
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_5e7634989b3d1',
						'label'             => 'Items',
						'name'              => 'newsfeed_items',
						'type'              => 'number',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e7634609b3cf',
									'operator' => '==',
									'value'    => 'newsfeed',
								),
							),
						),
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 5,
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'min'               => 1,
						'max'               => 15,
						'step'              => '',
					),
					array(
						'key'               => 'field_5e771b73ec566',
						'label'             => 'Newsfeed logo',
						'name'              => 'newsfeed_logo',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e7634609b3cf',
									'operator' => '==',
									'value'    => 'newsfeed',
								),
							),
						),
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'url',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),			 

				array(
                'key'=> 'field_6435494c599d4',
                'label'=> 'Custom Message Ticker',
                'name'=> 'custom_message_ticker',
                'type'=> 'repeater',
                'instructions'=> '',
                'required'=> 0,
                'conditional_logic'=> array(
                    array(
                       array(
                            'field'=> 'field_5e7634609b3cf',
                            'operator'=> '==',
                            'value'=> 'message_ticker'
                        )
                    )
                ),
                'wrapper'=>array(
                    'width'=> '100',
                    'class'=> '',
                    'id'=> ''
                ),
                'collapsed'=> '',
                'min'=> 0,
                'max'=> 0,
                'layout'=> 'table',
                'button_label'=> 'Add Message',
                'sub_fields'=> array(
                   array(
                        'key'=> 'field_6435496c599d5',
                        'label'=> 'Text',
                        'name'=> 'mt_message',
                        'type'=> 'text',
                        'instructions'=> '',
                        'required'=> 0,
                        'conditional_logic'=> 0,
                        'wrapper'=>array(
                            'width'=> '60',
                            'class'=> '',
                            'id'=> ''
                        ),
                        'default_value'=> '',
                        'placeholder'=> '',
                        'prepend'=> '',
                        'append'=> '',
                        'maxlength'=> ''
                    ),
                   array(
                        'key'=> 'field_643549b7599d6',
                        'label'=> 'Image',
                        'name'=> 'mt_image',
                        'type'=> 'image',
                        'instructions'=> '',
                        'required'=> 0,
                        'conditional_logic'=> 0,
                        'wrapper'=>array(
                            'width'=> '30',
                            'class'=> '',
                            'id'=> ''
                        ),
                        'return_format'=> 'array',
                        'preview_size'=> 'woocommerce_gallery_thumbnail',
                        'library'=> 'all',
                        'min_width'=> '',
                        'min_height'=> '',
                        'min_size'=> '',
                        'max_width'=> '',
                        'max_height'=> '',
                        'max_size'=> '',
                        'mime_types'=> ''
                    ),
                   array(
                        'key'=> 'field_64354a13599d7',
                        'label'=> 'Hide',
                        'name'=> 'mt_hide',
                        'type'=> 'checkbox',
                        'instructions'=> '',
                        'required'=> 0,
                        'conditional_logic'=> 0,
                        'wrapper'=>array(
                            'width'=> '10',
                            'class'=> '',
                            'id'=> ''
                        ),
                        'choices'=> array('hide'=>''),
                        'allow_custom'=> 0,
                        'default_value'=> array(),
                        'layout'=> 'vertical',
                        'toggle'=> 0,
                        'return_format'=> 'value',
                        'save_custom'=> 0
                    	)
                	)
           		 ),

					array(
				        'key'=> 'field_643555ab44e7e',
				        'label'=> 'Logo Position',
				        'name'=> 'logo_position',
				        'type'=> 'radio',
				        'instructions'=> '',
				        'required'=> 0,
				        'conditional_logic'=> 0,
				        'wrapper'=> array(
				            'width'=> '',
				            'class'=> '',
				            'id'=> ''
				        ),
				        'choices'=> array(
				            'left'=> 'Left',
				            'right'=> 'Right',
				            'left_right'=> 'Left + Right'
				        ),
				        'allow_null'=> 0,
				        'other_choice'=> 0,
				        'default_value'=> '',
				        'layout'=> 'horizontal',
				        'return_format'=> 'value',
				        'save_other_choice'=> 0
				    ),

					array(
						'key'               => 'field_5e7633fe1c0a4',
						'label'             => 'Display',
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'placement'         => 'top',
						'endpoint'          => 0,
					),
					array(
						'key'               => 'field_5e7633fe1c0b1',
						'label'             => 'Background',
						'name'              => 'bottom_background',
						'type'              => 'button_group',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'none'  => 'None',
							'image' => 'Image',
							'color' => 'Color',
						),
						'allow_null'        => 0,
						'default_value'     => '',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					),
					array(
						'key'               => 'field_5e7633fe1c0d2',
						'label'             => 'Backgrund Image',
						'name'              => 'bottom_backgrund_image',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e7633fe1c0b1',
									'operator' => '==',
									'value'    => 'image',
								),
							),
						),
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'url',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),
					array(
						'key'               => 'field_5e7633fe1c0f2',
						'label'             => 'Background size',
						'name'              => 'bottom_background_size',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e7633fe1c0b1',
									'operator' => '==',
									'value'    => 'image',
								),
							),
						),
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'cover'  => 'Cover',
							'repeat' => 'Repeat',
						),
						'default_value'     => array(),
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_5e7633fe1c102',
						'label'             => 'Background color',
						'name'              => 'bottom_background_color',
						'type'              => 'color_picker',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e7633fe1c0b1',
									'operator' => '==',
									'value'    => 'color',
								),
							),
						),
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
					),
					array(
						'key'               => 'field_5e7633fe1c141',
						'label'             => 'Opacity',
						'name'              => 'bottom_opacity',
						'type'              => 'number',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e7633fe1c0b1',
									'operator' => '==',
									'value'    => 'color',
								),
							),
						),
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '%',
						'min'               => 0,
						'max'               => 100,
						'step'              => '',
					),
					array(
						'key'               => 'field_5e771b58ec565',
						'label'             => 'Color',
						'name'              => 'bottom_color',
						'type'              => 'color_picker',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
					),
					array(
						'key'               => 'field_5e7633fe1c14f',
						'label'             => 'Shadow',
						'name'              => 'bottom_shadow',
						'type'              => 'true_false',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'message'           => '',
						'default_value'     => 0,
						'ui'                => 1,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					),
					array(
						'key'               => 'field_5e7633fe1c15c',
						'label'             => 'Shadow color',
						'name'              => 'bottom_shadow_color',
						'type'              => 'color_picker',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_5e7633fe1c14f',
									'operator' => '==',
									'value'    => '1',
								),
							),
						),
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'displays',
						),
					),
				),
				'menu_order'            => 1001,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
			)
		);


	} else {

	}
endif;