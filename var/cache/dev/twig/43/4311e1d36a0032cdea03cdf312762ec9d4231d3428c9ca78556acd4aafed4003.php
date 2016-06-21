<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_3e9f375f7125172483e5a84f32f1502f1aa012931f5360f88c1f8a61c3a41c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content_header' => array($this, 'block_content_header'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6236144255efb7f10dd6f70244c0a507107202a07c798c05dea95c613b2a1f2e = $this->env->getExtension("native_profiler");
        $__internal_6236144255efb7f10dd6f70244c0a507107202a07c798c05dea95c613b2a1f2e->enter($__internal_6236144255efb7f10dd6f70244c0a507107202a07c798c05dea95c613b2a1f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 8
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 16
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 17
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : (""))));
        }
        // line 20
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('routing')->getPath("easyadmin", (isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters"))))));
        // line 25
        ob_start();
        // line 26
        ob_start();
        // line 27
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 28
            echo "        ";
            echo $this->env->getExtension('translator')->transchoice("search.page_title", $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            echo "
    ";
        } else {
            // line 30
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('translator')->trans("list.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 31
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "list", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["_content_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6236144255efb7f10dd6f70244c0a507107202a07c798c05dea95c613b2a1f2e->leave($__internal_6236144255efb7f10dd6f70244c0a507107202a07c798c05dea95c613b2a1f2e_prof);

    }

    // line 22
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1828936ded855f9492f19522ea80846e5ecfe71b51b653562ede781f40b25cd3 = $this->env->getExtension("native_profiler");
        $__internal_1828936ded855f9492f19522ea80846e5ecfe71b51b653562ede781f40b25cd3->enter($__internal_1828936ded855f9492f19522ea80846e5ecfe71b51b653562ede781f40b25cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_1828936ded855f9492f19522ea80846e5ecfe71b51b653562ede781f40b25cd3->leave($__internal_1828936ded855f9492f19522ea80846e5ecfe71b51b653562ede781f40b25cd3_prof);

    }

    // line 23
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ec9e2530de44d35fc2c2aecfa1834349169501408d0152ff2a32e9226fab5ae3 = $this->env->getExtension("native_profiler");
        $__internal_ec9e2530de44d35fc2c2aecfa1834349169501408d0152ff2a32e9226fab5ae3->enter($__internal_ec9e2530de44d35fc2c2aecfa1834349169501408d0152ff2a32e9226fab5ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_ec9e2530de44d35fc2c2aecfa1834349169501408d0152ff2a32e9226fab5ae3->leave($__internal_ec9e2530de44d35fc2c2aecfa1834349169501408d0152ff2a32e9226fab5ae3_prof);

    }

    // line 36
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_992257a1ccb8759815159947ec09c37b76e9bf293ad5a59e35ea4a1f1143a1fc = $this->env->getExtension("native_profiler");
        $__internal_992257a1ccb8759815159947ec09c37b76e9bf293ad5a59e35ea4a1f1143a1fc->enter($__internal_992257a1ccb8759815159947ec09c37b76e9bf293ad5a59e35ea4a1f1143a1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, strip_tags((isset($context["_content_title"]) ? $context["_content_title"] : $this->getContext($context, "_content_title"))), "html", null, true);
        
        $__internal_992257a1ccb8759815159947ec09c37b76e9bf293ad5a59e35ea4a1f1143a1fc->leave($__internal_992257a1ccb8759815159947ec09c37b76e9bf293ad5a59e35ea4a1f1143a1fc_prof);

    }

    // line 38
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_a4c649d4501315872f79ef5dc68a88ba0871d1deefdcc05cdf71fb1bb3a8695e = $this->env->getExtension("native_profiler");
        $__internal_a4c649d4501315872f79ef5dc68a88ba0871d1deefdcc05cdf71fb1bb3a8695e->enter($__internal_a4c649d4501315872f79ef5dc68a88ba0871d1deefdcc05cdf71fb1bb3a8695e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 39
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            <h1 class=\"title\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["_content_title"]) ? $context["_content_title"] : $this->getContext($context, "_content_title")), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 46
        $this->displayBlock('global_actions', $context, $blocks);
        // line 87
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_a4c649d4501315872f79ef5dc68a88ba0871d1deefdcc05cdf71fb1bb3a8695e->leave($__internal_a4c649d4501315872f79ef5dc68a88ba0871d1deefdcc05cdf71fb1bb3a8695e_prof);

    }

    // line 46
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_208285e77f5a999d7d275b5ef15b0271959f4c281179607e61305900b134e6b3 = $this->env->getExtension("native_profiler");
        $__internal_208285e77f5a999d7d275b5ef15b0271959f4c281179607e61305900b134e6b3->enter($__internal_208285e77f5a999d7d275b5ef15b0271959f4c281179607e61305900b134e6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 47
        echo "                    ";
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 48
            echo "                        ";
            $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 49
            echo "
                        ";
            // line 50
            $this->displayBlock('search_action', $context, $blocks);
            // line 73
            echo "                    ";
        }
        // line 74
        echo "
                    ";
        // line 75
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 76
            echo "                        ";
            $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 77
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 85
            echo "                    ";
        }
        // line 86
        echo "                ";
        
        $__internal_208285e77f5a999d7d275b5ef15b0271959f4c281179607e61305900b134e6b3->leave($__internal_208285e77f5a999d7d275b5ef15b0271959f4c281179607e61305900b134e6b3_prof);

    }

    // line 50
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_6a9675dc88b07362254518c60247bd2f952af15b07160e2c0ffc113c661c65c6 = $this->env->getExtension("native_profiler");
        $__internal_6a9675dc88b07362254518c60247bd2f952af15b07160e2c0ffc113c661c65c6->enter($__internal_6a9675dc88b07362254518c60247bd2f952af15b07160e2c0ffc113c661c65c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 51
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 53
        $this->displayBlock('search_form', $context, $blocks);
        // line 70
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_6a9675dc88b07362254518c60247bd2f952af15b07160e2c0ffc113c661c65c6->leave($__internal_6a9675dc88b07362254518c60247bd2f952af15b07160e2c0ffc113c661c65c6_prof);

    }

    // line 53
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_9e5705946316754f21c49445bcc47f9b5eb557559e86af2c3f03911de88fc2c1 = $this->env->getExtension("native_profiler");
        $__internal_9e5705946316754f21c49445bcc47f9b5eb557559e86af2c3f03911de88fc2c1->enter($__internal_9e5705946316754f21c49445bcc47f9b5eb557559e86af2c3f03911de88fc2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 54
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortField", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortDirection", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_9e5705946316754f21c49445bcc47f9b5eb557559e86af2c3f03911de88fc2c1->leave($__internal_9e5705946316754f21c49445bcc47f9b5eb557559e86af2c3f03911de88fc2c1_prof);

    }

    // line 77
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_4dc775cd02f415674547a7bf488dce281212787cd8c8cdf1d3cb07038cac5a80 = $this->env->getExtension("native_profiler");
        $__internal_4dc775cd02f415674547a7bf488dce281212787cd8c8cdf1d3cb07038cac5a80->enter($__internal_4dc775cd02f415674547a7bf488dce281212787cd8c8cdf1d3cb07038cac5a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 78
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 79
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\">
                                    ";
        // line 80
        if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 81
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ("")), "html", null, true);
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_4dc775cd02f415674547a7bf488dce281212787cd8c8cdf1d3cb07038cac5a80->leave($__internal_4dc775cd02f415674547a7bf488dce281212787cd8c8cdf1d3cb07038cac5a80_prof);

    }

    // line 92
    public function block_main($context, array $blocks = array())
    {
        $__internal_4ecdb541eb67dd78eda0a81013b041d95650cebd904889642d961292fb222de8 = $this->env->getExtension("native_profiler");
        $__internal_4ecdb541eb67dd78eda0a81013b041d95650cebd904889642d961292fb222de8->enter($__internal_4ecdb541eb67dd78eda0a81013b041d95650cebd904889642d961292fb222de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 93
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('easyadmin_extension')->getActionsForItem("list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 94
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 98
        $this->displayBlock('table_head', $context, $blocks);
        // line 125
        echo "        </thead>

        <tbody>
        ";
        // line 128
        $this->displayBlock('table_body', $context, $blocks);
        // line 163
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 167
        $this->displayBlock('paginator', $context, $blocks);
        // line 170
        echo "
    ";
        // line 171
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_4ecdb541eb67dd78eda0a81013b041d95650cebd904889642d961292fb222de8->leave($__internal_4ecdb541eb67dd78eda0a81013b041d95650cebd904889642d961292fb222de8_prof);

    }

    // line 98
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_819f8b87e4251629f7bc53227e609955d446e42d69cc54dc729adf888b5ec0d5 = $this->env->getExtension("native_profiler");
        $__internal_819f8b87e4251629f7bc53227e609955d446e42d69cc54dc729adf888b5ec0d5->enter($__internal_819f8b87e4251629f7bc53227e609955d446e42d69cc54dc729adf888b5ec0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 99
        echo "            <tr>
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 101
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
            // line 102
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 103
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('translator')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('form')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")));
            // line 104
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((((isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 105
            echo "
                    <th data-property-name=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 107
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 108
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 109
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) ? $context["_column_icon"] : $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 110
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 113
                echo "                            <span>";
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 115
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
                ";
        // line 118
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 119
            echo "                    <th>
                        <span>";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 123
        echo "            </tr>
        ";
        
        $__internal_819f8b87e4251629f7bc53227e609955d446e42d69cc54dc729adf888b5ec0d5->leave($__internal_819f8b87e4251629f7bc53227e609955d446e42d69cc54dc729adf888b5ec0d5_prof);

    }

    // line 128
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_658f3c43e3579be07beebd6589e3767e3418f6f152423c51e5085459de2bd83a = $this->env->getExtension("native_profiler");
        $__internal_658f3c43e3579be07beebd6589e3767e3418f6f152423c51e5085459de2bd83a->enter($__internal_658f3c43e3579be07beebd6589e3767e3418f6f152423c51e5085459de2bd83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 129
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 130
            echo "                ";
            $context["_item_id"] = $this->getAttribute($context["item"], $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
            // line 131
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 133
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 134
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('translator')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('form')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")));
                // line 135
                echo "
                        <td data-label=\"";
                // line 136
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 137
                echo $this->env->getExtension('easyadmin_extension')->renderEntityField($this->env, "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "
                    ";
            // line 141
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 142
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('translator')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 143
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 144
                $this->displayBlock('item_actions', $context, $blocks);
                // line 152
                echo "                        </td>
                    ";
            }
            // line 154
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 156
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 157
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.no_results", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "        ";
        
        $__internal_658f3c43e3579be07beebd6589e3767e3418f6f152423c51e5085459de2bd83a->leave($__internal_658f3c43e3579be07beebd6589e3767e3418f6f152423c51e5085459de2bd83a_prof);

    }

    // line 144
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_1c887802238165755f99af67911f04bac7816bcdb86771126db3751dbf4e4b70 = $this->env->getExtension("native_profiler");
        $__internal_1c887802238165755f99af67911f04bac7816bcdb86771126db3751dbf4e4b70->enter($__internal_1c887802238165755f99af67911f04bac7816bcdb86771126db3751dbf4e4b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 145
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 146
(isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 147
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "trans_parameters" =>         // line 148
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 149
(isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id"))), false);
        // line 150
        echo "
                        ";
        
        $__internal_1c887802238165755f99af67911f04bac7816bcdb86771126db3751dbf4e4b70->leave($__internal_1c887802238165755f99af67911f04bac7816bcdb86771126db3751dbf4e4b70_prof);

    }

    // line 167
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_3ddc7ae69f5378458e8ac7aed23ca1c11b6d21606fa37dba85556f5522634179 = $this->env->getExtension("native_profiler");
        $__internal_3ddc7ae69f5378458e8ac7aed23ca1c11b6d21606fa37dba85556f5522634179->enter($__internal_3ddc7ae69f5378458e8ac7aed23ca1c11b6d21606fa37dba85556f5522634179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 168
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_3ddc7ae69f5378458e8ac7aed23ca1c11b6d21606fa37dba85556f5522634179->leave($__internal_3ddc7ae69f5378458e8ac7aed23ca1c11b6d21606fa37dba85556f5522634179_prof);

    }

    // line 171
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_b60c884f4195f5a48ef8b4fd1b1a5257e32adcfdc3544d8d9e9d68f823cb1cd5 = $this->env->getExtension("native_profiler");
        $__internal_b60c884f4195f5a48ef8b4fd1b1a5257e32adcfdc3544d8d9e9d68f823cb1cd5->enter($__internal_b60c884f4195f5a48ef8b4fd1b1a5257e32adcfdc3544d8d9e9d68f823cb1cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 172
        echo "        ";
        $context["referer"] = ((((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 173
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 174
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 176
        echo "
        ";
        // line 177
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 179
(isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer"))), "delete_form" =>         // line 180
(isset($context["delete_form_template"]) ? $context["delete_form_template"] : $this->getContext($context, "delete_form_template")), "_trans_parameters" =>         // line 181
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 182
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 183
        echo "
    ";
        
        $__internal_b60c884f4195f5a48ef8b4fd1b1a5257e32adcfdc3544d8d9e9d68f823cb1cd5->leave($__internal_b60c884f4195f5a48ef8b4fd1b1a5257e32adcfdc3544d8d9e9d68f823cb1cd5_prof);

    }

    // line 187
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_631c5608764851c50625cf49458c3672246ca2b6bb5dcc71980183d82daf50b2 = $this->env->getExtension("native_profiler");
        $__internal_631c5608764851c50625cf49458c3672246ca2b6bb5dcc71980183d82daf50b2->enter($__internal_631c5608764851c50625cf49458c3672246ca2b6bb5dcc71980183d82daf50b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 188
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 231
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 232
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 233
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_631c5608764851c50625cf49458c3672246ca2b6bb5dcc71980183d82daf50b2->leave($__internal_631c5608764851c50625cf49458c3672246ca2b6bb5dcc71980183d82daf50b2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  689 => 233,  686 => 232,  684 => 231,  650 => 200,  634 => 188,  628 => 187,  620 => 183,  618 => 182,  617 => 181,  616 => 180,  615 => 179,  614 => 177,  611 => 176,  609 => 174,  608 => 173,  606 => 172,  600 => 171,  590 => 168,  584 => 167,  576 => 150,  574 => 149,  573 => 148,  572 => 147,  571 => 146,  569 => 145,  563 => 144,  556 => 162,  546 => 158,  542 => 157,  539 => 156,  525 => 154,  521 => 152,  519 => 144,  514 => 143,  511 => 142,  509 => 141,  506 => 140,  497 => 137,  487 => 136,  484 => 135,  481 => 134,  478 => 133,  474 => 132,  469 => 131,  466 => 130,  447 => 129,  441 => 128,  433 => 123,  427 => 120,  424 => 119,  422 => 118,  419 => 117,  412 => 115,  406 => 113,  400 => 110,  396 => 109,  391 => 108,  389 => 107,  377 => 106,  374 => 105,  371 => 104,  368 => 103,  365 => 102,  362 => 101,  358 => 100,  355 => 99,  349 => 98,  342 => 171,  339 => 170,  337 => 167,  331 => 163,  329 => 128,  324 => 125,  322 => 98,  316 => 94,  313 => 93,  307 => 92,  295 => 81,  289 => 80,  283 => 79,  280 => 78,  274 => 77,  262 => 65,  255 => 61,  250 => 59,  246 => 58,  242 => 57,  238 => 56,  234 => 55,  231 => 54,  225 => 53,  216 => 70,  214 => 53,  210 => 52,  205 => 51,  199 => 50,  192 => 86,  189 => 85,  186 => 77,  183 => 76,  181 => 75,  178 => 74,  175 => 73,  173 => 50,  170 => 49,  167 => 48,  164 => 47,  158 => 46,  148 => 87,  146 => 46,  138 => 41,  134 => 39,  128 => 38,  116 => 36,  104 => 23,  92 => 22,  85 => 4,  77 => 31,  74 => 30,  68 => 28,  65 => 27,  63 => 26,  61 => 25,  59 => 20,  56 => 17,  54 => 16,  52 => 13,  51 => 12,  50 => 11,  49 => 10,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  43 => 2,  41 => 1,  32 => 4,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% set _request_parameters = _request_parameters|default({})|merge({*/
/*     action: app.request.get('action'),*/
/*     entity: _entity_config.name,*/
/*     menuIndex: app.request.get('menuIndex'),*/
/*     submenuIndex: app.request.get('submenuIndex'),*/
/*     sortField: app.request.get('sortField', ''),*/
/*     sortDirection: app.request.get('sortDirection', 'DESC'),*/
/*     page: app.request.get('page', 1)*/
/* }) %}*/
/* */
/* {% if 'search' == app.request.get('action') %}*/
/*     {% set _request_parameters = _request_parameters|merge({ query: app.request.get('query')|default('') }) %}*/
/* {% endif %}*/
/* */
/* {% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}*/
/* */
/* {% block body_id 'easyadmin-list-' ~ _entity_config.name %}*/
/* {% block body_class 'list list-' ~ _entity_config.name|lower %}*/
/* */
/* {% set _content_title %}*/
/* {% spaceless %}*/
/*     {% if 'search' == app.request.get('action') %}*/
/*         {{ 'search.page_title'|transchoice(count = paginator.nbResults, domain = 'EasyAdminBundle')|raw }}*/
/*     {% else %}*/
/*         {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*         {{ _entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endset %}*/
/* */
/* {% block page_title %}{{ _content_title|striptags }}{% endblock %}*/
/* */
/* {% block content_header %}*/
/*     <div class="row">*/
/*         <div class="col-sm-5">*/
/*             <h1 class="title">{{ _content_title }}</h1>*/
/*         </div>*/
/* */
/*         <div class="col-sm-7">*/
/*             <div class="global-actions">*/
/*                 {% block global_actions %}*/
/*                     {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}*/
/*                         {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}*/
/* */
/*                         {% block search_action %}*/
/*                             <div class="form-action {{ _action.css_class|default('') }}">*/
/*                                 <form method="get" action="{{ path('easyadmin') }}">*/
/*                                     {% block search_form %}*/
/*                                         <input type="hidden" name="action" value="search">*/
/*                                         <input type="hidden" name="entity" value="{{ _request_parameters.entity }}">*/
/*                                         <input type="hidden" name="sortField" value="{{ _request_parameters.sortField }}">*/
/*                                         <input type="hidden" name="sortDirection" value="{{ _request_parameters.sortDirection }}">*/
/*                                         <input type="hidden" name="menuIndex" value="{{ _request_parameters.menuIndex }}">*/
/*                                         <input type="hidden" name="submenuIndex" value="{{ _request_parameters.submenuIndex }}">*/
/*                                         <div class="input-group">*/
/*                                             <input class="form-control" type="search" name="query" value="{{ app.request.get('query')|default('') }}">*/
/*                                             <span class="input-group-btn">*/
/*                                                 <button class="btn" type="submit">*/
/*                                                     <i class="fa fa-search"></i>*/
/*                                                     <span class="hidden-xs hidden-sm">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>*/
/*                                                 </button>*/
/*                                             </span>*/
/*                                         </div>*/
/*                                     {% endblock %}*/
/*                                 </form>*/
/*                             </div>*/
/*                         {% endblock search_action %}*/
/*                     {% endif %}*/
/* */
/*                     {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}*/
/*                         {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}*/
/*                         {% block new_action %}*/
/*                             <div class="button-action">*/
/*                                 <a class="{{ _action.css_class|default('') }}" href="{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}">*/
/*                                     {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                                     {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}*/
/*                                 </a>*/
/*                             </div>*/
/*                         {% endblock new_action %}*/
/*                     {% endif %}*/
/*                 {% endblock global_actions %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock content_header %}*/
/* */
/* {% block main %}*/
/*     {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}*/
/* */
/*     <div class="table-responsive">*/
/*     <table class="table">*/
/*         <thead>*/
/*         {% block table_head %}*/
/*             <tr>*/
/*                 {% for field, metadata in fields %}*/
/*                     {% set isSortingField = metadata.property == app.request.get('sortField') %}*/
/*                     {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}*/
/*                     {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}*/
/*                     {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}*/
/* */
/*                     <th data-property-name="{{ metadata.property }}" class="{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}">*/
/*                         {% if metadata.sortable %}*/
/*                             <a href="{{ path('easyadmin', _request_parameters|merge({ sortField: metadata.property, sortDirection: nextSortDirection })) }}">*/
/*                                 <i class="fa {{ _column_icon }}"></i>*/
/*                                 {{ _column_label|raw }}*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <span>{{ _column_label|raw }}</span>*/
/*                         {% endif %}*/
/*                     </th>*/
/*                 {% endfor %}*/
/* */
/*                 {% if _list_item_actions|length > 0 %}*/
/*                     <th>*/
/*                         <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>*/
/*                     </th>*/
/*                 {% endif %}*/
/*             </tr>*/
/*         {% endblock table_head %}*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*         {% block table_body %}*/
/*             {% for item in paginator.currentPageResults %}*/
/*                 {% set _item_id = attribute(item, _entity_config.primary_key_field_name) %}*/
/*                 <tr data-id="{{ _item_id }}">*/
/*                     {% for field, metadata in fields %}*/
/*                         {% set isSortingField = metadata.property == app.request.get('sortField') %}*/
/*                         {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}*/
/* */
/*                         <td data-label="{{ _column_label }}" class="{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}">*/
/*                             {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}*/
/*                         </td>*/
/*                     {% endfor %}*/
/* */
/*                     {% if _list_item_actions|length > 0 %}*/
/*                         {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*                         <td data-label="{{ _column_label }}" class="actions">*/
/*                         {% block item_actions %}*/
/*                             {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                                 actions: _list_item_actions,*/
/*                                 request_parameters: _request_parameters,*/
/*                                 trans_parameters: _trans_parameters,*/
/*                                 item_id: _item_id*/
/*                             }, with_context = false) }}*/
/*                         {% endblock item_actions %}*/
/*                         </td>*/
/*                     {% endif %}*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td class="no-results" colspan="{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}">*/
/*                         {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         {% endblock table_body %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* */
/*     {% block paginator %}*/
/*         {{ include(_entity_config.templates.paginator) }}*/
/*     {% endblock paginator %}*/
/* */
/*     {% block delete_form %}*/
/*         {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count*/
/*             ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))*/
/*             : app.request.requestUri*/
/*         %}*/
/* */
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'list',*/
/*             referer: referer|url_encode,*/
/*             delete_form: delete_form_template,*/
/*             _trans_parameters: _trans_parameters,*/
/*             _entity_config: _entity_config,*/
/*         }, with_context = false) }}*/
/*     {% endblock delete_form %}*/
/* {% endblock main %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('#main').find('table .toggle input[type="checkbox"]').change(function() {*/
/*                 var toggle = $(this);*/
/*                 var newValue = toggle.prop('checked');*/
/*                 var oldValue = !newValue;*/
/* */
/*                 var columnIndex = $(this).closest('td').index() + 1;*/
/*                 var propertyName = $('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');*/
/* */
/*                 var toggleUrl = "{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}"*/
/*                               + "&id=" + $(this).closest('tr').data('id')*/
/*                               + "&property=" + propertyName*/
/*                               + "&newValue=" + newValue.toString();*/
/* */
/*                 var toggleRequest = $.ajax({ type: "GET", url: toggleUrl, data: {} });*/
/* */
/*                 toggleRequest.done(function(result) {});*/
/* */
/*                 toggleRequest.fail(function() {*/
/*                     // in case of error, restore the original value and disable the toggle*/
/*                     toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');*/
/*                     toggle.bootstrapToggle('disable');*/
/*                 });*/
/*             });*/
/* */
/*             $('.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/*                 var id = $(this).parents('tr').first().data('id');*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function () {*/
/*                         var deleteForm = $('#delete-form');*/
/*                         deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));*/
/*                         deleteForm.trigger('submit');*/
/*                     });*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     {% if 'search' == app.request.get('action') %}*/
/*         <script type="text/javascript">*/
/*             var _search_query = "{{ app.request.get('query')|default('')|e('js') }}";*/
/*             // the original query is prepended to allow matching exact phrases in addition to single words*/
/*             $('#main').find('table tbody').highlight($.merge([_search_query], _search_query.split(' ')));*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
