var degrees=0;
	function rotateAnim(el,speed)
	{
		var elem=document.getElementById(el);
		elem.style.WebkitTransform="rotate("+degrees+"deg)";
		setTimeout('rotateAnim(\''+el+'\','+speed+')',speed);
		degrees++;
		if(degrees>359)
		{
			degrees=1;
		}
	}
	function come()
	{
		var elem2=document.getElementById("about1");
		elem2.style.visibility="visible";
	}
	function go()
	{
		var elem2=document.getElementById("about1");
		elem2.style.visibility="hidden";
	}
	function come1()
	{
		var elem2=document.getElementById("about2");
		elem2.style.visibility="visible";
	}
	function go1()
	{
		var elem2=document.getElementById("about2");
		elem2.style.visibility="hidden";
	}
	function come2()
	{
		var elem2=document.getElementById("about3");
		elem2.style.visibility="visible";
	}
	function go2()
	{
		var elem2=document.getElementById("about3");
		elem2.style.visibility="hidden";
	}
	function come3()
	{
		var elem2=document.getElementById("about4");
		elem2.style.visibility="visible";
	}
	function go3()
	{
		var elem2=document.getElementById("about4");
		elem2.style.visibility="hidden";
	}
	function come4()
	{
		var elem2=document.getElementById("about5");
		elem2.style.visibility="visible";
	}
	function go4()
	{
		var elem2=document.getElementById("about5");
		elem2.style.visibility="hidden";
	}
	function come5()
	{
		var elem2=document.getElementById("about6");
		elem2.style.visibility="visible";
	}
	function go5()
	{
		var elem2=document.getElementById("about6");
		elem2.style.visibility="hidden";
	}