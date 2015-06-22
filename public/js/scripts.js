/*
	jQuery document ready
*/
$(function ()
{
	/*
		simple preloaded tags initialize
		Initial Tags for demo one.
	*/
	$('#demo2').tagit();
	
	/*
		triggerkeys :
		An array containing all or any of the default options.
		These are the keys that will trigger a tag completion.

		sortable :
		Allows the user to re-order the tags using drag and drop.
		If true the whole tag is dragable.
		If 'handle' a handle is rendered
		and
		the tag is only dragable using the handle
		
		tagsChanged : function(tagValue, action, element)
		Callback on changed tags: 
		**tagValue:** string
		**action:** string - either 'added', 'popped', 'moved' or 'reset'
		**element:** object - reference to the added LI element 
	*/	
	$('#demo4').tagit(
	{
		triggerKeys:['enter', 'comma', 'tab'],
		sortable:true,
		tagsChanged:function (a, b)
		{
			$('#demo4Out').html(a + ' was ' + b);
		}
	});
	
	/*
		editable :
		this will enable inplace edit for tags.
	*/
	$('#demo9').tagit({ editable: true});

	
	/*
		below codes are for get tags button,
		when click on buttons it will alert tags added.
		where
		.tagit("tags") Returns an array of objects about all the tags.
	*/
	$('#demo2GetTags').click(function ()
	{
		showTags($('#demo2').tagit('tags'))
	});

	$('#demo2ResetTags').click(function ()
	{
		$('#demo2').tagit('reset')
	});

	$('#demo4GetTags').click(function ()
	{
		showTags($('#demo4').tagit('tags'))
	});
  
	$('#demo9GetTags').click(function ()
	{
		showTags($('#demo9').tagit('tags'))
	});
	
	/*
		function that will show result in alert box.
		we have passed tags object as argument
	*/
	function showTags(tags)
	{
		var string = "Tags (label : value)\r\n";
		string += "--------\r\n";
		for (var i in tags)
			string += tags[i].label + " : " + tags[i].value + "\r\n";
		alert(string);
	}
});