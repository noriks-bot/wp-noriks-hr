<?php
/**
 * Rezerva za samodejno predvajanje videov (Safari Mac + iPhone).
 * Safari pogosto zavrne autoplay (varcevalni nacin, nastavitve) in ostane crn kvadrat.
 * Za vse <video autoplay> na strani izdelka: muted + playsinline, play() ob vidnosti,
 * pavza ob izhodu iz vidnega polja; ce play() zavrne ali video po 1,5 s stoji -> gumb ▶.
 * Videi, dodani pozneje (karuseli, UGC), se ujamejo z MutationObserver.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_footer', function () {
	if ( ! function_exists( 'is_product' ) || ! is_product() ) {
		return;
	}
	?>
<style>
.nva-wrap{position:relative}
.nva-play{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:72px;height:72px;border-radius:50%;border:0;background:rgba(0,0,0,.55);cursor:pointer;z-index:5;display:flex;align-items:center;justify-content:center;padding:0;-webkit-tap-highlight-color:transparent}
.nva-play::before{content:"";display:block;margin-left:6px;border-style:solid;border-width:14px 0 14px 22px;border-color:transparent transparent transparent #fff}
.nva-play[hidden]{display:none}
@media (max-width:767px){.nva-play{width:60px;height:60px}}
</style>
<script>
(function(){
	if(!('IntersectionObserver' in window))return;
	var io=new IntersectionObserver(function(es){
		es.forEach(function(e){
			var v=e.target;
			if(e.isIntersecting){tryPlay(v);}
			else if(!v.paused&&!v._nvaUser){v.pause();}
		});
	},{threshold:0.25});

	function btn(v){
		if(v._nvaBtn)return v._nvaBtn;
		var p=v.parentNode;if(!p)return null;
		if(getComputedStyle(p).position==='static')p.classList.add('nva-wrap');
		var b=document.createElement('button');
		b.type='button';b.className='nva-play';b.setAttribute('aria-label','Pokreni video');b.hidden=true;
		b.addEventListener('click',function(ev){
			ev.preventDefault();ev.stopPropagation();
			v._nvaUser=true;v.muted=true;
			var pr=v.play();
			if(pr&&pr.catch)pr.catch(function(){v.controls=true;});
			b.hidden=true;
		});
		p.appendChild(b);v._nvaBtn=b;
		v.addEventListener('playing',function(){b.hidden=true;});
		return b;
	}
	function showBtn(v){var b=btn(v);if(b)b.hidden=false;}

	function tryPlay(v){
		if(!v.paused)return;
		var pr;
		try{pr=v.play();}catch(err){showBtn(v);return;}
		if(pr&&pr.catch)pr.catch(function(){showBtn(v);});
		clearTimeout(v._nvaT);
		v._nvaT=setTimeout(function(){if(v.paused||v.readyState<3)showBtn(v);},1500);
	}

	function prep(v){
		if(v._nva||!v.hasAttribute('autoplay'))return;
		v._nva=true;
		v.muted=true;v.defaultMuted=true;v.setAttribute('muted','');
		v.playsInline=true;v.setAttribute('playsinline','');v.setAttribute('webkit-playsinline','');
		io.observe(v);
	}
	function scan(root){
		if(root.tagName==='VIDEO'){prep(root);return;}
		if(root.querySelectorAll)root.querySelectorAll('video[autoplay]').forEach(prep);
	}
	function start(){
		scan(document);
		new MutationObserver(function(ms){
			ms.forEach(function(m){m.addedNodes.forEach(function(n){if(n.nodeType===1)scan(n);});});
		}).observe(document.body,{childList:true,subtree:true});
	}
	if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',start);else start();
})();
</script>
	<?php
}, 99 );
