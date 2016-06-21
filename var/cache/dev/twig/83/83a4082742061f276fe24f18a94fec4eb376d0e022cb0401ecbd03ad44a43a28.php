<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_ec3ca415f9b95115e57b5d78af5add71fdbceda1baf43184eb1564f3a5d51782 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37464cd116a7c419df3ff76f3488dce0e2126a7773b1522f3aa09760466aa6fd = $this->env->getExtension("native_profiler");
        $__internal_37464cd116a7c419df3ff76f3488dce0e2126a7773b1522f3aa09760466aa6fd->enter($__internal_37464cd116a7c419df3ff76f3488dce0e2126a7773b1522f3aa09760466aa6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())), "%entity_id%" => (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37464cd116a7c419df3ff76f3488dce0e2126a7773b1522f3aa09760466aa6fd->leave($__internal_37464cd116a7c419df3ff76f3488dce0e2126a7773b1522f3aa09760466aa6fd_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_09560b6fa61886b6129437eb2d4799aa24ee3eb1afff19db461fc77cf15957e4 = $this->env->getExtension("native_profiler");
        $__internal_09560b6fa61886b6129437eb2d4799aa24ee3eb1afff19db461fc77cf15957e4->enter($__internal_09560b6fa61886b6129437eb2d4799aa24ee3eb1afff19db461fc77cf15957e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_09560b6fa61886b6129437eb2d4799aa24ee3eb1afff19db461fc77cf15957e4->leave($__internal_09560b6fa61886b6129437eb2d4799aa24ee3eb1afff19db461fc77cf15957e4_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_4215282326ceedce79c5fd3b781e37345b41f1519a8e3705cc9e6fbc99602b85 = $this->env->getExtension("native_profiler");
        $__internal_4215282326ceedce79c5fd3b781e37345b41f1519a8e3705cc9e6fbc99602b85->enter($__internal_4215282326ceedce79c5fd3b781e37345b41f1519a8e3705cc9e6fbc99602b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_4215282326ceedce79c5fd3b781e37345b41f1519a8e3705cc9e6fbc99602b85->leave($__internal_4215282326ceedce79c5fd3b781e37345b41f1519a8e3705cc9e6fbc99602b85_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_da61afd429181c39afa5323882ba728ca6d582568e576bdb1c34ea22e1e4cc63 = $this->env->getExtension("native_profiler");
        $__internal_da61afd429181c39afa5323882ba728ca6d582568e576bdb1c34ea22e1e4cc63->enter($__internal_da61afd429181c39afa5323882ba728ca6d582568e576bdb1c34ea22e1e4cc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_da61afd429181c39afa5323882ba728ca6d582568e576bdb1c34ea22e1e4cc63->leave($__internal_da61afd429181c39afa5323882ba728ca6d582568e576bdb1c34ea22e1e4cc63_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_d252fcc45b7cd730d3f08e55fb2ae8e96004372ab450dc9c009caa59d45c5948 = $this->env->getExtension("native_profiler");
        $__internal_d252fcc45b7cd730d3f08e55fb2ae8e96004372ab450dc9c009caa59d45c5948->enter($__internal_d252fcc45b7cd730d3f08e55fb2ae8e96004372ab450dc9c009caa59d45c5948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_d252fcc45b7cd730d3f08e55fb2ae8e96004372ab450dc9c009caa59d45c5948->leave($__internal_d252fcc45b7cd730d3f08e55fb2ae8e96004372ab450dc9c009caa59d45c5948_prof);

    }

    // line 20
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_3a29ad54079409435f9b59881cb5d20826ec6928bc0a0195ffd6089003d7e0e4 = $this->env->getExtension("native_profiler");
        $__internal_3a29ad54079409435f9b59881cb5d20826ec6928bc0a0195ffd6089003d7e0e4->enter($__internal_3a29ad54079409435f9b59881cb5d20826ec6928bc0a0195ffd6089003d7e0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_3a29ad54079409435f9b59881cb5d20826ec6928bc0a0195ffd6089003d7e0e4->leave($__internal_3a29ad54079409435f9b59881cb5d20826ec6928bc0a0195ffd6089003d7e0e4_prof);

    }

    // line 24
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_b033d3dee35955701f6ca5eb0ac154537ddbebd7f433088474bde7308dd7598f = $this->env->getExtension("native_profiler");
        $__internal_b033d3dee35955701f6ca5eb0ac154537ddbebd7f433088474bde7308dd7598f->enter($__internal_b033d3dee35955701f6ca5eb0ac154537ddbebd7f433088474bde7308dd7598f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 25
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 28
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_trans_parameters" =>         // line 29
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 31
        echo "
    ";
        
        $__internal_b033d3dee35955701f6ca5eb0ac154537ddbebd7f433088474bde7308dd7598f->leave($__internal_b033d3dee35955701f6ca5eb0ac154537ddbebd7f433088474bde7308dd7598f_prof);

    }

    // line 35
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c6785a274bcfba8df14bcb97341e5436a2240b41478ac4b09bd0decbeeacc0cc = $this->env->getExtension("native_profiler");
        $__internal_c6785a274bcfba8df14bcb97341e5436a2240b41478ac4b09bd0decbeeacc0cc->enter($__internal_c6785a274bcfba8df14bcb97341e5436a2240b41478ac4b09bd0decbeeacc0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 36
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 40
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });

            // Select2 widget is only enabled for the <select> elements which explicitly ask for it
            \$('#main').find('form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap'
            });
        });
    </script>
";
        
        $__internal_c6785a274bcfba8df14bcb97341e5436a2240b41478ac4b09bd0decbeeacc0cc->leave($__internal_c6785a274bcfba8df14bcb97341e5436a2240b41478ac4b09bd0decbeeacc0cc_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 40,  156 => 36,  150 => 35,  142 => 31,  140 => 30,  139 => 29,  138 => 28,  137 => 27,  135 => 25,  129 => 24,  119 => 21,  113 => 20,  106 => 24,  103 => 23,  100 => 20,  94 => 19,  83 => 15,  80 => 14,  78 => 13,  72 => 12,  60 => 10,  48 => 9,  41 => 7,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 7,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'edit edit-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* */
/*     {% block delete_form %}*/
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'edit',*/
/*             referer: app.request.query.get('referer', ''),*/
/*             delete_form: delete_form,*/
/*             _trans_parameters: _trans_parameters,*/
/*             _entity_config: _entity_config,*/
/*         }, with_context = false) }}*/
/*     {% endblock delete_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/* */
/*             $('a.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function () {*/
/*                         $('#delete-form').trigger('submit');*/
/*                     });*/
/*             });*/
/* */
/*             // Select2 widget is only enabled for the <select> elements which explicitly ask for it*/
/*             $('#main').find('form select[data-widget="select2"]').select2({*/
/*                 theme: 'bootstrap'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
