<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_fa44d61f0a5814e5ab6dce5f439961971e2bb2007d852fd0e60acd68a2dfd283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8eb766c2f65ba12b278c4d9dc114c381c54db290a6372c00f9c00199ce7b087b = $this->env->getExtension("native_profiler");
        $__internal_8eb766c2f65ba12b278c4d9dc114c381c54db290a6372c00f9c00199ce7b087b->enter($__internal_8eb766c2f65ba12b278c4d9dc114c381c54db290a6372c00f9c00199ce7b087b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())), "%entity_id%" => (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb766c2f65ba12b278c4d9dc114c381c54db290a6372c00f9c00199ce7b087b->leave($__internal_8eb766c2f65ba12b278c4d9dc114c381c54db290a6372c00f9c00199ce7b087b_prof);

    }

    // line 7
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e2e194d8d663086a5211904209f0aed8306ee670c7ca979cfcd48839e533a1ec = $this->env->getExtension("native_profiler");
        $__internal_e2e194d8d663086a5211904209f0aed8306ee670c7ca979cfcd48839e533a1ec->enter($__internal_e2e194d8d663086a5211904209f0aed8306ee670c7ca979cfcd48839e533a1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_e2e194d8d663086a5211904209f0aed8306ee670c7ca979cfcd48839e533a1ec->leave($__internal_e2e194d8d663086a5211904209f0aed8306ee670c7ca979cfcd48839e533a1ec_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_01ef813180339a75f15cbce916121eeff9bf96141bfaf7b7e087b6c1f3543a1e = $this->env->getExtension("native_profiler");
        $__internal_01ef813180339a75f15cbce916121eeff9bf96141bfaf7b7e087b6c1f3543a1e->enter($__internal_01ef813180339a75f15cbce916121eeff9bf96141bfaf7b7e087b6c1f3543a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_01ef813180339a75f15cbce916121eeff9bf96141bfaf7b7e087b6c1f3543a1e->leave($__internal_01ef813180339a75f15cbce916121eeff9bf96141bfaf7b7e087b6c1f3543a1e_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_958b93d02f2e6ea9b1cf8378127183936f2696b121d42298b88834e8c050f0f5 = $this->env->getExtension("native_profiler");
        $__internal_958b93d02f2e6ea9b1cf8378127183936f2696b121d42298b88834e8c050f0f5->enter($__internal_958b93d02f2e6ea9b1cf8378127183936f2696b121d42298b88834e8c050f0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "show", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_958b93d02f2e6ea9b1cf8378127183936f2696b121d42298b88834e8c050f0f5->leave($__internal_958b93d02f2e6ea9b1cf8378127183936f2696b121d42298b88834e8c050f0f5_prof);

    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        $__internal_9d048994c6836622f8f27e6428ff6a9b8bf5cca28f0f4951fe3ea57f3169ef57 = $this->env->getExtension("native_profiler");
        $__internal_9d048994c6836622f8f27e6428ff6a9b8bf5cca28f0f4951fe3ea57f3169ef57->enter($__internal_9d048994c6836622f8f27e6428ff6a9b8bf5cca28f0f4951fe3ea57f3169ef57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"form-horizontal\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 20
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('form')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 26
            echo $this->env->getExtension('easyadmin_extension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 29
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 30
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["metadata"], "help", array()));
                echo "</span>
                    ";
            }
            // line 32
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 38
        $this->displayBlock('item_actions', $context, $blocks);
        // line 49
        echo "            </div>
        </div>
    </div>

    ";
        // line 53
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_9d048994c6836622f8f27e6428ff6a9b8bf5cca28f0f4951fe3ea57f3169ef57->leave($__internal_9d048994c6836622f8f27e6428ff6a9b8bf5cca28f0f4951fe3ea57f3169ef57_prof);

    }

    // line 38
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_3de2ff7851aa9456cbd4ee53184e84c702587a76f8f142cbd6bd962a9fc85ce2 = $this->env->getExtension("native_profiler");
        $__internal_3de2ff7851aa9456cbd4ee53184e84c702587a76f8f142cbd6bd962a9fc85ce2->enter($__internal_3de2ff7851aa9456cbd4ee53184e84c702587a76f8f142cbd6bd962a9fc85ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 39
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('easyadmin_extension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 40
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 41
        echo "
                ";
        // line 42
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 43
(isset($context["_show_actions"]) ? $context["_show_actions"] : $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 44
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "trans_parameters" =>         // line 45
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 46
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 47
        echo "
            ";
        
        $__internal_3de2ff7851aa9456cbd4ee53184e84c702587a76f8f142cbd6bd962a9fc85ce2->leave($__internal_3de2ff7851aa9456cbd4ee53184e84c702587a76f8f142cbd6bd962a9fc85ce2_prof);

    }

    // line 53
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_492a577b15311004a2453738ff44adc34d092adb5ee0d4244c666fef037c79e4 = $this->env->getExtension("native_profiler");
        $__internal_492a577b15311004a2453738ff44adc34d092adb5ee0d4244c666fef037c79e4->enter($__internal_492a577b15311004a2453738ff44adc34d092adb5ee0d4244c666fef037c79e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 54
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 56
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 57
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_trans_parameters" =>         // line 58
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 59
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 60
        echo "
    ";
        
        $__internal_492a577b15311004a2453738ff44adc34d092adb5ee0d4244c666fef037c79e4->leave($__internal_492a577b15311004a2453738ff44adc34d092adb5ee0d4244c666fef037c79e4_prof);

    }

    // line 64
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_b61d8de5a0e53cbe17a6bfc0b7812b7c12b086bd727f1f9b7bbac9cbd8dd3a04 = $this->env->getExtension("native_profiler");
        $__internal_b61d8de5a0e53cbe17a6bfc0b7812b7c12b086bd727f1f9b7bbac9cbd8dd3a04->enter($__internal_b61d8de5a0e53cbe17a6bfc0b7812b7c12b086bd727f1f9b7bbac9cbd8dd3a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 65
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_b61d8de5a0e53cbe17a6bfc0b7812b7c12b086bd727f1f9b7bbac9cbd8dd3a04->leave($__internal_b61d8de5a0e53cbe17a6bfc0b7812b7c12b086bd727f1f9b7bbac9cbd8dd3a04_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 65,  212 => 64,  204 => 60,  202 => 59,  201 => 58,  200 => 57,  199 => 56,  197 => 54,  191 => 53,  183 => 47,  181 => 46,  180 => 45,  179 => 44,  178 => 43,  177 => 42,  174 => 41,  171 => 40,  168 => 39,  162 => 38,  155 => 53,  149 => 49,  147 => 38,  142 => 35,  134 => 32,  128 => 30,  126 => 29,  120 => 26,  113 => 22,  105 => 20,  101 => 19,  98 => 18,  92 => 17,  81 => 13,  78 => 12,  76 => 11,  70 => 10,  58 => 8,  46 => 7,  39 => 5,  37 => 3,  35 => 2,  33 => 1,  24 => 5,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'show show-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     <div class="form-horizontal">*/
/*         {% for field, metadata in fields %}*/
/*             <div class="form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}">*/
/*                 <label class="col-sm-2 control-label">*/
/*                     {{ (metadata.label ?: field|humanize)|trans(_trans_parameters) }}*/
/*                 </label>*/
/*                 <div class="col-sm-10">*/
/*                     <div class="form-control">*/
/*                         {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}*/
/*                     </div>*/
/* */
/*                     {% if metadata.help|default('') != '' %}*/
/*                         <span class="help-block"><i class="fa fa-info-circle"></i> {{ metadata.help|trans|raw }}</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="form-group form-actions">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*             {% block item_actions %}*/
/*                 {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}*/
/*                 {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}*/
/* */
/*                 {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                     actions: _show_actions,*/
/*                     request_parameters: _request_parameters,*/
/*                     trans_parameters: _trans_parameters,*/
/*                     item_id: _entity_id*/
/*                 }, with_context = false) }}*/
/*             {% endblock item_actions %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block delete_form %}*/
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'show',*/
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
/*             $('a.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function () {*/
/*                         $('#delete-form').trigger('submit');*/
/*                     });*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
