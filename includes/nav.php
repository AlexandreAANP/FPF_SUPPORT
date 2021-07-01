<nav class="navbar navbar-expand-lg bg-primary flex-wrap pt-5 bg-transparent navbar-style">
    <ul class="container-fluid">
        <a href="" title="Home">
            <img src="https://fpfsistemas.ibiz.pt/assets/images/logotipo.svg" class="svg-logo-image" style="width: 120px" alt="title=" home""="">
        </a>

        <div class="collapse navbar-collapse">
            <ul id="desktop-menu" class="list-unstyled d-flex align-items-center justify-content-end mt-0 mb-0 w-100">
                                    
<li class="py-3"><a href="https://fpfsistemas.ibiz.pt/who-we-are" title="<?php echo $translate['Who we are'];?>" class="menu-link-font"><?php echo $translate['Who we are'];?></a></li>
<li class="py-3"><a href="https://fpfsistemas.ibiz.pt/Services" title="<?php echo $translate['Services'];?>" class="menu-link-font"><?php echo $translate['Services'];?></a></li>
<li class="py-3"><a href="https://www.fpfsuporte.com/" title="<?php echo $translate['Customer support'];?>" class="menu-link-font"><?php echo $translate['Customer support'];?></a></li>

                                
                                                      <li class="language-style nav-item dropdown py-3 mr-5 ">
                        <span class="nav-link py-0 px-4 dropdown-toggle btn-sm p-1 menu-link-font" href="#" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                            <?php $language==='pt' ? 'PT' : 'EN'; echo $language; ?>
                        </span>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">


                        <li><a class="dropdown-item language-links-menu" href="<?php echo $_SERVER['SCRIPT_NAME'];?>?lg=en">EN</a></li>
                        <li><a class="dropdown-item language-links-menu" href="<?php echo $_SERVER['SCRIPT_NAME'];?>">PT</a></li>
                                                    </ul>
                    </li>
                            

            </ul>
        

                <li class="btn-speak-with-us d-flex align-items-center" style="list-style-type:none;">
                    <a href="#contact" class="ancora noLoad">
                        <div class="dropleft-speak-with-us">
                            <span class="text-speak-with-us"><?php echo $translate['Speak with us'];?></span>
                            <spam class="box-speak-with-us"></spam>
                            <spam class="box-speak-with-us-rigth"></spam> 
                        </div>
                    </a>
                    <span class="btn d-flex justify-content-center" style="width:100%;"><!--<i class="mdi mdi-rectangle-outline p-1 text-white"></i>--><!--img src="assets/icons/settings.svg"--><i class="mdi mdi-cog"></i></span>
                </li>
                   </div>

        
        <a href="#menu" class="d-lg-none btn bt-link ml-auto main-menu noLoad">
            <img src="https://fpfsistemas.ibiz.pt/assets/images/navbar.svg">
        </a>
    
</ul></nav>

<div class="modal" id="modal_product_search" style="margin-top: 100px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form id="formProductSearch" action="/product" method="GET" class="d-table w-100">
                    <div class="d-table-cell align-top w-100">
                        <input list="list_search_all_categories" type="text" autocomplete="off" name="search" class="form-control m-0" placeholder="What are you looking for?" style="border: #343232 1px solid; height: 38px!important; border-right: 0!important; border-bottom-right-radius: 0!important; border-top-right-radius: 0!important">
                        <datalist id="list_search_all_categories">
                                                                                </datalist>
                    </div>
                    <div class="d-table-cell align-top">
                        <button type="submit" class="btn btn-outline-secondary rounded-pill m-0" style="height: 38px!important; border-left: 0!important; border-bottom-left-radius: 0!important; border-top-left-radius: 0!important"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<nav id="menu" class="panel bg-color-black" role="navigation" style="position: fixed; top: 0px; bottom: 0px; height: 100%; right: -15.625em; width: 15.625em;">
    <div class="d-flex flex-column align-items-end h-100">
        <a href="#menu" class="main-menu mb-4 noLoad">
            <img src="https://fpfsistemas.ibiz.pt/assets/images/close-menu.svg" alt="close menu">
        </a>
        <ul id="menu-links" class="menu-mobile-link list-unstyled d-flex flex-column flex-fill w-100">
            
<li class="py-3"><a href="https://fpfsistemas.ibiz.pt/who-we-are" title="<?php echo $translate['Who we are'];?>" class="menu-link-font"><?php echo $translate['Who we are'];?></a></li>
<li class="py-3"><a href="https://fpfsistemas.ibiz.pt/Services" title="<?php echo $translate['Services'];?>" class="menu-link-font"><?php echo $translate['Services'];?></a></li>
<li class="py-3"><a href="https://www.fpfsuporte.com/" title="<?php echo $translate['Customer support'];?>" class="menu-link-font"><?php echo $translate['Customer support'];?></a></li>

            <li class="mobile-menu-speak-with-us"><a class=" noLoad" href="#contact"><?php echo $translate['Speak with us'];?></a></li>
                                                 <li class="language-style nav-item dropdown py-3 mr-5 ">
                        <span class="nav-link py-0 px-4 dropdown-toggle btn-sm p-1 menu-link-font mb-lg-dropdown" href="#" id="dropdownMenuLink" role="button" aria-expanded="false">
                            EN
                        </span>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                                                                                                            <li><a class="dropdown-item language-links-menu d-none noLoad" href="<?php echo $_SERVER['SCRIPT_NAME'];?>?lg=en">EN</a></li>
                                                                                                                                                            <li><a class="dropdown-item language-links-menu d-none " href="<?php echo $_SERVER['SCRIPT_NAME'];?>">PT</a></li>
                                                    </ul>
                    </li>
                        </ul>

            </div>
</nav>
