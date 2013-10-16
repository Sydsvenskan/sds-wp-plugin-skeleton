/**
 * The skeleton javascript file
 */

;var skeleton = ( function( $, window, document, undefined ) {

	'use strict';

	$(document).ready( function() {

		skeleton.init();

	});

	return {

		init : function() {

			this.doSomething();

		},


		/**
		 * A method here
		 */
		doSomething : function(){

			$('#cta').click(function() {

				conslone.log('clicked the cta');

				return false;

			});

		}


	};

})( jQuery, window, document );