jQuery(document).ready(function($) {

    ///////// Xử lý thuộc tính sản phẩm ////////
    var $chk_isverify = $('input[name="website_isverify"]');
    /////// Xử lý khi form submit
    $( "#post" ).submit(function( event ) {
        return xuLyThuocTinh();
    });
	//hàm xử lý phần field của thuộc tính sản phẩm
	function xuLyThuocTinh()
	{
        if($('#website_url').val() == "")
        {
            return false;
        }
        else
        {
            return true;
        }
	}

});