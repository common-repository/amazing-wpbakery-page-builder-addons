<?php
            add_action( 'vc_before_init', 'asvc_flipbox_init' );
            function asvc_flipbox_init() {
            vc_map( array(
                "name"        => __( "Flip Box 3D", 'asvc' ),
                "base"        => "asvc_flipbox",
                "icon"        => "asvc_flipbox_icon",
                "category" => __('Amazing Addons', 'js_composer'),
                'description' => __('premium addon', 'js_composer'),
                "params"      => array(
                        
                        
                    array(
                        "type" => "hvc_notice",
                        "class" => "",
                        'heading' => __('<h3 class="hvc_notice" align="center">This is premium addon, please buy the pro version here <a target="_blank" href="https://codenpy.com/item/visual-composer-shortcodes-pro/">Essential WPBakery Page Builder (formerly Visual Composer) Addons</a> for only $13</h3>', 'hvc'),
                        "param_name" => "hvc_notice_param_1",
                        "value" => '',
                        "group" => "General",
                    ), 
                                            
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => __("Direction:", "asvc"),
                        "param_name" => "ddd_direction",
                        "value" => array(
                            __("Verticle","asvc") => "flip-up",
                            __("Horizontal","asvc") => "alternative",
                        ),
                        "group" => "General",
                        "std" => "",
                    ), 
                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Display as:', 'asvc' ),
                        'param_name' => 'display_as',
                        "value" => array(
                            "Content" => "content",
                            "Image" => "image",
                        ),
                        "std" => "content",
                        "group" => "Front"
                    ),                    
                    array(
                        "type" => "attach_image",
                        "heading" => __("Image", "asvc"),
                        "param_name" => "front_image",
                        "value" => "",
                        "dependency" => array('element' => "display_as", 'value' => 'image'),
                        "description" => __("Select image from media library.", "asvc"),
                        "group" => "Front"
                    ),
                    
                    array(
                        "type"        => "colorpicker",
                        "class"       => "",
                        "heading"     => __( "Box color", "asvc" ),
                        "param_name"  => "front_box_color",
                        "description" => __( "Choose flipbox color", "asvc" ),
                        "group" => "Front"
                    ),                     
                    
                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Display Icon:', 'asvc' ),
                        'param_name' => 'display_icon',
                        "value" => array(
                            "Icon" => "icon",
                            "No Icon" => "noicon",
                        ),
                        "std" => "icon",
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        "group" => "Front"
                    ),                    
                                       
                    array(
                        'type' => 'iconpicker',
                        'heading' => __( 'Icon', 'js_composer' ),
                        'param_name' => 'icon_fontawesome',
                        'value' => '', // default value to backend editor admin_label
                        'settings' => array(
                            'emptyIcon' => false, // default true, display an "EMPTY" icon?
                            'iconsPerPage' => 100, // default 100, how many icons per/page to display, we use (big prime_slider) to display all icons in single page
                        ),
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        'description' => __( 'Select icon from library.', 'js_composer' ),
                        "group" => "Front"
                    ),
                                       
                    array(
                        "type" => "prime_slider",
                        "class" => "",
                        "heading" => __("Icon Size", "asvc"),
                        "param_name" => "icon_size",
                        "value" => 20,
                        "min" => 16,
                        "max" => 100,
                        "step" => 1,
                        "unit" => "px",
                        "description" => __("Provide icon size", "asvc"),
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        "group" => "Front"
                    ),
                    
                    array(
                        "type"        => "colorpicker",
                        "class"       => "",
                        "heading"     => __( "Icon Color", "asvc" ),
                        "param_name"  => "icon_color",
                        "value"       => "#343434",
                        "description" => __( "Choose icon color", "asvc" ),
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        "group" => "Front"
                    ),                    
                                     
                    array(
                        "type"        => "textfield",
                        "class"       => "",
                        "heading"     => __( "Title", 'asvc' ),
                        "param_name"  => "title",
                        "admin_label" => true,
                        "value"       => "",
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        "group" => "Front"
                        
                    ),
                    array(
                        "type" => "textarea",
                        "class" => "",
                        "heading" => __("Description", "asvc"),
                        "param_name" => "front_desc",
                        "value" => "",
                        "description" => __("Provide the description for the front.", "asvc"),
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        "group" => "Front"
                    ),                  

                    array(
                        "type" => "textfield",
                        "heading" => __("Extra class name", "asvc"),
                        "param_name" => "extraclass",
                        "value" => "",
                        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "asvc"),
                        "group" => "General"
                    ),
                    
                    array(
                        'type'             => 'prime_slider',
                        'heading'          => __( 'Title Font Size', 'asvc' ),
                        'param_name'       => 'title_f_size',
                        "value" => 18,
                        "min" => 10,
                        "max" => 50,
                        "step" => 1,
                        "unit" => "px",
                        "description" => __("Chose Title Font Size as Pixel. Default is 18px", "asvc"),
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        "group" => "Front"
                    ),
                    // Description Font Size Field
                    array(
                        'type'             => 'prime_slider',
                        'heading'          => __( 'Description Font Size', 'asvc' ),
                        'param_name'       => 'desc_f_size',
                        "value" => 14,
                        "min" => 10,
                        "max" => 50,
                        "step" => 1,
                        "unit" => "px",
                        "description" => __("Chose Description Font Size as Pixel. Default is 14px", "asvc"),
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        "group" => "Front"
                    ),

                    array(
                        "type"        => "colorpicker",
                        "class"       => "",
                        "heading"     => __( "Title color", "asvc" ),
                        "param_name"  => "title_color",
                        "description" => __( "Choose text color", "asvc" ),
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        "group" => "Front"
                    ),
                    array(
                        "type"        => "colorpicker",
                        "class"       => "",
                        "heading"     => __( "Description color", "asvc" ),
                        "param_name"  => "descr_color",
                        "description" => __( "Choose text color", "asvc" ),
                        'dependency' => array(
                            'element' => 'display_as',
                            'value' => 'content',
                        ),
                        "group" => "Front"
                    ),
                    
                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Display as:', 'asvc' ),
                        'param_name' => 'back_display_as',
                        "value" => array(
                            "Content" => "content",
                            "Image" => "image",
                        ),
                        "std" => "content",
                        "group" => "Back"
                    ),                    
                    array(
                        "type" => "attach_image",
                        "heading" => __("Image", "asvc"),
                        "param_name" => "back_image",
                        "value" => "",
                        "dependency" => array('element' => "back_display_as", 'value' => 'image'),
                        "description" => __("Select image from media library.", "asvc"),
                        "group" => "Back"
                    ),
                    
                    array(
                        "type"        => "colorpicker",
                        "class"       => "",
                        "heading"     => __( "Box color", "asvc" ),
                        "param_name"  => "back_box_color",
                        "description" => __( "Choose flipbox color", "asvc" ),
                        'dependency' => array(
                            'element' => 'back_display_as',
                            'value' => 'content',
                        ),
                        "group" => "Back"
                    ),
              
                    array(
                        "type"        => "textfield",
                        "class"       => "",
                        "heading"     => __( "Title", 'asvc' ),
                        "param_name"  => "back_title",
                        "admin_label" => true,
                        "value"       => "",
                        "description" => __("leave empty if you don't want.", "asvc"),
                        'dependency' => array(
                            'element' => 'back_display_as',
                            'value' => 'content',
                        ),
                        "group" => "Back"
                    ),
                    array(
                        "type" => "textarea",
                        "class" => "",
                        "heading" => __("Description", "asvc"),
                        "param_name" => "back_desc",
                        "value" => "",
                        "description" => __("Provide the description for the back.", "asvc"),
                        'dependency' => array(
                            'element' => 'back_display_as',
                            'value' => 'content',
                        ),
                        "group" => "Back"
                    ),                   
                    
                    array(
                        'type'             => 'prime_slider',
                        'heading'          => __( 'Title Font Size', 'asvc' ),
                        'param_name'       => 'back_title_f_size',
                        "value" => 18,
                        "min" => 10,
                        "max" => 50,
                        "step" => 1,
                        "unit" => "px",
                        "description" => __("Chose Title Font Size as Pixel. Default is 18px", "asvc"),
                        'dependency' => array(
                            'element' => 'back_display_as',
                            'value' => 'content',
                        ),
                        "group" => "Back"
                    ),
                    // Description Font Size Field
                    array(
                        'type'             => 'prime_slider',
                        'heading'          => __( 'Description Font Size', 'asvc' ),
                        'param_name'       => 'back_desc_f_size',
                        "value" => 14,
                        "min" => 10,
                        "max" => 50,
                        "step" => 1,
                        "unit" => "px",
                        "description" => __("Chose Description Font Size as Pixel. Default is 14px", "asvc"),
                        'dependency' => array(
                            'element' => 'back_display_as',
                            'value' => 'content',
                        ),
                        "group" => "Back"
                    ),
                    array(
                        "type" => "hvc_notice",
                        "class" => "",
                        'heading' => __('<h3 class="hvc_notice" align="center">To get this powerful addon, please buy the pro version here <a target="_blank" href="https://codenpy.com/item/visual-composer-shortcodes-pro/">Visual Composer Addons Pro</a> for only $21</h3>', 'hvc'),
                        "param_name" => "hvc_notice_param_1",
                        "value" => '',
                        "group" => "Back"
                    ), 
                    array(
                        "type"        => "colorpicker",
                        "class"       => "",
                        "heading"     => __( "Title color", "asvc" ),
                        "param_name"  => "back_title_color",
                        "description" => __( "Choose text color", "asvc" ),
                        'dependency' => array(
                            'element' => 'back_display_as',
                            'value' => 'content',
                        ),
                        "group" => "Back"
                    ),
                    array(
                        "type"        => "colorpicker",
                        "class"       => "",
                        "heading"     => __( "Description color", "asvc" ),
                        "param_name"  => "back_descr_color",
                        "description" => __( "Choose text color", "asvc" ),
                        'dependency' => array(
                            'element' => 'back_display_as',
                            'value' => 'content',
                        ),
                        "group" => "Back"
                    ),                    
                        
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => __("On Click:", "asvc"),
                        "param_name" => "on_click",
                        "value" => array(
                            __("No Link","asvc") => "none",
                            __("Complete Box","asvc") => "box",
                        ),
                        "group" => "Link"
                    ),

                    array(
                        "type" => "vc_link",
                        "class" => "",
                        "heading" => __("Add Link", "asvc"),
                        "param_name" => "link",
                        "value" => "",
                        "description" => __("Add a custom link or select existing page. You can remove existing link as well.", "asvc"),
                        'dependency' => array(
                            'element' => 'on_click',
                            'value' => 'box',
                        ),
                        "group" => "Link"
                    ),                                        
                    
                    array(
                        'type' => 'css_editor',
                        'heading' => __( 'Css', 'asvc' ),
                        'param_name' => 'css_flip_box',
                        'group' => __( 'Design ', 'asvc' ),
                        'edit_field_class' => 'asvc-info-box asvc-info-box-2 feature',
                    ),                    
                   
                    
                    
                )
            ) );
                }
            function asvc_flipbox_shortcode_function( $atts, $content = null, $tag ) {
                extract( shortcode_atts( array(
                    'ddd_direction'    => 'flip-up',
                    'display_as'    => '',
                    'front_image'       => '',
                    'display_icon'      => 'noicon',
                    'icon_fontawesome'   => 'fa fa-camera',
                    'front_box_color'   => '#789e13',
                    'back_box_color'     => '#9bcc18',
                    'icon_size'            => '',
                    'icon_color'      => '#fff',
                    'title'         => '',
                    'front_desc'      => '',
                    'title_f_size'      => '',
                    'desc_f_size'      => '',
                    'title_color'      => '',
                    'descr_color'      => '',
                    'back_display_as'  => '',
                    'back_image'      => '',
                    'back_title'      => '',
                    'back_desc'      => '',
                    'back_title_f_size'  => '',
                    'back_desc_f_size'  => '',
                    'back_title_color'   => '',
                    'back_descr_color'   => '',
                    'on_click'      => '',
                    'link'      => '',
                    'css_flip_box'      => '',
                    'extraclass' => '',
                    
                ), $atts ) );
                

                
                $output ='<h3>This addon for pro version. Please buy <a href="https://codenpy.com/item/visual-composer-shortcodes-pro/">pro version from here</a></h3>';

                return $output;
                
            }


            add_shortcode( 'asvc_flipbox', 'asvc_flipbox_shortcode_function' );