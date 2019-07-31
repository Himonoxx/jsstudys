'use strict';

{
    const btn =document.getElementById('omikuji-submit');
    
    btn.addEventListener('click', () => {
        const n=Math.floor(Math.random()*3);
        switch(n){
            case 0:
                btn.textContent = '大吉';
                break;
            case 1:
                btn.textContent = '中吉';
                break;
            case 2:
                btn.textContent = '凶';
                break;
        }
        
        var res = $('#omikuji-submit').text();
        if(res == '大吉')
        {
            $('#result_box9').attr('class','box9');
            $('#result').text('おめでとうございます!!今日もあなたに良いことがありますように。');
        }
        
        if(res == '中吉')
        {
            $('#result_box9').attr('class','box9');
            $('#result').text('平穏だけど、平和が一番！今日も頑張っていきましょう！');
        }
        
        if(res == '凶')
        {
            $('#result_box9').attr('class','box9');
            $('#result').text('ピンチはチャンス！いつも以上に気を引き締めてがんばりましょう！');
        }
        
        
        
    btn.removeEventListener(btn);
    
    });
    
    btn.addEventListener('mousedown', () => {
        
        btn.classList.add('pressed');
        
        });
        
    btn.addEventListener('mouseup', () => {
        
        btn.classList.remove('pressed');
        
        });
    
    
}

