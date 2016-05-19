/*
 * Attaches the image uploader to the input field
 */
jQuery(document).ready(function($){
 
    // Instantiates the variable that holds the media library frame.
    var file_frame;
         
    $('#meta-product-background-button').bind('click', { 'element': 'input', 'id':'product_background' }, function(event){
       event.preventDefault();
        wordpress_add_media(event.data.element,event.data.id);
    });
    
    $('#meta-product-paint-button').bind('click', { 'element': 'input', 'id':'product_paint' }, function(event){
       event.preventDefault();
        wordpress_add_media(event.data.element,event.data.id);
    });    
    
    $('#meta-product-background-page-button').bind('click', { 'element': 'input', 'id':'product_background_page' }, function(event){
       event.preventDefault();
        wordpress_add_media(event.data.element,event.data.id);
    });    
    
    $('#meta-layeredcontent-button').bind('click', { 'element': 'textarea', 'id':'layered_content' }, function(event){
        event.preventDefault();
        wordpress_add_media(event.data.element,event.data.id);
    });
    
    function wordpress_add_media(element,id)
    {        
        // If the media frame already exists, reopen it.
        if ( file_frame ) {
            //file_frame.open();
            //return;
        }
        
        file_frame = wp.media({
            title: 'Insert a media',
            library: {type: 'image'},
            multiple: false,
            button: {text: 'Insert'}
        });

        if(element=='textarea')
        {
            file_frame.on( 'select', function() {           
                attachment = file_frame.state().get('selection').first().toJSON();
                var caretPos = document.getElementById(id).selectionStart;
                var textAreaTxt = jQuery("#"+id).val();
                var txtToAdd = attachment.url;
                jQuery("#"+id).val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos));            
            });
            
        }else if(element=='input'){

            file_frame.on( 'select', function() {    
                attachment = file_frame.state().get('selection').first().toJSON();
                jQuery("#"+id).val(attachment.url);
            });                
        }
                        
        // Finally, open the modal
        file_frame.open();
        return false;        
    }
 
});