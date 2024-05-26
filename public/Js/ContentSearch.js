document.getElementById('search').oninput = function()
    {
        document.getElementById('Iconsearch').style.scale = "1.5";
        if(document.getElementById('search').value == "")
        {
            document.getElementById('Iconsearch').style.scale = "1";
        }
    }
