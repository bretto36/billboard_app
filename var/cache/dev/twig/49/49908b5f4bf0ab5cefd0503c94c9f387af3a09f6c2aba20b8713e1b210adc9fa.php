<?php

/* @EasyAdmin/default/field_image.html.twig */
class __TwigTemplate_7349af1c7ae8df02f9ca1cb78718fc15b9cd7a07ffa6bd7819cac806fc8df049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfa8f50b87250c42342660a779e98edf318d3d9379695981315f38e7f75e1b52 = $this->env->getExtension("native_profiler");
        $__internal_bfa8f50b87250c42342660a779e98edf318d3d9379695981315f38e7f75e1b52->enter($__internal_bfa8f50b87250c42342660a779e98edf318d3d9379695981315f38e7f75e1b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_bfa8f50b87250c42342660a779e98edf318d3d9379695981315f38e7f75e1b52->leave($__internal_bfa8f50b87250c42342660a779e98edf318d3d9379695981315f38e7f75e1b52_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  33 => 5,  27 => 2,  22 => 1,);
    }
}
/* <a href="#" class="easyadmin-thumbnail" data-featherlight="#easyadmin-lightbox-{{ uuid }}" data-featherlight-close-on-click="anywhere">*/
/*     <img src="{{ value }}">*/
/* </a>*/
/* */
/* <div id="easyadmin-lightbox-{{ uuid }}" class="easyadmin-lightbox">*/
/*     <img src="{{ value }}">*/
/* </div>*/
/* */
