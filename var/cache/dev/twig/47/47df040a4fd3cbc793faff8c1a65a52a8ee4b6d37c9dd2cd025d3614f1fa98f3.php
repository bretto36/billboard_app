<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_07eea0a67dddb71b6adced659888c5948256116c0f2db9d2707f168ef17b2341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de44dbab4e102dd8d754d5b68a35b3a67ad6437ab12f63888caa3707ef509d60 = $this->env->getExtension("native_profiler");
        $__internal_de44dbab4e102dd8d754d5b68a35b3a67ad6437ab12f63888caa3707ef509d60->enter($__internal_de44dbab4e102dd8d754d5b68a35b3a67ad6437ab12f63888caa3707ef509d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 9
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 19
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 44
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "</html>
";
        
        $__internal_de44dbab4e102dd8d754d5b68a35b3a67ad6437ab12f63888caa3707ef509d60->leave($__internal_de44dbab4e102dd8d754d5b68a35b3a67ad6437ab12f63888caa3707ef509d60_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_927de9be75e9ccb7e9b896708e135cb4501a08acc938fcbc9ce6ca1fd7b55aa1 = $this->env->getExtension("native_profiler");
        $__internal_927de9be75e9ccb7e9b896708e135cb4501a08acc938fcbc9ce6ca1fd7b55aa1->enter($__internal_927de9be75e9ccb7e9b896708e135cb4501a08acc938fcbc9ce6ca1fd7b55aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_927de9be75e9ccb7e9b896708e135cb4501a08acc938fcbc9ce6ca1fd7b55aa1->leave($__internal_927de9be75e9ccb7e9b896708e135cb4501a08acc938fcbc9ce6ca1fd7b55aa1_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_83553167024bfcf7256b2dec5f33e98a5b08609bd9ea56e7772322fd663805c3 = $this->env->getExtension("native_profiler");
        $__internal_83553167024bfcf7256b2dec5f33e98a5b08609bd9ea56e7772322fd663805c3->enter($__internal_83553167024bfcf7256b2dec5f33e98a5b08609bd9ea56e7772322fd663805c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 14
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_83553167024bfcf7256b2dec5f33e98a5b08609bd9ea56e7772322fd663805c3->leave($__internal_83553167024bfcf7256b2dec5f33e98a5b08609bd9ea56e7772322fd663805c3_prof);

    }

    // line 22
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_065057a38ed852ee0437b50d7b41bbc6fb1de2190ecddbf5bbf9d8eeca42e25f = $this->env->getExtension("native_profiler");
        $__internal_065057a38ed852ee0437b50d7b41bbc6fb1de2190ecddbf5bbf9d8eeca42e25f->enter($__internal_065057a38ed852ee0437b50d7b41bbc6fb1de2190ecddbf5bbf9d8eeca42e25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 23
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 24
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_065057a38ed852ee0437b50d7b41bbc6fb1de2190ecddbf5bbf9d8eeca42e25f->leave($__internal_065057a38ed852ee0437b50d7b41bbc6fb1de2190ecddbf5bbf9d8eeca42e25f_prof);

    }

    // line 27
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_2efb6969b0bca9b87653136ad4e09d122c8df4bd008fcac3141bd9f4d0a97db8 = $this->env->getExtension("native_profiler");
        $__internal_2efb6969b0bca9b87653136ad4e09d122c8df4bd008fcac3141bd9f4d0a97db8->enter($__internal_2efb6969b0bca9b87653136ad4e09d122c8df4bd008fcac3141bd9f4d0a97db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 28
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 41
        echo "
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_2efb6969b0bca9b87653136ad4e09d122c8df4bd008fcac3141bd9f4d0a97db8->leave($__internal_2efb6969b0bca9b87653136ad4e09d122c8df4bd008fcac3141bd9f4d0a97db8_prof);

    }

    // line 28
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_0f224d276f1de2364d39e14b0815f3c0547926c1d1dae125859cde19a5fb470c = $this->env->getExtension("native_profiler");
        $__internal_0f224d276f1de2364d39e14b0815f3c0547926c1d1dae125859cde19a5fb470c->enter($__internal_0f224d276f1de2364d39e14b0815f3c0547926c1d1dae125859cde19a5fb470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 29
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_0f224d276f1de2364d39e14b0815f3c0547926c1d1dae125859cde19a5fb470c->leave($__internal_0f224d276f1de2364d39e14b0815f3c0547926c1d1dae125859cde19a5fb470c_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_32e805444d5b47201a862eb102f58a68b9cc0163315f77a3c2e7afb1e7efb87f = $this->env->getExtension("native_profiler");
        $__internal_32e805444d5b47201a862eb102f58a68b9cc0163315f77a3c2e7afb1e7efb87f->enter($__internal_32e805444d5b47201a862eb102f58a68b9cc0163315f77a3c2e7afb1e7efb87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 54
        $this->displayBlock('wrapper', $context, $blocks);
        // line 123
        echo "        </div>

        ";
        // line 125
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 126
        echo "
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 128
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </body>
    ";
        
        $__internal_32e805444d5b47201a862eb102f58a68b9cc0163315f77a3c2e7afb1e7efb87f->leave($__internal_32e805444d5b47201a862eb102f58a68b9cc0163315f77a3c2e7afb1e7efb87f_prof);

    }

    // line 52
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_272143eb3e3fce88150685abd59b1a9e085187eebf711661b147f0344afdf311 = $this->env->getExtension("native_profiler");
        $__internal_272143eb3e3fce88150685abd59b1a9e085187eebf711661b147f0344afdf311->enter($__internal_272143eb3e3fce88150685abd59b1a9e085187eebf711661b147f0344afdf311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_272143eb3e3fce88150685abd59b1a9e085187eebf711661b147f0344afdf311->leave($__internal_272143eb3e3fce88150685abd59b1a9e085187eebf711661b147f0344afdf311_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a3c62ed7378823ff8901be4de8cc610a1276eda4b4cc36575649ee3fcb048a5b = $this->env->getExtension("native_profiler");
        $__internal_a3c62ed7378823ff8901be4de8cc610a1276eda4b4cc36575649ee3fcb048a5b->enter($__internal_a3c62ed7378823ff8901be4de8cc610a1276eda4b4cc36575649ee3fcb048a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_a3c62ed7378823ff8901be4de8cc610a1276eda4b4cc36575649ee3fcb048a5b->leave($__internal_a3c62ed7378823ff8901be4de8cc610a1276eda4b4cc36575649ee3fcb048a5b_prof);

    }

    // line 54
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_5b12f7c66d48ce4f0e779a276c61f736c2244863a786ab3f4848db463bb6b3bb = $this->env->getExtension("native_profiler");
        $__internal_5b12f7c66d48ce4f0e779a276c61f736c2244863a786ab3f4848db463bb6b3bb->enter($__internal_5b12f7c66d48ce4f0e779a276c61f736c2244863a786ab3f4848db463bb6b3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 55
        echo "            <header class=\"main-header\">
            ";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 92
        $this->displayBlock('sidebar', $context, $blocks);
        // line 103
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 121
        echo "            </div>
        ";
        
        $__internal_5b12f7c66d48ce4f0e779a276c61f736c2244863a786ab3f4848db463bb6b3bb->leave($__internal_5b12f7c66d48ce4f0e779a276c61f736c2244863a786ab3f4848db463bb6b3bb_prof);

    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        $__internal_09390151075d5c09c07871de87375404b6f80be11eb985dde22dcaad84d80489 = $this->env->getExtension("native_profiler");
        $__internal_09390151075d5c09c07871de87375404b6f80be11eb985dde22dcaad84d80489->enter($__internal_09390151075d5c09c07871de87375404b6f80be11eb985dde22dcaad84d80489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 57
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 63
        $this->displayBlock('header_logo', $context, $blocks);
        // line 68
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 71
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 86
        echo "                    </div>
                </nav>
            ";
        
        $__internal_09390151075d5c09c07871de87375404b6f80be11eb985dde22dcaad84d80489->leave($__internal_09390151075d5c09c07871de87375404b6f80be11eb985dde22dcaad84d80489_prof);

    }

    // line 63
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_2104ef2e2e695c20f7fe19930c9f5a4870acff0bf31035dcad56a51f81840931 = $this->env->getExtension("native_profiler");
        $__internal_2104ef2e2e695c20f7fe19930c9f5a4870acff0bf31035dcad56a51f81840931->enter($__internal_2104ef2e2e695c20f7fe19930c9f5a4870acff0bf31035dcad56a51f81840931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 64
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                                ";
        // line 65
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_2104ef2e2e695c20f7fe19930c9f5a4870acff0bf31035dcad56a51f81840931->leave($__internal_2104ef2e2e695c20f7fe19930c9f5a4870acff0bf31035dcad56a51f81840931_prof);

    }

    // line 71
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_752e81e27c59927a6e53075647def018a361f8ff2ed0c86c0793fe48545d4a7d = $this->env->getExtension("native_profiler");
        $__internal_752e81e27c59927a6e53075647def018a361f8ff2ed0c86c0793fe48545d4a7d->enter($__internal_752e81e27c59927a6e53075647def018a361f8ff2ed0c86c0793fe48545d4a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 72
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 74
        $this->displayBlock('user_menu', $context, $blocks);
        // line 83
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_752e81e27c59927a6e53075647def018a361f8ff2ed0c86c0793fe48545d4a7d->leave($__internal_752e81e27c59927a6e53075647def018a361f8ff2ed0c86c0793fe48545d4a7d_prof);

    }

    // line 74
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_49927f297dd71380be66ec01b618da2f022097fd127f61364750268532b59432 = $this->env->getExtension("native_profiler");
        $__internal_49927f297dd71380be66ec01b618da2f022097fd127f61364750268532b59432->enter($__internal_49927f297dd71380be66ec01b618da2f022097fd127f61364750268532b59432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 75
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 77
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 78
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 80
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 82
        echo "                                ";
        
        $__internal_49927f297dd71380be66ec01b618da2f022097fd127f61364750268532b59432->leave($__internal_49927f297dd71380be66ec01b618da2f022097fd127f61364750268532b59432_prof);

    }

    // line 92
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1d2793d534e954d6b7e4a92b635a74ea8345e64bb57dc00ba8515db935c5bb75 = $this->env->getExtension("native_profiler");
        $__internal_1d2793d534e954d6b7e4a92b635a74ea8345e64bb57dc00ba8515db935c5bb75->enter($__internal_1d2793d534e954d6b7e4a92b635a74ea8345e64bb57dc00ba8515db935c5bb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 93
        echo "                <section class=\"sidebar\">
                    ";
        // line 94
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 101
        echo "                </section>
            ";
        
        $__internal_1d2793d534e954d6b7e4a92b635a74ea8345e64bb57dc00ba8515db935c5bb75->leave($__internal_1d2793d534e954d6b7e4a92b635a74ea8345e64bb57dc00ba8515db935c5bb75_prof);

    }

    // line 94
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_f7dc496a4f6ebce84d3b8515d2776f63b3549e124387a02fe19a0c0b8ac5af52 = $this->env->getExtension("native_profiler");
        $__internal_f7dc496a4f6ebce84d3b8515d2776f63b3549e124387a02fe19a0c0b8ac5af52->enter($__internal_f7dc496a4f6ebce84d3b8515d2776f63b3549e124387a02fe19a0c0b8ac5af52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 95
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 96
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 99
        echo "
                    ";
        
        $__internal_f7dc496a4f6ebce84d3b8515d2776f63b3549e124387a02fe19a0c0b8ac5af52->leave($__internal_f7dc496a4f6ebce84d3b8515d2776f63b3549e124387a02fe19a0c0b8ac5af52_prof);

    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e6999774f343ce736bf3f88bf3cd725e7b2535f29de889217cdb1513119ab5f = $this->env->getExtension("native_profiler");
        $__internal_1e6999774f343ce736bf3f88bf3cd725e7b2535f29de889217cdb1513119ab5f->enter($__internal_1e6999774f343ce736bf3f88bf3cd725e7b2535f29de889217cdb1513119ab5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 107
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 110
        echo "
                <section class=\"content-header\">
                ";
        // line 112
        $this->displayBlock('content_header', $context, $blocks);
        // line 115
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 118
        $this->displayBlock('main', $context, $blocks);
        // line 119
        echo "                </section>
            ";
        
        $__internal_1e6999774f343ce736bf3f88bf3cd725e7b2535f29de889217cdb1513119ab5f->leave($__internal_1e6999774f343ce736bf3f88bf3cd725e7b2535f29de889217cdb1513119ab5f_prof);

    }

    // line 107
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_23db616a1276d81d0f4e9c617f86268936593f893d464c574eb524085c81842b = $this->env->getExtension("native_profiler");
        $__internal_23db616a1276d81d0f4e9c617f86268936593f893d464c574eb524085c81842b->enter($__internal_23db616a1276d81d0f4e9c617f86268936593f893d464c574eb524085c81842b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 108
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_23db616a1276d81d0f4e9c617f86268936593f893d464c574eb524085c81842b->leave($__internal_23db616a1276d81d0f4e9c617f86268936593f893d464c574eb524085c81842b_prof);

    }

    // line 112
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_98ed49fe8b6ace727c1dda7567ef44d33b074e982f4640292414ab120e3e5c7e = $this->env->getExtension("native_profiler");
        $__internal_98ed49fe8b6ace727c1dda7567ef44d33b074e982f4640292414ab120e3e5c7e->enter($__internal_98ed49fe8b6ace727c1dda7567ef44d33b074e982f4640292414ab120e3e5c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 113
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_98ed49fe8b6ace727c1dda7567ef44d33b074e982f4640292414ab120e3e5c7e->leave($__internal_98ed49fe8b6ace727c1dda7567ef44d33b074e982f4640292414ab120e3e5c7e_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_b42321728c21bc98970bd5b9e486425de36cd2639329cb05b2fe8ab407fd19cb = $this->env->getExtension("native_profiler");
        $__internal_b42321728c21bc98970bd5b9e486425de36cd2639329cb05b2fe8ab407fd19cb->enter($__internal_b42321728c21bc98970bd5b9e486425de36cd2639329cb05b2fe8ab407fd19cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_b42321728c21bc98970bd5b9e486425de36cd2639329cb05b2fe8ab407fd19cb->leave($__internal_b42321728c21bc98970bd5b9e486425de36cd2639329cb05b2fe8ab407fd19cb_prof);

    }

    // line 118
    public function block_main($context, array $blocks = array())
    {
        $__internal_fc29cce4690c23d37af1f1b920108fb753e84c0817ea4216299b91a009761df9 = $this->env->getExtension("native_profiler");
        $__internal_fc29cce4690c23d37af1f1b920108fb753e84c0817ea4216299b91a009761df9->enter($__internal_fc29cce4690c23d37af1f1b920108fb753e84c0817ea4216299b91a009761df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_fc29cce4690c23d37af1f1b920108fb753e84c0817ea4216299b91a009761df9->leave($__internal_fc29cce4690c23d37af1f1b920108fb753e84c0817ea4216299b91a009761df9_prof);

    }

    // line 125
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_96b7dada8e9be0eeed9eca16840af29298803716aba6e8002f4b30528d2d4709 = $this->env->getExtension("native_profiler");
        $__internal_96b7dada8e9be0eeed9eca16840af29298803716aba6e8002f4b30528d2d4709->enter($__internal_96b7dada8e9be0eeed9eca16840af29298803716aba6e8002f4b30528d2d4709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_96b7dada8e9be0eeed9eca16840af29298803716aba6e8002f4b30528d2d4709->leave($__internal_96b7dada8e9be0eeed9eca16840af29298803716aba6e8002f4b30528d2d4709_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 125,  539 => 118,  519 => 113,  513 => 112,  503 => 108,  497 => 107,  489 => 119,  487 => 118,  482 => 115,  480 => 112,  476 => 110,  473 => 107,  467 => 106,  459 => 99,  457 => 96,  455 => 95,  449 => 94,  441 => 101,  439 => 94,  436 => 93,  430 => 92,  423 => 82,  417 => 80,  411 => 78,  409 => 77,  403 => 75,  397 => 74,  388 => 83,  386 => 74,  382 => 72,  376 => 71,  366 => 65,  357 => 64,  351 => 63,  342 => 86,  340 => 71,  335 => 68,  333 => 63,  326 => 59,  322 => 57,  316 => 56,  308 => 121,  306 => 106,  301 => 103,  299 => 92,  294 => 89,  292 => 56,  289 => 55,  283 => 54,  262 => 52,  254 => 130,  245 => 128,  241 => 127,  238 => 126,  236 => 125,  232 => 123,  230 => 54,  220 => 52,  214 => 51,  196 => 29,  190 => 28,  181 => 42,  178 => 41,  175 => 28,  169 => 27,  157 => 24,  154 => 23,  148 => 22,  138 => 14,  132 => 12,  126 => 11,  114 => 9,  106 => 132,  104 => 51,  97 => 47,  93 => 46,  89 => 44,  87 => 27,  84 => 26,  82 => 22,  79 => 21,  70 => 19,  66 => 18,  63 => 17,  61 => 11,  56 => 9,  46 => 2,  43 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale|split('_')|first|default('en') }}">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <meta name="generator" content="EasyAdmin" />*/
/* */
/*         <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>*/
/* */
/*         {% block head_stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}">*/
/*             <style>*/
/*                 {{ easyadmin_config('_internal.custom_css')|raw }}*/
/*             </style>*/
/*         {% endblock %}*/
/* */
/*         {% for css_asset in easyadmin_config('design.assets.css') %}*/
/*             <link rel="stylesheet" href="{{ asset(css_asset) }}">*/
/*         {% endfor %}*/
/* */
/*         {% block head_favicon %}*/
/*             {% set favicon = easyadmin_config('design.assets.favicon') %}*/
/*             <link rel="icon" type="{{ favicon.mime_type }}" href="{{ asset(favicon.path) }}" />*/
/*         {% endblock %}*/
/* */
/*         {% block head_javascript %}*/
/*             {% block adminlte_options %}*/
/*                 <script type="text/javascript">*/
/*                     var AdminLTEOptions = {*/
/*                         animationSpeed: 'normal',*/
/*                         sidebarExpandOnHover: false,*/
/*                         enableBoxRefresh: false,*/
/*                         enableBSToppltip: false,*/
/*                         enableFastclick: false,*/
/*                         enableControlSidebar: false,*/
/*                         enableBoxWidget: false*/
/*                     };*/
/*                 </script>*/
/*             {% endblock %}*/
/* */
/*             <script src="{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}"></script>*/
/*         {% endblock head_javascript %}*/
/* */
/*         <!--[if lt IE 9]>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}"></script>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* */
/*     {% block body %}*/
/*     <body id="{% block body_id %}{% endblock %}" class="easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}">*/
/*         <div class="wrapper">*/
/*         {% block wrapper %}*/
/*             <header class="main-header">*/
/*             {% block header %}*/
/*                 <nav class="navbar" role="navigation">*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                         <span class="sr-only">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                     </a>*/
/* */
/*                     <div id="header-logo">*/
/*                         {% block header_logo %}*/
/*                             <a class="logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}" title="{{ easyadmin_config('site_name')|striptags }}" href="{{ path('easyadmin') }}">*/
/*                                 {{ easyadmin_config('site_name')|raw }}*/
/*                             </a>*/
/*                         {% endblock header_logo %}*/
/*                     </div>*/
/* */
/*                     <div class="navbar-custom-menu">*/
/*                     {% block header_custom_menu %}*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="user user-menu">*/
/*                                 {% block user_menu %}*/
/*                                     <span class="sr-only">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                                     <i class="hidden-xs fa fa-user"></i>*/
/*                                     {% if app.user %}*/
/*                                         {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}*/
/*                                     {% else %}*/
/*                                         {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}*/
/*                                     {% endif %}*/
/*                                 {% endblock user_menu %}*/
/*                             </li>*/
/*                         </ul>*/
/*                     {% endblock header_custom_menu %}*/
/*                     </div>*/
/*                 </nav>*/
/*             {% endblock header %}*/
/*             </header>*/
/* */
/*             <aside class="main-sidebar">*/
/*             {% block sidebar %}*/
/*                 <section class="sidebar">*/
/*                     {% block main_menu_wrapper %}*/
/*                         {{ include([*/
/*                             _entity_config is defined ? _entity_config.templates.menu,*/
/*                             easyadmin_config('design.templates.menu'),*/
/*                             '@EasyAdmin/default/menu.html.twig'*/
/*                         ]) }}*/
/*                     {% endblock main_menu_wrapper %}*/
/*                 </section>*/
/*             {% endblock sidebar %}*/
/*             </aside>*/
/* */
/*             <div class="content-wrapper">*/
/*             {% block content %}*/
/*                 {% block flash_messages %}*/
/*                     {{ _entity_config is defined ? include(_entity_config.templates.flash_messages) }}*/
/*                 {% endblock flash_messages %}*/
/* */
/*                 <section class="content-header">*/
/*                 {% block content_header %}*/
/*                     <h1 class="title">{% block content_title %}{% endblock %}</h1>*/
/*                 {% endblock content_header %}*/
/*                 </section>*/
/* */
/*                 <section id="main" class="content">*/
/*                     {% block main %}{% endblock %}*/
/*                 </section>*/
/*             {% endblock content %}*/
/*             </div>*/
/*         {% endblock wrapper %}*/
/*         </div>*/
/* */
/*         {% block body_javascript %}{% endblock body_javascript %}*/
/* */
/*         {% for js_asset in easyadmin_config('design.assets.js') %}*/
/*             <script src="{{ asset(js_asset) }}"></script>*/
/*         {% endfor %}*/
/*     </body>*/
/*     {% endblock body %}*/
/* </html>*/
/* */
