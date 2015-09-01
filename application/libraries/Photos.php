<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Photos{
	
	function resize($path = NULL, $filename = NULL, $thumb = FALSE, $size = 760) {
	
		$CI =& get_instance();

        $loc = $path . $filename;

        $config['image_library'] = 'gd2';
        $config['source_image'] = $loc;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = $size;
        $config['height'] = $size;
        $CI->load->library('image_lib', $config);    

        if (!$CI->image_lib->resize()) {
            echo $CI->image_lib->display_errors();
        } else {

        	if($thumb){

	        	//create thumbnail
	            $CI->load->library('images');
	            
	            $original = $filename;
	            $new = $filename;
	            $originalPath = $path;
	            $newPath = $path . 'thumbs/';
	
	            if (!is_dir($newPath)) {
	                mkdir($newPath, 0755);
	            }
	
	            $CI->images->resize($originalPath . $original, 280,420,$newPath . $new);
	           // $CI->images->squareThumb($originalPath . $original, $newPath . $new, 100);
        	}
            
        }
    }


}

?>