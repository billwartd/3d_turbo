# 3D Car Racing Game HTML Script

```html
<!DOCTYPE html>
<html lang="en">
<head>
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
