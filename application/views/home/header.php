<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<script type="text/javascript">
			/* <![CDATA[ */
			var gform;
			gform ||
				(document.addEventListener("gform_main_scripts_loaded", function () {
					gform.scriptsLoaded = !0;
				}),
				document.addEventListener("gform/theme/scripts_loaded", function () {
					gform.themeScriptsLoaded = !0;
				}),
				window.addEventListener("DOMContentLoaded", function () {
					gform.domLoaded = !0;
				}),
				(gform = {
					domLoaded: !1,
					scriptsLoaded: !1,
					themeScriptsLoaded: !1,
					isFormEditor: () => "function" == typeof InitializeEditor,
					callIfLoaded: function (o) {
						return !(
							!gform.domLoaded ||
							!gform.scriptsLoaded ||
							(!gform.themeScriptsLoaded && !gform.isFormEditor()) ||
							(gform.isFormEditor() &&
								console.warn(
									"The use of gform.initializeOnLoaded() is deprecated in the form editor context and will be removed in Gravity Forms 3.1."
								),
							o(),
							0)
						);
					},
					initializeOnLoaded: function (o) {
						gform.callIfLoaded(o) ||
							(document.addEventListener("gform_main_scripts_loaded", () => {
								(gform.scriptsLoaded = !0), gform.callIfLoaded(o);
							}),
							document.addEventListener("gform/theme/scripts_loaded", () => {
								(gform.themeScriptsLoaded = !0), gform.callIfLoaded(o);
							}),
							window.addEventListener("DOMContentLoaded", () => {
								(gform.domLoaded = !0), gform.callIfLoaded(o);
							}));
					},
					hooks: { action: {}, filter: {} },
					addAction: function (o, r, e, t) {
						gform.addHook("action", o, r, e, t);
					},
					addFilter: function (o, r, e, t) {
						gform.addHook("filter", o, r, e, t);
					},
					doAction: function (o) {
						gform.doHook("action", o, arguments);
					},
					applyFilters: function (o) {
						return gform.doHook("filter", o, arguments);
					},
					removeAction: function (o, r) {
						gform.removeHook("action", o, r);
					},
					removeFilter: function (o, r, e) {
						gform.removeHook("filter", o, r, e);
					},
					addHook: function (o, r, e, t, n) {
						null == gform.hooks[o][r] && (gform.hooks[o][r] = []);
						var d = gform.hooks[o][r];
						null == n && (n = r + "_" + d.length),
							gform.hooks[o][r].push({
								tag: n,
								callable: e,
								priority: (t = null == t ? 10 : t),
							});
					},
					doHook: function (r, o, e) {
						var t;
						if (
							((e = Array.prototype.slice.call(e, 1)),
							null != gform.hooks[r][o] &&
								((o = gform.hooks[r][o]).sort(function (o, r) {
									return o.priority - r.priority;
								}),
								o.forEach(function (o) {
									"function" != typeof (t = o.callable) && (t = window[t]),
										"action" == r
											? t.apply(null, e)
											: (e[0] = t.apply(null, e));
								})),
							"filter" == r)
						)
							return e[0];
					},
					removeHook: function (o, r, t, n) {
						var e;
						null != gform.hooks[o][r] &&
							((e = (e = gform.hooks[o][r]).filter(function (o, r, e) {
								return !!(
									(null != n && n != o.tag) ||
									(null != t && t != o.priority)
								);
							})),
							(gform.hooks[o][r] = e));
					},
				}));
			/* ]]> */
		</script>

		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="xmlrpc.php" />

		<link rel="icon" href="favicon.png" type="image/png" />
		<link rel="shortcut icon" href="favicon.png" type="image/png" />

		<link
			rel="preload"
			href="wp-content/themes/brookman/fonts/HKGrotesk-Light.woff2"
			as="font"
			type="font/woff2"
			crossorigin
		/>
		<link
			rel="preload"
			href="wp-content/themes/brookman/fonts/HKGrotesk-Regular.woff2"
			as="font"
			type="font/woff2"
			crossorigin
		/>
		<link
			rel="preload"
			href="wp-content/themes/brookman/fonts/HKGrotesk-Medium.woff2"
			as="font"
			type="font/woff2"
			crossorigin
		/>
		<link
			rel="preload"
			href="wp-content/themes/brookman/fonts/HKGrotesk-Bold.woff2"
			as="font"
			type="font/woff2"
			crossorigin
		/>

		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("consent", "default", {
				ad_storage: "denied",
				ad_user_data: "denied",
				ad_personalization: "denied",
				analytics_storage: "denied",
				functionality_storage: "denied",
				personalization_storage: "denied",
				security_storage: "granted",
				wait_for_update: 2000,
			});
			gtag("set", "ads_data_redaction", true);
			gtag("set", "url_passthrough", true);
		</script>

		<style>
			.cky-switch input[type="checkbox"] {
				opacity: 1;
			}
		</style>

		<!-- Start cookieyes banner -->
		<script
			id="cookieyes"
			type="text/javascript"
			src="cdn-cookieyes.com/client_data/704f527aeefa2f34956bf793/script.js"
		></script>
		<!-- End cookieyes banner -->

		<meta
			name="robots"
			content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"
		/>
		<style>
			img:is([sizes="auto" i], [sizes^="auto," i]) {
				contain-intrinsic-size: 3000px 1500px;
			}
		</style>

		<!-- This site is optimized with the Yoast SEO plugin v25.7 - https://yoast.com/wordpress/plugins/seo/ -->
		<title>
			Top Divorce Lawyers &amp; Family Solicitors London | Family Law | Brookman
		</title>
		<meta
			name="description"
			content="Joshare specialist divorce lawyers, family law solicitors &amp; international divorce lawyers, advising clients across the UK and overseas."
		/>
		<link rel="canonical" href="<?= base_url('/') ?>" />
		<script type="application/ld+json" class="yoast-schema-graph">
			{
				"@context": "https://schema.org",
				"@graph": [
					{
						"@type": "WebPage",
						"@id": "https://www.brookman.co.uk/",
						"url": "https://www.brookman.co.uk/",
						"name": "Top Divorce Lawyers & Family Solicitors London | Family Law | Brookman",
						"isPartOf": { "@id": "https://www.brookman.co.uk/#website" },
						"about": { "@id": "https://www.brookman.co.uk/#organization" },
						"primaryImageOfPage": {
							"@id": "https://www.brookman.co.uk/#primaryimage"
						},
						"image": { "@id": "https://www.brookman.co.uk/#primaryimage" },
						"thumbnailUrl": "https://www.brookman.co.uk/wp-content/uploads/2024/06/Dvorce3.jpg",
						"datePublished": "2013-10-28T10:38:40+00:00",
						"dateModified": "2025-04-23T13:33:43+00:00",
						"description": "Joshare specialist divorce lawyers, family law solicitors & international divorce lawyers, advising clients across the UK and overseas.",
						"breadcrumb": { "@id": "https://www.brookman.co.uk/#breadcrumb" },
						"inLanguage": "en-US",
						"potentialAction": [
							{
								"@type": "ReadAction",
								"target": ["https://www.brookman.co.uk/"]
							}
						]
					},
					{
						"@type": "ImageObject",
						"inLanguage": "en-US",
						"@id": "https://www.brookman.co.uk/#primaryimage",
						"url": "https://www.brookman.co.uk/wp-content/uploads/2024/06/Dvorce3.jpg",
						"contentUrl": "https://www.brookman.co.uk/wp-content/uploads/2024/06/Dvorce3.jpg",
						"width": 800,
						"height": 800
					},
					{
						"@type": "BreadcrumbList",
						"@id": "https://www.brookman.co.uk/#breadcrumb",
						"itemListElement": [
							{ "@type": "ListItem", "position": 1, "name": "Home" }
						]
					},
					{
						"@type": "WebSite",
						"@id": "https://www.brookman.co.uk/#website",
						"url": "https://www.brookman.co.uk/",
						"name": "Josh McPherson Solicitors",
						"description": "Divorce Lawyers in London",
						"publisher": { "@id": "https://www.brookman.co.uk/#organization" },
						"potentialAction": [
							{
								"@type": "SearchAction",
								"target": {
									"@type": "EntryPoint",
									"urlTemplate": "https://www.brookman.co.uk/?s={search_term_string}"
								},
								"query-input": {
									"@type": "PropertyValueSpecification",
									"valueRequired": true,
									"valueName": "search_term_string"
								}
							}
						],
						"inLanguage": "en-US"
					},
					{
						"@type": "Organization",
						"@id": "https://www.brookman.co.uk/#organization",
						"name": "Josh McPherson Solicitors",
						"url": "https://www.brookman.co.uk/",
						"logo": {
							"@type": "ImageObject",
							"inLanguage": "en-US",
							"@id": "https://www.brookman.co.uk/#/schema/logo/image/",
							"url": "https://www.brookman.co.uk/wp-content/uploads/2013/10/divorce_land.jpg",
							"contentUrl": "https://www.brookman.co.uk/wp-content/uploads/2013/10/divorce_land.jpg",
							"width": 245,
							"height": 174,
							"caption": "Josh McPherson Solicitors"
						},
						"image": {
							"@id": "https://www.brookman.co.uk/#/schema/logo/image/"
						}
					}
				]
			}
		</script>
		<!-- / Yoast SEO plugin. -->

		<link rel="dns-prefetch" href="http://www.google.com/" />
		<link
			rel="alternate"
			type="application/rss+xml"
			title="Josh McPherson Solicitors &raquo; Welcome to Josh McPherson Solicitors Comments Feed"
			href="sample-page/feed"
		/>
		<script type="text/javascript">
			/* <![CDATA[ */
			window._wpemojiSettings = {
				baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
				ext: ".png",
				svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
				svgExt: ".svg",
				source: {
					concatemoji:
						"https:\/\/www.brookman.co.uk\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2",
				},
			};
			/*! This file is auto-generated */
			!(function (s, n) {
				var o, i, e;
				function c(e) {
					try {
						var t = { supportTests: e, timestamp: new Date().valueOf() };
						sessionStorage.setItem(o, JSON.stringify(t));
					} catch (e) {}
				}
				function p(e, t, n) {
					e.clearRect(0, 0, e.canvas.width, e.canvas.height),
						e.fillText(t, 0, 0);
					var t = new Uint32Array(
							e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
						),
						a =
							(e.clearRect(0, 0, e.canvas.width, e.canvas.height),
							e.fillText(n, 0, 0),
							new Uint32Array(
								e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
							));
					return t.every(function (e, t) {
						return e === a[t];
					});
				}
				function u(e, t) {
					e.clearRect(0, 0, e.canvas.width, e.canvas.height),
						e.fillText(t, 0, 0);
					for (
						var n = e.getImageData(16, 16, 1, 1), a = 0;
						a < n.data.length;
						a++
					)
						if (0 !== n.data[a]) return !1;
					return !0;
				}
				function f(e, t, n, a) {
					switch (t) {
						case "flag":
							return n(
								e,
								"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
								"\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
							)
								? !1
								: !n(
										e,
										"\ud83c\udde8\ud83c\uddf6",
										"\ud83c\udde8\u200b\ud83c\uddf6"
								  ) &&
										!n(
											e,
											"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
											"\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
										);
						case "emoji":
							return !a(e, "\ud83e\udedf");
					}
					return !1;
				}
				function g(e, t, n, a) {
					var r =
							"undefined" != typeof WorkerGlobalScope &&
							self instanceof WorkerGlobalScope
								? new OffscreenCanvas(300, 150)
								: s.createElement("canvas"),
						o = r.getContext("2d", { willReadFrequently: !0 }),
						i = ((o.textBaseline = "top"), (o.font = "600 32px Arial"), {});
					return (
						e.forEach(function (e) {
							i[e] = t(o, e, n, a);
						}),
						i
					);
				}
				function t(e) {
					var t = s.createElement("script");
					(t.src = e), (t.defer = !0), s.head.appendChild(t);
				}
				"undefined" != typeof Promise &&
					((o = "wpEmojiSettingsSupports"),
					(i = ["flag", "emoji"]),
					(n.supports = { everything: !0, everythingExceptFlag: !0 }),
					(e = new Promise(function (e) {
						s.addEventListener("DOMContentLoaded", e, { once: !0 });
					})),
					new Promise(function (t) {
						var n = (function () {
							try {
								var e = JSON.parse(sessionStorage.getItem(o));
								if (
									"object" == typeof e &&
									"number" == typeof e.timestamp &&
									new Date().valueOf() < e.timestamp + 604800 &&
									"object" == typeof e.supportTests
								)
									return e.supportTests;
							} catch (e) {}
							return null;
						})();
						if (!n) {
							if (
								"undefined" != typeof Worker &&
								"undefined" != typeof OffscreenCanvas &&
								"undefined" != typeof URL &&
								URL.createObjectURL &&
								"undefined" != typeof Blob
							)
								try {
									var e =
											"postMessage(" +
											g.toString() +
											"(" +
											[
												JSON.stringify(i),
												f.toString(),
												p.toString(),
												u.toString(),
											].join(",") +
											"));",
										a = new Blob([e], { type: "text/javascript" }),
										r = new Worker(URL.createObjectURL(a), {
											name: "wpTestEmojiSupports",
										});
									return void (r.onmessage = function (e) {
										c((n = e.data)), r.terminate(), t(n);
									});
								} catch (e) {}
							c((n = g(i, f, p, u)));
						}
						t(n);
					})
						.then(function (e) {
							for (var t in e)
								(n.supports[t] = e[t]),
									(n.supports.everything =
										n.supports.everything && n.supports[t]),
									"flag" !== t &&
										(n.supports.everythingExceptFlag =
											n.supports.everythingExceptFlag && n.supports[t]);
							(n.supports.everythingExceptFlag =
								n.supports.everythingExceptFlag && !n.supports.flag),
								(n.DOMReady = !1),
								(n.readyCallback = function () {
									n.DOMReady = !0;
								});
						})
						.then(function () {
							return e;
						})
						.then(function () {
							var e;
							n.supports.everything ||
								(n.readyCallback(),
								(e = n.source || {}).concatemoji
									? t(e.concatemoji)
									: e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
						}));
			})((window, document), window._wpemojiSettings);
			/* ]]> */
		</script>
		<style id="classic-theme-styles-inline-css" type="text/css">
			/*! This file is auto-generated */
			.wp-block-button__link {
				color: #fff;
				background-color: #32373c;
				border-radius: 9999px;
				box-shadow: none;
				text-decoration: none;
				padding: calc(0.667em + 2px) calc(1.333em + 2px);
				font-size: 1.125em;
			}
			.wp-block-file__button {
				background: #32373c;
				color: #fff;
				text-decoration: none;
			}
		</style>
		<style id="global-styles-inline-css" type="text/css">
			:root {
				--wp--preset--aspect-ratio--square: 1;
				--wp--preset--aspect-ratio--4-3: 4/3;
				--wp--preset--aspect-ratio--3-4: 3/4;
				--wp--preset--aspect-ratio--3-2: 3/2;
				--wp--preset--aspect-ratio--2-3: 2/3;
				--wp--preset--aspect-ratio--16-9: 16/9;
				--wp--preset--aspect-ratio--9-16: 9/16;
				--wp--preset--color--black: #000000;
				--wp--preset--color--cyan-bluish-gray: #abb8c3;
				--wp--preset--color--white: #ffffff;
				--wp--preset--color--pale-pink: #f78da7;
				--wp--preset--color--vivid-red: #cf2e2e;
				--wp--preset--color--luminous-vivid-orange: #ff6900;
				--wp--preset--color--luminous-vivid-amber: #fcb900;
				--wp--preset--color--light-green-cyan: #7bdcb5;
				--wp--preset--color--vivid-green-cyan: #00d084;
				--wp--preset--color--pale-cyan-blue: #8ed1fc;
				--wp--preset--color--vivid-cyan-blue: #0693e3;
				--wp--preset--color--vivid-purple: #9b51e0;
				--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
					135deg,
					rgba(6, 147, 227, 1) 0%,
					rgb(155, 81, 224) 100%
				);
				--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
					135deg,
					rgb(122, 220, 180) 0%,
					rgb(0, 208, 130) 100%
				);
				--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
					135deg,
					rgba(252, 185, 0, 1) 0%,
					rgba(255, 105, 0, 1) 100%
				);
				--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
					135deg,
					rgba(255, 105, 0, 1) 0%,
					rgb(207, 46, 46) 100%
				);
				--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
					135deg,
					rgb(238, 238, 238) 0%,
					rgb(169, 184, 195) 100%
				);
				--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
					135deg,
					rgb(74, 234, 220) 0%,
					rgb(151, 120, 209) 20%,
					rgb(207, 42, 186) 40%,
					rgb(238, 44, 130) 60%,
					rgb(251, 105, 98) 80%,
					rgb(254, 248, 76) 100%
				);
				--wp--preset--gradient--blush-light-purple: linear-gradient(
					135deg,
					rgb(255, 206, 236) 0%,
					rgb(152, 150, 240) 100%
				);
				--wp--preset--gradient--blush-bordeaux: linear-gradient(
					135deg,
					rgb(254, 205, 165) 0%,
					rgb(254, 45, 45) 50%,
					rgb(107, 0, 62) 100%
				);
				--wp--preset--gradient--luminous-dusk: linear-gradient(
					135deg,
					rgb(255, 203, 112) 0%,
					rgb(199, 81, 192) 50%,
					rgb(65, 88, 208) 100%
				);
				--wp--preset--gradient--pale-ocean: linear-gradient(
					135deg,
					rgb(255, 245, 203) 0%,
					rgb(182, 227, 212) 50%,
					rgb(51, 167, 181) 100%
				);
				--wp--preset--gradient--electric-grass: linear-gradient(
					135deg,
					rgb(202, 248, 128) 0%,
					rgb(113, 206, 126) 100%
				);
				--wp--preset--gradient--midnight: linear-gradient(
					135deg,
					rgb(2, 3, 129) 0%,
					rgb(40, 116, 252) 100%
				);
				--wp--preset--font-size--small: 13px;
				--wp--preset--font-size--medium: 20px;
				--wp--preset--font-size--large: 36px;
				--wp--preset--font-size--x-large: 42px;
				--wp--preset--spacing--20: 0.44rem;
				--wp--preset--spacing--30: 0.67rem;
				--wp--preset--spacing--40: 1rem;
				--wp--preset--spacing--50: 1.5rem;
				--wp--preset--spacing--60: 2.25rem;
				--wp--preset--spacing--70: 3.38rem;
				--wp--preset--spacing--80: 5.06rem;
				--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
				--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
				--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
				--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
					6px 6px rgba(0, 0, 0, 1);
				--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
			}
			:where(.is-layout-flex) {
				gap: 0.5em;
			}
			:where(.is-layout-grid) {
				gap: 0.5em;
			}
			body .is-layout-flex {
				display: flex;
			}
			.is-layout-flex {
				flex-wrap: wrap;
				align-items: center;
			}
			.is-layout-flex > :is(*, div) {
				margin: 0;
			}
			body .is-layout-grid {
				display: grid;
			}
			.is-layout-grid > :is(*, div) {
				margin: 0;
			}
			:where(.wp-block-columns.is-layout-flex) {
				gap: 2em;
			}
			:where(.wp-block-columns.is-layout-grid) {
				gap: 2em;
			}
			:where(.wp-block-post-template.is-layout-flex) {
				gap: 1.25em;
			}
			:where(.wp-block-post-template.is-layout-grid) {
				gap: 1.25em;
			}
			.has-black-color {
				color: var(--wp--preset--color--black) !important;
			}
			.has-cyan-bluish-gray-color {
				color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}
			.has-white-color {
				color: var(--wp--preset--color--white) !important;
			}
			.has-pale-pink-color {
				color: var(--wp--preset--color--pale-pink) !important;
			}
			.has-vivid-red-color {
				color: var(--wp--preset--color--vivid-red) !important;
			}
			.has-luminous-vivid-orange-color {
				color: var(--wp--preset--color--luminous-vivid-orange) !important;
			}
			.has-luminous-vivid-amber-color {
				color: var(--wp--preset--color--luminous-vivid-amber) !important;
			}
			.has-light-green-cyan-color {
				color: var(--wp--preset--color--light-green-cyan) !important;
			}
			.has-vivid-green-cyan-color {
				color: var(--wp--preset--color--vivid-green-cyan) !important;
			}
			.has-pale-cyan-blue-color {
				color: var(--wp--preset--color--pale-cyan-blue) !important;
			}
			.has-vivid-cyan-blue-color {
				color: var(--wp--preset--color--vivid-cyan-blue) !important;
			}
			.has-vivid-purple-color {
				color: var(--wp--preset--color--vivid-purple) !important;
			}
			.has-black-background-color {
				background-color: var(--wp--preset--color--black) !important;
			}
			.has-cyan-bluish-gray-background-color {
				background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}
			.has-white-background-color {
				background-color: var(--wp--preset--color--white) !important;
			}
			.has-pale-pink-background-color {
				background-color: var(--wp--preset--color--pale-pink) !important;
			}
			.has-vivid-red-background-color {
				background-color: var(--wp--preset--color--vivid-red) !important;
			}
			.has-luminous-vivid-orange-background-color {
				background-color: var(
					--wp--preset--color--luminous-vivid-orange
				) !important;
			}
			.has-luminous-vivid-amber-background-color {
				background-color: var(
					--wp--preset--color--luminous-vivid-amber
				) !important;
			}
			.has-light-green-cyan-background-color {
				background-color: var(--wp--preset--color--light-green-cyan) !important;
			}
			.has-vivid-green-cyan-background-color {
				background-color: var(--wp--preset--color--vivid-green-cyan) !important;
			}
			.has-pale-cyan-blue-background-color {
				background-color: var(--wp--preset--color--pale-cyan-blue) !important;
			}
			.has-vivid-cyan-blue-background-color {
				background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
			}
			.has-vivid-purple-background-color {
				background-color: var(--wp--preset--color--vivid-purple) !important;
			}
			.has-black-border-color {
				border-color: var(--wp--preset--color--black) !important;
			}
			.has-cyan-bluish-gray-border-color {
				border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}
			.has-white-border-color {
				border-color: var(--wp--preset--color--white) !important;
			}
			.has-pale-pink-border-color {
				border-color: var(--wp--preset--color--pale-pink) !important;
			}
			.has-vivid-red-border-color {
				border-color: var(--wp--preset--color--vivid-red) !important;
			}
			.has-luminous-vivid-orange-border-color {
				border-color: var(
					--wp--preset--color--luminous-vivid-orange
				) !important;
			}
			.has-luminous-vivid-amber-border-color {
				border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
			}
			.has-light-green-cyan-border-color {
				border-color: var(--wp--preset--color--light-green-cyan) !important;
			}
			.has-vivid-green-cyan-border-color {
				border-color: var(--wp--preset--color--vivid-green-cyan) !important;
			}
			.has-pale-cyan-blue-border-color {
				border-color: var(--wp--preset--color--pale-cyan-blue) !important;
			}
			.has-vivid-cyan-blue-border-color {
				border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
			}
			.has-vivid-purple-border-color {
				border-color: var(--wp--preset--color--vivid-purple) !important;
			}
			.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
				background: var(
					--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
				) !important;
			}
			.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
				background: var(
					--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
				) !important;
			}
			.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
				background: var(
					--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
				) !important;
			}
			.has-luminous-vivid-orange-to-vivid-red-gradient-background {
				background: var(
					--wp--preset--gradient--luminous-vivid-orange-to-vivid-red
				) !important;
			}
			.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
				background: var(
					--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
				) !important;
			}
			.has-cool-to-warm-spectrum-gradient-background {
				background: var(
					--wp--preset--gradient--cool-to-warm-spectrum
				) !important;
			}
			.has-blush-light-purple-gradient-background {
				background: var(--wp--preset--gradient--blush-light-purple) !important;
			}
			.has-blush-bordeaux-gradient-background {
				background: var(--wp--preset--gradient--blush-bordeaux) !important;
			}
			.has-luminous-dusk-gradient-background {
				background: var(--wp--preset--gradient--luminous-dusk) !important;
			}
			.has-pale-ocean-gradient-background {
				background: var(--wp--preset--gradient--pale-ocean) !important;
			}
			.has-electric-grass-gradient-background {
				background: var(--wp--preset--gradient--electric-grass) !important;
			}
			.has-midnight-gradient-background {
				background: var(--wp--preset--gradient--midnight) !important;
			}
			.has-small-font-size {
				font-size: var(--wp--preset--font-size--small) !important;
			}
			.has-medium-font-size {
				font-size: var(--wp--preset--font-size--medium) !important;
			}
			.has-large-font-size {
				font-size: var(--wp--preset--font-size--large) !important;
			}
			.has-x-large-font-size {
				font-size: var(--wp--preset--font-size--x-large) !important;
			}
			:where(.wp-block-post-template.is-layout-flex) {
				gap: 1.25em;
			}
			:where(.wp-block-post-template.is-layout-grid) {
				gap: 1.25em;
			}
			:where(.wp-block-columns.is-layout-flex) {
				gap: 2em;
			}
			:where(.wp-block-columns.is-layout-grid) {
				gap: 2em;
			}
			:root :where(.wp-block-pullquote) {
				font-size: 1.5em;
				line-height: 1.6;
			}
		</style>
		<link
			rel="stylesheet"
			id="ge_styles-css"
			href="wp-content/themes/brookman/css/styles8a82.css?ver=2021112302"
			type="text/css"
			media="all"
		/>
		<script>
			var jquery_placeholder_url =
				"wp-content/plugins/gravity-forms-placeholders/jquery.placeholder-1.0.1.js";
		</script>
		<script
			type="text/javascript"
			src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1"
			id="jquery-core-js"
		></script>
		<script
			type="text/javascript"
			src="wp-content/plugins/gravity-forms-placeholders/gf.placeholders5152.js?ver=1.0"
			id="_gf_placeholders-js"
		></script>
		<link rel="https://api.w.org/" href="wp-json/index.html" />
		<link
			rel="alternate"
			title="JSON"
			type="application/json"
			href="wp-json/wp/v2/pages/2.json"
		/>
		<link rel='shortlink' href='
		<?php echo base_url('/') ?>
		' />
		<link
			rel="alternate"
			title="oEmbed (JSON)"
			type="application/json+oembed"
			href="wp-json/oembed/1.0/embed661f.json?url=https%3A%2F%2Fwww.brookman.co.uk%2F"
		/>
		<link
			rel="alternate"
			title="oEmbed (XML)"
			type="text/xml+oembed"
			href="wp-json/oembed/1.0/embed12a8?url=https%3A%2F%2Fwww.brookman.co.uk%2F&amp;format=xml"
		/>
		<link
			rel="icon"
			href="wp-content/uploads/2021/01/cropped-favicon3-32x32.png"
			sizes="32x32"
		/>
		<link
			rel="icon"
			href="wp-content/uploads/2021/01/cropped-favicon3-192x192.png"
			sizes="192x192"
		/>
		<link
			rel="apple-touch-icon"
			href="wp-content/uploads/2021/01/cropped-favicon3-180x180.png"
		/>
		<meta
			name="msapplication-TileImage"
			content="https://www.brookman.co.uk/wp-content/uploads/2021/01/cropped-favicon3-270x270.png"
		/>

		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "www.googletagmanager.com/gtm5445.html?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-MW29SWV");
		</script>
		<!-- End Google Tag Manager -->
	</head>

	<body class="home wp-singular page-template-default page page-id-2 wp-theme-brookman">
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-MW29SWV"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div id="page" class="site">
			<div class="site-inner">
				<header id="masthead" class="site-header">
					<div class="header-bar">
						<div class="container">
							<div class="header-bar-container">
								<div class="header-bar-left hidden-xs hidden-sm">
									<a href="#modalReviews" data-modal>
										<div class="rating-stars">
											<div class="rating-stars-inner" style="width: 96%"></div>
										</div>
										<b>Google</b>&nbsp;4.8/5.0<span
											class="hidden-xs hidden-sm hidden-md"
											>&nbsp;-220 Reviews</span
										>
									</a>
								</div>
								<div class="header-bar-right">
									<a href="#modalAskQuestion" data-modal>
										<svg
											width="24"
											height="24"
											viewBox="0 0 16 16"
											class="bi bi-chat-square-text-fill"
											fill="currentColor"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"
											/></svg>Quick Contact
									</a>
									<a href="#modalConsultation" data-modal class="">
										<svg
											width="24"
											height="24"
											viewBox="0 0 16 16"
											class="bi bi-calendar-check-fill"
											fill="currentColor"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
											/></svg><span class="hidden-xs hidden-sm">Request a&nbsp;</span
										>Free Consultation </a
									>
									<a href="tel:+442074308470" rel="nofollow">
										<svg
											aria-hidden="true"
											focusable="false"
											data-prefix="fas"
											data-icon="phone"
											role="img"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 512 512"
											class="svg-inline--fa fa-phone fa-w-16"
											style="transform: scaleX(-1)"
										>
											<path
												fill="currentColor"
												d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"
												class=""
											></path>
										</svg>
										<span class="label"
											>Call Us<span class="hidden-xs hidden-sm hidden-md"
												>&nbsp;Now</span
											></span
										>
										<span class="hidden-xs">+44&nbsp;(0)7452&nbsp;347338</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="header-main">
							<a href="#page" class="logo scroller">
								<img
									src="wp-content/themes/brookman/img/logo.png"
									alt="Josh McPherson Solicitors"
									width="227"
									height="60"
								/>
							</a>
							<div class="menu-bar">
								<button id="menu-toggle" class="menu-toggle">
									<span class="sr-only">Menu</span>
									<span class="burger-bar burger-bar-1"></span>
									<span class="burger-bar burger-bar-2"></span>
									<span class="burger-bar burger-bar-3"></span>
									<span class="burger-bar burger-bar-4"></span>
								</button>
								<div id="site-header-menu" class="site-header-menu">
									<nav
										id="site-navigation"
										class="main-navigation"
										aria-label="Primary Menu"
									>
										<div class="menu-main-menu-container">
											<ul id="menu-main-menu" class="primary-menu">
												<li
													id="menu-item-7"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-7"
												>
													<a
														href="<?php echo base_url('/') ?>"
														aria-current="page"
														>Home</a
													>
												</li>
												<li
													id="menu-item-649"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-649"
												>
													<a href="<?= base_url('family-solicitors'); ?>">Services</a>
													<ul class="sub-menu">
														<li
															id="menu-item-910"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-910"
														>
															<a href="<?= base_url('family-solicitors'); ?>"
																>Divorce &#038; No-Fault Divorce</a
															>
															<ul class="sub-menu">
																<li
																	id="menu-item-6435"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6435"
																>
																	<a href="<?= base_url('family-solicitors'); ?>"
																		>Divorce</a
																	>
																</li>
																<li
																	id="menu-item-1569"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1569"
																>
																	<a
																		href="<?= base_url('divorce-rights'); ?>"
																		>Divorce Rights</a
																	>
																</li>
																<li
																	id="menu-item-1501"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1501"
																>
																	<a
																		href="<?= base_url('adultery-and-divorce'); ?>"
																		>Adultery &#038; Divorce</a
																	>
																</li>
																<li
																	id="menu-item-1505"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1505"
																>
																	<a
																		href="<?= base_url('contested-divorce');?>"
																		>Contested Divorce</a
																	>
																</li>
																<li
																	id="menu-item-1566"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1566"
																>
																	<a
																		href="<?= base_url('amicable-divorce');?>"
																		>Amicable Divorce</a
																	>
																</li>
																<li
																	id="menu-item-1570"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1570"
																>
																	<a
																		href="<?= base_url('annulment');?>"
																		>Annulment</a
																	>
																</li>
																<li
																	id="menu-item-1511"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1511"
																>
																	<a
																		href="<?= base_url('separation');?>"
																		>Separation</a
																	>
																</li>
																<li
																	id="menu-item-1571"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1571"
																>
																	<a
																		href="<?= base_url('divorce-paperwork');?>"
																		>Divorce Paperwork</a
																	>
																</li>
															</ul>
														</li>
														<li
															id="menu-item-914"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-914"
														>
															<a
																href="<?= base_url('international-divorce'); ?>"
																>International Divorce</a
															>
															<ul class="sub-menu">
																<li
																	id="menu-item-1563"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1563"
																>
																	<a
																		href="<?= base_url('european-union-law'); ?>"
																		>Europe &#038; European Union</a
																	>
																</li>
																<li
																	id="menu-item-1559"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559"
																>
																	<a
																		href="<?= base_url('australia-and-new-zealand-law'); ?>"
																		>Australia &#038; New Zealand</a
																	>
																</li>
																<li
																	id="menu-item-1564"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1564"
																>
																	<a
																		href="<?= base_url('india-and-pakistan-law'); ?>"
																		>India &#038; Pakistan</a
																	>
																</li>
																<li
																	id="menu-item-1560"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1560"
																>
																	<a
																		href="<?= base_url('canada-and-usa-law'); ?>"
																		>Canada &#038; USA</a
																	>
																</li>
																<li
																	id="menu-item-1562"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1562"
																>
																	<a
																		href="<?= base_url('china-japan-and-south-east-asia-law'); ?>"
																		>China, Japan and Asia</a
																	>
																</li>
																<li
																	id="menu-item-1561"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1561"
																>
																	<a
																		href="<?= base_url('central-and-south-america-law'); ?>"
																		>Central and South America</a
																	>
																</li>
																<li
																	id="menu-item-1565"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1565"
																>
																	<a
																		href="<?= base_url('middle-east-and-persian-gulf-law'); ?>"
																		>Middle East &#038; Persian Gulf</a
																	>
																</li>
																<li
																	id="menu-item-6141"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6141"
																>
																	<a
																		href="<?= base_url('south-africa-and-africa-law'); ?>"
																		>Africa &#038; South Africa</a
																	>
																</li>
																<li
																	id="menu-item-1521"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1521"
																>
																	<a
																		href="<?= base_url('international-divorce-map'); ?>"
																		>All Countries</a
																	>
																</li>
															</ul>
														</li>
														<li
															id="menu-item-915"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-915"
														>
															<a href="<?= base_url ('childrens-issues'); ?>"
																>Children’s Issues</a
															>
															<ul class="sub-menu">
																<li
																	id="menu-item-1523"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1523"
																>
																	<a
																		href="<?= base_url ('fathers-and-mothers-rights'); ?>"
																		>Fathers’ &#038; Mothers’ Rights</a
																	>
																</li>
																<li
																	id="menu-item-1522"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1522"
																>
																	<a
																		href="<?= base_url ('grandparents-rights'); ?>"
																		>Grandparents’ Rights</a
																	>
																</li>
																<li
																	id="menu-item-5373"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5373"
																>
																	<a
																		href="<?= base_url ('parental-abduction-within-uk'); ?>"
																		>Parental Abduction within the UK</a
																	>
																</li>
																<li
																	id="menu-item-1525"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1525"
																>
																	<a
																		href="<?= base_url ('international-abduction'); ?>"
																		>International Abduction</a
																	>
																</li>
																<li
																	id="menu-item-5372"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5372"
																>
																	<a
																		href="<?= base_url ('leave-remove'); ?>"
																		>Leave to Remove</a
																	>
																</li>
																<li
																	id="menu-item-4115"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4115"
																>
																	<a
																		href="<?= base_url ('surrogacy'); ?>"
																		>Surrogacy</a
																	>
																</li>
															</ul>
														</li>
														<li
															id="menu-item-935"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-935"
														>
															<a
																href="<?= base_url('financial-settlements'); ?>"
																>Financial Settlements</a
															>
															<ul class="sub-menu">
																<li
																	id="menu-item-5366"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5366"
																>
																	<a
																		href="<?= base_url('financial-dispute-resolution'); ?>"
																		>Financial Dispute Resolution</a
																	>
																</li>
																<li
																	id="menu-item-1526"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1526"
																>
																	<a
																		href="<?= base_url('spousal-maintenance'); ?>"
																		>Spousal Maintenance</a
																	>
																</li>
																<li
																	id="menu-item-5367"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5367"
																>
																	<a
																		href="<?= base_url('trusts'); ?>"
																		>Trusts</a
																	>
																</li>
																<li
																	id="menu-item-5355"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5355"
																>
																	<a
																		href="<?= base_url('hidden-assets'); ?>"
																		>Hidden Assets</a
																	>
																</li>
																<li
																	id="menu-item-5369"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5369"
																>
																	<a
																		href="<?= base_url('salaries-bonuses-assets'); ?>"
																		>Salaries, Bonuses &#038; Shares</a
																	>
																</li>
																<li
																	id="menu-item-1532"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1532"
																>
																	<a
																		href="<?= base_url('international-wealth-and-estate-planning'); ?>"
																		>International Wealth &#038; Estate
																		Planning</a
																	>
																</li>
																<li
																	id="menu-item-5368"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5368"
																>
																	<a
																		href="<?= base_url('offshore-trusts-divorce'); ?>"
																		>Offshore Trusts and Divorce</a
																	>
																</li>
															</ul>
														</li>
														<li
															id="menu-item-4572"
															class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4572"
														>
															<a href="#">Other Services</a>
															<ul class="sub-menu">
																<li
																	id="menu-item-936"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-936"
																>
																	<a
																		href="<?= base_url('prenuptial-agreements'); ?>"
																		>Pre-nuptial Agreements</a
																	>
																</li>
																<li
																	id="menu-item-5378"
																	class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5378"
																>
																	<a
																		href="<?= base_url('post-nuptial-agreements'); ?>"
																		>Post-nuptial Agreements</a
																	>
																</li>
																<li
																	id="menu-item-937"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-937"
																>
																	<a href="<?= base_url('pensions'); ?>"
																		>Pensions &#038; Divorce</a
																	>
																</li>
																<li
																	id="menu-item-938"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-938"
																>
																	<a href="<?= base_url('inheritance'); ?>"
																		>Inheritance</a
																	>
																</li>
																<li
																	id="menu-item-6864"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6864"
																>
																	<a href="<?= base_url('london-map'); ?>">London Clients</a>
																</li>
																<li
																	id="menu-item-939"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-939"
																>
																	<a
																		href="<?= base_url('urdu-hindi'); ?>"
																		>بروک مین عائلی قانون</a
																	>
																</li>
															</ul>
														</li>
													</ul>
												</li>
												<li
													id="menu-item-1499"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1499"
												>
													<a href="<?php echo base_url('/about') ?>"
														>About Us</a
													>
												</li>
												<li
													id="menu-item-4643"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4643"
												>
													<a href="<?php echo base_url('/team') ?>">Team</a>
												</li>
												<li
													id="menu-item-4571"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4571"
												>
													<a href="<?php echo base_url('/blog') ?>">Blog</a>
												</li>
												<li
													id="menu-item-653"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-653"
												>
													<a href="<?php echo base_url('/contact') ?>"
														>Contact Us</a
													>
												</li>
											</ul>
										</div>
									</nav>
									<!-- .main-navigation -->
								</div>
							</div>
						</div>
					</div>
				</header>
			</div>
		</div>
	</body>
</html>
