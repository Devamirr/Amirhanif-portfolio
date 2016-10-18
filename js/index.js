var $circles = $(".circle"),
    tl = new TimelineMax(),
    imageUrls = [
      'https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/valley.jpg?' + getRandomNum()
    ],
    images = [],
    imgCount = 0;

for (var i = 0; i < imageUrls.length; i++) {
  images.push($("<img>"));
  images[i].load(checkLoadProgress);
  images[i].attr("src", imageUrls[i]);
}

function getRandomNum() {
  return Math.floor(Math.random() *1 );
}

function checkLoadProgress() {
  imgCount++;
  console.log("Image is done loading", imgCount);
  if (imgCount >= imageUrls.length) {
    loaderOut();
  }
}

function loaderOut() {
  tl.pause();
  

    var tl2 = new TimelineMax();

    var circleArray = [".circle3", ".circle2"];
    tl2.insert(
        TweenMax.staggerTo(circleArray, .5, {
            opacity: 0
        }, .2)
    );

    tl2.insert(
        TweenMax.to(".circle1", .5, {
            width: "100%",
            scale: 1,
            left: "0",
            marginLeft: "0",
            backgroundColor: "#FF8A8A",
            borderRadius: "0px",
            ease: Power1.easeIn
        }), "+=0"
    );

    tl2.insert(
        TweenMax.to(".circle1", .5, {
            height: "100%",
            top: "0",
            marginTop: "0",
            backgroundColor: "#FFFAFA",
            ease: Elastic.easeInOut
        }), "+=0"
    );

    tl2.insert(
        TweenMax.to(".preloader", .5, {
            opacity: 0,
            display: "none",
            backgroundColor: "#00A676",
            overflow: "auto"
        }), "+=0"
    );
    tl2.insert(
        TweenMax.to("body", .5, {
            overflow: "auto"
        }), "+=0"
    );
}

TweenMax.set($circles, {
    scale: 0
});

tl.insert(
    TweenMax.staggerTo($circles.toArray(), 1, {
        opacity: 1,
        scale: 1,
        ease: Power1.easeIn
    }, .2)
);

tl.insert(
    TweenMax.staggerTo($circles.toArray(), .5, {
        scale: 1.2,
        boxShadow: "0 15px 25px rgba(0,0,0,.4)",
        repeat: -1,
        yoyo: true,
        ease: Power1.easeOut
    }, .2), "-=.4"
);

$("#infograph .one").each(function() {
  var opacity = Math.random() * 5 + .8;
  var xPos = Math.random() * 500 - 250;
  var yPos = Math.random() * 500 - 250;
  var randomDelay = Math.random() * 15;
  
  TweenMax.set(this, {
    x: xPos, y: yPos
  });
  
  TweenMax.to(this, 2, {
    x: 0,
    y: 0,
    opacity: opacity,
    fillOpacity:"1",
    ease: Power4.easeInOut,
    delay: randomDelay
  })
});

$("#infograph .two").each(function() {
  var opacity = Math.random() * 5 + .8;
  var xPos = Math.random() * 500 - 250;
  var yPos = Math.random() * 500 - 250;
  var randomDelay = Math.random() * 15;
  
  TweenMax.set(this, {
    x: xPos, y: yPos
  });
  
  TweenMax.to(this, 2, {
    x: 0,
    y: 0,
    opacity: opacity,
    fillOpacity:"1",
    ease: Power4.easeInOut,
    delay: randomDelay
  })
});

   $(document).ready(function(){
    
    $('.three').mouseover(function (e){   
        TweenMax.to($(this), .2, {scaleX:1, scaleY:1, css:{opacity:1}});
    })
    $('.three').mouseout(function (e){    
        TweenMax.to($(this), .2, {scaleX:0.8, scaleY:0.8, css:{opacity:0.5}});
    })


})
   
   
   $(document).ready(function() {

  $(window).scroll(function() {
      if ($(window).scrollTop() >= ($(document).height() - $(window).height())) {
        $('.popup').css( "left", "20px" )
        $('.arrow').hide();
      }else{
        $('.popup').css( "left", "-380px" ); 
        $('.arrow').show();
    }
  });
  
  $('.close').click(function(){
    $('.popup').hide();
  });
  
});