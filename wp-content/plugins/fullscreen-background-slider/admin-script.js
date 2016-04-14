$ = jQuery;

$(function(){

	var folderpath = $('.folderpath');
	var uploadfile = $('.uploadfile');
	var ftp = $('[value="ftp"]');
	var def = $('[value="default"]');
	var path = $('[name="folder"]');
	var default_val = 'wp-content/uploads/fbslider/';

	var hodnota = path.val();

	if( hodnota != default_val ){
		ftp.prop('checked', true);
		folderpath.show();
	} else {
		def.prop('checked', true);
		folderpath.hide();
	}


	$('.imageupload').change(function(){
		if( ftp.is(':checked') ){
			folderpath.show();
			uploadfile.hide();
			path.attr('value', hodnota);
		} else {
			folderpath.hide();
			uploadfile.show();
			path.attr('value', default_val);
		}
	})


});