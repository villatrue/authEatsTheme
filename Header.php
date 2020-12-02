<!DOCTYPE html>
<html>
<?php wp_head();?>
<head>
    <title>Eats Tech Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="header">
        <div>
            
        </div>
        
        <div class="logo-container">
        <a href="javascript:void(0);" class="icon" onclick="showNav()">
                <svg class="hamburgerMenu" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                    <path id="here" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </a>
            <img class="logo" src="<?php echo get_bloginfo('template_url') ?>/Images/logo.svg" alt="Eats Logo"/>            
            <h1 class="title" id="title">
                    Eats.
                </h1>
        </div>
        
    </div>
    <div class="navmenu" id="myTopnav">
        <ul>
            <li>
                <a href="#menu">Lunch & Dinner Menu</a>
            </li>
            <li>
                <a href="#blog" class="active">Blog</a>
            </li>
            <li>
                <a href="#about">About Us</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </div>
    <script>
        function showNav() {
            var x = document.getElementById("myTopnav");
            var y = document.getElementById("fullscreenTitle");
            var z = document.getElementById('here')
            
            if (x.className === "navmenu") { 
                x.className += " responsive";
                z.setAttribute("d",
                    "M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"
                )
            } else {
                x.className = "navmenu";
                z.setAttribute("d", "M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z")
            }
        }
    </script>
    
    
    </body>

</html>