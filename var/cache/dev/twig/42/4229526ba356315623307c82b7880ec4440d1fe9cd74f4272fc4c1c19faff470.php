<?php

/* ::base.html.twig */
class __TwigTemplate_240fed9e6d899b96eede9900f9efa0fa7b7c46cab60be2d5d2dae00593965fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fonts' => array($this, 'block_fonts'),
            'headjs' => array($this, 'block_headjs'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_674ef0361e1f0402c013c10d6ffc4dd11172042edf75cc1d938d8b2abd513e5f = $this->env->getExtension("native_profiler");
        $__internal_674ef0361e1f0402c013c10d6ffc4dd11172042edf75cc1d938d8b2abd513e5f->enter($__internal_674ef0361e1f0402c013c10d6ffc4dd11172042edf75cc1d938d8b2abd513e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('fonts', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('headjs', $context, $blocks);
        // line 33
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"vertical-menu\">
        <div id=\"scrolltop\" class=\"hidden-xs\"><i class=\"fa fa-angle-up\"></i></div>

        <div id=\"color-switcher\">
            <div id=\"toggle-switcher\"><i class=\"fa fa-gear\"></i></div>
            <span>Color Scheme:</span>
            <ul class=\"list-unstyled list-inline\">
                <li id=\"red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Red\"></li>
                <li id=\"purple\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Purple\"></li>
                <li id=\"yellow\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Yellow\"></li>
                <li id=\"blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Blue\"></li>
                <li id=\"dark-blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Dark Blue\"></li>
                <li id=\"orange\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Orange\"></li>
                <li id=\"green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Green\"></li>
                <li id=\"brown\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Brown\"></li>
                <li id=\"dark-red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Dark Red\"></li>
                <li id=\"light-green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Light Green\"></li>
            </ul>
        </div>

        <div id=\"page-wrapper\"> <!-- PAGE - START -->
            <!-- ==========================
                HEADER - START
            =========================== -->
            <header class=\"navbar navbar-vertical navbar-fixed-top navbar-dark\">
                <div class=\"container\">
                    <div class=\"vertical-menu-top hidden-xs\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown navbar-cart\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\" data-close-others=\"true\"><i class=\"fa fa-shopping-cart\"></i> 3 item(s)</a>
                                <ul class=\"dropdown-menu\">

                                    <!-- CART ITEM - START -->
                                    <li>
                                        <div class=\"row\">
                                            <div class=\"col-sm-3\">
                                                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/products/product-1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                                            </div>
                                            <div class=\"col-sm-9\">
                                                <h4><a href=\"single-product.html\">Fusce Aliquam</a></h4>
                                                <p>1x - \$20.00</p>
                                                <a href=\"#\" class=\"remove\"><i class=\"fa fa-times-circle\"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- CART ITEM - END -->

                                    <!-- CART ITEM - START -->
                                    <li>
                                        <div class=\"row\">
                                            <div class=\"col-sm-3\">
                                                <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/products/product-2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                                            </div>
                                            <div class=\"col-sm-9\">
                                                <h4><a href=\"single-product.html\">Fusce Aliquam</a></h4>
                                                <p>1x - \$20.00</p>
                                                <a href=\"#\" class=\"remove\"><i class=\"fa fa-times-circle\"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- CART ITEM - END -->

                                    <!-- CART ITEM - START -->
                                    <li>
                                        <div class=\"row\">
                                            <div class=\"col-sm-3\">
                                                <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/products/product-3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                                            </div>
                                            <div class=\"col-sm-9\">
                                                <h4><a href=\"single-product.html\">Fusce Aliquam</a></h4>
                                                <p>1x - \$20.00</p>
                                                <a href=\"#\" class=\"remove\"><i class=\"fa fa-times-circle\"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- CART ITEM - END -->

                                    <!-- CART ITEM - START -->
                                    <li>
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <a href=\"cart.html\" class=\"btn btn-primary btn-block\">View Cart</a>
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <a href=\"checkout.html\" class=\"btn btn-primary btn-block\">Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- CART ITEM - END -->

                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\" data-close-others=\"true\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/flags/us.png"), "html", null, true);
        echo "\" alt=\"cs_CZ\">English</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/flags/cz.png"), "html", null, true);
        echo "\" alt=\"cs_CZ\">Czech</a></li>
                                    <li><a href=\"#\"><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/flags/us.png"), "html", null, true);
        echo "\" alt=\"en_US\">English</a></li>
                                    <li><a href=\"#\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/flags/de.png"), "html", null, true);
        echo "\" alt=\"de_DE\">German</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\" data-close-others=\"true\"><i class=\"fa fa-gear\"></i></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"my-account.html\">My account</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"wishlist.html\">Wishlist (5)</a></li>
                                    <li><a href=\"compare.html\">Compare (3)</a></li>
                                    <li><a href=\"signin.html\">Logout</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class=\"navbar-header\">
                        <a href=\"index.html\" class=\"navbar-brand\"><span>u</span>Market</a>
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><i class=\"fa fa-bars\"></i></button>
                    </div>

                    <div class=\"navbar-collapse collapse\">
                        <p class=\"navbar-text hidden-xs hidden-sm\">The easiest way to shop</p>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"300\" data-close-others=\"true\">Home</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"index.html\">Homepage 1</a></li>
                                    <li><a href=\"homepage-2.html\">Homepage 2</a></li>
                                    <li><a href=\"homepage-3.html\">Homepage 3<span class=\"label label-warning pull-right\">Updated</span></a></li>
                                    <li><a href=\"homepage-4.html\">Homepage 4</a></li>
                                    <li><a href=\"homepage-5.html\">Homepage 5<span class=\"label label-danger pull-right\">New</span></a></li>
                                    <li><a href=\"homepage-6.html\">Homepage 6<span class=\"label label-danger pull-right\">New</span></a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown megamenu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"300\" data-close-others=\"true\">Eshop</a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"col-sm-4 col-md-3\">
                                        <ul class=\"list-unstyled\">
                                            <li class=\"title\">Men <span class=\"label label-danger pull-right\">HOT</span></li>
                                            <li><a href=\"products.html\">Sweatshirts & Jackets</a></li>
                                            <li><a href=\"products.html\">Caps and Hats</a></li>
                                            <li><a href=\"products.html\">Ties</a></li>
                                            <li><a href=\"products.html\">Scarves</a></li>
                                            <li><a href=\"products.html\">Shirts</a></li>
                                            <li><a href=\"products.html\">Jeans</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-sm-4 col-md-3\">
                                        <ul class=\"list-unstyled\">
                                            <li class=\"title\">Women <span class=\"label label-info pull-right\">30% OFF SALE</span></li>
                                            <li><a href=\"products.html\">Jackets & Coats</a></li>
                                            <li><a href=\"products.html\">Jumpers & cardigans</a></li>
                                            <li><a href=\"products.html\">Jeans</a></li>
                                            <li><a href=\"products.html\">Trousers</a></li>
                                            <li><a href=\"products.html\">Dresses</a></li>
                                            <li><a href=\"products.html\">Long Sleeve Tops</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-sm-4 col-md-3\">
                                        <ul class=\"list-unstyled\">
                                            <li class=\"title\">Accessories</li>
                                            <li><a href=\"products.html\">Sunglasses</a></li>
                                            <li><a href=\"products.html\">Watches</a></li>
                                            <li><a href=\"products.html\">Umbrellas</a></li>
                                            <li><a href=\"products.html\">Bags & Wallets</a></li>
                                            <li><a href=\"products.html\">Fashion Jewellery</a></li>
                                            <li><a href=\"products.html\">Belts</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"hidden-xs hidden-sm col-md-3\">
                                        <img src=\"assets/images/megamenu.png\" class=\"img-responsive center-block\" alt=\"\">
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown megamenu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"300\" data-close-others=\"true\">Pages</a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"col-sm-4\">
                                        <ul class=\"list-unstyled\">
                                            <li class=\"title\">Eshop</li>
                                            <li><a href=\"products.html\">Products</a></li>
                                            <li><a href=\"cart.html\">Cart</a></li>
                                            <li><a href=\"checkout.html\">Checkout</a></li>
                                            <li><a href=\"compare.html\">Compare</a></li>
                                            <li><a href=\"single-product.html\">One Product</a></li>
                                            <li><a href=\"stores.html\">Stores</a></li>
                                            <li><a href=\"about-shop.html\">About Shop</a></li>
                                            <li><a href=\"lookbook.html\">Lookbook</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-sm-4\">
                                        <ul class=\"list-unstyled\">
                                            <li class=\"title\">Account</li>
                                            <li><a href=\"my-account.html\">My Account<span class=\"label label-warning pull-right\">Updated</span></a></li>
                                            <li><a href=\"profile.html\">Profile</a></li>
                                            <li><a href=\"orders.html\">Ordres</a></li>
                                            <li><a href=\"wishlist.html\">Wishlist</a></li>
                                            <li><a href=\"address.html\">Address</a></li>
                                            <li><a href=\"warranty-claims.html\">Warranty Claims<span class=\"label label-danger pull-right\">New</span></a></li>
                                            <li><a href=\"signup.html\">Sign Up</a></li>
                                            <li><a href=\"signin.html\">Sign In</a></li>
                                            <li><a href=\"lost-password.html\">Lost Password</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-sm-4\">
                                        <ul class=\"list-unstyled\">
                                            <li class=\"title\">Other Pages</li>
                                            <li><a href=\"blog.html\">Blog</a></li>
                                            <li><a href=\"single-post.html\">One Blog Post</a></li>
                                            <li><a href=\"single-order.html\">Order Detail</a></li>
                                            <li><a href=\"downloads.html\">Downloads<span class=\"label label-danger pull-right\">New</span></a></li>
                                            <li><a href=\"faq.html\">FAQ</a></li>
                                            <li><a href=\"privacy-policy.html\">Privacy Policy</a></li>
                                            <li><a href=\"terms-conditions.html\">Terms & Conditions</a></li>
                                            <li><a href=\"404.html\">404 Error</a></li>
                                            <li><a href=\"email-template.html\" target=\"_blank\">Email Template</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown megamenu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"300\" data-close-others=\"true\">Components<span class=\"label label-danger pull-right\">New</span></a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"col-sm-4\">
                                        <ul class=\"list-unstyled\">
                                            <li><a href=\"components.html#headings\">Headings</a></li>
                                            <li><a href=\"components.html#paragraphs\">Paragraphs</a></li>
                                            <li><a href=\"components.html#lists\">Lists</a></li>
                                            <li><a href=\"components.html#tabs\">Tabs</a></li>
                                            <li><a href=\"components.html#accordition\">Accordition</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-sm-4\">
                                        <ul class=\"list-unstyled\">
                                            <li><a href=\"components.html#collapse\">Collapse</a></li>
                                            <li><a href=\"components.html#buttons\">Buttons</a></li>
                                            <li><a href=\"components.html#tables\">Tables</a></li>
                                            <li><a href=\"components.html#grids\">Grids</a></li>
                                            <li><a href=\"components.html#responsive-video-audio\">Responsive Video &amp; Audio</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-sm-4\">
                                        <ul class=\"list-unstyled\">
                                            <li><a href=\"components.html#alerts\">Alerts</a></li>
                                            <li><a href=\"components.html#forms\">Forms</a></li>
                                            <li><a href=\"components.html#labels\">Labels</a></li>
                                            <li><a href=\"components.html#paginations\">Paginations</a></li>
                                            <li><a href=\"components.html#carousels\">Carousels</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class=\"vertical-menu-bottom hidden-xs\">
                        <form class=\"navbar-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search ...\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                        </span>
                            </div>
                        </form>
                        <ul class=\"list-unstyled contacts text-center\">
                            <li><i class=\"fa fa-envelope\"></i> help@adsup.com</li>
                            <li><i class=\"fa fa-phone\"></i> 754 213 456</li>
                        </ul>
                        <p class=\"copyright\">© adsup ";
        // line 303
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " All right reserved. Created by <a href=\"http://www.potatoweb.com.au/\" target=\"_blank\">PotatoWeb</a></p>
                    </div>

                </div>
            </header>
            ";
        // line 308
        $this->displayBlock('body', $context, $blocks);
        // line 309
        echo "        </div>
        ";
        // line 310
        $this->displayBlock('javascripts', $context, $blocks);
        // line 325
        echo "    </body>
</html>
";
        
        $__internal_674ef0361e1f0402c013c10d6ffc4dd11172042edf75cc1d938d8b2abd513e5f->leave($__internal_674ef0361e1f0402c013c10d6ffc4dd11172042edf75cc1d938d8b2abd513e5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_37cd5024e018d113896a4c824104fc92f1792e7435bf6e678d9ceb865932b92d = $this->env->getExtension("native_profiler");
        $__internal_37cd5024e018d113896a4c824104fc92f1792e7435bf6e678d9ceb865932b92d->enter($__internal_37cd5024e018d113896a4c824104fc92f1792e7435bf6e678d9ceb865932b92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdsUp";
        
        $__internal_37cd5024e018d113896a4c824104fc92f1792e7435bf6e678d9ceb865932b92d->leave($__internal_37cd5024e018d113896a4c824104fc92f1792e7435bf6e678d9ceb865932b92d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b5cdde53e84d21573b590b14daff7f26ff82ec7ffc90b35af2e49a14b87fd7f = $this->env->getExtension("native_profiler");
        $__internal_0b5cdde53e84d21573b590b14daff7f26ff82ec7ffc90b35af2e49a14b87fd7f->enter($__internal_0b5cdde53e84d21573b590b14daff7f26ff82ec7ffc90b35af2e49a14b87fd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link href=\"http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/color-switcher.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/dragtable.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/grabbing.png"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/color/green.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_0b5cdde53e84d21573b590b14daff7f26ff82ec7ffc90b35af2e49a14b87fd7f->leave($__internal_0b5cdde53e84d21573b590b14daff7f26ff82ec7ffc90b35af2e49a14b87fd7f_prof);

    }

    // line 21
    public function block_fonts($context, array $blocks = array())
    {
        $__internal_8d2ee8e6a9d8da2a7cf26aedc3684955b41dc9fa6d77f3cdd0c2792ce6ba9d6d = $this->env->getExtension("native_profiler");
        $__internal_8d2ee8e6a9d8da2a7cf26aedc3684955b41dc9fa6d77f3cdd0c2792ce6ba9d6d->enter($__internal_8d2ee8e6a9d8da2a7cf26aedc3684955b41dc9fa6d77f3cdd0c2792ce6ba9d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fonts"));

        // line 22
        echo "            <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,900,800' rel='stylesheet' type='text/css'>
        ";
        
        $__internal_8d2ee8e6a9d8da2a7cf26aedc3684955b41dc9fa6d77f3cdd0c2792ce6ba9d6d->leave($__internal_8d2ee8e6a9d8da2a7cf26aedc3684955b41dc9fa6d77f3cdd0c2792ce6ba9d6d_prof);

    }

    // line 26
    public function block_headjs($context, array $blocks = array())
    {
        $__internal_41da1dd179c5825bbb7c104b6c39979a49b85416de645b02aa863eeed67c2a01 = $this->env->getExtension("native_profiler");
        $__internal_41da1dd179c5825bbb7c104b6c39979a49b85416de645b02aa863eeed67c2a01->enter($__internal_41da1dd179c5825bbb7c104b6c39979a49b85416de645b02aa863eeed67c2a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headjs"));

        // line 27
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->
        ";
        
        $__internal_41da1dd179c5825bbb7c104b6c39979a49b85416de645b02aa863eeed67c2a01->leave($__internal_41da1dd179c5825bbb7c104b6c39979a49b85416de645b02aa863eeed67c2a01_prof);

    }

    // line 308
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dc2f2a25a658f8a16da270d2af3064abf3ef1359bf9fe0634417977a9e304d9 = $this->env->getExtension("native_profiler");
        $__internal_3dc2f2a25a658f8a16da270d2af3064abf3ef1359bf9fe0634417977a9e304d9->enter($__internal_3dc2f2a25a658f8a16da270d2af3064abf3ef1359bf9fe0634417977a9e304d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3dc2f2a25a658f8a16da270d2af3064abf3ef1359bf9fe0634417977a9e304d9->leave($__internal_3dc2f2a25a658f8a16da270d2af3064abf3ef1359bf9fe0634417977a9e304d9_prof);

    }

    // line 310
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed4d3ef204351205f7ff711b3ad30020a420083afc255ef0488f70cb6efaf487 = $this->env->getExtension("native_profiler");
        $__internal_ed4d3ef204351205f7ff711b3ad30020a420083afc255ef0488f70cb6efaf487->enter($__internal_ed4d3ef204351205f7ff711b3ad30020a420083afc255ef0488f70cb6efaf487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 311
        echo "            <script src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
            <script src=\"http://code.jquery.com/ui/1.11.1/jquery-ui.js\"></script>
            <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/color-switcher.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.card.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.dragtable.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.mb.YTPlayer.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/SmoothScroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/twitterFetcher_min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ed4d3ef204351205f7ff711b3ad30020a420083afc255ef0488f70cb6efaf487->leave($__internal_ed4d3ef204351205f7ff711b3ad30020a420083afc255ef0488f70cb6efaf487_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 323,  511 => 322,  507 => 321,  503 => 320,  499 => 319,  495 => 318,  491 => 317,  487 => 316,  483 => 315,  477 => 311,  471 => 310,  460 => 308,  448 => 27,  442 => 26,  433 => 22,  427 => 21,  418 => 18,  414 => 17,  410 => 16,  406 => 15,  402 => 14,  398 => 13,  394 => 12,  389 => 9,  383 => 8,  371 => 7,  362 => 325,  360 => 310,  357 => 309,  355 => 308,  347 => 303,  173 => 132,  169 => 131,  165 => 130,  160 => 128,  130 => 101,  112 => 86,  94 => 71,  52 => 33,  50 => 26,  47 => 25,  45 => 21,  42 => 20,  40 => 8,  36 => 7,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{% block title %}AdsUp{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">*/
/*             <link rel="stylesheet" href="{{ asset('css/animate.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/color-switcher.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/custom.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/dragtable.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/grabbing.png') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/color/green.css') }}">*/
/*         {% endblock %}*/
/* */
/*         {% block fonts %}*/
/*             <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/*             <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,900,800' rel='stylesheet' type='text/css'>*/
/*         {% endblock %}*/
/* */
/*         {% block headjs %}*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*             <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*             <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*             <![endif]-->*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class="vertical-menu">*/
/*         <div id="scrolltop" class="hidden-xs"><i class="fa fa-angle-up"></i></div>*/
/* */
/*         <div id="color-switcher">*/
/*             <div id="toggle-switcher"><i class="fa fa-gear"></i></div>*/
/*             <span>Color Scheme:</span>*/
/*             <ul class="list-unstyled list-inline">*/
/*                 <li id="red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Red"></li>*/
/*                 <li id="purple" data-toggle="tooltip" data-placement="top" title="" data-original-title="Purple"></li>*/
/*                 <li id="yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yellow"></li>*/
/*                 <li id="blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Blue"></li>*/
/*                 <li id="dark-blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dark Blue"></li>*/
/*                 <li id="orange" data-toggle="tooltip" data-placement="top" title="" data-original-title="Orange"></li>*/
/*                 <li id="green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Green"></li>*/
/*                 <li id="brown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Brown"></li>*/
/*                 <li id="dark-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dark Red"></li>*/
/*                 <li id="light-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Light Green"></li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*         <div id="page-wrapper"> <!-- PAGE - START -->*/
/*             <!-- ==========================*/
/*                 HEADER - START*/
/*             =========================== -->*/
/*             <header class="navbar navbar-vertical navbar-fixed-top navbar-dark">*/
/*                 <div class="container">*/
/*                     <div class="vertical-menu-top hidden-xs">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="dropdown navbar-cart">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="true"><i class="fa fa-shopping-cart"></i> 3 item(s)</a>*/
/*                                 <ul class="dropdown-menu">*/
/* */
/*                                     <!-- CART ITEM - START -->*/
/*                                     <li>*/
/*                                         <div class="row">*/
/*                                             <div class="col-sm-3">*/
/*                                                 <img src="{{ asset('img/products/product-1.jpg') }}" class="img-responsive" alt="">*/
/*                                             </div>*/
/*                                             <div class="col-sm-9">*/
/*                                                 <h4><a href="single-product.html">Fusce Aliquam</a></h4>*/
/*                                                 <p>1x - $20.00</p>*/
/*                                                 <a href="#" class="remove"><i class="fa fa-times-circle"></i></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <!-- CART ITEM - END -->*/
/* */
/*                                     <!-- CART ITEM - START -->*/
/*                                     <li>*/
/*                                         <div class="row">*/
/*                                             <div class="col-sm-3">*/
/*                                                 <img src="{{ asset('img/products/product-2.jpg') }}" class="img-responsive" alt="">*/
/*                                             </div>*/
/*                                             <div class="col-sm-9">*/
/*                                                 <h4><a href="single-product.html">Fusce Aliquam</a></h4>*/
/*                                                 <p>1x - $20.00</p>*/
/*                                                 <a href="#" class="remove"><i class="fa fa-times-circle"></i></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <!-- CART ITEM - END -->*/
/* */
/*                                     <!-- CART ITEM - START -->*/
/*                                     <li>*/
/*                                         <div class="row">*/
/*                                             <div class="col-sm-3">*/
/*                                                 <img src="{{ asset('img/products/product-3.jpg') }}" class="img-responsive" alt="">*/
/*                                             </div>*/
/*                                             <div class="col-sm-9">*/
/*                                                 <h4><a href="single-product.html">Fusce Aliquam</a></h4>*/
/*                                                 <p>1x - $20.00</p>*/
/*                                                 <a href="#" class="remove"><i class="fa fa-times-circle"></i></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <!-- CART ITEM - END -->*/
/* */
/*                                     <!-- CART ITEM - START -->*/
/*                                     <li>*/
/*                                         <div class="row">*/
/*                                             <div class="col-sm-6">*/
/*                                                 <a href="cart.html" class="btn btn-primary btn-block">View Cart</a>*/
/*                                             </div>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <a href="checkout.html" class="btn btn-primary btn-block">Checkout</a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <!-- CART ITEM - END -->*/
/* */
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="true"><img src="{{ asset('img/flags/us.png') }}" alt="cs_CZ">English</a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#"><img src="{{ asset('img/flags/cz.png') }}" alt="cs_CZ">Czech</a></li>*/
/*                                     <li><a href="#"><img src="{{ asset('img/flags/us.png') }}" alt="en_US">English</a></li>*/
/*                                     <li><a href="#"><img src="{{ asset('img/flags/de.png') }}" alt="de_DE">German</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="true"><i class="fa fa-gear"></i></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="my-account.html">My account</a></li>*/
/*                                     <li><a href="checkout.html">Checkout</a></li>*/
/*                                     <li><a href="wishlist.html">Wishlist (5)</a></li>*/
/*                                     <li><a href="compare.html">Compare (3)</a></li>*/
/*                                     <li><a href="signin.html">Logout</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <div class="navbar-header">*/
/*                         <a href="index.html" class="navbar-brand"><span>u</span>Market</a>*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>*/
/*                     </div>*/
/* */
/*                     <div class="navbar-collapse collapse">*/
/*                         <p class="navbar-text hidden-xs hidden-sm">The easiest way to shop</p>*/
/*                         <ul class="nav navbar-nav navbar-right">*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Home</a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="index.html">Homepage 1</a></li>*/
/*                                     <li><a href="homepage-2.html">Homepage 2</a></li>*/
/*                                     <li><a href="homepage-3.html">Homepage 3<span class="label label-warning pull-right">Updated</span></a></li>*/
/*                                     <li><a href="homepage-4.html">Homepage 4</a></li>*/
/*                                     <li><a href="homepage-5.html">Homepage 5<span class="label label-danger pull-right">New</span></a></li>*/
/*                                     <li><a href="homepage-6.html">Homepage 6<span class="label label-danger pull-right">New</span></a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="dropdown megamenu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Eshop</a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="col-sm-4 col-md-3">*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li class="title">Men <span class="label label-danger pull-right">HOT</span></li>*/
/*                                             <li><a href="products.html">Sweatshirts & Jackets</a></li>*/
/*                                             <li><a href="products.html">Caps and Hats</a></li>*/
/*                                             <li><a href="products.html">Ties</a></li>*/
/*                                             <li><a href="products.html">Scarves</a></li>*/
/*                                             <li><a href="products.html">Shirts</a></li>*/
/*                                             <li><a href="products.html">Jeans</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li class="col-sm-4 col-md-3">*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li class="title">Women <span class="label label-info pull-right">30% OFF SALE</span></li>*/
/*                                             <li><a href="products.html">Jackets & Coats</a></li>*/
/*                                             <li><a href="products.html">Jumpers & cardigans</a></li>*/
/*                                             <li><a href="products.html">Jeans</a></li>*/
/*                                             <li><a href="products.html">Trousers</a></li>*/
/*                                             <li><a href="products.html">Dresses</a></li>*/
/*                                             <li><a href="products.html">Long Sleeve Tops</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li class="col-sm-4 col-md-3">*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li class="title">Accessories</li>*/
/*                                             <li><a href="products.html">Sunglasses</a></li>*/
/*                                             <li><a href="products.html">Watches</a></li>*/
/*                                             <li><a href="products.html">Umbrellas</a></li>*/
/*                                             <li><a href="products.html">Bags & Wallets</a></li>*/
/*                                             <li><a href="products.html">Fashion Jewellery</a></li>*/
/*                                             <li><a href="products.html">Belts</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li class="hidden-xs hidden-sm col-md-3">*/
/*                                         <img src="assets/images/megamenu.png" class="img-responsive center-block" alt="">*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="dropdown megamenu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Pages</a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="col-sm-4">*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li class="title">Eshop</li>*/
/*                                             <li><a href="products.html">Products</a></li>*/
/*                                             <li><a href="cart.html">Cart</a></li>*/
/*                                             <li><a href="checkout.html">Checkout</a></li>*/
/*                                             <li><a href="compare.html">Compare</a></li>*/
/*                                             <li><a href="single-product.html">One Product</a></li>*/
/*                                             <li><a href="stores.html">Stores</a></li>*/
/*                                             <li><a href="about-shop.html">About Shop</a></li>*/
/*                                             <li><a href="lookbook.html">Lookbook</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li class="col-sm-4">*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li class="title">Account</li>*/
/*                                             <li><a href="my-account.html">My Account<span class="label label-warning pull-right">Updated</span></a></li>*/
/*                                             <li><a href="profile.html">Profile</a></li>*/
/*                                             <li><a href="orders.html">Ordres</a></li>*/
/*                                             <li><a href="wishlist.html">Wishlist</a></li>*/
/*                                             <li><a href="address.html">Address</a></li>*/
/*                                             <li><a href="warranty-claims.html">Warranty Claims<span class="label label-danger pull-right">New</span></a></li>*/
/*                                             <li><a href="signup.html">Sign Up</a></li>*/
/*                                             <li><a href="signin.html">Sign In</a></li>*/
/*                                             <li><a href="lost-password.html">Lost Password</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li class="col-sm-4">*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li class="title">Other Pages</li>*/
/*                                             <li><a href="blog.html">Blog</a></li>*/
/*                                             <li><a href="single-post.html">One Blog Post</a></li>*/
/*                                             <li><a href="single-order.html">Order Detail</a></li>*/
/*                                             <li><a href="downloads.html">Downloads<span class="label label-danger pull-right">New</span></a></li>*/
/*                                             <li><a href="faq.html">FAQ</a></li>*/
/*                                             <li><a href="privacy-policy.html">Privacy Policy</a></li>*/
/*                                             <li><a href="terms-conditions.html">Terms & Conditions</a></li>*/
/*                                             <li><a href="404.html">404 Error</a></li>*/
/*                                             <li><a href="email-template.html" target="_blank">Email Template</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="dropdown megamenu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Components<span class="label label-danger pull-right">New</span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="col-sm-4">*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li><a href="components.html#headings">Headings</a></li>*/
/*                                             <li><a href="components.html#paragraphs">Paragraphs</a></li>*/
/*                                             <li><a href="components.html#lists">Lists</a></li>*/
/*                                             <li><a href="components.html#tabs">Tabs</a></li>*/
/*                                             <li><a href="components.html#accordition">Accordition</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li class="col-sm-4">*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li><a href="components.html#collapse">Collapse</a></li>*/
/*                                             <li><a href="components.html#buttons">Buttons</a></li>*/
/*                                             <li><a href="components.html#tables">Tables</a></li>*/
/*                                             <li><a href="components.html#grids">Grids</a></li>*/
/*                                             <li><a href="components.html#responsive-video-audio">Responsive Video &amp; Audio</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li class="col-sm-4">*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li><a href="components.html#alerts">Alerts</a></li>*/
/*                                             <li><a href="components.html#forms">Forms</a></li>*/
/*                                             <li><a href="components.html#labels">Labels</a></li>*/
/*                                             <li><a href="components.html#paginations">Paginations</a></li>*/
/*                                             <li><a href="components.html#carousels">Carousels</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <div class="vertical-menu-bottom hidden-xs">*/
/*                         <form class="navbar-form">*/
/*                             <div class="input-group">*/
/*                                 <input type="text" class="form-control" placeholder="Search ...">*/
/*                         <span class="input-group-btn">*/
/*                             <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>*/
/*                         </span>*/
/*                             </div>*/
/*                         </form>*/
/*                         <ul class="list-unstyled contacts text-center">*/
/*                             <li><i class="fa fa-envelope"></i> help@adsup.com</li>*/
/*                             <li><i class="fa fa-phone"></i> 754 213 456</li>*/
/*                         </ul>*/
/*                         <p class="copyright">© adsup {{ "now"|date('Y') }} All right reserved. Created by <a href="http://www.potatoweb.com.au/" target="_blank">PotatoWeb</a></p>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </header>*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}*/
/*             <script src="http://code.jquery.com/jquery-latest.min.js"></script>*/
/*             <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>*/
/*             <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*             <script src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>*/
/*             <script src="{{ asset('js/color-switcher.js') }}"></script>*/
/*             <script src="{{ asset('js/custom.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.card.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.dragtable.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>*/
/*             <script src="{{ asset('js/owl.carousel.min.js') }}"></script>*/
/*             <script src="{{ asset('js/SmoothScroll.js') }}"></script>*/
/*             <script src="{{ asset('js/twitterFetcher_min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
