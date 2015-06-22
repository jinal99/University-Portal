images = ['images/slide-1.jpg', 'images/slide-2.jpg', 'images/slide-3.jpg'];
setInterval(forwardImage, 4000);

function forwardImage() {
currentImageKey();
if (i < 2) {
changeImage(i + 1);
} else {
changeImage(0);
}
}


function currentImageKey() {
i = jQuery.inArray($('#slideshow').attr('src'), images);
return i;
}
  
function changeImage(i) {
$('#slideshow').stop().animate({opacity: 0}, 200, function() {$('#slideshow').attr('src', images[i]);
$('#holder img').load(function() {
$('#slideshow').stop().animate({
opacity: 1,
}, 200)
})
})
} 
