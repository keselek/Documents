Ext.onReady(function() {
	Documents.config.connector_url = OfficeConfig.actionUrl;

	var grid = new Documents.panel.Home();
	grid.render('office-documents-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});