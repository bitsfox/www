function onsss()
{
	//var jary=document.getElementById("arry");
	//alert(jary);
	var x=document.getElementById("sel1p");
	var i=x.selectedIndex;
	if(i>jary.length)
		alert('length error!');
	var av=jary[i];
	var y=document.getElementById("sel3p");
	var k=y.selectedIndex;
	if(k > av.length)
		alert('length error again');
	var bv=av[k];
	var v=document.getElementById('sel2p');
	v.options.length=0;	//clear
//	var j=av.length;
	var j=bv.length;
	for(i=0;i<j;i++)
	{
		var aa=new Option;
		aa.value=i;
		aa.text=bv[i][1];
		v.add(aa);
	} 
}
