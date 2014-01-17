
(function(){
  var r,g,b,heading;
  function supportRange()
  {
    var i = document.createElement('input');
    i.setAttribute('type','range');
    alert(i.type === 'range');
  }
  if(supportRange){
    var heading = document.querySelector('h1');
    var r = document.querySelector('#r');
    var g = document.querySelector('#g');
    var b = document.querySelector('#b');
  }
  document.body.addEventListener('change',function(){
    heading.style.color = 'rgb(' + [r.value,g.value,b.value].join(',') + ')'
  },false);
})();

function convertToEnglish(bngNum)
{
    var engNum = 0;
    if(bngNum.length==1)
    {
        if(bngNum=='১'){engNum=1;}
        else if(bngNum=='২'){engNum=2;}
        else if(bngNum=='৩'){engNum=3;}
        else if(bngNum=='৪'){engNum=4;}
        else if(bngNum=='৫'){engNum=5;}
        else if(bngNum=='৬'){engNum=6;}
        else if(bngNum=='৭'){engNum=7;}
        else if(bngNum=='৮'){engNum=8;}
        else if(bngNum=='৯'){engNum=9;}
        else if(bngNum=='০'){engNum=0;}
        else if(bngNum=='.'){engNum='.';}
        else{engNum= ' ';}
    }
    return engNum;
    /* if its not a Bangla Digit it will return 0 */
}

function convertToEnglishStr(str)
{
   var banStr = str;
   var error =false;
   var banStrLen = banStr.length; /* calculate the length of string */
   var engStr = "";
   for(var i=0;i<=banStrLen-1;i++)
   {
     var chunck = banStr.substr(i,1);
     if(chunck!=' ')
     {
      var engChunk = convertToEnglish(chunck);
         if(engChunk ==' ')
         {
             engChunk='';
             error = true;
         }
     }
     else
     {
       var engChunk ='';
       error = true;
     }
     var engStr = engStr + engChunk;
   }
    if(error == true){
        alert("Wrong Input");
        return 'Wrong Input';
    }else{
        return engStr;
    }

}

function writeInHtml(str){
    var engStr = convertToEnglishStr(str);

    document.getElementById('output').innerHTML=engStr;
}

//alert(convertToEnglishStr('৫১২')); by Moshiur


/* Example of Getting Window Width */

function alertSize() {
  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
  window.alert( 'Width = ' + myWidth );
  window.alert( 'Height = ' + myHeight );
}

(function(){
  var speed= 500;
  waitAndSee = function(){
    console.log("waitAndSee() Executed  ");
  };

  // use of setTimeout Function
  setTimeout(waitAndSee,speed);
}());

