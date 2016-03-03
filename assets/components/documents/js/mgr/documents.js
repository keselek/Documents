var Documents = function (config) {
	config = config || {};
	Documents.superclass.constructor.call(this, config);
};
Ext.extend(Documents, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('documents', Documents);

Documents = new Documents();