function confirmPages()
{
	if (confirm('Any changes you have made to these pages will be overwritten. Would you like to proceed?'))
	{
		document.pages_form.submit();
	}
}

jQuery(document).ready(function() {

	function getData (e) {
		eval('var obj = ' + e.data); // get JSON object
	}
	
  if(typeof window.addEventListener != 'undefined') { 
		window.addEventListener('message', getData, false); 
	} 
	else if(typeof window.attachEvent != 'undefined') { 
		window.attachEvent('onmessage', getData); 
	}
})
