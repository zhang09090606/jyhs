var editor;
KindEditor.ready(function (K1) {
	editor = K1.create("textarea[name='content,description']", {
		allowFileManager: true
	});
});
KindEditor.ready(function (K) {
	var editor = K.editor({
		allowFileManager: true
	});
	K('#image').click(function () {
		editor.loadPlugin('image', function () {
			editor.plugin.imageDialog({
				imageUrl: K('#picurl').val(),
				clickFn: function (url, title, width, height, border, align) {
					K('#picurl').val(url);
					editor.hideDialog();
				}
			});
		});
	});
});
