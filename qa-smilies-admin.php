<?php
    class qa_smilies_admin {

	function option_default($option) {
		
	    switch($option) {
		default:
		    return null;				
	    }
		
	}
        
        function allow_template($template)
        {
            return ($template!='admin');
        }       
            
        function admin_form(&$qa_content)
        {                       
                            
        // Process form input
            
            $ok = null;
            
            if (qa_clicked('smilies_save')) {
                qa_opt('embed_smileys',(bool)qa_post_text('embed_smileys'));
                qa_opt('embed_smileys_animated',(bool)qa_post_text('embed_smileys_animated'));
                qa_opt('embed_smileys_markdown_button',(bool)qa_post_text('embed_smileys_markdown_button'));
                $ok = 'Settings Saved.';
            }
  
	    qa_set_display_rules($qa_content, array(
		    'embed_smileys_animated' => 'embed_smileys',
	    ));
                    
        // Create the form for display

            
            $fields = array();
            
            $fields[] = array(
                'label' => 'Enable smiley embedding',
                'tags' => 'NAME="embed_smileys"',
                'value' => qa_opt('embed_smileys'),
                'type' => 'checkbox',
            );
            $fields[] = array(
                'label' => 'Use animated smilies where available',
                'tags' => 'NAME="embed_smileys_animated"',
                'value' => qa_opt('embed_smileys_animated'),
                'type' => 'checkbox',
                'note' => 'For a complete list of smilies, visit <a href="http://www.skype-emoticons.com/">this page</a>.',
            );
            
            $fields[] = array(
                'label' => 'Add smiley button to markdown editor',
                'tags' => 'NAME="embed_smileys_markdown_button"',
                'value' => qa_opt('embed_smileys_markdown_button'),
                'type' => 'checkbox',
                'note' => 'Requires markdown editor plugin, available <a href="http://codelair.co.uk/2011/markdown-editor-plugin-q2a/">here</a>.',
            );
            

            return array(           
                'ok' => ($ok && !isset($error)) ? $ok : null,
                    
                'fields' => $fields,
             
                'buttons' => array(
                    array(
                        'label' => 'Save',
                        'tags' => 'NAME="smilies_save"',
                    )
                ),
            );
        }
    }

