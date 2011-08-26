<?php
        
/*              
        Plugin Name: Smilies
        Plugin URI: https://github.com/NoahY/q2a-smilies
        Plugin Description: Embed Smilies
        Plugin Version: 0.1
        Plugin Date: 2011-08-24
        Plugin Author: NoahY
        Plugin Author URI:                              
        Plugin License: GPLv2                           
        Plugin Minimum Question2Answer Version: 1.3
*/        
                        
        if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
                        header('Location: ../../');
                        exit;   
        }               

        qa_register_plugin_module('module', 'qa-smilies-admin.php', 'qa_smilies_admin', 'Smilies Admin');
        
        qa_register_plugin_layer('qa-smilies-layer.php', 'Smilies Replacement Layer');
                        
                        
/*                              
        Omit PHP closing tag to help avoid accidental output
*/                              
                          

