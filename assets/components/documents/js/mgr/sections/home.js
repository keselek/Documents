Documents.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'documents-panel-home', renderTo: 'documents-panel-home-div'
		}]
	});
	Documents.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(Documents.page.Home, MODx.Component);
Ext.reg('documents-page-home', Documents.page.Home);