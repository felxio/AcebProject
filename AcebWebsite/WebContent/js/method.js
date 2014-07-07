
function pop() {
window.open('pop','height=x,width=y,top=z,left=t,resible=no');
}


function open_infos()
{
        width = 300;
        height = 200;
        if(window.innerWidth)
        {
                var left = (window.innerWidth-width)/2;
                var top = (window.innerHeight-height)/2;
        }
        else
        {
                var left = (document.body.clientWidth-width)/2;
                var top = (document.body.clientHeight-height)/2;
        }
        window.open('logIn.html', 'popup', 'width=700,height=650,scrollbars=no');
//        window.open('logIn.html','popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
}	


function PopupCentrer(page, nom, width,height,options) { 
    var left = 0;
    var top = 0;
    if(window.innerWidth)
    {
            left = (window.innerWidth-width)/2;
            top = (window.innerHeight-height)/2;
    }
    else
    {
            left = (document.body.clientWidth-width)/2;
            top = (document.body.clientHeight-height)/2;
    }
	window.open(page,nom,"top="+top+",left="+left+",width="+width+",height="+height+","+options); 
}