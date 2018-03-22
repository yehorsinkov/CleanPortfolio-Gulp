$(document).ready(function () {
      var list = $(".portfolio_item");
      var numToShow = 4;
      var button = $("#next");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 2, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });
    
    $(".popup").magnificPopup({type:"image"});
    
    $(".main_menu ul  a ").mPageScroll2id();

    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");

});    
   

window.onload = function(){
  var all = document.getElementsByClassName('progress');

  for(var i=0;i<all.length;i++){
    p = all[i].attributes.percent.value;
    tc = all[i].attributes.textColor.value;
    pb = all[i].attributes.progressColor.value;
    ic = all[i].attributes.innerColor.value;
    cid = all[i].attributes.cid.value;
    bar = all[i].attributes.bar.value;
    
    //tracker.init.prototype = {};
     var t = new tracker(250, 250, 15, tc, cid, ic, bar, p);

  }

}

function tracker(width, height, lineWidth, text, cid, inner, bar, p) {
    this.trackers = document.getElementsByClassName('progress-'+cid);
    this.pt = this.trackers[0].children[0];
   
    this.progress = 0;
    this.counter = 1;
    this.cid = cid;
    this.inner = inner;
    this.percent = p;
    this.bar = bar;
    this.lineWidth = lineWidth;
    this.text = text;
    this.canvas = this.pt.children[1];
    this.span = this.pt.children[0];
    this.span.textContent = '0%';
    this.span.style.color = text;    
    this.ctx = this.canvas.getContext('2d');
    this.canvas.width = width;
    this.canvas.height = height;
    this.ctx.lineWidth = lineWidth;
    this.ctx.lineCap = 'flat';
    this.ctx.translate(width / 2, height / 2);
    this.ctx.rotate(-90*Math.PI/180);
    this.radius = (width - lineWidth) / 2;
    this.drawCircle = function  drawCircle(color, percent) {    
        percent = percent/100;
        this.ctx.beginPath();
        this.ctx.arc(0, 0, this.radius, 0, Math.PI * 2 * percent, false);
        this.ctx.strokeStyle = color;
        this.ctx.stroke();
      }
    this.drawCircle(inner, 100);
    this.span.textContent = p+'%';
    this.animateBar =   function animateBar(){
    if(this.progress/7>99){
      this.counter = -7;
    } else if (this.progress < 1){
      this.counter = 7;
    }
    if (this.progress/7 >= this.percent){cancelAnimationFrame(this.animate);return false;}
    this.progress+=this.counter;
    this.span.textContent = (this.progress/7 >>0) + "%";
    this.drawCircle(this.bar, this.progress/7);
    this.animate = requestAnimationFrame(this.animateBar.bind(this));  
  }
    this.animateBar();

}


function myFunction() {
    var inpObj = document.getElementById("id1");
    if (inpObj.checkValidity() == false) {
        document.getElementById("demo").innerHTML = inpObj.validationMessage;
    }
}

 