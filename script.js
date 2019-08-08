var index=0;
  var timeout;
  function pre(){
  index--;
  if(index<0){
    var sliders=document.getElementsByClassName('slider');
      index=sliders.length-1;
  }
  display();
  }

    function next(){
      index++;
      var sliders=document.getElementsByClassName('slider');
      if(index>=sliders.length){
        index=0;
      }
      display();
    }
    function display(){
      var sliders=document.getElementsByClassName('slider');
      for(var i=0;i<sliders.length;i++){
        sliders[i].style.display='none';
      }
        sliders[index].style.display='block';
      clearTimeout(timeout);
      timeout=setTimeout(next,3000);
    }
/*start for script for contact page validation*/
function validate(){
  var name = document.getElementById('name');
  var mail = document.getElementById('mail');
  var cmt = document.getElementById('cmt');
  var e_name = document.getElementById('error_name');
  var e_mail = document.getElementById('error_mail');
  var e_cmt = document.getElementById('error_cmt');
  var pattern = /^[a-z]\S+@\S+\.\S+/i;
  var result1 = pattern.test(mail.value);

  if(name.value==""){
    if(name.value<4 || name.value>12){
      name.style.border="1px solid red";
      e_name.style.display='block';
      e_name.innerHTML='Field must not be empty';
      e_name.style.color="red";
    }
  }
  else{
    name.style.border="1px solid green";
    e_name.style.display='none';
  }
  if (result1!=true) {
    mail.style.border="1px solid red";
    e_mail.style.display='block';
    e_mail.innerHTML='Field must not be empty';
    e_mail.style.color="red";
  }
  else{
    mail.style.border="1px solid green";
    e_mail.style.display='none';
  }
  if (cmt.value=="") {
    cmt.style.border="1px solid red";
    e_cmt.style.display='block';
    e_cmt.innerHTML='Field must not be empty';
    e_cmt.style.color="red";
  }
  else{
    cmt.style.border="1px solid green";
    e_cmt.style.display='none';
  }
}
/*end for script for contact page validation*/
/*start for script for home page newsletter*/
function h_validate(){
  var n = document.getElementById('h-name');
  var m = document.getElementById('h-mail');
  var patt1 = /^[a-z]\S+@\S+\.\S+/i;
  var result = patt1.test(m.value);
  //result=true
  if (n.value=="") {
    n.style.border="1px solid red";
  }
  else{
    n.style.border="1px solid green";
  }
  if (result!=true) {
    m.style.border="1px solid red";
  }
  else{
    m.style.border="1px solid green";
  }

}
/*end for script for home page newsletter*/