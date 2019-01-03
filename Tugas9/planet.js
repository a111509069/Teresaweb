function pilih()
{
	var planet = document.getElementById("planet");
	var pilihan = document.getElementById("pilihan");
	var option = document.createElement("option");
	
	option.text = planet.options[planet.selectedIndex].text;
	try
	{
		pilihan.add(option,null);
	}
	catch(ex)
	{
		pilihan.add(option);
		
	}
}