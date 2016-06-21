<?php

/* EasyAdminBundle:form:bootstrap_3_layout.html.twig */
class __TwigTemplate_5f4d545a20eff4a35e0feb56deb305ad5691bcfb0cf3c5c4e62a8cc8ca8d4c02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_row' => array($this, 'block_easyadmin_autocomplete_row'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bb36b390da76e0cb596c2495fbe849f0dc376d747e5487de5d83ed01e5adc5d = $this->env->getExtension("native_profiler");
        $__internal_1bb36b390da76e0cb596c2495fbe849f0dc376d747e5487de5d83ed01e5adc5d->enter($__internal_1bb36b390da76e0cb596c2495fbe849f0dc376d747e5487de5d83ed01e5adc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 15
        echo "
";
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('form_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('button_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('money_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('date_widget', $context, $blocks);
        // line 115
        echo "
";
        // line 116
        $this->displayBlock('time_widget', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 177
        echo "
";
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('form_label', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('choice_label', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('radio_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 217
        echo "
";
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('form_row', $context, $blocks);
        // line 243
        echo "
";
        // line 244
        $this->displayBlock('collection_row', $context, $blocks);
        // line 275
        echo "
";
        // line 276
        $this->displayBlock('button_row', $context, $blocks);
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('choice_row', $context, $blocks);
        // line 286
        echo "
";
        // line 287
        $this->displayBlock('date_row', $context, $blocks);
        // line 291
        echo "
";
        // line 292
        $this->displayBlock('time_row', $context, $blocks);
        // line 296
        echo "
";
        // line 297
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 301
        echo "
";
        // line 302
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 308
        echo "
";
        // line 309
        $this->displayBlock('radio_row', $context, $blocks);
        // line 315
        echo "
";
        // line 317
        $this->displayBlock('form_errors', $context, $blocks);
        // line 335
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 346
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 351
        echo "
";
        // line 352
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 356
        echo "
";
        // line 357
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 378
        echo "
";
        // line 379
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 383
        echo "
";
        // line 384
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 406
        echo "
";
        // line 408
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 455
        echo "
";
        // line 457
        $this->displayBlock('easyadmin_autocomplete_row', $context, $blocks);
        // line 470
        echo "
";
        // line 471
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        
        $__internal_1bb36b390da76e0cb596c2495fbe849f0dc376d747e5487de5d83ed01e5adc5d->leave($__internal_1bb36b390da76e0cb596c2495fbe849f0dc376d747e5487de5d83ed01e5adc5d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_531f924537b370f1b41239f3bbf20b1b1fbd2449bc20fb3c35a68354c69d3b4b = $this->env->getExtension("native_profiler");
        $__internal_531f924537b370f1b41239f3bbf20b1b1fbd2449bc20fb3c35a68354c69d3b4b->enter($__internal_531f924537b370f1b41239f3bbf20b1b1fbd2449bc20fb3c35a68354c69d3b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((((($this->getAttribute(            // line 6
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . $this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array())) . "-form"), "data-view" => $this->getAttribute(            // line 7
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 8
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 9
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 11
            echo "    ";
        }
        // line 13
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_531f924537b370f1b41239f3bbf20b1b1fbd2449bc20fb3c35a68354c69d3b4b->leave($__internal_531f924537b370f1b41239f3bbf20b1b1fbd2449bc20fb3c35a68354c69d3b4b_prof);

    }

    // line 18
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_2a4de5fd9d631d8aa2e22f276ffbf896f7d9b94541280088abd2eac984646627 = $this->env->getExtension("native_profiler");
        $__internal_2a4de5fd9d631d8aa2e22f276ffbf896f7d9b94541280088abd2eac984646627->enter($__internal_2a4de5fd9d631d8aa2e22f276ffbf896f7d9b94541280088abd2eac984646627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 19
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 21
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 22
            echo "        ";
            ob_start();
            // line 23
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 36
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 38
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_2a4de5fd9d631d8aa2e22f276ffbf896f7d9b94541280088abd2eac984646627->leave($__internal_2a4de5fd9d631d8aa2e22f276ffbf896f7d9b94541280088abd2eac984646627_prof);

    }

    // line 46
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f432c4953c926e6722d864f9179f71c92663630805f52d3cb0131aef5e3a3ff5 = $this->env->getExtension("native_profiler");
        $__internal_f432c4953c926e6722d864f9179f71c92663630805f52d3cb0131aef5e3a3ff5->enter($__internal_f432c4953c926e6722d864f9179f71c92663630805f52d3cb0131aef5e3a3ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 47
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 48
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 50
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f432c4953c926e6722d864f9179f71c92663630805f52d3cb0131aef5e3a3ff5->leave($__internal_f432c4953c926e6722d864f9179f71c92663630805f52d3cb0131aef5e3a3ff5_prof);

    }

    // line 53
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f46ebe3cfb06bb146b7234ec0277dc0b3c3fd07ad21174f38170621c5cf00252 = $this->env->getExtension("native_profiler");
        $__internal_f46ebe3cfb06bb146b7234ec0277dc0b3c3fd07ad21174f38170621c5cf00252->enter($__internal_f46ebe3cfb06bb146b7234ec0277dc0b3c3fd07ad21174f38170621c5cf00252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 54
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 55
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f46ebe3cfb06bb146b7234ec0277dc0b3c3fd07ad21174f38170621c5cf00252->leave($__internal_f46ebe3cfb06bb146b7234ec0277dc0b3c3fd07ad21174f38170621c5cf00252_prof);

    }

    // line 58
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_19a8a3f63ce770d480bdb960759e4805f0899e3c4f5e4aad4fcf0bb75ce37916 = $this->env->getExtension("native_profiler");
        $__internal_19a8a3f63ce770d480bdb960759e4805f0899e3c4f5e4aad4fcf0bb75ce37916->enter($__internal_19a8a3f63ce770d480bdb960759e4805f0899e3c4f5e4aad4fcf0bb75ce37916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 59
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 60
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_19a8a3f63ce770d480bdb960759e4805f0899e3c4f5e4aad4fcf0bb75ce37916->leave($__internal_19a8a3f63ce770d480bdb960759e4805f0899e3c4f5e4aad4fcf0bb75ce37916_prof);

    }

    // line 63
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_995b2e7f40c605e498365ca6c90e6c404f85d77f33135e4fea8330b662d79f91 = $this->env->getExtension("native_profiler");
        $__internal_995b2e7f40c605e498365ca6c90e6c404f85d77f33135e4fea8330b662d79f91->enter($__internal_995b2e7f40c605e498365ca6c90e6c404f85d77f33135e4fea8330b662d79f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 64
        echo "<div class=\"input-group\">
        ";
        // line 65
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 66
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 67
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 69
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 70
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        echo "    </div>";
        
        $__internal_995b2e7f40c605e498365ca6c90e6c404f85d77f33135e4fea8330b662d79f91->leave($__internal_995b2e7f40c605e498365ca6c90e6c404f85d77f33135e4fea8330b662d79f91_prof);

    }

    // line 76
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8cfa11b83677afa9e2bf9ad2fd11c971ad596c03289195348e0cc103b482b797 = $this->env->getExtension("native_profiler");
        $__internal_8cfa11b83677afa9e2bf9ad2fd11c971ad596c03289195348e0cc103b482b797->enter($__internal_8cfa11b83677afa9e2bf9ad2fd11c971ad596c03289195348e0cc103b482b797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 77
        echo "<div class=\"input-group\">";
        // line 78
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 79
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_8cfa11b83677afa9e2bf9ad2fd11c971ad596c03289195348e0cc103b482b797->leave($__internal_8cfa11b83677afa9e2bf9ad2fd11c971ad596c03289195348e0cc103b482b797_prof);

    }

    // line 83
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_c3fc60f11993e243c46f262148dd3dabbbc01e61e92e701195ea4aa310f22dad = $this->env->getExtension("native_profiler");
        $__internal_c3fc60f11993e243c46f262148dd3dabbbc01e61e92e701195ea4aa310f22dad->enter($__internal_c3fc60f11993e243c46f262148dd3dabbbc01e61e92e701195ea4aa310f22dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 84
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 93
            echo "</div>";
        }
        
        $__internal_c3fc60f11993e243c46f262148dd3dabbbc01e61e92e701195ea4aa310f22dad->leave($__internal_c3fc60f11993e243c46f262148dd3dabbbc01e61e92e701195ea4aa310f22dad_prof);

    }

    // line 97
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1f62f7da835dddfa3521940e38388a2b3d483d1f4bc87b912e5a6cd6ac12e7fd = $this->env->getExtension("native_profiler");
        $__internal_1f62f7da835dddfa3521940e38388a2b3d483d1f4bc87b912e5a6cd6ac12e7fd->enter($__internal_1f62f7da835dddfa3521940e38388a2b3d483d1f4bc87b912e5a6cd6ac12e7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 98
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 99
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 101
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 102
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 103
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 105
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 106
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 107
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 108
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 110
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 111
                echo "</div>";
            }
        }
        
        $__internal_1f62f7da835dddfa3521940e38388a2b3d483d1f4bc87b912e5a6cd6ac12e7fd->leave($__internal_1f62f7da835dddfa3521940e38388a2b3d483d1f4bc87b912e5a6cd6ac12e7fd_prof);

    }

    // line 116
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d0b711b75d3e1a4a23989b03983aecc3e3d2377b8e6de195b32593c8b85d190f = $this->env->getExtension("native_profiler");
        $__internal_d0b711b75d3e1a4a23989b03983aecc3e3d2377b8e6de195b32593c8b85d190f->enter($__internal_d0b711b75d3e1a4a23989b03983aecc3e3d2377b8e6de195b32593c8b85d190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 117
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 118
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 120
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 121
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 122
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 125
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 126
                echo "</div>";
            }
        }
        
        $__internal_d0b711b75d3e1a4a23989b03983aecc3e3d2377b8e6de195b32593c8b85d190f->leave($__internal_d0b711b75d3e1a4a23989b03983aecc3e3d2377b8e6de195b32593c8b85d190f_prof);

    }

    // line 131
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_105f2f3a12c0a595c13a2eb0e7d1742ec963f3e38efd96fdd8670fd7106afb9a = $this->env->getExtension("native_profiler");
        $__internal_105f2f3a12c0a595c13a2eb0e7d1742ec963f3e38efd96fdd8670fd7106afb9a->enter($__internal_105f2f3a12c0a595c13a2eb0e7d1742ec963f3e38efd96fdd8670fd7106afb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 132
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 133
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_105f2f3a12c0a595c13a2eb0e7d1742ec963f3e38efd96fdd8670fd7106afb9a->leave($__internal_105f2f3a12c0a595c13a2eb0e7d1742ec963f3e38efd96fdd8670fd7106afb9a_prof);

    }

    // line 136
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d340500029bf3d5d1150b00e6d9604ab32d10ac1399be309e8436100a05fb19d = $this->env->getExtension("native_profiler");
        $__internal_d340500029bf3d5d1150b00e6d9604ab32d10ac1399be309e8436100a05fb19d->enter($__internal_d340500029bf3d5d1150b00e6d9604ab32d10ac1399be309e8436100a05fb19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 137
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 138
            echo "<div class=\"control-group\">";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 140
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 141
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "</div>";
        } else {
            // line 146
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 148
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 149
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "</div>";
        }
        
        $__internal_d340500029bf3d5d1150b00e6d9604ab32d10ac1399be309e8436100a05fb19d->leave($__internal_d340500029bf3d5d1150b00e6d9604ab32d10ac1399be309e8436100a05fb19d_prof);

    }

    // line 156
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f6795f3b2fc0cf1cbca5f63303f16b081afe4032a47ed4684612b98680e35e46 = $this->env->getExtension("native_profiler");
        $__internal_f6795f3b2fc0cf1cbca5f63303f16b081afe4032a47ed4684612b98680e35e46->enter($__internal_f6795f3b2fc0cf1cbca5f63303f16b081afe4032a47ed4684612b98680e35e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 157
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 158
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 159
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 161
            echo "<div class=\"checkbox\">";
            // line 162
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 163
            echo "</div>";
        }
        
        $__internal_f6795f3b2fc0cf1cbca5f63303f16b081afe4032a47ed4684612b98680e35e46->leave($__internal_f6795f3b2fc0cf1cbca5f63303f16b081afe4032a47ed4684612b98680e35e46_prof);

    }

    // line 167
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_86e8916512ad5d2c73eb3bd16d645a0d6f756e55ebce24fca4205644e7213e08 = $this->env->getExtension("native_profiler");
        $__internal_86e8916512ad5d2c73eb3bd16d645a0d6f756e55ebce24fca4205644e7213e08->enter($__internal_86e8916512ad5d2c73eb3bd16d645a0d6f756e55ebce24fca4205644e7213e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 168
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 169
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 170
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 172
            echo "<div class=\"radio\">";
            // line 173
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 174
            echo "</div>";
        }
        
        $__internal_86e8916512ad5d2c73eb3bd16d645a0d6f756e55ebce24fca4205644e7213e08->leave($__internal_86e8916512ad5d2c73eb3bd16d645a0d6f756e55ebce24fca4205644e7213e08_prof);

    }

    // line 180
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ce4447caaf6ef8a6e37eadfe8a7aa879bbf1de3006068a656ec06ee40ac3d481 = $this->env->getExtension("native_profiler");
        $__internal_ce4447caaf6ef8a6e37eadfe8a7aa879bbf1de3006068a656ec06ee40ac3d481->enter($__internal_ce4447caaf6ef8a6e37eadfe8a7aa879bbf1de3006068a656ec06ee40ac3d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 181
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 182
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ce4447caaf6ef8a6e37eadfe8a7aa879bbf1de3006068a656ec06ee40ac3d481->leave($__internal_ce4447caaf6ef8a6e37eadfe8a7aa879bbf1de3006068a656ec06ee40ac3d481_prof);

    }

    // line 185
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_fc7f65fe3597e77b60486e2c9e92aacbf5ec35164b2ea673a98a05c0a6918f5a = $this->env->getExtension("native_profiler");
        $__internal_fc7f65fe3597e77b60486e2c9e92aacbf5ec35164b2ea673a98a05c0a6918f5a->enter($__internal_fc7f65fe3597e77b60486e2c9e92aacbf5ec35164b2ea673a98a05c0a6918f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 187
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 188
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_fc7f65fe3597e77b60486e2c9e92aacbf5ec35164b2ea673a98a05c0a6918f5a->leave($__internal_fc7f65fe3597e77b60486e2c9e92aacbf5ec35164b2ea673a98a05c0a6918f5a_prof);

    }

    // line 191
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b290779f8054a328ea44f8f1cd6ba2fd4053502273d1cae0c882978d26d4b93d = $this->env->getExtension("native_profiler");
        $__internal_b290779f8054a328ea44f8f1cd6ba2fd4053502273d1cae0c882978d26d4b93d->enter($__internal_b290779f8054a328ea44f8f1cd6ba2fd4053502273d1cae0c882978d26d4b93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 192
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b290779f8054a328ea44f8f1cd6ba2fd4053502273d1cae0c882978d26d4b93d->leave($__internal_b290779f8054a328ea44f8f1cd6ba2fd4053502273d1cae0c882978d26d4b93d_prof);

    }

    // line 195
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_cf9d6dac0a1f163e913453567a0de5afe4865aebf21bea07b8f5b8b6a94fad3f = $this->env->getExtension("native_profiler");
        $__internal_cf9d6dac0a1f163e913453567a0de5afe4865aebf21bea07b8f5b8b6a94fad3f->enter($__internal_cf9d6dac0a1f163e913453567a0de5afe4865aebf21bea07b8f5b8b6a94fad3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cf9d6dac0a1f163e913453567a0de5afe4865aebf21bea07b8f5b8b6a94fad3f->leave($__internal_cf9d6dac0a1f163e913453567a0de5afe4865aebf21bea07b8f5b8b6a94fad3f_prof);

    }

    // line 199
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d1b42f2b6cc5a4dd2a0dd125f97f51c50b31741a2b7b07c0e7bd3743f18b4e31 = $this->env->getExtension("native_profiler");
        $__internal_d1b42f2b6cc5a4dd2a0dd125f97f51c50b31741a2b7b07c0e7bd3743f18b4e31->enter($__internal_d1b42f2b6cc5a4dd2a0dd125f97f51c50b31741a2b7b07c0e7bd3743f18b4e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 200
        echo "    ";
        // line 201
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 202
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 206
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 207
                echo "        ";
            }
            // line 208
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 209
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 212
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 213
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), "messages")) : ("")), "html", null, true);
            // line 214
            echo "</label>
    ";
        }
        
        $__internal_d1b42f2b6cc5a4dd2a0dd125f97f51c50b31741a2b7b07c0e7bd3743f18b4e31->leave($__internal_d1b42f2b6cc5a4dd2a0dd125f97f51c50b31741a2b7b07c0e7bd3743f18b4e31_prof);

    }

    // line 220
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ba522eacb1e65f5bb3f738dcd7ea8f0683f00a9d97ddef1be473ddfb4fd08a28 = $this->env->getExtension("native_profiler");
        $__internal_ba522eacb1e65f5bb3f738dcd7ea8f0683f00a9d97ddef1be473ddfb4fd08a28->enter($__internal_ba522eacb1e65f5bb3f738dcd7ea8f0683f00a9d97ddef1be473ddfb4fd08a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 221
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 222
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 223
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => "messages") + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 228
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 230
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 238
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 239
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()));
            echo "</span>
        ";
        }
        // line 241
        echo "    </div>";
        
        $__internal_ba522eacb1e65f5bb3f738dcd7ea8f0683f00a9d97ddef1be473ddfb4fd08a28->leave($__internal_ba522eacb1e65f5bb3f738dcd7ea8f0683f00a9d97ddef1be473ddfb4fd08a28_prof);

    }

    // line 244
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_c7f7525d553e33a14bb87b9e73244258d06aa30bba79c47d70dc0fd901fc10be = $this->env->getExtension("native_profiler");
        $__internal_c7f7525d553e33a14bb87b9e73244258d06aa30bba79c47d70dc0fd901fc10be->enter($__internal_c7f7525d553e33a14bb87b9e73244258d06aa30bba79c47d70dc0fd901fc10be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 245
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 247
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 248
            echo "        ";
            ob_start();
            // line 249
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 252
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                var numItems = collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 259
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 260
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 266
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 268
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_c7f7525d553e33a14bb87b9e73244258d06aa30bba79c47d70dc0fd901fc10be->leave($__internal_c7f7525d553e33a14bb87b9e73244258d06aa30bba79c47d70dc0fd901fc10be_prof);

    }

    // line 276
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_533f834b0ebb1cd20b9d253c03240475a0e1ec82ac49aa6c737a7d44eefc8c20 = $this->env->getExtension("native_profiler");
        $__internal_533f834b0ebb1cd20b9d253c03240475a0e1ec82ac49aa6c737a7d44eefc8c20->enter($__internal_533f834b0ebb1cd20b9d253c03240475a0e1ec82ac49aa6c737a7d44eefc8c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 277
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 279
        echo "</div>";
        
        $__internal_533f834b0ebb1cd20b9d253c03240475a0e1ec82ac49aa6c737a7d44eefc8c20->leave($__internal_533f834b0ebb1cd20b9d253c03240475a0e1ec82ac49aa6c737a7d44eefc8c20_prof);

    }

    // line 282
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b28a297fc7792f05a3643fd72cea78275695a94dfab9459567b85bd2e68faa72 = $this->env->getExtension("native_profiler");
        $__internal_b28a297fc7792f05a3643fd72cea78275695a94dfab9459567b85bd2e68faa72->enter($__internal_b28a297fc7792f05a3643fd72cea78275695a94dfab9459567b85bd2e68faa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 283
        $context["force_error"] = true;
        // line 284
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b28a297fc7792f05a3643fd72cea78275695a94dfab9459567b85bd2e68faa72->leave($__internal_b28a297fc7792f05a3643fd72cea78275695a94dfab9459567b85bd2e68faa72_prof);

    }

    // line 287
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b366bde23f4c3f9dc79d0a4df1cd56001e6d809444c944ff85bd2579a2e59e86 = $this->env->getExtension("native_profiler");
        $__internal_b366bde23f4c3f9dc79d0a4df1cd56001e6d809444c944ff85bd2579a2e59e86->enter($__internal_b366bde23f4c3f9dc79d0a4df1cd56001e6d809444c944ff85bd2579a2e59e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 288
        $context["force_error"] = true;
        // line 289
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b366bde23f4c3f9dc79d0a4df1cd56001e6d809444c944ff85bd2579a2e59e86->leave($__internal_b366bde23f4c3f9dc79d0a4df1cd56001e6d809444c944ff85bd2579a2e59e86_prof);

    }

    // line 292
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e10d04cfdcd190baf7864749355602d21904765c3a33120bd841349ace0330eb = $this->env->getExtension("native_profiler");
        $__internal_e10d04cfdcd190baf7864749355602d21904765c3a33120bd841349ace0330eb->enter($__internal_e10d04cfdcd190baf7864749355602d21904765c3a33120bd841349ace0330eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 293
        $context["force_error"] = true;
        // line 294
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e10d04cfdcd190baf7864749355602d21904765c3a33120bd841349ace0330eb->leave($__internal_e10d04cfdcd190baf7864749355602d21904765c3a33120bd841349ace0330eb_prof);

    }

    // line 297
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_63ef53836dbc1a22c1225183379c13445143a47c2d238c54dbd5bb8dde1907f3 = $this->env->getExtension("native_profiler");
        $__internal_63ef53836dbc1a22c1225183379c13445143a47c2d238c54dbd5bb8dde1907f3->enter($__internal_63ef53836dbc1a22c1225183379c13445143a47c2d238c54dbd5bb8dde1907f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 298
        $context["force_error"] = true;
        // line 299
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_63ef53836dbc1a22c1225183379c13445143a47c2d238c54dbd5bb8dde1907f3->leave($__internal_63ef53836dbc1a22c1225183379c13445143a47c2d238c54dbd5bb8dde1907f3_prof);

    }

    // line 302
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_da40cce34ac9d8034127ce8672eac67a8e39cc5c348d92fbfdcf42f24d55a146 = $this->env->getExtension("native_profiler");
        $__internal_da40cce34ac9d8034127ce8672eac67a8e39cc5c348d92fbfdcf42f24d55a146->enter($__internal_da40cce34ac9d8034127ce8672eac67a8e39cc5c348d92fbfdcf42f24d55a146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 303
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 306
        echo "</div>";
        
        $__internal_da40cce34ac9d8034127ce8672eac67a8e39cc5c348d92fbfdcf42f24d55a146->leave($__internal_da40cce34ac9d8034127ce8672eac67a8e39cc5c348d92fbfdcf42f24d55a146_prof);

    }

    // line 309
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_31ea6409d20efb4aa4e600ec6bbf2311abb2b36959a4287b82801f74d84dbf2d = $this->env->getExtension("native_profiler");
        $__internal_31ea6409d20efb4aa4e600ec6bbf2311abb2b36959a4287b82801f74d84dbf2d->enter($__internal_31ea6409d20efb4aa4e600ec6bbf2311abb2b36959a4287b82801f74d84dbf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 310
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 313
        echo "</div>";
        
        $__internal_31ea6409d20efb4aa4e600ec6bbf2311abb2b36959a4287b82801f74d84dbf2d->leave($__internal_31ea6409d20efb4aa4e600ec6bbf2311abb2b36959a4287b82801f74d84dbf2d_prof);

    }

    // line 317
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_747bbdb6753a144edd7cdb307949e7fc2d7b9ebe37e948c40e387eceedcf2aaa = $this->env->getExtension("native_profiler");
        $__internal_747bbdb6753a144edd7cdb307949e7fc2d7b9ebe37e948c40e387eceedcf2aaa->enter($__internal_747bbdb6753a144edd7cdb307949e7fc2d7b9ebe37e948c40e387eceedcf2aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 318
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 319
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 320
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 321
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 322
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 323
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 325
                echo "                <ul>
                    ";
                // line 326
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 327
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "                </ul>
            ";
            }
            // line 331
            echo "        </div>
    ";
        }
        
        $__internal_747bbdb6753a144edd7cdb307949e7fc2d7b9ebe37e948c40e387eceedcf2aaa->leave($__internal_747bbdb6753a144edd7cdb307949e7fc2d7b9ebe37e948c40e387eceedcf2aaa_prof);

    }

    // line 335
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b08682eadf9b78d6ac5b99f46905738f46231de2da3bb8abb430adf5e052fb76 = $this->env->getExtension("native_profiler");
        $__internal_b08682eadf9b78d6ac5b99f46905738f46231de2da3bb8abb430adf5e052fb76->enter($__internal_b08682eadf9b78d6ac5b99f46905738f46231de2da3bb8abb430adf5e052fb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 336
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 337
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 339
        echo "    ";
        if ((twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 340
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" => $this->renderBlock("empty_collection", $context, $blocks)));
            // line 341
            echo "    ";
        }
        // line 342
        echo "
    ";
        // line 343
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_b08682eadf9b78d6ac5b99f46905738f46231de2da3bb8abb430adf5e052fb76->leave($__internal_b08682eadf9b78d6ac5b99f46905738f46231de2da3bb8abb430adf5e052fb76_prof);

    }

    // line 346
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_cebf2c6ef99b35ac573d63c8913a3692f96f349a87b4e1b7a2d7e58456bf7535 = $this->env->getExtension("native_profiler");
        $__internal_cebf2c6ef99b35ac573d63c8913a3692f96f349a87b4e1b7a2d7e58456bf7535->enter($__internal_cebf2c6ef99b35ac573d63c8913a3692f96f349a87b4e1b7a2d7e58456bf7535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 347
        echo "    <div class=\"empty collection-empty\">
        <span class=\"label label-empty\">";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
    </div>
";
        
        $__internal_cebf2c6ef99b35ac573d63c8913a3692f96f349a87b4e1b7a2d7e58456bf7535->leave($__internal_cebf2c6ef99b35ac573d63c8913a3692f96f349a87b4e1b7a2d7e58456bf7535_prof);

    }

    // line 352
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_0ada00a58fb22ae86c686bf26afb2c53f345c0fbaadf1a4e720080c012409205 = $this->env->getExtension("native_profiler");
        $__internal_0ada00a58fb22ae86c686bf26afb2c53f345c0fbaadf1a4e720080c012409205->enter($__internal_0ada00a58fb22ae86c686bf26afb2c53f345c0fbaadf1a4e720080c012409205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 353
        echo "    ";
        $context["force_error"] = true;
        // line 354
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_0ada00a58fb22ae86c686bf26afb2c53f345c0fbaadf1a4e720080c012409205->leave($__internal_0ada00a58fb22ae86c686bf26afb2c53f345c0fbaadf1a4e720080c012409205_prof);

    }

    // line 357
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_6197407d8bf2ecf66ce363e4e1a702b780dde8908a0a97faa9b9c28e64e908bc = $this->env->getExtension("native_profiler");
        $__internal_6197407d8bf2ecf66ce363e4e1a702b780dde8908a0a97faa9b9c28e64e908bc->enter($__internal_6197407d8bf2ecf66ce363e4e1a702b780dde8908a0a97faa9b9c28e64e908bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 358
        ob_start();
        // line 359
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 360
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 361
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle")));
            // line 362
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 364
        echo "
        <div class=\"row\">
            ";
        // line 366
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 367
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 368
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 371
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6197407d8bf2ecf66ce363e4e1a702b780dde8908a0a97faa9b9c28e64e908bc->leave($__internal_6197407d8bf2ecf66ce363e4e1a702b780dde8908a0a97faa9b9c28e64e908bc_prof);

    }

    // line 379
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_ace08d1a6ac6ea8a2ce7e9fc13b33a5313dc53d4843418055ac41ae3ecff3f31 = $this->env->getExtension("native_profiler");
        $__internal_ace08d1a6ac6ea8a2ce7e9fc13b33a5313dc53d4843418055ac41ae3ecff3f31->enter($__internal_ace08d1a6ac6ea8a2ce7e9fc13b33a5313dc53d4843418055ac41ae3ecff3f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 380
        echo "    ";
        $context["force_error"] = true;
        // line 381
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_ace08d1a6ac6ea8a2ce7e9fc13b33a5313dc53d4843418055ac41ae3ecff3f31->leave($__internal_ace08d1a6ac6ea8a2ce7e9fc13b33a5313dc53d4843418055ac41ae3ecff3f31_prof);

    }

    // line 384
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_6b89688e968777d4dfa52f49e8fcfac06d64804767850c9dd76f6b9af2e0620e = $this->env->getExtension("native_profiler");
        $__internal_6b89688e968777d4dfa52f49e8fcfac06d64804767850c9dd76f6b9af2e0620e->enter($__internal_6b89688e968777d4dfa52f49e8fcfac06d64804767850c9dd76f6b9af2e0620e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 385
        ob_start();
        // line 386
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 387
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 388
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 389
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 391
        echo "
        ";
        // line 392
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 393
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 394
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 395
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 396
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 399
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 400
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 403
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6b89688e968777d4dfa52f49e8fcfac06d64804767850c9dd76f6b9af2e0620e->leave($__internal_6b89688e968777d4dfa52f49e8fcfac06d64804767850c9dd76f6b9af2e0620e_prof);

    }

    // line 408
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_d633436b1ada225b1d4f610fc46f63bb425dae4ff9c670fdc6fd46f37701c844 = $this->env->getExtension("native_profiler");
        $__internal_d633436b1ada225b1d4f610fc46f63bb425dae4ff9c670fdc6fd46f37701c844->enter($__internal_d633436b1ada225b1d4f610fc46f63bb425dae4ff9c670fdc6fd46f37701c844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 409
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 410
        echo "
    ";
        // line 411
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 412
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 414
        echo "
    <div class=\"row\">
        <input type=\"hidden\" name=\"referer\" value=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

        ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                // line 419
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "col-xs-12")) : ("col-xs-12")), "html", null, true);
                echo "\">
                ";
                // line 420
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                echo "
            </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 427
        $this->displayBlock('item_actions', $context, $blocks);
        // line 450
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d633436b1ada225b1d4f610fc46f63bb425dae4ff9c670fdc6fd46f37701c844->leave($__internal_d633436b1ada225b1d4f610fc46f63bb425dae4ff9c670fdc6fd46f37701c844_prof);

    }

    // line 427
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_5cf556bc6a58ce7999beec22306398565a946d890bd7a39efb3774116ebb96ff = $this->env->getExtension("native_profiler");
        $__internal_5cf556bc6a58ce7999beec22306398565a946d890bd7a39efb3774116ebb96ff->enter($__internal_5cf556bc6a58ce7999beec22306398565a946d890bd7a39efb3774116ebb96ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 428
        echo "                        ";
        // line 429
        echo "                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-save\"></i> ";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "messages"), "html", null, true);
        echo "
                        </button>

                        ";
        // line 433
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('easyadmin_extension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 434
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('easyadmin_extension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 435
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 436
        echo "
                        ";
        // line 437
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 439
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 440
        echo "
                        ";
        // line 441
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 442
        echo "
                        ";
        // line 443
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 444
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 445
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "trans_parameters" =>         // line 446
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 447
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 448
        echo "
                    ";
        
        $__internal_5cf556bc6a58ce7999beec22306398565a946d890bd7a39efb3774116ebb96ff->leave($__internal_5cf556bc6a58ce7999beec22306398565a946d890bd7a39efb3774116ebb96ff_prof);

    }

    // line 457
    public function block_easyadmin_autocomplete_row($context, array $blocks = array())
    {
        $__internal_eb47695af4164377ad473a5f099804309fe3bee83627549bb9aafe467d6b3212 = $this->env->getExtension("native_profiler");
        $__internal_eb47695af4164377ad473a5f099804309fe3bee83627549bb9aafe467d6b3212->enter($__internal_eb47695af4164377ad473a5f099804309fe3bee83627549bb9aafe467d6b3212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_row"));

        // line 458
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'row', array("attr" => twig_array_merge(        // line 459
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("list.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('routing')->getPath("easyadmin", array("action" => "autocomplete", "entity" => $this->getAttribute($this->getAttribute(        // line 463
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "property" => $this->getAttribute($this->getAttribute(        // line 464
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "fieldName", array()), "view" => $this->getAttribute(        // line 465
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array())))))));
        // line 468
        echo "
";
        
        $__internal_eb47695af4164377ad473a5f099804309fe3bee83627549bb9aafe467d6b3212->leave($__internal_eb47695af4164377ad473a5f099804309fe3bee83627549bb9aafe467d6b3212_prof);

    }

    // line 471
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_ee9f4e4b94f2d7e1585e0cf43e811824abc37966bd7e055fb8e1b5ca1bf6180f = $this->env->getExtension("native_profiler");
        $__internal_ee9f4e4b94f2d7e1585e0cf43e811824abc37966bd7e055fb8e1b5ca1bf6180f->enter($__internal_ee9f4e4b94f2d7e1585e0cf43e811824abc37966bd7e055fb8e1b5ca1bf6180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 472
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 473
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ee9f4e4b94f2d7e1585e0cf43e811824abc37966bd7e055fb8e1b5ca1bf6180f->leave($__internal_ee9f4e4b94f2d7e1585e0cf43e811824abc37966bd7e055fb8e1b5ca1bf6180f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1467 => 473,  1464 => 472,  1458 => 471,  1450 => 468,  1448 => 465,  1447 => 464,  1446 => 463,  1445 => 459,  1443 => 458,  1437 => 457,  1429 => 448,  1427 => 447,  1426 => 446,  1425 => 445,  1424 => 444,  1423 => 443,  1420 => 442,  1418 => 441,  1415 => 440,  1413 => 439,  1412 => 437,  1409 => 436,  1407 => 435,  1406 => 434,  1405 => 433,  1399 => 430,  1396 => 429,  1394 => 428,  1388 => 427,  1377 => 450,  1375 => 427,  1369 => 423,  1359 => 420,  1354 => 419,  1349 => 418,  1344 => 416,  1340 => 414,  1334 => 412,  1332 => 411,  1329 => 410,  1326 => 409,  1320 => 408,  1311 => 403,  1305 => 400,  1301 => 399,  1295 => 396,  1291 => 395,  1288 => 394,  1285 => 393,  1283 => 392,  1280 => 391,  1274 => 389,  1272 => 388,  1268 => 387,  1265 => 386,  1263 => 385,  1257 => 384,  1247 => 381,  1244 => 380,  1238 => 379,  1225 => 372,  1220 => 371,  1214 => 368,  1211 => 367,  1209 => 366,  1205 => 364,  1197 => 362,  1194 => 361,  1192 => 360,  1189 => 359,  1187 => 358,  1181 => 357,  1171 => 354,  1168 => 353,  1162 => 352,  1152 => 348,  1149 => 347,  1143 => 346,  1136 => 343,  1133 => 342,  1130 => 341,  1127 => 340,  1124 => 339,  1118 => 337,  1116 => 336,  1110 => 335,  1101 => 331,  1097 => 329,  1088 => 327,  1084 => 326,  1081 => 325,  1075 => 323,  1073 => 322,  1069 => 321,  1066 => 320,  1063 => 319,  1060 => 318,  1054 => 317,  1047 => 313,  1045 => 312,  1043 => 311,  1035 => 310,  1029 => 309,  1022 => 306,  1020 => 305,  1018 => 304,  1010 => 303,  1004 => 302,  997 => 299,  995 => 298,  989 => 297,  982 => 294,  980 => 293,  974 => 292,  967 => 289,  965 => 288,  959 => 287,  952 => 284,  950 => 283,  944 => 282,  937 => 279,  935 => 278,  929 => 277,  923 => 276,  911 => 270,  906 => 268,  902 => 266,  891 => 260,  885 => 259,  875 => 252,  870 => 249,  867 => 248,  865 => 247,  859 => 245,  853 => 244,  846 => 241,  840 => 239,  838 => 238,  836 => 236,  829 => 231,  823 => 230,  819 => 228,  817 => 227,  815 => 225,  813 => 224,  811 => 223,  802 => 222,  800 => 221,  794 => 220,  785 => 214,  783 => 213,  781 => 212,  766 => 211,  763 => 210,  760 => 209,  757 => 208,  754 => 207,  751 => 206,  748 => 205,  745 => 204,  742 => 203,  739 => 202,  736 => 201,  734 => 200,  728 => 199,  721 => 196,  715 => 195,  708 => 192,  702 => 191,  695 => 188,  693 => 187,  687 => 185,  680 => 182,  678 => 181,  672 => 180,  664 => 174,  662 => 173,  660 => 172,  657 => 170,  655 => 169,  653 => 168,  647 => 167,  639 => 163,  637 => 162,  635 => 161,  632 => 159,  630 => 158,  628 => 157,  622 => 156,  614 => 152,  608 => 149,  607 => 148,  603 => 147,  599 => 146,  596 => 144,  590 => 141,  589 => 140,  585 => 139,  583 => 138,  581 => 137,  575 => 136,  568 => 133,  566 => 132,  560 => 131,  551 => 126,  548 => 125,  540 => 124,  535 => 122,  533 => 121,  531 => 120,  528 => 118,  526 => 117,  520 => 116,  511 => 111,  509 => 110,  507 => 108,  506 => 107,  505 => 106,  504 => 105,  499 => 103,  497 => 102,  495 => 101,  492 => 99,  490 => 98,  484 => 97,  476 => 93,  474 => 92,  472 => 91,  470 => 90,  468 => 89,  464 => 88,  462 => 87,  459 => 85,  457 => 84,  451 => 83,  443 => 79,  441 => 78,  439 => 77,  433 => 76,  426 => 73,  420 => 71,  418 => 70,  416 => 69,  410 => 67,  407 => 66,  405 => 65,  402 => 64,  396 => 63,  389 => 60,  387 => 59,  381 => 58,  374 => 55,  372 => 54,  366 => 53,  359 => 50,  356 => 48,  354 => 47,  348 => 46,  336 => 40,  331 => 38,  327 => 36,  314 => 26,  309 => 23,  306 => 22,  304 => 21,  302 => 19,  296 => 18,  289 => 13,  286 => 11,  284 => 9,  283 => 8,  282 => 7,  281 => 6,  279 => 5,  277 => 4,  271 => 3,  264 => 471,  261 => 470,  259 => 457,  256 => 455,  254 => 408,  251 => 406,  249 => 384,  246 => 383,  244 => 379,  241 => 378,  239 => 357,  236 => 356,  234 => 352,  231 => 351,  229 => 346,  227 => 335,  225 => 317,  222 => 315,  220 => 309,  217 => 308,  215 => 302,  212 => 301,  210 => 297,  207 => 296,  205 => 292,  202 => 291,  200 => 287,  197 => 286,  195 => 282,  192 => 281,  190 => 276,  187 => 275,  185 => 244,  182 => 243,  180 => 220,  177 => 219,  174 => 217,  172 => 199,  169 => 198,  167 => 195,  164 => 194,  162 => 191,  159 => 190,  157 => 185,  154 => 184,  152 => 180,  149 => 179,  146 => 177,  144 => 167,  141 => 166,  139 => 156,  136 => 155,  134 => 136,  131 => 135,  129 => 131,  126 => 130,  124 => 116,  121 => 115,  119 => 97,  116 => 96,  114 => 83,  111 => 82,  109 => 76,  106 => 75,  104 => 63,  101 => 62,  99 => 58,  96 => 57,  94 => 53,  91 => 52,  89 => 46,  86 => 45,  84 => 18,  81 => 17,  78 => 15,  76 => 3,  73 => 2,  14 => 1,);
    }
}
/* {% use 'form_div_layout.html.twig' %}*/
/* */
/* {% block form_start -%}*/
/*     {% if 'easyadmin' == block_prefixes|slice(-2)|first %}*/
/*         {% set attr = attr|merge({*/
/*             'class': attr.class|default('') ~ ' ' ~ easyadmin.view ~ '-form',*/
/*             'data-view': easyadmin.view,*/
/*             'data-entity': easyadmin.entity.name,*/
/*             'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),*/
/*         }) %}*/
/*     {% endif %}*/
/* */
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget %}*/
/*     {{- parent() -}}*/
/* */
/*     {% if form.parent.vars.allow_delete|default(false) %}*/
/*         {% set remove_item_javascript %}*/
/*             $(function() {*/
/*             if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*             var containerDiv = $('#{{ id }}').parents('.form-group:first');*/
/*             var parentDiv = containerDiv.parents('[data-prototype]:first');*/
/*             containerDiv.remove();*/
/*             parentDiv.trigger('easyadmin.collection.item-deleted');*/
/* */
/*             if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {*/
/*                 $(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);*/
/*             }*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-item-action">*/
/*             <a href="#" onclick="{{ remove_item_javascript|raw }}" class="text-danger">*/
/*                 <i class="fa fa-remove"></i>*/
/*                 {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_widget %}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or type not in ['file', 'hidden'] %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do no display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw -}}*/
/*             {{- label is not same as(false) ? label|trans({}, 'messages') -}}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {% set _field_label = easyadmin.field['label']|default(null) %}*/
/*         {{- form_label(form, _field_label, { translation_domain: 'messages' }) -}}*/
/*         {{- form_widget(form) -}}*/
/* */
/*         {% if _field_type in ['datetime', 'datetimetz', 'date', 'time'] and easyadmin.field.nullable|default(false) %}*/
/*             <div class="nullable-control">*/
/*                 <label>*/
/*                     <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                     {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                 </label>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {{- form_errors(form) -}}*/
/* */
/*         {% if easyadmin.field.help|default('') != '' %}*/
/*             <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans|raw }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block collection_row %}*/
/*     {{ block('form_row') }}*/
/* */
/*     {% if allow_add|default(false) %}*/
/*         {% set js_add_item %}*/
/*             $(function() {*/
/*                 if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*                 var collection = $('#{{ id }}');*/
/*                 var numItems = collection.children('div.form-group').length;*/
/* */
/*                 collection.prev('.collection-empty').remove();*/
/* */
/*                 var newItem = collection.attr('data-prototype')*/
/*                     .replace(/\>__name__label__\</g, '>' + numItems + '<')*/
/*                     .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)*/
/*                     .replace(/{{ name }}\]\[__name__\]/g, '{{ name }}][' + numItems + ']')*/
/*                 ;*/
/* */
/*                 collection.append(newItem).trigger('easyadmin.collection.item-added');*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-action">*/
/*             <a href="#" onclick="{{ js_add_item|raw }}" class="text-primary">*/
/*                 <i class="fa fa-plus-square"></i>*/
/*                 {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock collection_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* {% block form_errors %}*/
/*     {% set error_count = errors|length %}*/
/*     {% if error_count >= 1 %}*/
/*         <div class="error-block">*/
/*             <span class="label label-danger">{{ 'errors'|transchoice(count = error_count, domain = 'EasyAdminBundle') }}</span>*/
/*             {% if error_count == 1 %}*/
/*                 {{ errors|first.message }}*/
/*             {% else %}*/
/*                 <ul>*/
/*                     {% for error in errors %}*/
/*                         <li>{{ error.message }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_errors %}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     {% if value is empty %}*/
/*         {{ block('empty_collection') }}*/
/*     {% endif %}*/
/*     {% if value is empty or form.vars.prototype is defined %}*/
/*         {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}*/
/*     {% endif %}*/
/* */
/*     {{ parent() }}*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {% block empty_collection %}*/
/*     <div class="empty collection-empty">*/
/*         <span class="label label-empty">{{ 'label.empty'|trans({}, 'EasyAdminBundle') }}</span>*/
/*     </div>*/
/* {% endblock empty_collection %}*/
/* */
/* {% block vich_file_row %}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
/* {% block vich_file_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-file">*/
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}*/
/*             <a href="{{ download_uri }}">{{ download_title }}</a>*/
/*         {% endif %}*/
/* */
/*         <div class="row">*/
/*             {% if form.delete is defined %}*/
/*             <div class="col-sm-3 col-md-2">*/
/*                 {{ form_row(form.delete, { label: 'action.delete' }) }}*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}">*/
/*                 {{ form_widget(form.file) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_row %}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-image">*/
/*         {{ form_widget(form.file) }}*/
/*         {% if form.delete is defined %}*/
/*             {{ form_row(form.delete, { label: 'action.delete' }) }}*/
/*         {% endif %}*/
/* */
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}*/
/* */
/*             <a href="#" class="easyadmin-thumbnail" data-featherlight="#{{ _lightbox_id }}" data-featherlight-close-on-click="anywhere">*/
/*                 <img src="{{ download_uri }}">*/
/*             </a>*/
/* */
/*             <div id="{{ _lightbox_id }}" class="easyadmin-lightbox">*/
/*                 <img src="{{ download_uri }}">*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {# EasyAdmin form type #}*/
/* {% block easyadmin_widget %}*/
/*     {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/* */
/*     {% if form.vars.errors|length > 0 %}*/
/*         {{ form_errors(form) }}*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <input type="hidden" name="referer" value="{{ app.request.query.get('referer', '') }}"/>*/
/* */
/*         {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}*/
/*             <div class="{{ field.vars.easyadmin.field.css_class|default('col-xs-12') }}">*/
/*                 {{ form_row(field) }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="col-xs-12 form-actions">*/
/*             <div class="form-group">*/
/*                 <div id="form-actions-row">*/
/*                     {% block item_actions %}*/
/*                         {# the 'save' action is hardcoded for the 'edit' and 'new' views #}*/
/*                         <button type="submit" class="btn btn-primary">*/
/*                             <i class="fa fa-save"></i> {{ 'action.save'|trans(_trans_parameters, 'messages') }}*/
/*                         </button>*/
/* */
/*                         {% set _entity_actions = (easyadmin.view == 'new')*/
/*                             ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)*/
/*                             : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}*/
/* */
/*                         {% set _entity_id = (easyadmin.view == 'new')*/
/*                             ? null*/
/*                             : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}*/
/* */
/*                         {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}*/
/* */
/*                         {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                             actions: _entity_actions,*/
/*                             request_parameters: _request_parameters,*/
/*                             trans_parameters: _trans_parameters,*/
/*                             item_id: _entity_id*/
/*                         }, with_context = false) }}*/
/*                     {% endblock item_actions %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock easyadmin_widget %}*/
/* */
/* {# EasyAdminAutocomplete form type #}*/
/* {% block easyadmin_autocomplete_row %}*/
/*     {{ form_row(form.autocomplete, {*/
/*         attr: attr|merge({*/
/*             'data-easyadmin-autocomplete-max-results': easyadmin_config('list.max_results'),*/
/*             'data-easyadmin-autocomplete-url' : path('easyadmin', {*/
/*                 action: 'autocomplete',*/
/*                 entity: easyadmin.entity.name,*/
/*                 property: easyadmin.field.fieldName,*/
/*                 view: easyadmin.view*/
/*             })|raw })*/
/*         })*/
/*     }}*/
/* {% endblock easyadmin_autocomplete_row %}*/
/* */
/* {% block easyadmin_autocomplete_inner_label %}*/
/*     {% set name = form.parent.vars.name %}*/
/*     {{- block('form_label') -}}*/
/* {% endblock easyadmin_autocomplete_inner_label %}*/
/* */
