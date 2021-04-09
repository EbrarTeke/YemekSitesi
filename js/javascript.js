function brown(){
    document.getElementById("change").style.backgroundColor="brown";
    }
     
     
    function yellow(){
    document.getElementById("change").style.backgroundColor="yellow";
    }
     
     
    function greenyellow(){
    document.getElementById("change").style.backgroundColor="greenyellow";
    }
     
     
    function blue(){
    document.getElementById("change").style.backgroundColor="blue";
    }
     
     
     
     var slider_content = document.getElementById('box');
    
    var image = ['banner\banner-1','banner\banner-2','banner\banner-3','banner\banner-4','banner\banner-5'];
    var i = image.length;
    
    function nextImage(){
    if(i<image.length){
    
    i=i+1;
    }
    else{
    i = 1;
    }
    slider_content.innerHTML = "<img src="+image[i-1]+".png>";
    
    }
    
    function prewImage(){
    
    if(i<image.length+1 && i>1){
    
    i=i-1;
    }
    else{
    i = image.length;
    }
    slider_content.innerHTML = "<img src="+image[i-1]+".png>";
    
    }
    
    setInterval(nextImage, 1000);