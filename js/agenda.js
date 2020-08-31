/**
 * File agenda.js.
 * Handle tab changing in agenda page
 */

( function() {
	const botonDia1 = document.querySelector( '#lengueta-dia_1' );
	const botonDia2 = document.querySelector( '#lengueta-dia_2' );
	const botonDia3 = document.querySelector( '#lengueta-dia_3' );
	const agendas = document.querySelectorAll( '.agenda' );
	const botones = document.querySelectorAll( '.lengueta' );

	function openTab( evt, seccion ) {
		const lenguetaActiva = Array
			.from( botones )
			.filter( ( boton ) => boton.classList.contains( 'lengueta-activa' ) );
		const agendaActiva = Array
			.from( agendas )
			.filter( ( agenda ) => agenda.classList.contains( 'agenda-activa' ) );
		lenguetaActiva[ 0 ].classList.remove( 'lengueta-activa' );
		agendaActiva[ 0 ].classList.remove( 'agenda-activa' );
		evt.currentTarget.classList.add( 'lengueta-activa' );
		document.querySelector( `#${ seccion }` ).classList.add( 'agenda-activa' );
	}

	botonDia1.addEventListener( 'click', () => {
		openTab( event, 'seccion_agenda_dia_1' );
	} );
	botonDia2.addEventListener( 'click', () => {
		openTab( event, 'seccion_agenda_dia_2' );
	} );
	botonDia3.addEventListener( 'click', () => {
		openTab( event, 'seccion_agenda_dia_3' );
	} );
}( ) );
