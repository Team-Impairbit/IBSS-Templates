<?php
add_filter( 'vc_iconpicker-type-flaticon', 'landpick_vc_iconpicker_flaticon_type' );
function landpick_vc_iconpicker_flaticon_type( $icons ) {  
	$flat_icons = landpick_flaticon_css(); 
    return array_merge( $icons, $flat_icons );
}

function landpick_flaticon_css(){
	$css = <<<CSS
.flaticon-001-calendar:before { content: "\f100"; }
.flaticon-002-bell:before { content: "\f101"; }
.flaticon-003-heart-rate:before { content: "\f102"; }
.flaticon-004-umbrella:before { content: "\f103"; }
.flaticon-005-wishlist:before { content: "\f104"; }
.flaticon-006-clock:before { content: "\f105"; }
.flaticon-007-map:before { content: "\f106"; }
.flaticon-008-shopping-bag:before { content: "\f107"; }
.flaticon-009-compass:before { content: "\f108"; }
.flaticon-010-universe:before { content: "\f109"; }
.flaticon-011-wine:before { content: "\f10a"; }
.flaticon-012-news:before { content: "\f10b"; }
.flaticon-013-vegetables:before { content: "\f10c"; }
.flaticon-014-next-button:before { content: "\f10d"; }
.flaticon-015-back-arrow:before { content: "\f10e"; }
.flaticon-016-game:before { content: "\f10f"; }
.flaticon-017-store:before { content: "\f110"; }
.flaticon-018-box:before { content: "\f111"; }
.flaticon-019-gift:before { content: "\f112"; }
.flaticon-020-mail:before { content: "\f113"; }
.flaticon-021-shopping-cart:before { content: "\f114"; }
.flaticon-022-book:before { content: "\f115"; }
.flaticon-023-trophy:before { content: "\f116"; }
.flaticon-024-search:before { content: "\f117"; }
.flaticon-025-football:before { content: "\f118"; }
.flaticon-026-color-palette:before { content: "\f119"; }
.flaticon-027-user:before { content: "\f11a"; }
.flaticon-028-dentist:before { content: "\f11b"; }
.flaticon-029-friend:before { content: "\f11c"; }
.flaticon-030-walk:before { content: "\f11d"; }
.flaticon-031-reload:before { content: "\f11e"; }
.flaticon-032-coffee:before { content: "\f11f"; }
.flaticon-033-restaurant:before { content: "\f120"; }
.flaticon-034-delete:before { content: "\f121"; }
.flaticon-035-menu:before { content: "\f122"; }
.flaticon-036-picture:before { content: "\f123"; }
.flaticon-037-wallet:before { content: "\f124"; }
.flaticon-038-plus:before { content: "\f125"; }
.flaticon-039-nature:before { content: "\f126"; }
.flaticon-040-settings:before { content: "\f127"; }
.flaticon-041-real-estate:before { content: "\f128"; }
.flaticon-042-bar:before { content: "\f129"; }
.flaticon-043-calculate:before { content: "\f12a"; }
.flaticon-044-computer:before { content: "\f12b"; }
.flaticon-045-clipboard:before { content: "\f12c"; }
.flaticon-046-home:before { content: "\f12d"; }
.flaticon-047-off:before { content: "\f12e"; }
.flaticon-048-switch-on:before { content: "\f12f"; }
.flaticon-049-emotion:before { content: "\f130"; }
.flaticon-050-copy:before { content: "\f131"; }
.flaticon-051-stars:before { content: "\f132"; }
.flaticon-052-directional:before { content: "\f133"; }
.flaticon-053-business:before { content: "\f134"; }
.flaticon-054-money:before { content: "\f135"; }
.flaticon-055-adventure:before { content: "\f136"; }
.flaticon-056-settings-1:before { content: "\f137"; }
.flaticon-057-chat:before { content: "\f138"; }
.flaticon-058-crown:before { content: "\f139"; }
.flaticon-059-target:before { content: "\f13a"; }
.flaticon-060-settings-2:before { content: "\f13b"; }
.flaticon-061-design:before { content: "\f13c"; }
.flaticon-062-piggy-bank:before { content: "\f13d"; }
.flaticon-063-travel:before { content: "\f13e"; }
.flaticon-064-structure:before { content: "\f13f"; }
.flaticon-065-upload:before { content: "\f140"; }
.flaticon-066-warning:before { content: "\f141"; }
.flaticon-067-origami:before { content: "\f142"; }
.flaticon-068-favorite:before { content: "\f143"; }
.flaticon-069-download:before { content: "\f144"; }
.flaticon-070-knowledge:before { content: "\f145"; }
.flaticon-071-folder:before { content: "\f146"; }
.flaticon-072-setting:before { content: "\f147"; }
.flaticon-073-charts:before { content: "\f148"; }
.flaticon-074-web:before { content: "\f149"; }
.flaticon-075-support:before { content: "\f14a"; }
.flaticon-076-idea:before { content: "\f14b"; }
.flaticon-077-settings-3:before { content: "\f14c"; }
.flaticon-078-tag:before { content: "\f14d"; }
.flaticon-079-layer:before { content: "\f14e"; }
.flaticon-080-shield:before { content: "\f14f"; }
.flaticon-081-movie:before { content: "\f150"; }
.flaticon-082-music:before { content: "\f151"; }
.flaticon-083-settings-4:before { content: "\f152"; }
.flaticon-084-share:before { content: "\f153"; }
.flaticon-085-lock:before { content: "\f154"; }
.flaticon-086-flag:before { content: "\f155"; }
.flaticon-087-archive:before { content: "\f156"; }
.flaticon-088-universe-1:before { content: "\f157"; }
.flaticon-089-pyramid:before { content: "\f158"; }
.flaticon-090-sun:before { content: "\f159"; }
.flaticon-091-wifi:before { content: "\f15a"; }
.flaticon-092-advertising:before { content: "\f15b"; }
.flaticon-093-fruit:before { content: "\f15c"; }
.flaticon-094-fashion:before { content: "\f15d"; }
.flaticon-095-email:before { content: "\f15e"; }
.flaticon-096-printer:before { content: "\f15f"; }
.flaticon-097-burguer:before { content: "\f160"; }
.flaticon-098-analysis:before { content: "\f161"; }
.flaticon-099-note:before { content: "\f162"; }
.flaticon-100-attached:before { content: "\f163"; }
CSS;

	return landpick_breakCSS_iconArr($css);
}

