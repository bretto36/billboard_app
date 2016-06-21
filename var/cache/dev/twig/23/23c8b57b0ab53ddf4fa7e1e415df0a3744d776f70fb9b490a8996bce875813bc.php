<?php

/* public/home/show.html.twig */
class __TwigTemplate_80550ce2871af7a16e137c4e2e725d1544507b79951989a1049a150f4efb3a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/home/show.html.twig", 1);
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
        $__internal_12f474799f567d7de39cf856cdeb33658481b924d2bb4a4f4e7f05463c93130f = $this->env->getExtension("native_profiler");
        $__internal_12f474799f567d7de39cf856cdeb33658481b924d2bb4a4f4e7f05463c93130f->enter($__internal_12f474799f567d7de39cf856cdeb33658481b924d2bb4a4f4e7f05463c93130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/home/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12f474799f567d7de39cf856cdeb33658481b924d2bb4a4f4e7f05463c93130f->leave($__internal_12f474799f567d7de39cf856cdeb33658481b924d2bb4a4f4e7f05463c93130f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cfc5587484dc282bbe1a62c82a8cd3166e0bc239c65bf7f4b2cc5b1c1214158 = $this->env->getExtension("native_profiler");
        $__internal_5cfc5587484dc282bbe1a62c82a8cd3166e0bc239c65bf7f4b2cc5b1c1214158->enter($__internal_5cfc5587484dc282bbe1a62c82a8cd3166e0bc239c65bf7f4b2cc5b1c1214158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdsUp - Get your ads Up!";
        
        $__internal_5cfc5587484dc282bbe1a62c82a8cd3166e0bc239c65bf7f4b2cc5b1c1214158->leave($__internal_5cfc5587484dc282bbe1a62c82a8cd3166e0bc239c65bf7f4b2cc5b1c1214158_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6068941b84d51e94ce81ef0fa2307af41abccbf3926796d0774f3fa53ca16adf = $this->env->getExtension("native_profiler");
        $__internal_6068941b84d51e94ce81ef0fa2307af41abccbf3926796d0774f3fa53ca16adf->enter($__internal_6068941b84d51e94ce81ef0fa2307af41abccbf3926796d0774f3fa53ca16adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ammaps/ammap.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6068941b84d51e94ce81ef0fa2307af41abccbf3926796d0774f3fa53ca16adf->leave($__internal_6068941b84d51e94ce81ef0fa2307af41abccbf3926796d0774f3fa53ca16adf_prof);

    }

    // line 9
    public function block_headjs($context, array $blocks = array())
    {
        $__internal_2d9c85f56ed6d3beb162d8b526ab355938afdf93895a900d3ab8b02c9c95e144 = $this->env->getExtension("native_profiler");
        $__internal_2d9c85f56ed6d3beb162d8b526ab355938afdf93895a900d3ab8b02c9c95e144->enter($__internal_2d9c85f56ed6d3beb162d8b526ab355938afdf93895a900d3ab8b02c9c95e144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headjs"));

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

        var icon = \"M21.25,8.375V28h6.5V8.375H21.25zM12.25,28h6.5V4.125h-6.5V28zM3.25,28h6.5V12.625h-6.5V28z\";
        AmCharts.theme = AmCharts.themes.light;
        var map = AmCharts.makeChart(\"chartdiv\", {
            type: \"map\",
            theme: \"dark\",
            pathToImages: \"http://www.amcharts.com/lib/3/images/\",
            imagesSettings: {
                rollOverColor: \"#005598\",
                rollOverScale: 2,
                selectedScale: 1,
                selectedColor: \"#005598\",
                color: \"#222222\"
            },

            zoomControl:{buttonFillColor:\"#15A892\"},

            areasSettings:{unlistedAreasColor:\"#15A892\"},

            dataProvider: {
                map: \"worldLow\",
                zoomLevel: 3.5,
                zoomLongitude: 10,
                zoomLatitude: 52,
                areas: [{
                    title: \"Netherlands\",
                    id: \"NL\",
                    /*pattern: {
                        url: \"http://extra.amcharts.com/images/fr.jpg\",
                        x: -5,
                        y: 0,
                        width: 50,
                        height: 35
                    }*/
                }
                ],

                areasSettings: {
                    rollOverOutlineColor: \"#FFFFFF\",
                    rollOverColor: \"#CC0000\",
                    outlineColor: \"#ccc\",
                    alpha:0.8,
                    unlistedAreasAlpha:0.1
                },

                images: [{
                    groupId: \"amsterdam\",
                    svgPath: icon,
                    zoomLevel: 50,
                    scale: 0.5,
                    title: \"Amsterdam\",
                    latitude: 52.3738,
                    longitude: 4.8910,
                    label: \"Amsterdam\",
                    labelShiftY: 0,
                    description: \"<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Liberty-statue-from-below.jpg/220px-Liberty-statue-from-below.jpg' style='width: 100%; margin-right: 10px;' /><p style='color: #1b6d85; font-size: 1.0em; letter-spacing: 0px; font-family: inherit;'></br><i class='fa fa-exclamation-circle'></i><strong> availability: </strong>slots are available right now<br></br><i class='fa fa-euro'></i><strong> price: </strong>advertise from \$50 a day.</br></br><i class='fa fa-star'></i><strong> desc: </strong>Amsterdam is amazing, that's why you should advertise here</p><b><button class='btn btn-primary'>more info</button>\",
                },{
                    groupId: \"minZoom-2\",
                    svgPath: icon,
                    zoomLevel: 50,
                    scale: 0.5,
                    title: \"Hoofddorp\",
                    latitude: 52.3061,
                    longitude: 4.6907,
                    label: \"Hoofddorp\",
                    labelShiftY: 0,
                    description: \"<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Liberty-statue-from-below.jpg/220px-Liberty-statue-from-below.jpg' style='width: 100%; margin-right: 10px;' /><p style='color: #1b6d85; font-size: 1.0em; letter-spacing: 0px; font-family: inherit;'></br><i class='fa fa-exclamation-circle'></i><strong> availability: </strong>slots are available right now<br></br><i class='fa fa-euro'></i><strong> price: </strong>advertise from \$50 a day.</br></br><i class='fa fa-star'></i><strong> desc: </strong>Amsterdam is amazing, that's why you should advertise here</p><b><button class='btn btn-primary'>more info</button>\"

                },{
                    svgPath: targetSVG,
                    zoomLevel: 50,
                    scale: 0.9,
                    title: \"Netherlands\",
                    label: \"Netherlands\",
                    latitude: 52.1326,
                    longitude: 5.2913
                }],
                /*lines: [{
                    latitudes: [52.1326, 52.3061],
                    longitudes: [5.2913, 4.6907],
                    color: \"#00cc00\"
                }],
                linesSettings: {
                    color: \"#222222\",
                    alpha: 0.9
                },*/
                backgroundZoomsToTop: true,
                linesAboveImages: false
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
            if (zoomLevel < 5) {
                map.hideGroup(\"minZoom-2\");
                map.hideGroup(\"amsterdam\");
            }
            else if (zoomLevel < 3.5) {
                map.showGroup(\"minZoom-2\");
                map.showGroup(\"amsterdam-2\");
            }
            else {
                map.showGroup(\"minZoom-2\");
                map.showGroup(\"amsterdam\");
                map.showGroup(\"minZoom-2.5\");
            }
        }
    </script>
";
        
        $__internal_2d9c85f56ed6d3beb162d8b526ab355938afdf93895a900d3ab8b02c9c95e144->leave($__internal_2d9c85f56ed6d3beb162d8b526ab355938afdf93895a900d3ab8b02c9c95e144_prof);

    }

    // line 135
    public function block_body($context, array $blocks = array())
    {
        $__internal_588d637d4ed9d8b1c48e8916076c3894535eb0625a2927bc80d285e85e40bddd = $this->env->getExtension("native_profiler");
        $__internal_588d637d4ed9d8b1c48e8916076c3894535eb0625a2927bc80d285e85e40bddd->enter($__internal_588d637d4ed9d8b1c48e8916076c3894535eb0625a2927bc80d285e85e40bddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 136
        echo "    <!-- ==========================
    \tJUMBOTRON - START
    =========================== -->
    <section class=\"content jumbotron jumbotron-full-height\">


            <div class=\"item slide-1\">
                ";
        // line 145
        echo "                    <div id=\"chartdiv\" style=\"width: 100%; height: 800px;\"></div>
                </div>
           ";
        // line 148
        echo "            <div class=\"item slide-2\">
                <div class=\"slide-mask\"></div>
                <div class=\"slide-body\">
                </div>
            </div>

    </section>
    <!-- ==========================
    \tJUMBOTRON - END
    =========================== -->
";
        
        $__internal_588d637d4ed9d8b1c48e8916076c3894535eb0625a2927bc80d285e85e40bddd->leave($__internal_588d637d4ed9d8b1c48e8916076c3894535eb0625a2927bc80d285e85e40bddd_prof);

    }

    // line 159
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca3d2e49bd931f04651d1f260f4804a7447a1ad85593e660ec6f32045cfe0a01 = $this->env->getExtension("native_profiler");
        $__internal_ca3d2e49bd931f04651d1f260f4804a7447a1ad85593e660ec6f32045cfe0a01->enter($__internal_ca3d2e49bd931f04651d1f260f4804a7447a1ad85593e660ec6f32045cfe0a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 160
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_ca3d2e49bd931f04651d1f260f4804a7447a1ad85593e660ec6f32045cfe0a01->leave($__internal_ca3d2e49bd931f04651d1f260f4804a7447a1ad85593e660ec6f32045cfe0a01_prof);

    }

    public function getTemplateName()
    {
        return "public/home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 160,  251 => 159,  234 => 148,  230 => 145,  221 => 136,  215 => 135,  88 => 14,  85 => 13,  81 => 11,  76 => 10,  70 => 9,  61 => 6,  56 => 5,  50 => 4,  38 => 3,  11 => 1,);
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
/*         var icon = "M21.25,8.375V28h6.5V8.375H21.25zM12.25,28h6.5V4.125h-6.5V28zM3.25,28h6.5V12.625h-6.5V28z";*/
/*         AmCharts.theme = AmCharts.themes.light;*/
/*         var map = AmCharts.makeChart("chartdiv", {*/
/*             type: "map",*/
/*             theme: "dark",*/
/*             pathToImages: "http://www.amcharts.com/lib/3/images/",*/
/*             imagesSettings: {*/
/*                 rollOverColor: "#005598",*/
/*                 rollOverScale: 2,*/
/*                 selectedScale: 1,*/
/*                 selectedColor: "#005598",*/
/*                 color: "#222222"*/
/*             },*/
/* */
/*             zoomControl:{buttonFillColor:"#15A892"},*/
/* */
/*             areasSettings:{unlistedAreasColor:"#15A892"},*/
/* */
/*             dataProvider: {*/
/*                 map: "worldLow",*/
/*                 zoomLevel: 3.5,*/
/*                 zoomLongitude: 10,*/
/*                 zoomLatitude: 52,*/
/*                 areas: [{*/
/*                     title: "Netherlands",*/
/*                     id: "NL",*/
/*                     /*pattern: {*/
/*                         url: "http://extra.amcharts.com/images/fr.jpg",*/
/*                         x: -5,*/
/*                         y: 0,*/
/*                         width: 50,*/
/*                         height: 35*/
/*                     }*//* */
/*                 }*/
/*                 ],*/
/* */
/*                 areasSettings: {*/
/*                     rollOverOutlineColor: "#FFFFFF",*/
/*                     rollOverColor: "#CC0000",*/
/*                     outlineColor: "#ccc",*/
/*                     alpha:0.8,*/
/*                     unlistedAreasAlpha:0.1*/
/*                 },*/
/* */
/*                 images: [{*/
/*                     groupId: "amsterdam",*/
/*                     svgPath: icon,*/
/*                     zoomLevel: 50,*/
/*                     scale: 0.5,*/
/*                     title: "Amsterdam",*/
/*                     latitude: 52.3738,*/
/*                     longitude: 4.8910,*/
/*                     label: "Amsterdam",*/
/*                     labelShiftY: 0,*/
/*                     description: "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Liberty-statue-from-below.jpg/220px-Liberty-statue-from-below.jpg' style='width: 100%; margin-right: 10px;' /><p style='color: #1b6d85; font-size: 1.0em; letter-spacing: 0px; font-family: inherit;'></br><i class='fa fa-exclamation-circle'></i><strong> availability: </strong>slots are available right now<br></br><i class='fa fa-euro'></i><strong> price: </strong>advertise from $50 a day.</br></br><i class='fa fa-star'></i><strong> desc: </strong>Amsterdam is amazing, that's why you should advertise here</p><b><button class='btn btn-primary'>more info</button>",*/
/*                 },{*/
/*                     groupId: "minZoom-2",*/
/*                     svgPath: icon,*/
/*                     zoomLevel: 50,*/
/*                     scale: 0.5,*/
/*                     title: "Hoofddorp",*/
/*                     latitude: 52.3061,*/
/*                     longitude: 4.6907,*/
/*                     label: "Hoofddorp",*/
/*                     labelShiftY: 0,*/
/*                     description: "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Liberty-statue-from-below.jpg/220px-Liberty-statue-from-below.jpg' style='width: 100%; margin-right: 10px;' /><p style='color: #1b6d85; font-size: 1.0em; letter-spacing: 0px; font-family: inherit;'></br><i class='fa fa-exclamation-circle'></i><strong> availability: </strong>slots are available right now<br></br><i class='fa fa-euro'></i><strong> price: </strong>advertise from $50 a day.</br></br><i class='fa fa-star'></i><strong> desc: </strong>Amsterdam is amazing, that's why you should advertise here</p><b><button class='btn btn-primary'>more info</button>"*/
/* */
/*                 },{*/
/*                     svgPath: targetSVG,*/
/*                     zoomLevel: 50,*/
/*                     scale: 0.9,*/
/*                     title: "Netherlands",*/
/*                     label: "Netherlands",*/
/*                     latitude: 52.1326,*/
/*                     longitude: 5.2913*/
/*                 }],*/
/*                 /*lines: [{*/
/*                     latitudes: [52.1326, 52.3061],*/
/*                     longitudes: [5.2913, 4.6907],*/
/*                     color: "#00cc00"*/
/*                 }],*/
/*                 linesSettings: {*/
/*                     color: "#222222",*/
/*                     alpha: 0.9*/
/*                 },*//* */
/*                 backgroundZoomsToTop: true,*/
/*                 linesAboveImages: false*/
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
/*             if (zoomLevel < 5) {*/
/*                 map.hideGroup("minZoom-2");*/
/*                 map.hideGroup("amsterdam");*/
/*             }*/
/*             else if (zoomLevel < 3.5) {*/
/*                 map.showGroup("minZoom-2");*/
/*                 map.showGroup("amsterdam-2");*/
/*             }*/
/*             else {*/
/*                 map.showGroup("minZoom-2");*/
/*                 map.showGroup("amsterdam");*/
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
/*                     <div id="chartdiv" style="width: 100%; height: 800px;"></div>*/
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
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
