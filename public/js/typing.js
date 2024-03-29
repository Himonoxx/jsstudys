'use strict';

{
    const words = $data;
    var keys = Object.keys($data);
    var word = keys[Math.floor(Math.random()*keys.length)];
    var mean = $data[word];
    const target = document.getElementById('target');
    const scoreLabel = document.getElementById('score');
    const missLabel = document.getElementById('miss');
    const timerLabel = document.getElementById('timer');
    const meanLabel = document.getElementById('mean');
    const timelimit = 60*1000;
    
    let loc = 0;
    let score = 0;
    let miss = 0;
    let startTime;
    let isPlaying = false;
    
    function showResult(){
        const accuracy = score + miss === 0 ? 0 : score / (score + miss) * 100;
        alert( '正答数：' + score +', 誤答数：' +  miss + ', 正確率：' + accuracy.toFixed(2) + '%');
        console.log('${score}');
    }
    
    function updateTarget(){
        meanLabel.textContent = $data[word]; 
        let placeholder = '';
        for(let i = 0 ; i<loc ; i++){
            placeholder += '_';
        }
       target.textContent = placeholder + word.substring(loc); 
    }
    
    function updateTimer(){
        let afterTime = new Date().getTime();
        const timeLeft = startTime + timelimit - afterTime;
        timerLabel.textContent = (timeLeft/1000).toFixed(2);
        
        const timeoutid = setTimeout(() =>{
           updateTimer();
        },10);
        
        if(timeLeft < 0){
            isPlaying = false;
            clearTimeout(timeoutid);
            setTimeout(()=>{
                showResult();
            },100);
            
            timerLabel.textContent='0.00';
            meanLabel.textContent='';
            target.textContent = 'Click to replay.';
        }
        
    }
        
    addEventListener('click',()=>{
        
        if(isPlaying === true){
            return;
        }
        
        loc = 0;
        score = 0;
        miss = 0;
        mean='';
        scoreLabel.textContent = score;
        missLabel.textContent = miss;
        meanLabel.textContent = mean
        word = keys[Math.floor(Math.random()*keys.length)];
        mean = $data[word];
        
        isPlaying = true;
        updateTarget();
        startTime = new Date().getTime();
        updateTimer();
    });
    
    window.addEventListener('keyup', e =>{
        if(isPlaying !== true){
            return;
        }
        if(e.key === word[loc]){
            loc++;
            if(loc === word.length){
                word = keys[Math.floor(Math.random()*keys.length)];
                mean = $data[word];
                meanLabel.textContent = mean
                loc = 0;
            }
            score++;
            scoreLabel.textContent = score;
            updateTarget();
        }else{
            miss++;
            missLabel.textContent = miss;
        }
    });
}