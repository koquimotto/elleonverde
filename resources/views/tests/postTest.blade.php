@extends('layouts.app')
@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- meta dinámico --}}
    <meta property="og:url" content="https://elleonverde.com/blog/" />
    <meta property="og:type" content="El León Verde" />
    <meta property="og:title" content=" - El León Verde" />
    <meta property="og:description" content="">
    <meta property="og:image" content="https://elleonverde.com/uploads/images/facebook/">
    <meta property="og:site_name" content="El León Verde">
    <meta property="og:locale" content="es_LA">
    <meta name="keywords" content="">
    <meta name="author" content="GLOOBAL TIC INGENIEROS">
@endsection

@section('title', ' - El León Verde' )

@section('styles')
	<style>
		.aawp{
			box-sizing: border-box;
			color: #3a3a3a;
		}
		.aawp-grid {
			display: flex;
			flex-flow: row wrap;
			justify-content: flex-start;
			margin: 0 -2%;
		}
		.aawp-grid__item {
			width: 100%;
			margin: 0 2%;
		}

		@media (min-width: 481px){
				.aawp-grid__item {
				display: flex;
			}
		}

		.aawp .aawp-product--horizontal.aawp-product--ribbon {
			padding-top: 35px;
		}

		.aawp .aawp-product--horizontal {
			zoom: 1;
			display: block;
			max-width: 100%;
			padding: 20px;
			background: #fff;
			border: 1px solid #ececec;
			font-size: 15px;
			line-height: 1.6;
			white-space: normal;
		}

		.aawp, .aawp *, .aawp :after, .aawp :before, .aawp div, .aawp div *, .aawp div :after, .aawp div :before, .aawp span, .aawp span *, .aawp span :after, .aawp span :before {
			box-sizing: border-box;
		}

		.aawp-product {
			position: relative;
			margin: 0 0 30px;
			width: 100%;
		}

		.aawp .aawp-product--horizontal .aawp-product__ribbon--sale {
			top: -1px;
			right: -1px;
		}

		.aawp .aawp-product--horizontal .aawp-product__ribbon {
			position: absolute;
			padding: 0 15px;
		}

		.aawp-product__ribbon--sale {
			background: #27ae60;
			border-bottom-left-radius: 2px;
			color: #fff;
		}

		.aawp-product__ribbon {
			padding: 0 20px;
			font-weight: 400;
			font-size: 12px;
			line-height: 20px;
			text-transform: uppercase;
		}
		

		a, abbr, acronym, address, applet, big, blockquote, body, caption, cite, code, dd, del, dfn, div, dl, dt, em, fieldset, font, form, h1, h2, h3, h4, h5, h6, html, iframe, ins, kbd, label, legend, li, object, ol, p, pre, q, s, samp, small, span, strike, strong, sub, sup, table, tbody, td, tfoot, th, thead, tr, tt, ul, var {
			border: 0;
			margin: 0;
			padding: 0;
		}

		.aawp .aawp-product--horizontal .aawp-product__thumb {
			float: left;
			width: 160px;
		}

		.aawp .aawp-product--horizontal .aawp-product__image {
			display: block;
			height: auto;
			margin: 0 auto 15px;
			max-height: 200px;
			max-width: 100%;
			width: auto;
			border: none;
			box-shadow: none;
		}

		.aawp .aawp-product--horizontal .aawp-product__content {
			margin-left: 160px;
			padding-left: 20px;
		}

		.aawp .aawp-product--horizontal .aawp-product__title {
			display: block;
			margin: 0 0 15px;
			font-size: 18px;
			font-weight: 700;
		}

		.aawp-product .aawp-product__title {
			word-wrap: break-word;
		}

		.a-title-adAmazon{
			/* color: #fb4504;  */
			text-decoration: none; 
			transition: color .1s ease-in-out,background-color .1s ease-in-out; 
			background-color: transparent; 
			border: 0; 
			margin: 0; 
			padding: 0;   
			cursor: pointer; 
			font-size: 15px; 
			line-height: 1.6; 
			white-space: normal;
		}

		.aawp .aawp-product--horizontal .aawp-product__description {
			margin: 0;
		}

		.aawp .aawp-product--horizontal .aawp-product__description>ul {
			margin: 0 0 5px;
			padding: 0 0 0 20px;
			list-style-type: disc;
			list-style-position: outside!important;
		}

		.ul-description-amazon{
			list-style: disc;
			border: 0;
			display: block;
			margin-block-start: 1em;
			margin-block-end: 1em;
			margin-inline-start: 0px;
			margin-inline-end: 0px;
			padding-inline-start: 40px;
		}

		.aawp .aawp-product--horizontal .aawp-product__description>ul li {
			margin: 0;
			padding: 0;
			background: none;
			word-wrap: break-word;
		}

		.aawp .aawp-product--horizontal .aawp-product__footer {
			text-align: right;
			margin-left: 160px;
			padding-left: 20px;
		}

		.aawp .aawp-product--horizontal .aawp-product__pricing {
			display: block;
			margin-bottom: 5px;
		}

		.aawp .aawp-product--horizontal .aawp-product__price--old {
			font-size: 14px;
			text-decoration: line-through;
			color: #666;
		}

		.aawp .aawp-product--horizontal .aawp-product__price {
			display: inline-block;
			line-height: 34px;
			vertical-align: middle;
		}

		.aawp .aawp-product--horizontal .aawp-product__pricing span+span {
			margin-left: 15px;
		}

		.aawp .aawp-product--horizontal .aawp-product__price--saved {
			border-radius: 2px;
			background: #27ae60;
			background: rgba(39,174,96,.8);
			padding: 4px 6px;
			color: #fff;
			font-size: 12px;
			line-height: 12px;
			margin-top: 11px;
			margin-bottom: 11px;
		}

		.aawp .aawp-product--horizontal .aawp-product__price--current {
			font-size: 20px;
			font-weight: 700;
		}

		.aawp a.aawp-check-premium, .aawp a.aawp-check-premium:active, .aawp a.aawp-check-premium:focus, .aawp a.aawp-check-premium:hover, .aawp a.aawp-check-premium:visited, .aawp a.aawp-check-prime, .aawp a.aawp-check-prime:active, .aawp a.aawp-check-prime:focus, .aawp a.aawp-check-prime:hover, .aawp a.aawp-check-prime:visited, a.aawp-check-premium, a.aawp-check-premium:active, a.aawp-check-premium:focus, a.aawp-check-premium:hover, a.aawp-check-premium:visited, a.aawp-check-prime, a.aawp-check-prime:active, a.aawp-check-prime:focus, a.aawp-check-prime:hover, a.aawp-check-prime:visited {
			border: none;
			box-shadow: none;
			outline: none;
			text-decoration: none;
		}

		.aawp-check-prime, .aawp .aawp-check-prime {
			display: inline-block;
			width: 55px;
			height: 16px;
			background-image: url(https://elleonverde.com/assets/images/amazon/amazon-prime-logo-prime-amazon.png);
			vertical-align: middle;
		}

		/* .aawp-button.aawp-button--icon, .aawp .aawp-button.aawp-button--icon {
			position: relative;
			padding-left: 32px;
		} */

		.aawp-button.aawp-button--amazon, .aawp .aawp-button.aawp-button--amazon {
			border-color: #9c7e31 #90742d #786025!important;
			border-radius: 3px;
			box-shadow: inset 0 1px 0 hsla(0,0%,100%,.4);
			background: #f0c14b;
			background: linear-gradient(180deg,#f7dfa5,#f0c14b) repeat scroll 0 0 transparent;
			color: #111!important;
			font-weight:500;
		}

		.aawp-button.shadow, .aawp .aawp-button.shadow {
			box-shadow: 0 1px 2px rgba(0,0,0,.3),inset 0 0 40px rgba(0,0,0,.1);
		}

		.aawp-button, .aawp .aawp-button {
			box-sizing: border-box;
			display: inline-block;
			margin: 0;
			padding: 7px 12px 6px;
			cursor: pointer;
			font-size: 14px;
			font-weight: 400;
			line-height: 19px;
			text-align: center;
			text-decoration: none!important;
			background-color: #fff;
			border: 1px solid #ccc!important;
			color: #333!important;
		}
		

	</style>
	
@endsection

@section('content')
        <section class="news_detail" style="padding:30px 0 120px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news_detail_left">
                                <div id="fb-root"></div>



								


								<p>Quiz&aacute;s creas que una colmena de abejas solo puede estar en el campo, pero cada vez son m&aacute;s las familias que apuestan por la apicultura urbana. &iquest;Te gustar&iacute;a generar tu propia miel y ayudar al medio ambiente criando polinizadores?</p>

<p><span style="background-color:white"><span style="color:#414141">Para tener una colmena de abejas bajo t&uacute; mismo techo, primero deber&aacute;s consultar si la legislaci&oacute;n de tu pa&iacute;s o ciudad te lo permite; despu&eacute;s tendr&aacute;s que colocarla en a ubicaci&oacute;n adecuada y tener en cuenta varios consejos para evitar posibles problemas.</span></span></p>

<p>&nbsp;</p>

<h1><span style="color:#2ecc71">La importancia de una colmena de abejas</span></h1>

<p><span style="color:#2ecc71"><img  alt="" src="https://elleonverde.com/uploads/images/content/1623106608-el-leon-verde.png" style="height:157px; width:300px" /></span></p>

<p>Antes de nada, ser&iacute;a bueno saber por qu&eacute; motivos muchas personas deciden dedicarse a la apicultura, ya sea urbana o rural. Las abejas son insectos muy importantes para el ecosistema, ya que su principal tarea es polinizar las flores que visitan.</p>

<p>Sin las abejas, las personas no tendr&iacute;amos alimentos&hellip; Solo el 10 % de las plantas a nivel mundial se polinizan sin la ayuda de estos y otros insectos. Adem&aacute;s, producen miel, que se puede usar para la cocina y para curar enfermedades.</p>

<p>La apicultura urbana est&aacute; sumando cada vez m&aacute;s adeptos en todo el mundo, sobre todo en las grandes ciudades. Tener una colmena de abejas en la azotea es mucho m&aacute;s com&uacute;n de lo que crees, sobre todo despu&eacute;s de que esta pr&aacute;ctica haya sido legalizada en varios pa&iacute;ses.</p>

<p>&nbsp;</p>

<h1><span style="color:#2ecc71">A tener en cuenta para una colmena de abejas en casa.</span></h1>

<p><span style="color:#2ecc71"><img alt="" src="https://elleonverde.com/uploads/images/content/1623106653-el-leon-verde.png" style="height:157px; width:300px" /></span></p>

<ul>
	<li>La miel urbana suele ser de excelente calidad, a diferencia de lo que se cree. Adem&aacute;s, las abejas ayudan a polinizar los jardines cercanos y no son peligrosas para las personas: solo pican cuando sienten un peligro muy fuerte.</li>
	<li>Es bueno saber que una abeja cuando pica muere, debido a que se desprende el aguij&oacute;n y, con &eacute;l, parte de su cuerpo. Por eso, a diferencia de las avispas, que pueden picar varias veces, deben tener una gran necesidad de atacar para hacerlo.</li>
	<li>Criar abejas no es una actividad muy costosa, ya que casi podr&iacute;a decirse que se cuidan solas. La colmena es un sistema completamente eficiente, donde cada ejemplar sabe qu&eacute; debe hacer.</li>
	<li>La instalaci&oacute;n de colmenas en la ciudad debe realizarse s&iacute; o s&iacute; en un espacio abierto, como una terraza, un parque o un balc&oacute;n grande tras asegurarse de que en nuestra ciudad est&aacute; permitida la pr&aacute;ctica de apicultura urbana.</li>
	<li>Antes de colocar la colmena de abejas aseg&uacute;rate de tener todo el equipo necesario. Existe un protector de pies a cabeza que evita las posibles picaduras que se producen cuando abrimos el panal o extraemos la miel. Si no quieres comprar todo el traje, puedes usar el sombrero con velo, un par de guantes gruesos, una chaqueta cerrada, pantalones vaqueros y zapatos cerrados.</li>
	<li>Puedes comprar un enjambre o n&uacute;cleo a un productor especializado &ndash;mayormente en el campo&ndash; o atrapar un enjambre silvestre. Esto &uacute;ltimo es un poco m&aacute;s dif&iacute;cil, pero suelen ser los m&aacute;s trabajadores. Aseg&uacute;rate de que la reina est&aacute; presente: es la &uacute;nica diferente a las dem&aacute;s. El traslado, en cualquier caso, deber&aacute; hacerse por la noche, cuando todas habr&aacute;n regresado a la colmena.</li>
</ul>

<p>Video</p>

<p>&nbsp;</p>

<h1><span style="color:#2ecc71">Nota Importante</span></h1>

<p><span style="color:#2ecc71"><img alt="" src="https://elleonverde.com/uploads/images/content/1623106723-el-leon-verde.png" style="height:157px; width:300px" /></span></p>

<p>Es importante que tengas en cuenta que las abejas son animales muy sensibles y en casos muy particulares peligrosas, as&iacute; que te recomendamos que te asesores con un experto para comenzar tu colmena o para cualquier cambio que hagas con tus abejas.</p>

<p>Una vez que las abejas se encuentren en su nuevo hogar, solo tendr&aacute;s que monitorearlas una vez por semana como m&aacute;ximo. F&iacute;jate en cu&aacute;nta miel han producido, si hay huevos y qu&eacute; cambios se notan en los cuadros (rect&aacute;ngulos donde trabajan las abejas).</p>








</div>
</div>

<div class="col-xl-4 col-lg-5">
	<div class="sidebar">
		<div class="sidebar__single sidebar__post">
			<h3 class="sidebar__title title-style">Lo más reciente</h3>
			<ul class="sidebar__post-list list-unstyled">
			</ul>
		</div>
		{{-- <div class="sidebar__single sidebar__category">
			<h3 class="sidebar__title">All Categories</h3>
			<ul class="sidebar__category-list list-unstyled">
				<li><a href="#">Agriculture</a></li>
				<li><a href="#">Organic Food</a></li>
				<li><a href="#">Dairy Farm</a></li>
				<li><a href="#">Economy Solution</a></li>
				<li><a href="#">Harvests Innovations</a></li>
			</ul>
		</div> --}}
		{{-- <div class="sidebar__single sidebar__tags">
			<h3 class="sidebar__title">Popular Tags</h3>
			<div class="sidebar__tags-list">
				<a href="#">Agriculture,</a>
				<a href="#">Food,</a>
				<a href="#">Healthy,</a>
				<a href="#">Economy,</a>
				<a href="#">Organic,</a>
				<a href="#">Farm,</a>
				<a href="#">Dairy,</a>
			</div>
		</div> --}}
	</div>
</div>
</div>
</div>
</section>

@endsection


@section('scripts')
<script>
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
@endsection