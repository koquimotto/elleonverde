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



								<h1><span style="color:#f1c40f">De los Andes al Mundo Entero, la papa</span></h1>

<p><span style="color:#f1c40f"><img class="img-fluid" alt="" src="https://elleonverde.com/uploads/images/content/1620365209-el-leon-verde.png" style="height:209px; width:400px" /></span></p>

<p>La papa (Solanum tuberosum) es una planta originaria de Sudam&eacute;rica y cultivada por todo el mundo por sus tub&eacute;rculos comestibles. Perteneciente a la familia de las solan&aacute;ceas fue domesticada en el altiplano andino peruano por sus habitantes hace unos 7000 a&ntilde;os, y m&aacute;s tarde fue llevada a Europa por los conquistadores. Su consumo fue creciendo y su cultivo se expandi&oacute; a todo el mundo hasta convertirse hoy d&iacute;a en uno de los principales alimentos para el ser humano.</p>

<p>En Per&uacute; se encuentran alrededor de 3000 de las 5000 mil especies. La papa uno de los aportes de este pa&iacute;s al mundo. Ha sido cultivada desde hace 8000 a&ntilde;os en Am&eacute;rica del Sur y era alimento importante de los Incas quienes desarrollaron t&eacute;cnicas avanzadas para almacenarlas. Es hoy en d&iacute;a un producto que por su versatilidad se encuentra en las recetas de las m&aacute;s variadas cocinas a nivel mundial.</p>

<p>El origen de las papas cultivadas se remonta a las variedades nativas desarrolladas por los agricultores precolombinos a partir de especies que crec&iacute;an en estado silvestre. La evidencia arqueol&oacute;gica sit&uacute;a los primeros indicios del cultivo alrededor del lago Titicaca hace unos 7000 a&ntilde;os, centrado en un grupo de aproximadamente 20 especies.</p>

<p>&nbsp;</p>

<h1><span style="color:#f1c40f">La siembra de la papa</span></h1>

<p>Si quieres empezar un huerto en casa, las papas son una excelente opci&oacute;n, es muy f&aacute;cil de aprender como sembrar papa en casa. Solo debes estudiar las necesidades de este tub&eacute;rculo, que por lo general son muy b&aacute;sicas, y proporcionarle todo lo necesario para su crecimiento. En este caso, lo m&aacute;s com&uacute;n es aprender a plantar papa en poco espacio, es la mejor alternativa para los huertos urbanos.</p>

<p><img class="img-fluid" alt="" src="https://elleonverde.com/uploads/images/content/1620365255-el-leon-verde.png" style="height:209px; width:400px" /></p>

<p>&nbsp;</p>

<ul>
	<li><strong>Selecciona una variedad de papa</strong>. Lo primero que debes tener en cuenta es que hay muchas variedades de papas, si eres principiante en huertos en casa, lo mejor ser&aacute; iniciar con productos locales. Las necesidades de estos tipos de papa se adaptan muy bien a las condiciones clim&aacute;ticas de tu localidad.</li>
	<li><strong>Prepara las papas para sembrarlas</strong>. Lo primero es cortar la papa en cuatros partes iguales. Debes asegurarte que en cada uno de ellos se encuentren peque&ntilde;os agujeros donde comienza a germinarse la papa. Cada uno de los trozos debes dejarlos al sol, durante uno o dos d&iacute;as. Es importante no agregar agua, puesto que la papa contiene la humedad necesaria para comenzar a germinar.</li>
	<li><strong>El momento de La siembra.</strong> La papa comenzar&aacute; a tener sus primeros brotes, lo cual es indicativo de que ya se puede sembrar en el huerto. Lo m&aacute;s indicado es que dichos brotes ya alcancen al menos un cent&iacute;metro. Debes dejar s&oacute;lo dos o tres y retirar el resto. Si vas a sembrar papas en macetas o en una parcela de tierra, en ambos casos debes plantarla a 10 cent&iacute;metros de profundidad.</li>
</ul>

<p>&nbsp;</p>

<h1><span style="color:#f1c40f">Tips durante el crecimiento de la papa</span></h1>

<p>&nbsp;</p>

<ol>
	<li><strong>Debes regar solo para mantener el sustrato h&uacute;medo</strong>. Mucha o poca agua pondr&aacute; en riesgo tus plantas. Comprueba la humedad del suelo regularmente metiendo la mano y escarbando unos cent&iacute;metros.</li>
	<li><strong>La papa es una planta que necesita bastante luz</strong>. Aseg&uacute;rate que reciba muchas horas de sol al d&iacute;a, eso garantizar&aacute; una buena cosecha.</li>
</ol>

<p>&nbsp;</p>



<!-- anuncio amazon -->
<div class="aawp">
    <div class="aawp-grid">
        <div class="aawp-grid__item">
            
            <div class="aawp-product aawp-product--horizontal aawp-product--ribbon aawp-product--sale" data-aawp-product-id="8493828955" data-aawp-product-title="Silverline 261137 - Bolsa para cultivo de patatas (360 x 510 mm)" data-aawp-geotargeting="true">

                <span class="aawp-product__ribbon aawp-product__ribbon--sale" >Oferta</span>
                <div class="aawp-product__thumb">
                    <a class="aawp-product__image-link" href="https://amzn.to/2QSB2XQ" title="Silverline 261137 - Bolsa para cultivo de patatas (360 x 510 mm)" rel="nofollow" target="_blank">
                        <img class="aawp-product__image" src="https://images-na.ssl-images-amazon.com/images/I/91bLUDVeuNL._SY445_.jpg" alt="Silverline 261137 - Bolsa para cultivo de patatas (360 x 510 mm)" data-jpibfi-indexer="2" >
                    </a>
                </div>

                <div class="aawp-product__content">
                    <a style="color: rgb(231, 76, 60);" class="aawp-product__title a-title-adAmazon" href="https://amzn.to/2QSB2XQ" title="Silverline 261137 - Bolsa para cultivo de patatas (360 x 510 mm)" rel="nofollow" target="_blank">
                        Silverline 261137 - Bolsa para cultivo de patatas (360 x 510 mm)</a>
                    <div class="aawp-product__description">
                        <ul class="ul-description-amazon">
                            <li>Bolsa con tejido de plástico. </li>
                            <li>Pdeal para el cultivo de patatas.</li>
							<li>Diseño único para acceder fácilmente a las patatas.</li>
							<li>Fondo perforado para mejor drenaje.</li>
							<li>Asas laterales.</li>
                        </ul>        
                    </div>
                </div>

                <div class="aawp-product__footer">
                    <div class="aawp-product__pricing">
                        <!--<span class="aawp-product__price aawp-product__price--old">45,00 €</span>
                        <span  class="aawp-product__price aawp-product__price--saved">−5%</span>-->
                        <span class="aawp-product__price aawp-product__price--current">9,39 €</span>
                        <a class="aawp-check-prime" href="https://amzn.to/2QSB2XQ" title="Amazon Prime" rel="nofollow" target="_blank"></a>        
                    </div>
                        <a class="aawp-button aawp-button--buy aawp-button aawp-button--amazon rounded shadow aawp-button--icon aawp-button--icon-black" href="https://amzn.to/2QSB2XQ" title="Ver en Amazon" target="_blank" rel="nofollow"><i class="fa fa-shopping-cart"></i>  Ver en Amazon</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- fin anuncio amazon -->



<h1><span style="color:#f1c40f">El aporque de la papa</span></h1>

<p><strong>Es una t&eacute;cnica agr&iacute;cola</strong> que consiste en acumular tierra en la base del tronco o tallo de una planta con el objetivo de que queden protegidos; incluso ayuda a facilitar el riego e impide el exceso de agua.</p>

<p>Para llevar a cabo esta pr&aacute;ctica, <strong>el cultivo debe tener cierta altura</strong>. Por ejemplo, en el caso de la papa, el aporcado se realiza antes que la planta supere los 15 cent&iacute;metros de altura. De esta manera se incrementar&aacute; el n&uacute;mero de ra&iacute;ces por planta. En las ra&iacute;ces se encuentra el tub&eacute;rculo, a m&aacute;s ra&iacute;ces mejor cosecha.</p>
<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HR_niWBuiTo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<p>&nbsp;</p>

<p>&nbsp;</p>

<h1><span style="color:#f1c40f">La cosecha de la papa</span></h1>

<p><span style="color:#f1c40f"><img class="img-fluid" alt="" src="https://elleonverde.com/uploads/images/content/1620366022-el-leon-verde.png" style="height:209px; width:400px" /></span></p>

<p>Una forma de reconocer que la planta est&aacute; lista para la cosecha <strong>es cuando comienza a morir.</strong> Es probable que esto suceda luego entre 7 y 16 semanas luego de la siembra y depender&aacute; del tipo de papa, el lugar de la siembra, el riego y hasta el clima de tu localidad.</p>

<p>Hay una t&eacute;cnica que es utilizada en varias partes del mundo que consiste en cortar el follaje de la papa unos 10 d&iacute;as antes de su cosecha. Se afirma que ayuda a la maduraci&oacute;n del tub&eacute;rculo.</p>

<p>Para cosechar simplemente se debe <strong>despegar los tub&eacute;rculos de las ra&iacute;ces </strong>con las manos o con la ayuda de un rastrillo o un pico y obtendr&aacute;s papas ya maduras.</p>


<!-- anuncio amazon -->
<div class="aawp">
    <div class="aawp-grid">
        <div class="aawp-grid__item">
            
            <div class="aawp-product aawp-product--horizontal aawp-product--ribbon aawp-product--sale" data-aawp-product-id="8493828955" data-aawp-product-title="Bellota 325800 Azada con mango para agricultura y jardinería, Gris/Marrón, 14 cm" data-aawp-geotargeting="true">

                <span class="aawp-product__ribbon aawp-product__ribbon--sale" >Oferta</span>
                <div class="aawp-product__thumb">
                    <a class="aawp-product__image-link" href="https://amzn.to/3voXsih" title="Bellota 325800 Azada con mango para agricultura y jardinería, Gris/Marrón, 14 cm" rel="nofollow" target="_blank">
                        <img class="aawp-product__image" src="https://images-na.ssl-images-amazon.com/images/I/71hOlCjc8NL._AC_SX355_.jpg" alt="Bellota 325800 Azada con mango para agricultura y jardinería, Gris/Marrón, 14 cm" data-jpibfi-indexer="2" >
                    </a>
                </div>

                <div class="aawp-product__content">
                    <a style="color: rgb(231, 76, 60);" class="aawp-product__title a-title-adAmazon" href="https://amzn.to/3voXsih" title="Bellota 325800 Azada con mango para agricultura y jardinería, Gris/Marrón, 14 cm" rel="nofollow" target="_blank">
                        Bellota 325800 Azada con mango para agricultura y jardinería, Gris/Marrón, 14 cm</a>
                    <div class="aawp-product__description">
                        <ul class="ul-description-amazon">
                            <li>Forjada en una sola pieza. </li>
                            <li>Temple integral para evitar deformaciones.</li>
							<li>Tratamiento térmico diferenciado en el ojo para evitar roturas.</li>
							<li>Pulida y afilada.</li>
                        </ul>        
                    </div>
                </div>

                <div class="aawp-product__footer">
                    <div class="aawp-product__pricing">
                        <!--<span class="aawp-product__price aawp-product__price--old">45,00 €</span>
                        <span  class="aawp-product__price aawp-product__price--saved">−5%</span>-->
                        <span class="aawp-product__price aawp-product__price--current">19,99 €</span>
                        <a class="aawp-check-prime" href="https://amzn.to/3voXsih" title="Amazon Prime" rel="nofollow" target="_blank"></a>        
                    </div>
                        <a class="aawp-button aawp-button--buy aawp-button aawp-button--amazon rounded shadow aawp-button--icon aawp-button--icon-black" href="https://amzn.to/3voXsih" title="Ver en Amazon" target="_blank" rel="nofollow"><i class="fa fa-shopping-cart"></i>  Ver en Amazon</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- fin anuncio amazon -->




<p>Aqu&iacute; un video de la cosecha de papas del Le&oacute;n Verde.</p>

<p>&nbsp;</p>
<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XWsc9tRXXzY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>





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