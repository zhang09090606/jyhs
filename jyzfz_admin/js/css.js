// JavaScript Document
$(document).ready(function(){
		$(":text").css({ "border":"1px solid","border-color":"#999 #ccc #ccc #999"}); 
		$(":password").css({ "border":"1px solid","border-color":"#999 #ccc #ccc #999"});
	});
	
	/*自适应代码*/
	function DrawImage(ImgD, iwidth, iheight) { 
    var image = new Image(); 
    image.src = ImgD.src; 
    if(image.width > 0 && image.height > 0){ 
        if(image.width / image.height >= iwidth / iheight){ 
            if(image.width > iwidth){ 
                ImgD.width = iwidth; 
                ImgD.height = (image.height * iwidth) / image.width; 
            } 
            else{ 
                ImgD.width = image.width; 
                ImgD.height = image.height; 
            } 
            // ImgD.alt = image.width + "×" + image.height; 
        } 
        else{ 
            if(image.height > iheight){ 
                ImgD.height = iheight; 
                ImgD.width = (image.width * iheight) / image.height; 
            } 

            else{ 
                ImgD.width = image.width; 
                ImgD.height = image.height; 
            } 
            // ImgD.alt = image.width + "×" + image.height; 
        } 
    } 
}
function checkall(selected){
	var obj = document.myform;
	for(var i = 0; i < obj.elements.length; i++){
		var s = obj.elements[i]; 
		if((s.id).indexOf('checkid') != -1){
			s.checked = selected;
		}
	}
}

function diy_confirm(notetype){
	var obj = document.myform;
	for(var i = 0; i < obj.elements.length; i++){
		var s = obj.elements[i]; 
		if((s.id).indexOf('checkid') != -1){
			if(s.checked == true){
				var ischecked = 'true';
			}
		}
	}
	if(ischecked == 'true'){
		if(notetype == 0){
			note = '确定要操作选中的信息吗？';
		}
		if(notetype == 1){
			note = '系统会自动删除此类别下所有子类别以及信息，确定删除吗？';
		}
		if(confirm(note)) return true;
		else return false;
	}
	else{
		alert('没有任何选中信息！');
		return false;
	}
	
}

