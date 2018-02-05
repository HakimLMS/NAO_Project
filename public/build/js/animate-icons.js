
var blockIcons = document.getElementById('block-icons-2');
var mc = new Hammer(blockIcons);

console.log('bloc icônes :'+blockIcons.offsetWidth);

if(blockIcons.offsetWidth < 950) {
	console.log('cut');
}


mc.on("swiperight swipeleft", function(ev) {
    console.log(ev.type +" gesture detected.");
});	

