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



								<p><strong>EL RABANITO LA HORTALIZA DE FARAONES</strong></p>

<p><strong>C&Oacute;MO SEMBRARLO, siembra, cuidados y cosecha del rabanito</strong></p>

<p>Hace 2.000 a&ntilde;os A.C., en las pir&aacute;mides egipcias, se encontr&oacute; inscripciones que los egipcios usaban el rabanito en su cocina, aunque su origen est&eacute; probablemente en Jap&oacute;n o China. Es muy probable que el imperio de Tutankhamon, tambi&eacute;n haya usado el aceite de rabanito para cocinar, pero se le da mayor atribuci&oacute;n a la preparaci&oacute;n de medicinas.</p>

<p><strong>Propiedades del Rabanito:</strong></p>

<ul>
	<li>El rabanito posee potasio, lo que ayuda a la musculatura.</li>
	<li>El 95 % de rabanito es agua, esto quiere decir que tiene pocas calor&iacute;as.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
	<li>El rabanito contiene vitamina C, antioxidantes que evitan la aparici&oacute;n de dolencias.</li>
	<li>El r&aacute;bano ayuda a la formaci&oacute;n de col&aacute;geno en huesos y dientes.</li>
	<li>El r&aacute;bano produce gl&oacute;bulos blancos y rojos.</li>
	<li>El rabanito es un depurador de sangre, eliminando sustancias da&ntilde;inas como el &aacute;cido &uacute;rico y colesterol.</li>
	<li>El r&aacute;bano regula las funciones del colon.</li>
	<li>El rabanito alivia el estre&ntilde;imiento.</li>
	<li>El rabanito es diur&eacute;tico, lo que favorece la tensi&oacute;n arterial.</li>
	<li>El rabanito tiene propiedades relajantes, mejora el sue&ntilde;o.</li>
	<li>El rabanito favorece la expectoraci&oacute;n, eliminando problemas respiratorios.</li>
	<li>El rabanito reduce los problemas de anemia.</li>
</ul>

<p>&nbsp;</p>

<p><strong>PASOS PARA SEMBRAR RABANITO</strong></p>

<p><strong>1.-Clima: </strong>La temperatura ideal para que se cultive rabanitos es de 18 &ndash; 22 &deg;C, si es superior los rabanitos amargaran.</p>

<p><strong>2.- Preparaci&oacute;n del Terreno para sembrar rabanitos -</strong>Es fundamental que antes de sembrar rabanitos, se deba de alistar el terreno a usar, por lo que eliminaremos las malas hierbas y cultivos anteriores extrayendo de la ra&iacute;z para evitar posible nueva brotaci&oacute;n. Acto seguido humedeceremos el &aacute;rea a sembrar.</p>

<p><img class="img-fluid" alt="" src="https://elleonverde.com/uploads/images/content/1623119315-el-leon-verde.png" style="height:209px; width:400px" /></p>

<p><strong>3.-Preparaci&oacute;n del suelo para sembrar rabanitos: &nbsp;</strong>Debemos hacer una capa de 1 cm de compostaje esparcido en el &aacute;rea a sembrar, la composta sirve para regular la temperatura. Opcionalmente podemos aplicar humus de lombriz.</p>

<p>&nbsp;</p>

<p><strong>4.-Sembrado en huerto: </strong>&nbsp;Ahora debemos hacer surcos de 2 cm de profundidad, la distancia de cada surco debe ser de 60 cm entre cada uno, posteriormente plantaremos 2 a 3 semillas a una profundidad de 1 cm y las cubriremos.</p>

<p><strong>5.-Sembrado en maceta: </strong>&nbsp;Debemos seleccionar macetas que tengan como m&iacute;nimo 15 cm de profundidad y volumen m&iacute;nimo de un litro, el sustrato que se usa debe de tener nutrientes y es importante que tenga un buen drenaje, posteriormente se siembran las semillas en peque&ntilde;os surcos de 1- 1.5 cm de profundidad con una distancia de 8- 12 cm entre ellos.</p>

<p><img class="img-fluid" alt="" src="https://elleonverde.com/uploads/images/content/1623119572-el-leon-verde.png" style="height:209px; width:400px" /></p>

<p><strong>6.-Cuidado de la planta de rabanito: </strong>Es importante que la tierra est&eacute; h&uacute;meda, por lo que debemos regar con frecuencia, pero eso s&iacute;, debemos evitar los charcos. La cosecha suele ser despu&eacute;s de un mes aproximadamente desde la siembra, por lo estaremos atentos al tiempo, si es que se nos pasa los d&iacute;as, los rabanitos suelen amargar.</p>

<p><strong>7.-Cosecha de rabanitos: </strong>Entre 4 y 6 semanas el rabanito tendr&aacute;<strong> </strong>las ra&iacute;ces de 3 cm de di&aacute;metro. Podremos ya cosecharlos, haciendo uso de las manos levantaremos la planta de la tierra, luego lavaremos con abundante agua para que la tierra se desprenda totalmente, finalmente podemos almacenarlo por un m&aacute;ximo de 2 semanas.</p>

<p><img class="img-fluid" alt="" src="https://elleonverde.com/uploads/images/content/1623119465-el-leon-verde.png" style="height:209px; width:400px" /></p>

<p><strong>QU&Eacute; SEMBRAR CON EL RABANITO.</strong></p>

<p>Lo recomendado es sembrarlo con lechugas, espinacas, zanahorias, acelgas, apios, berenjenas, guisantes, jud&iacute;as, patatas, pepinos, pimientos, y tomates. No debemos sembrar rabanitos con las hortalizas de su misma familia, tales como repollos, coliflores y br&oacute;coli.</p>

<p><strong>PLAGAS DE RABANITO</strong></p>

<p><strong>Los pulgones</strong>: Atacan principalmente a los brotes m&aacute;s j&oacute;venes de los cultivos, estas larvas causan da&ntilde;os haciendo agujeros en las hojas de las plantas. Esta plaga se controla, eliminando malas hierbas, buena preparaci&oacute;n del sustrato, trampas crom&aacute;ticas. La naturaleza tambi&eacute;n hace su trabajo eliminando los pulgones con las mariquitas, crisopas y tijeretas.</p>

<p><strong>Las moscas blancas:</strong> Las localizamos en el env&eacute;s de las hojas, tienen gran grado por la humedad y las temperaturas altas, por lo que es una plaga frecuente en primavera y verano. Existen diversos m&eacute;todos de control de la mosca blanca como las trampas crom&aacute;ticas, depredadores naturales, infusi&oacute;n de ajenjo, ajo, etc.</p>

<p>&nbsp;</p>

<p><strong>ENFERMEDADES DEL RABANITO</strong></p>

<p><strong>Mildiu</strong>. Es un tipo de hongo que afecta a los rabanitos, produce manchas en las hojas de aspecto grasiento en diferentes tonalidades, que luego se vuelven marrones y finalmente se marchitan.</p>

<p>&nbsp;</p>

<p>Ahora mismo debemos sembrar rabanitos, que son muy f&aacute;ciles de cultivar y sobre todo crecen en huertos, macetas y mesas de cultivo, es decir lo puedes sembrar en todo lugar, solo faltas t&uacute;. Empieza a sembrarlos ahora mismo y a disfrutar de este regalo delicioso.&nbsp;</p>




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