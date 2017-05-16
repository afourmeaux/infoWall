document.addEventListener('DOMContentLoaded', function(){
	setInterval(function(){
		changeTime('seconds', document.getElementById('seconds'));
	}, 1000);
})
function changeTime (type, $elem){
	var number = parseFloat($elem.innerHTML);
	number += 1;

	var maxType = 60;

	if (type == 'hour'){
		maxType = 24;
	}

	if(number == maxType){
		switch(type){
			case 'seconds':
				changeTime('minutes', document.getElementById('minutes'));
				break;
			case 'minutes':
				changeTime('hours', document.getElementById('hours'));
				break;
		}
		number = 0;
	}

	$elem.innerHTML = addZero(number);
}

function addZero(number){
	return (number < 10)?'0' + number : number;
}