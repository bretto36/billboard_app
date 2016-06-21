<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_7814c73838a5325bc7200622093f7c5e17dde14e8da2da63555bf211181c458b extends Twig_Template
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
        $__internal_7ae05ef569b4732b0cf74de359e7277d05e02935605bfcc4be637591fb05df0d = $this->env->getExtension("native_profiler");
        $__internal_7ae05ef569b4732b0cf74de359e7277d05e02935605bfcc4be637591fb05df0d->enter($__internal_7ae05ef569b4732b0cf74de359e7277d05e02935605bfcc4be637591fb05df0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_7ae05ef569b4732b0cf74de359e7277d05e02935605bfcc4be637591fb05df0d->leave($__internal_7ae05ef569b4732b0cf74de359e7277d05e02935605bfcc4be637591fb05df0d_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3387dd3d3a23c37daf87e98c2d52fb914693881a11132822222596d563eb4681 = $this->env->getExtension("native_profiler");
        $__internal_3387dd3d3a23c37daf87e98c2d52fb914693881a11132822222596d563eb4681->enter($__internal_3387dd3d3a23c37daf87e98c2d52fb914693881a11132822222596d563eb4681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_3387dd3d3a23c37daf87e98c2d52fb914693881a11132822222596d563eb4681->leave($__internal_3387dd3d3a23c37daf87e98c2d52fb914693881a11132822222596d563eb4681_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_ad8d160fa4a70671401b816ffe0414b21721b79ea5744922921a23bceaa0ffd4 = $this->env->getExtension("native_profiler");
        $__internal_ad8d160fa4a70671401b816ffe0414b21721b79ea5744922921a23bceaa0ffd4->enter($__internal_ad8d160fa4a70671401b816ffe0414b21721b79ea5744922921a23bceaa0ffd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_ad8d160fa4a70671401b816ffe0414b21721b79ea5744922921a23bceaa0ffd4->leave($__internal_ad8d160fa4a70671401b816ffe0414b21721b79ea5744922921a23bceaa0ffd4_prof);

    }

    // line 22
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_43ce4a7b495944d1bfb9f186a05f33d3cec7044e808aa114ecc9a179484a8c54 = $this->env->getExtension("native_profiler");
        $__internal_43ce4a7b495944d1bfb9f186a05f33d3cec7044e808aa114ecc9a179484a8c54->enter($__internal_43ce4a7b495944d1bfb9f186a05f33d3cec7044e808aa114ecc9a179484a8c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_43ce4a7b495944d1bfb9f186a05f33d3cec7044e808aa114ecc9a179484a8c54->leave($__internal_43ce4a7b495944d1bfb9f186a05f33d3cec7044e808aa114ecc9a179484a8c54_prof);

    }

    // line 27
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_449c73fb439d6529cd19377e2c951b70d247923d2ac727c25b2f1226927b2b33 = $this->env->getExtension("native_profiler");
        $__internal_449c73fb439d6529cd19377e2c951b70d247923d2ac727c25b2f1226927b2b33->enter($__internal_449c73fb439d6529cd19377e2c951b70d247923d2ac727c25b2f1226927b2b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_449c73fb439d6529cd19377e2c951b70d247923d2ac727c25b2f1226927b2b33->leave($__internal_449c73fb439d6529cd19377e2c951b70d247923d2ac727c25b2f1226927b2b33_prof);

    }

    // line 28
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_6c56d2a6e39a44032e137f6497a8b23a7974c2d434a105864bbbeb0628064b79 = $this->env->getExtension("native_profiler");
        $__internal_6c56d2a6e39a44032e137f6497a8b23a7974c2d434a105864bbbeb0628064b79->enter($__internal_6c56d2a6e39a44032e137f6497a8b23a7974c2d434a105864bbbeb0628064b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_6c56d2a6e39a44032e137f6497a8b23a7974c2d434a105864bbbeb0628064b79->leave($__internal_6c56d2a6e39a44032e137f6497a8b23a7974c2d434a105864bbbeb0628064b79_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_a11e6123ec3d16ab490cf6298cb42dc90bcc9bc8588be9c6e5e004b9ba09a1fb = $this->env->getExtension("native_profiler");
        $__internal_a11e6123ec3d16ab490cf6298cb42dc90bcc9bc8588be9c6e5e004b9ba09a1fb->enter($__internal_a11e6123ec3d16ab490cf6298cb42dc90bcc9bc8588be9c6e5e004b9ba09a1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a11e6123ec3d16ab490cf6298cb42dc90bcc9bc8588be9c6e5e004b9ba09a1fb->leave($__internal_a11e6123ec3d16ab490cf6298cb42dc90bcc9bc8588be9c6e5e004b9ba09a1fb_prof);

    }

    // line 52
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fcd77698cd659b42f79c3dfede25fa93d307f4aedb2745aa3960e9d572d408df = $this->env->getExtension("native_profiler");
        $__internal_fcd77698cd659b42f79c3dfede25fa93d307f4aedb2745aa3960e9d572d408df->enter($__internal_fcd77698cd659b42f79c3dfede25fa93d307f4aedb2745aa3960e9d572d408df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_fcd77698cd659b42f79c3dfede25fa93d307f4aedb2745aa3960e9d572d408df->leave($__internal_fcd77698cd659b42f79c3dfede25fa93d307f4aedb2745aa3960e9d572d408df_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_fc290e0a90408f87d74900e09b90f1a8b996096bc4353600d15c2224696781a4 = $this->env->getExtension("native_profiler");
        $__internal_fc290e0a90408f87d74900e09b90f1a8b996096bc4353600d15c2224696781a4->enter($__internal_fc290e0a90408f87d74900e09b90f1a8b996096bc4353600d15c2224696781a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_fc290e0a90408f87d74900e09b90f1a8b996096bc4353600d15c2224696781a4->leave($__internal_fc290e0a90408f87d74900e09b90f1a8b996096bc4353600d15c2224696781a4_prof);

    }

    // line 54
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_cb4bd7669315dd481c408f299da8a1e897deb79966b3b5bc44392dd248660560 = $this->env->getExtension("native_profiler");
        $__internal_cb4bd7669315dd481c408f299da8a1e897deb79966b3b5bc44392dd248660560->enter($__internal_cb4bd7669315dd481c408f299da8a1e897deb79966b3b5bc44392dd248660560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_cb4bd7669315dd481c408f299da8a1e897deb79966b3b5bc44392dd248660560->leave($__internal_cb4bd7669315dd481c408f299da8a1e897deb79966b3b5bc44392dd248660560_prof);

    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        $__internal_97f091ac6d3718769d416b5165a4a4856574b867606515b38d3fcc61cc57f9d7 = $this->env->getExtension("native_profiler");
        $__internal_97f091ac6d3718769d416b5165a4a4856574b867606515b38d3fcc61cc57f9d7->enter($__internal_97f091ac6d3718769d416b5165a4a4856574b867606515b38d3fcc61cc57f9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_97f091ac6d3718769d416b5165a4a4856574b867606515b38d3fcc61cc57f9d7->leave($__internal_97f091ac6d3718769d416b5165a4a4856574b867606515b38d3fcc61cc57f9d7_prof);

    }

    // line 63
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_eaf90eb66270e7c4e373517348b27f0eff1ee9aad291124df61129a68941ba42 = $this->env->getExtension("native_profiler");
        $__internal_eaf90eb66270e7c4e373517348b27f0eff1ee9aad291124df61129a68941ba42->enter($__internal_eaf90eb66270e7c4e373517348b27f0eff1ee9aad291124df61129a68941ba42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_eaf90eb66270e7c4e373517348b27f0eff1ee9aad291124df61129a68941ba42->leave($__internal_eaf90eb66270e7c4e373517348b27f0eff1ee9aad291124df61129a68941ba42_prof);

    }

    // line 71
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_bd5b63762625ab3b49691629ca58f2586cfe623619cb92ab4e6a24d92ac63744 = $this->env->getExtension("native_profiler");
        $__internal_bd5b63762625ab3b49691629ca58f2586cfe623619cb92ab4e6a24d92ac63744->enter($__internal_bd5b63762625ab3b49691629ca58f2586cfe623619cb92ab4e6a24d92ac63744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_bd5b63762625ab3b49691629ca58f2586cfe623619cb92ab4e6a24d92ac63744->leave($__internal_bd5b63762625ab3b49691629ca58f2586cfe623619cb92ab4e6a24d92ac63744_prof);

    }

    // line 74
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_f88f2e28367fe332467d015396957e8aadcf00a61414cec235f85b41e076a578 = $this->env->getExtension("native_profiler");
        $__internal_f88f2e28367fe332467d015396957e8aadcf00a61414cec235f85b41e076a578->enter($__internal_f88f2e28367fe332467d015396957e8aadcf00a61414cec235f85b41e076a578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_f88f2e28367fe332467d015396957e8aadcf00a61414cec235f85b41e076a578->leave($__internal_f88f2e28367fe332467d015396957e8aadcf00a61414cec235f85b41e076a578_prof);

    }

    // line 92
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8a9eb607c6ac4436daa28282f6bb3aa7dd9a85869f97f1dc1fbd0bd73c4acd2c = $this->env->getExtension("native_profiler");
        $__internal_8a9eb607c6ac4436daa28282f6bb3aa7dd9a85869f97f1dc1fbd0bd73c4acd2c->enter($__internal_8a9eb607c6ac4436daa28282f6bb3aa7dd9a85869f97f1dc1fbd0bd73c4acd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 93
        echo "                <section class=\"sidebar\">
                    ";
        // line 94
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 101
        echo "                </section>
            ";
        
        $__internal_8a9eb607c6ac4436daa28282f6bb3aa7dd9a85869f97f1dc1fbd0bd73c4acd2c->leave($__internal_8a9eb607c6ac4436daa28282f6bb3aa7dd9a85869f97f1dc1fbd0bd73c4acd2c_prof);

    }

    // line 94
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_86de7be3d9d189240ea2f4a56a37a7a7c0d0a5cae2cde1e21291dcab5e439fd3 = $this->env->getExtension("native_profiler");
        $__internal_86de7be3d9d189240ea2f4a56a37a7a7c0d0a5cae2cde1e21291dcab5e439fd3->enter($__internal_86de7be3d9d189240ea2f4a56a37a7a7c0d0a5cae2cde1e21291dcab5e439fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 95
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 96
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 99
        echo "
                    ";
        
        $__internal_86de7be3d9d189240ea2f4a56a37a7a7c0d0a5cae2cde1e21291dcab5e439fd3->leave($__internal_86de7be3d9d189240ea2f4a56a37a7a7c0d0a5cae2cde1e21291dcab5e439fd3_prof);

    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        $__internal_582f131d40cf8b712ec180ab20d4ec816906a82abf9f9162ba76247393b78109 = $this->env->getExtension("native_profiler");
        $__internal_582f131d40cf8b712ec180ab20d4ec816906a82abf9f9162ba76247393b78109->enter($__internal_582f131d40cf8b712ec180ab20d4ec816906a82abf9f9162ba76247393b78109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_582f131d40cf8b712ec180ab20d4ec816906a82abf9f9162ba76247393b78109->leave($__internal_582f131d40cf8b712ec180ab20d4ec816906a82abf9f9162ba76247393b78109_prof);

    }

    // line 107
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_47ccee7e67d9971884b2bffef84d357b9f3ade5ed37b412e838d85cd9d579ad5 = $this->env->getExtension("native_profiler");
        $__internal_47ccee7e67d9971884b2bffef84d357b9f3ade5ed37b412e838d85cd9d579ad5->enter($__internal_47ccee7e67d9971884b2bffef84d357b9f3ade5ed37b412e838d85cd9d579ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 108
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_47ccee7e67d9971884b2bffef84d357b9f3ade5ed37b412e838d85cd9d579ad5->leave($__internal_47ccee7e67d9971884b2bffef84d357b9f3ade5ed37b412e838d85cd9d579ad5_prof);

    }

    // line 112
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e18a85c0c75e906fd39d3aa8135b95531330a9bc02809b9cb83c1b88c3dd8ae3 = $this->env->getExtension("native_profiler");
        $__internal_e18a85c0c75e906fd39d3aa8135b95531330a9bc02809b9cb83c1b88c3dd8ae3->enter($__internal_e18a85c0c75e906fd39d3aa8135b95531330a9bc02809b9cb83c1b88c3dd8ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 113
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_e18a85c0c75e906fd39d3aa8135b95531330a9bc02809b9cb83c1b88c3dd8ae3->leave($__internal_e18a85c0c75e906fd39d3aa8135b95531330a9bc02809b9cb83c1b88c3dd8ae3_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_76a0bb0ef4a51d8508c1eaf15d0bf3fc5d8778e2992709deed5f1ca6e9219601 = $this->env->getExtension("native_profiler");
        $__internal_76a0bb0ef4a51d8508c1eaf15d0bf3fc5d8778e2992709deed5f1ca6e9219601->enter($__internal_76a0bb0ef4a51d8508c1eaf15d0bf3fc5d8778e2992709deed5f1ca6e9219601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_76a0bb0ef4a51d8508c1eaf15d0bf3fc5d8778e2992709deed5f1ca6e9219601->leave($__internal_76a0bb0ef4a51d8508c1eaf15d0bf3fc5d8778e2992709deed5f1ca6e9219601_prof);

    }

    // line 118
    public function block_main($context, array $blocks = array())
    {
        $__internal_ab390084f54da4d06f942b76d270d15e44a4f036ab6c66604185467d418ce140 = $this->env->getExtension("native_profiler");
        $__internal_ab390084f54da4d06f942b76d270d15e44a4f036ab6c66604185467d418ce140->enter($__internal_ab390084f54da4d06f942b76d270d15e44a4f036ab6c66604185467d418ce140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ab390084f54da4d06f942b76d270d15e44a4f036ab6c66604185467d418ce140->leave($__internal_ab390084f54da4d06f942b76d270d15e44a4f036ab6c66604185467d418ce140_prof);

    }

    // line 125
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_714b942a861ad77452117caf51b4ba25098deab35fd9a2039416404708fb4721 = $this->env->getExtension("native_profiler");
        $__internal_714b942a861ad77452117caf51b4ba25098deab35fd9a2039416404708fb4721->enter($__internal_714b942a861ad77452117caf51b4ba25098deab35fd9a2039416404708fb4721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_714b942a861ad77452117caf51b4ba25098deab35fd9a2039416404708fb4721->leave($__internal_714b942a861ad77452117caf51b4ba25098deab35fd9a2039416404708fb4721_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
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
