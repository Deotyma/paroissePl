var layer1 = document.getElementById('layer1');
scroll = window.pageYOffset;
document.addEventListener('scroll',
    function(e) {
        var offset = window.pageYOffset;
        scroll = offset;
        layer1.style.width = (100 + scroll / 5) + '%';
        layer1.style.right = scroll / 50 + '%';
    });

var layer2 = document.getElementById('layer2');
scroll = window.pageYOffset;
document.addEventListener('scroll',
    function(e) {
        var offset = window.pageYOffset;
        scroll = offset;
        layer2.style.width = (100 + scroll / 5) + '%';
        layer2.style.left = scroll / 50 + '%';
    })

var marie = document.getElementById('marie');
scroll = window.pageYOffset;
document.addEventListener('scroll',
    function(e) {
        var offset = window.pageYOffset;
        scroll = offset;
        marie.style.top = scroll / 100 + '%';
    })