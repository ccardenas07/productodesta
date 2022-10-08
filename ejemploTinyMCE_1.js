function cargarTinyMCE()

{
    tinyMCE.init({

        mode : "exact",

        elements: "editor",

        theme : "advanced",

       <!-- plugins: "fullscreen, advlink, advimage",-->

        theme_advanced_buttons1 : "bold, italic, underline, separator, justifyleft, justifycenter, justifyright, justifyfull,fontsizeselect,formatselect  ",

      <!--  theme_advanced_buttons2 : "bullist,numlist,separator,outdent,indent,separator,undo,redo",-->
		
		

        <!--theme_advanced_buttons3 : "image, link, fullscreen",-->

        theme_advanced_toolbar_location: "top",

        theme_advanced_toolbar_align: "left"

    });

 

    tinyMCE.init({

        mode : "exact",

        elements: "sencillo",

        theme : "advanced",

        theme_advanced_buttons1 : "bold, italic, underline, separator, justifyleft, justifycenter, justifyright, justifyfull,fontsizeselect,formatselect ",
        <!--theme_advanced_buttons2 : "bullist,numlist,separator,outdent,indent,separator,undo,redo",-->

       <!-- theme_advanced_buttons3 : "image, link, fullscreen",-->

        theme_advanced_toolbar_location: "top",

        theme_advanced_toolbar_align: "left"

    });
	
	
	

  }
