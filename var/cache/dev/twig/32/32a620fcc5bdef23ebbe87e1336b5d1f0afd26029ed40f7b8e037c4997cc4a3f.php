<?php

/* :public/home:show.html.twig */
class __TwigTemplate_0c186f53b5d385f18ac47f99276c3588ccb62c897c7b557fdab6983bb9807377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":public/home:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headjs' => array($this, 'block_headjs'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc4e1353e0781e883ea2989a19a6e71a7e89f810d666c3faf5dd0c2c8f6ebf94 = $this->env->getExtension("native_profiler");
        $__internal_cc4e1353e0781e883ea2989a19a6e71a7e89f810d666c3faf5dd0c2c8f6ebf94->enter($__internal_cc4e1353e0781e883ea2989a19a6e71a7e89f810d666c3faf5dd0c2c8f6ebf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":public/home:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4e1353e0781e883ea2989a19a6e71a7e89f810d666c3faf5dd0c2c8f6ebf94->leave($__internal_cc4e1353e0781e883ea2989a19a6e71a7e89f810d666c3faf5dd0c2c8f6ebf94_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5538278e26cb329fe02dc499692d8bce23f38ba966910002d89655a725edcfe = $this->env->getExtension("native_profiler");
        $__internal_a5538278e26cb329fe02dc499692d8bce23f38ba966910002d89655a725edcfe->enter($__internal_a5538278e26cb329fe02dc499692d8bce23f38ba966910002d89655a725edcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdsUp - Get your ads Up!";
        
        $__internal_a5538278e26cb329fe02dc499692d8bce23f38ba966910002d89655a725edcfe->leave($__internal_a5538278e26cb329fe02dc499692d8bce23f38ba966910002d89655a725edcfe_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69d4feeb1a3ccfbd717213b913d95b816bf630dcccaa2e016b01b71a9308e4a0 = $this->env->getExtension("native_profiler");
        $__internal_69d4feeb1a3ccfbd717213b913d95b816bf630dcccaa2e016b01b71a9308e4a0->enter($__internal_69d4feeb1a3ccfbd717213b913d95b816bf630dcccaa2e016b01b71a9308e4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ammaps/ammap.css"), "html", null, true);
        echo "\">
";
        
        $__internal_69d4feeb1a3ccfbd717213b913d95b816bf630dcccaa2e016b01b71a9308e4a0->leave($__internal_69d4feeb1a3ccfbd717213b913d95b816bf630dcccaa2e016b01b71a9308e4a0_prof);

    }

    // line 9
    public function block_headjs($context, array $blocks = array())
    {
        $__internal_99e76150cd2e304f542e83c532a4537e230b757b52ce9a27163c792014ccf0c6 = $this->env->getExtension("native_profiler");
        $__internal_99e76150cd2e304f542e83c532a4537e230b757b52ce9a27163c792014ccf0c6->enter($__internal_99e76150cd2e304f542e83c532a4537e230b757b52ce9a27163c792014ccf0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headjs"));

        // line 10
        echo "    ";
        $this->displayParentBlock("headjs", $context, $blocks);
        echo "
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ammaps/ammap.js"), "html", null, true);
        echo "\"></script>
";
        // line 13
        echo "    <!-- map file should be included after the ammap.js -->
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ammaps/maps/js/worldLow.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"http://www.amcharts.com/lib/3/themes/none.js\"></script>
    <script>
        var targetSVG = \"M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z\";

        var map = AmCharts.makeChart(\"chartdiv\", {
            type: \"map\",
            \"theme\": \"black\",
            pathToImages: \"http://www.amcharts.com/lib/3/images/\",

            imagesSettings: {
                rollOverColor: \"blue\",
                rollOverScale: 4,
                selectedScale: 4,
                selectedColor: \"green\",
                color:\"blue\"
            },

            zoomControl:{buttonFillColor:\"#15A892\"},

            areasSettings:{unlistedAreasColor:\"#15A892\"},

            dataProvider: {
                map: \"worldLow\",
                images: [{
                    groupId: \"minZoom-2\",
                    svgPath: targetSVG,
                    zoomLevel: 15,
                    scale: 0.8,
                    title: \"Amsterdam\",
                    latitude: 52.3738,
                    longitude: 4.8910,
                    label: \"Amsterdam\",
                    labelShiftY: 1,
                    description: \"<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Liberty-statue-from-below.jpg/220px-Liberty-statue-from-below.jpg' style='width: 100%; margin-right: 10px;' /><p style='color: #1b6d85; font-size: 1.0em; letter-spacing: 0px; font-family: inherit;'></br><i class='fa fa-exclamation-circle'></i><strong> availability: </strong>slots are available right now<br></br><i class='fa fa-euro'></i><strong> price: </strong>advertise from \$50 a day.</br></br><i class='fa fa-star'></i><strong> desc: </strong>Amsterdam is amazing, that's why you should give us your money!</p><b><button class='btn btn-primary'>advertise here</button>\"

                },{
                    svgPath: targetSVG,
                    zoomLevel: 15,
                    scale: 0.8,
                    title: \"Netherlands\",
                    latitude: 52.1326,
                    longitude: 5.2913
                }]
            }
        });

        // create a zoom listener which will check current zoom level and will toggle
        // corresponding image groups accordingly
        map.addListener(\"rendered\", function () {
            revealMapImages();
            map.addListener(\"zoomCompleted\", revealMapImages);
        });

        function revealMapImages (event) {
            var zoomLevel = map.zoomLevel();
            if (zoomLevel < 2) {
                map.hideGroup(\"minZoom-2\");
                map.hideGroup(\"minZoom-2.5\");
            }
            else if (zoomLevel < 2.5) {
                map.showGroup(\"minZoom-2\");
                map.hideGroup(\"minZoom-2.5\");
            }
            else {
                map.showGroup(\"minZoom-2\");
                map.showGroup(\"minZoom-2.5\");
            }
        }
    </script>
";
        
        $__internal_99e76150cd2e304f542e83c532a4537e230b757b52ce9a27163c792014ccf0c6->leave($__internal_99e76150cd2e304f542e83c532a4537e230b757b52ce9a27163c792014ccf0c6_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_32cb705fc15d557fe4becbb9c4061b1e234dc4524899b3298995dfd12cdb2e49 = $this->env->getExtension("native_profiler");
        $__internal_32cb705fc15d557fe4becbb9c4061b1e234dc4524899b3298995dfd12cdb2e49->enter($__internal_32cb705fc15d557fe4becbb9c4061b1e234dc4524899b3298995dfd12cdb2e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "    <!-- ==========================
    \tJUMBOTRON - START
    =========================== -->
    <section class=\"content jumbotron jumbotron-full-height\">


            <div class=\"item slide-1\">
                ";
        // line 96
        echo "                    <div id=\"chartdiv\" style=\"width: 100%px; height: 800px;\"></div>
                </div>
           ";
        // line 99
        echo "            <div class=\"item slide-2\">
                <div class=\"slide-mask\"></div>
                <div class=\"slide-body\">
                </div>
            </div>

    </section>
    <!-- ==========================
    \tJUMBOTRON - END
    =========================== -->
    <!-- ==========================
    \tMODAL ADVERTISING  - START
    =========================== -->
    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"modalAdvertising\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"fa fa-times\"></i></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-8\">
                            <h3>Dicount 10%</h3>
                            <p>Enter your email address and get 10% discount for your first purchase.</p>
                            <form>
                                <div class=\"input-group\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\">
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-primary\" type=\"button\">Submit</button>
                                    </span>
                                </div>
                            </form>
                            <div class=\"checkbox\">
                                <input id=\"modal-hide\" type=\"checkbox\" value=\"hidden\">
                                <label for=\"modal-hide\">Don't show this popup again</label>
                            </div>
                        </div>
                        <div class=\"col-sm-4 hidden-xs\">
                            <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/lookbook-1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========================
        MODAL ADVERTISING - END
    =========================== -->
";
        
        $__internal_32cb705fc15d557fe4becbb9c4061b1e234dc4524899b3298995dfd12cdb2e49->leave($__internal_32cb705fc15d557fe4becbb9c4061b1e234dc4524899b3298995dfd12cdb2e49_prof);

    }

    // line 148
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6326ebf784f81795ba8d987bfd36cc95edd392e42c5f3f45a87b5d31d21cceff = $this->env->getExtension("native_profiler");
        $__internal_6326ebf784f81795ba8d987bfd36cc95edd392e42c5f3f45a87b5d31d21cceff->enter($__internal_6326ebf784f81795ba8d987bfd36cc95edd392e42c5f3f45a87b5d31d21cceff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 149
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6326ebf784f81795ba8d987bfd36cc95edd392e42c5f3f45a87b5d31d21cceff->leave($__internal_6326ebf784f81795ba8d987bfd36cc95edd392e42c5f3f45a87b5d31d21cceff_prof);

    }

    public function getTemplateName()
    {
        return ":public/home:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 149,  243 => 148,  225 => 137,  185 => 99,  181 => 96,  172 => 87,  166 => 86,  88 => 14,  85 => 13,  81 => 11,  76 => 10,  70 => 9,  61 => 6,  56 => 5,  50 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}AdsUp - Get your ads Up!{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ammaps/ammap.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block headjs %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/ammaps/ammap.js') }}"></script>*/
/* {#    <script src="{{ asset('bundles/ammaps/ammap_amcharts_extension.js') }}"></script>#}*/
/*     <!-- map file should be included after the ammap.js -->*/
/*     <script src="{{ asset('bundles/ammaps/maps/js/worldLow.js') }}"></script>*/
/*     <script type="text/javascript" src="http://www.amcharts.com/lib/3/themes/none.js"></script>*/
/*     <script>*/
/*         var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";*/
/* */
/*         var map = AmCharts.makeChart("chartdiv", {*/
/*             type: "map",*/
/*             "theme": "black",*/
/*             pathToImages: "http://www.amcharts.com/lib/3/images/",*/
/* */
/*             imagesSettings: {*/
/*                 rollOverColor: "blue",*/
/*                 rollOverScale: 4,*/
/*                 selectedScale: 4,*/
/*                 selectedColor: "green",*/
/*                 color:"blue"*/
/*             },*/
/* */
/*             zoomControl:{buttonFillColor:"#15A892"},*/
/* */
/*             areasSettings:{unlistedAreasColor:"#15A892"},*/
/* */
/*             dataProvider: {*/
/*                 map: "worldLow",*/
/*                 images: [{*/
/*                     groupId: "minZoom-2",*/
/*                     svgPath: targetSVG,*/
/*                     zoomLevel: 15,*/
/*                     scale: 0.8,*/
/*                     title: "Amsterdam",*/
/*                     latitude: 52.3738,*/
/*                     longitude: 4.8910,*/
/*                     label: "Amsterdam",*/
/*                     labelShiftY: 1,*/
/*                     description: "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Liberty-statue-from-below.jpg/220px-Liberty-statue-from-below.jpg' style='width: 100%; margin-right: 10px;' /><p style='color: #1b6d85; font-size: 1.0em; letter-spacing: 0px; font-family: inherit;'></br><i class='fa fa-exclamation-circle'></i><strong> availability: </strong>slots are available right now<br></br><i class='fa fa-euro'></i><strong> price: </strong>advertise from $50 a day.</br></br><i class='fa fa-star'></i><strong> desc: </strong>Amsterdam is amazing, that's why you should give us your money!</p><b><button class='btn btn-primary'>advertise here</button>"*/
/* */
/*                 },{*/
/*                     svgPath: targetSVG,*/
/*                     zoomLevel: 15,*/
/*                     scale: 0.8,*/
/*                     title: "Netherlands",*/
/*                     latitude: 52.1326,*/
/*                     longitude: 5.2913*/
/*                 }]*/
/*             }*/
/*         });*/
/* */
/*         // create a zoom listener which will check current zoom level and will toggle*/
/*         // corresponding image groups accordingly*/
/*         map.addListener("rendered", function () {*/
/*             revealMapImages();*/
/*             map.addListener("zoomCompleted", revealMapImages);*/
/*         });*/
/* */
/*         function revealMapImages (event) {*/
/*             var zoomLevel = map.zoomLevel();*/
/*             if (zoomLevel < 2) {*/
/*                 map.hideGroup("minZoom-2");*/
/*                 map.hideGroup("minZoom-2.5");*/
/*             }*/
/*             else if (zoomLevel < 2.5) {*/
/*                 map.showGroup("minZoom-2");*/
/*                 map.hideGroup("minZoom-2.5");*/
/*             }*/
/*             else {*/
/*                 map.showGroup("minZoom-2");*/
/*                 map.showGroup("minZoom-2.5");*/
/*             }*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <!-- ==========================*/
/*     	JUMBOTRON - START*/
/*     =========================== -->*/
/*     <section class="content jumbotron jumbotron-full-height">*/
/* */
/* */
/*             <div class="item slide-1">*/
/*                 {#<div class="slide-mask"></div>*/
/*                 <div class="slide-body">#}*/
/*                     <div id="chartdiv" style="width: 100%px; height: 800px;"></div>*/
/*                 </div>*/
/*            {# </div>#}*/
/*             <div class="item slide-2">*/
/*                 <div class="slide-mask"></div>*/
/*                 <div class="slide-body">*/
/*                 </div>*/
/*             </div>*/
/* */
/*     </section>*/
/*     <!-- ==========================*/
/*     	JUMBOTRON - END*/
/*     =========================== -->*/
/*     <!-- ==========================*/
/*     	MODAL ADVERTISING  - START*/
/*     =========================== -->*/
/*     <div class="modal fade" tabindex="-1" role="dialog" id="modalAdvertising">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-8">*/
/*                             <h3>Dicount 10%</h3>*/
/*                             <p>Enter your email address and get 10% discount for your first purchase.</p>*/
/*                             <form>*/
/*                                 <div class="input-group">*/
/*                                     <input type="email" class="form-control" placeholder="Email Address">*/
/*                                     <span class="input-group-btn">*/
/*                                         <button class="btn btn-primary" type="button">Submit</button>*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </form>*/
/*                             <div class="checkbox">*/
/*                                 <input id="modal-hide" type="checkbox" value="hidden">*/
/*                                 <label for="modal-hide">Don't show this popup again</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4 hidden-xs">*/
/*                             <img src="{{ asset('img/lookbook-1.png') }}" class="img-responsive" alt="">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- ==========================*/
/*         MODAL ADVERTISING - END*/
/*     =========================== -->*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
