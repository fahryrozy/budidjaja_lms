( function( api ) {

	// Extends our custom "lawyer-lite" section.
	api.sectionConstructor['lawyer-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );