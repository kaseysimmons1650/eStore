
var prefix = "/~ksimmon1/rotate";

var imageArray = new Array(6);
for (i=0; i<imageArray.length; i++)
    imageArray[i] = prefix + (i) + ".jpg";

var imageCounter = 0;
function rotate()
{
    var imageObject = document.getElementById('placeholder');
    imageObject.src = imageArray[imageCounter];
    ++imageCounter;
    if (imageCounter == 6) imageCounter = 0;
}

function startRotation()
{
    document.getElementById('placeholder').src=imageArray[5];
    setInterval('rotate()', 2000);
}