<section class="hero">
	<div class="img-container">
		<div class="bg-container fixed-container" style="background-image: url('images/ubports/phone-taking-photo-hero.jpg');"></div>
		<div class="wrapper">
			<div class="intro higher transparent text-white">
				<img src="images/ubports/logo/ubports-logo.png" alt="ubports-logo" style="float: right; width: 64px; background: rgba(255, 255, 255, 0.5); box-shadow: 0px 0px 20px 30px rgba(255, 255, 255, 0.5);">
				<h1>Ubuntu Touch</h1>
				<h2>Bezpečnější, atraktivní,<br>volně dostupný a zdarma.</h2>
				<p>Mobilní operační systém pod záštitou komunity UBports.</p>
				<a href="https://ubuntu-touch.io/" class="button">Domovská stránka projektu</a>
			</div>
		</div>
		<script>
			"use strict";
			function heroAdapt() {
				if(window.innerHeight > 900) {
					document.querySelector(".hero .bg-container.fixed-container").classList.add("bottom");
				}
				else {
					document.querySelector(".hero .bg-container.fixed-container").classList.remove("bottom");
				}
			}
			
			heroAdapt();
			
			window.addEventListener("resize", (event) => {
				heroAdapt();
			});
		</script>
	</div>
</section>
<section class="padded">
	<div class="wrapper">
		<div class="row-boxes vertical-center two mobile-reverse">
			<ul>
				<li>
					<div class="box">
						<h3>Vývoj</h3>
						<p>UBports je skupina vývojářů i celá komunita, kteří původně pracovali na portování mobilního Ubuntu na nová zařízení, a v dubnu 2017 převzali, v návaznosti na ukončení vývoje ze strany Canonicalu, celý projekt pod svá křídla.</p>
						<p>V rámci mobilního Ubuntu dochází také k údržbě a dalšímu vývoji plánovaného konvergentního prostředí Unity&nbsp;8 a také několika klíčových mobilních aplikací.</p>
						<p>Teamu UBports se také úspěšně daří rozšiřovat základnu podporovaných zařízení, stejně jako implementovat nová rozšíření. Aktuálně je na horizontu například podpora mobilních aplikací pro platformu Android či aktualizace softwrové základny včetně Unity 8 a grafické vrstvy Mir na jejich nejnovější verze.</p>
						<a href="https://open-store.io" class="button green">Obchod OpenStore s mobilními aplikacemi Ubuntu</a>
					</div>
				</li>
				<li>
					<div class="box">
						<img src="images/ubports/convergence.gif" alt="UBports devices overview" class="responsive">
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="padded black">
	<div class="wrapper">
		<div class="row-boxes vertical-center two">
			<ul>
				<li>
					<div class="box">
						<img src="images/ubports/phone-scopes.jpg" alt="Ubuntu scopes" class="responsive">
					</div>
				</li>
				<li>
					<div class="box">
						<h3>Přistupujte k obsahu přirozeně pomocí Scopes</h3>
						<p>Unikátní technologie Ubuntu Scopes sdružuje vše co potřebujete do jedné obrazovky bez nutnosti spouštět a přepínat mezi více aplikacemi. Telefony a tablety Ubuntu byly vytvořeny tak, aby se točily kolem obsahu a služeb, které využíváte nejčastěji.</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="hero">
	<div class="img-container">
		<div class="img-container">
			<div class="bg-container mobile-bg" style="background-image: url('images/ubports/phone-beautiful-features.jpg');"></div>
			<div class="wrapper">
				<div class="row-boxes vertical-center two">
					<ul>
						<li>
							<div class="box mobile-bg">
								<h3>Profesionálně navržené funkce</h3>
								<p>Telefony a tablety Ubuntu jsou navrženy s důrazem na detail. Nebyla opomenuta žádná součást a důkladným promyšleným vývojem si prošly všechny obrazovky, jako ta zamykací či základní aplikace, mezi které patří například aplikace pro psaní zpráv a aplikace hodiny pro nastavování budíků. A spouštěč aplikací prostředí Ubuntu přináší vše na dosah prstů, ať již děláte s vašim zařízením cokoliv.</p>
							</div>
						</li>
						<li>
							<div class="box" style="height: 400px;">
								
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="padded">
	<div class="wrapper">
		<div class="row-boxes vertical-center two mobile-reverse">
			<ul>
				<li>
					<div class="box">
						<img src="images/ubports/phone-devices-row.png" alt="Ubuntu devices overview" class="responsive">
					</div>
				</li>
				<li>
					<div class="box">
						<h3>Dostupné na celé řadě zařízení</h3>
						<p>Pokud jste majiteli některého z podporovaných mobilních zařízení nebo uvažujete o nákupu mobilního telefonu, jež umožňuje běh Ubuntu Touch, můžete si Ubuntu na tento telefon nainstalovat sami s pomocí instalátoru UBports.</p>
						<a href="<?php $pagesHolder->getPageUrl("get-phone"); ?>" class="button">Zařízení s Ubuntu</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="padded grey">
	<div class="wrapper">
		<div class="row-boxes vertical-center two">
			<ul>
				<li>
					<div class="box">
						<h3>OpenSource</h3>
						<p>Náš kód je během vývojového cyklu svodobně sdílený. Jsme transparentní v našich plánech pro nadcházející vydání, takže jakožto vývojář, operátor nebo výrobce s námi můžete pracovat na obsahu pro mobilní Ubuntu.</p>
					</div>
				</li>
				<li>
					<div class="box">
						<h3>Staví na Ubuntu, vyvíjí projekt UBports</h3>
						<p>Společnost Canonical je celosvětová firma vyvíjející software a poskytující komerční návrhářskou a vývojovou podporu projektu Ubuntu. Tento systém je základem i pro mobilní operační systém Ubuntu Touch, i když jej již společnost Canonical sama aktivně nevyvíjí.</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="padded">
	<div class="wrapper">
		<div class="row-boxes stretch-content">
			<ul>
				<li>
					<div class="box">
						<div>
							<h3>Nabité funkcemi</h3>
							<p>Spouštějte všechny vaše oblíbené aplikace a jednoduše se mezi nimi přepínejte pouhým přejetím prstu skrze obrazovku za pomoci magických okrajů Ubuntu. Používejte domovskou sekci (tzv. Home scope) k hledání obsahu ve vašem zařízení a na internetu, a udržujte si svůj život a obsah organizovaný s chytrostí Ubuntu scopes.</p>
						</div>
						<img src="images/ubports/image-phone-featurecomplete.jpg" alt="ubuntu phone" class="responsive">
					</div>
				</li>
				<li>
					<div class="box">
						<div>
							<h3>Připraven pro vás</h3>
							<p>Se všemi důležitými aplikacemi vytvořenými profesionálně a specificky pro Ubuntu zařízení běží Ubuntu velmi dobře i na základních telefonech. Ubuntu netrpí neduhy Javy jako Android, používá ale stejné hardwarové ovladače a tak je snadné přinést ho uživetelům po celém světě a nabídnout jim tak lepší zážitek z používání svého zařízení.</p>
						</div>
						<img src="images/ubports/image-phone-readyforyourphone.jpg" alt="ubuntu phone" class="responsive">
					</div>
				</li>
				<li>
					<div class="box">
						<div>
							<h3>Vše co vývojáři potřebují</h3>
							<p>Za pomocí SDK vytvářejte úžasné nativní aplikace nebo se vydejte cestou lehkých HTML5 utilit. Upravte webové aplikace snadno a rychle k nerozeznání od těch nativních pro své působení na Ubuntu zařízeních. S jedním systémem pro všechna zařízení může být jen jedna aplikace připravena jak pro použití na mobilech, tak tabletech i osobních počítačích ovládaných klávesnicí a myší.</p>
						</div>
						<img src="images/ubports/image-developers.jpg" alt="ubuntu phone" class="responsive">
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="padded">
	<div class="wrapper">
		<div class="row-boxes">
			<ul>
				<li>
					<div class="box">
						<h3>Také s českými aplikacemi</h3>
						<p>V katalogu OpenStore naleznete například aplikaci pro vyhledávání jízdních řádů Transport.</p>
						<a href="https://open-store.io/app/transport.zubozrout" class="text">Stáhnout zdarma</a>
					</div>
				</li>
				<li>
					<div class="box">
						<h3>Začněte vyvíjet své aplikace pro Ubuntu</h3>
						<p>Vše co potřebujete pro vývoj aplikací pro Ubuntu Touch naleznete na portálu <a href="https://docs.ubports.com" class="text">docs.ubports.com</a></p>
					</div>
				</li>
				<li>
					<div class="box">
						<h3>Zjistětě více o tom, jak se do projektu UBports zapojit</h3>
						<a href="https://ubports.com/community/get-involved" class="text">Staňte se členy komunity</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
