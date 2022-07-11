<?php

    function get_item()
    {
        $sql= new mysqli("localhost","root","","prox");
        $r= $sql->query("SELECT * FROM items;");
        return $r;
    }

    function insert_item($item_name,$item_price,$item_img,$item_iid)
    {
        echo 
        "<div class=\"col-md-3 col-sm-6\">
            <div class=\"product-grid7\">
                <div class=\"product-image7\">
                    <a href=\"#\">
                        <img class=\"pic-1\" src=\"$item_img\">
                    
                    </a>
                    <ul class=\"social\">
                        <li><button class=\"fa fa-shopping-cart\" type=\"submit\" name=\"add\" value=\"$item_iid\"></button>
                        
                     </ul>
                     <span class=\"product-new-label\">New</span>
                </div>
                <div class=\"product-content\">
                <h3 class=\"title\"><a href=\"#\">$item_name</a></h3>
                <ul class=\"rating\">
                    <li class=\"fa fa-star\"></li>
                    <li class=\"fa fa-star\"></li>
                    <li class=\"fa fa-star\"></li>
                    <li class=\"fa fa-star\"></li>
                    <li class=\"fa fa-star\"></li>
                </ul>
                <div class=\"price\">$15.00
                    <span>$$item_price</span>
                </div>
            </div>
        </div>
        </div>" ;
    }
    
    function insert_cart($item_name,$item_price,$item_img) 
    {
        echo   "<div class=\"product\">
                <div class=\"row justify-content-center align-items-center\">
                    <div class=\"col-md-3\">
                        <div class=\"product-image\"><img class=\"img-fluid d-block mx-auto image\" src=\"$item_img\"></div>
                        </div>
                        <div class=\"col-md-5 product-info\"><a class=\"product-name\" href=\"#\">$item_name</a>
                            <div class=\"product-specs\">
                
                            </div>
                        </div>
                        <div class=\"col-6 col-md-2 quantity\"><label class=\"form-label d-none d-md-block\" for=\"quantity\">Quantity</label><input type=\"number\" id=\"number-1\" class=\"form-control quantity-input\" value=\"1\"></div>
                        <div class=\"col-6 col-md-2 price\"><span>$$item_price</span></div>
                </div>
        </div>
        ";
        
    }

?>