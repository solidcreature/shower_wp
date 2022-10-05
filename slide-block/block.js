( function( blocks, i18n, element, blockEditor ) {
	var __ = i18n.__;
	var el = element.createElement;	
	var InnerBlocks = blockEditor.InnerBlocks;
	var useBlockProps = blockEditor.useBlockProps;
	
	blocks.registerBlockType( 'wp-shower/slide', {
		title: 'Слайд презентации',
		category: 'layout',
		edit: function() {
			return el(
				'div',
				useBlockProps({ className: 'slide' }),
				el( InnerBlocks )
			);
		},
		save: function() {
			return el(
				'div',
				useBlockProps.save({ className: 'slide' }),
				el( InnerBlocks.Content )
			);
		},
	} );
}( window.wp.blocks, window.wp.i18n, window.wp.element, window.wp.blockEditor ) );
