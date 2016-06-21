<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_3a7086fb398c888aea3e16f98b35a8bb9b70ccf9231c91cad8868a59852c3f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7416a9412869e1c5fc0d881eaf5369959b034534ded3cae757b9c1eba1462088 = $this->env->getExtension("native_profiler");
        $__internal_7416a9412869e1c5fc0d881eaf5369959b034534ded3cae757b9c1eba1462088->enter($__internal_7416a9412869e1c5fc0d881eaf5369959b034534ded3cae757b9c1eba1462088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7416a9412869e1c5fc0d881eaf5369959b034534ded3cae757b9c1eba1462088->leave($__internal_7416a9412869e1c5fc0d881eaf5369959b034534ded3cae757b9c1eba1462088_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_05ad677e78b58fa32b0e5b7c9c76e935b8dc716b62ff6c36c3bf24f30ab76cd0 = $this->env->getExtension("native_profiler");
        $__internal_05ad677e78b58fa32b0e5b7c9c76e935b8dc716b62ff6c36c3bf24f30ab76cd0->enter($__internal_05ad677e78b58fa32b0e5b7c9c76e935b8dc716b62ff6c36c3bf24f30ab76cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_05ad677e78b58fa32b0e5b7c9c76e935b8dc716b62ff6c36c3bf24f30ab76cd0->leave($__internal_05ad677e78b58fa32b0e5b7c9c76e935b8dc716b62ff6c36c3bf24f30ab76cd0_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_8a8b32ea665c22830cd2fa0458271fc8bdde258f61da3871e773c2078380a903 = $this->env->getExtension("native_profiler");
        $__internal_8a8b32ea665c22830cd2fa0458271fc8bdde258f61da3871e773c2078380a903->enter($__internal_8a8b32ea665c22830cd2fa0458271fc8bdde258f61da3871e773c2078380a903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_8a8b32ea665c22830cd2fa0458271fc8bdde258f61da3871e773c2078380a903->leave($__internal_8a8b32ea665c22830cd2fa0458271fc8bdde258f61da3871e773c2078380a903_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a27953a227da809776666d92bea7ad25d9e93369f68266fe84733be27188e908 = $this->env->getExtension("native_profiler");
        $__internal_a27953a227da809776666d92bea7ad25d9e93369f68266fe84733be27188e908->enter($__internal_a27953a227da809776666d92bea7ad25d9e93369f68266fe84733be27188e908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a27953a227da809776666d92bea7ad25d9e93369f68266fe84733be27188e908->leave($__internal_a27953a227da809776666d92bea7ad25d9e93369f68266fe84733be27188e908_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_b7d953b9a8c3c82af0d55cb3e5c08d074d1e7cfb2848a36fef8cb36484427bb1 = $this->env->getExtension("native_profiler");
        $__internal_b7d953b9a8c3c82af0d55cb3e5c08d074d1e7cfb2848a36fef8cb36484427bb1->enter($__internal_b7d953b9a8c3c82af0d55cb3e5c08d074d1e7cfb2848a36fef8cb36484427bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_b7d953b9a8c3c82af0d55cb3e5c08d074d1e7cfb2848a36fef8cb36484427bb1->leave($__internal_b7d953b9a8c3c82af0d55cb3e5c08d074d1e7cfb2848a36fef8cb36484427bb1_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_65600533e8f5a002dc330a96b236620b13ea683082c6a049643f0cd380f5eaed = $this->env->getExtension("native_profiler");
        $__internal_65600533e8f5a002dc330a96b236620b13ea683082c6a049643f0cd380f5eaed->enter($__internal_65600533e8f5a002dc330a96b236620b13ea683082c6a049643f0cd380f5eaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 20
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_65600533e8f5a002dc330a96b236620b13ea683082c6a049643f0cd380f5eaed->leave($__internal_65600533e8f5a002dc330a96b236620b13ea683082c6a049643f0cd380f5eaed_prof);

    }

    // line 24
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ed0278eaafe7affc3850ca55297cfb9452207948c3e0e7f5113ed1c2909a137b = $this->env->getExtension("native_profiler");
        $__internal_ed0278eaafe7affc3850ca55297cfb9452207948c3e0e7f5113ed1c2909a137b->enter($__internal_ed0278eaafe7affc3850ca55297cfb9452207948c3e0e7f5113ed1c2909a137b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 25
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            // Select2 widget is only enabled for the <select> elements which explicitly ask for it
            \$('#main').find('form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap'
            });
        });
    </script>
";
        
        $__internal_ed0278eaafe7affc3850ca55297cfb9452207948c3e0e7f5113ed1c2909a137b->leave($__internal_ed0278eaafe7affc3850ca55297cfb9452207948c3e0e7f5113ed1c2909a137b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 29,  126 => 25,  120 => 24,  110 => 20,  97 => 19,  91 => 18,  80 => 14,  77 => 13,  75 => 12,  69 => 11,  57 => 9,  45 => 8,  38 => 6,  36 => 4,  34 => 3,  32 => 1,  23 => 6,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-new-' ~ _entity_config.name %}*/
/* {% block body_class 'new new-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/* */
/*             // Select2 widget is only enabled for the <select> elements which explicitly ask for it*/
/*             $('#main').find('form select[data-widget="select2"]').select2({*/
/*                 theme: 'bootstrap'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
