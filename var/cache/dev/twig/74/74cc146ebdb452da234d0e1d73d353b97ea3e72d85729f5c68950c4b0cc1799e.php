<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_c29ff28cfab7bbf1da2e68febe24bf26c07397e55c19d7acf8ff80eadb6a967f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_880854db6859e152205179885d8fca8de5beeb2de731bbc16783c87ae64108c2 = $this->env->getExtension("native_profiler");
        $__internal_880854db6859e152205179885d8fca8de5beeb2de731bbc16783c87ae64108c2->enter($__internal_880854db6859e152205179885d8fca8de5beeb2de731bbc16783c87ae64108c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_880854db6859e152205179885d8fca8de5beeb2de731bbc16783c87ae64108c2->leave($__internal_880854db6859e152205179885d8fca8de5beeb2de731bbc16783c87ae64108c2_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_641119b7bcfccb1d2c4962038f40f71242c2681f45b816e49d6a521ad5f527cd = $this->env->getExtension("native_profiler");
        $__internal_641119b7bcfccb1d2c4962038f40f71242c2681f45b816e49d6a521ad5f527cd->enter($__internal_641119b7bcfccb1d2c4962038f40f71242c2681f45b816e49d6a521ad5f527cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_641119b7bcfccb1d2c4962038f40f71242c2681f45b816e49d6a521ad5f527cd->leave($__internal_641119b7bcfccb1d2c4962038f40f71242c2681f45b816e49d6a521ad5f527cd_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_facdb8bbc1fe932b496d47cb6266248cc1e0b539b0164ce33077c71a6b9607f8 = $this->env->getExtension("native_profiler");
        $__internal_facdb8bbc1fe932b496d47cb6266248cc1e0b539b0164ce33077c71a6b9607f8->enter($__internal_facdb8bbc1fe932b496d47cb6266248cc1e0b539b0164ce33077c71a6b9607f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "ERROR";
        
        $__internal_facdb8bbc1fe932b496d47cb6266248cc1e0b539b0164ce33077c71a6b9607f8->leave($__internal_facdb8bbc1fe932b496d47cb6266248cc1e0b539b0164ce33077c71a6b9607f8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f57b1c427cee243d0a00d1d8718fa9bca16fd19288e28a273c2e8fb8bc200e9 = $this->env->getExtension("native_profiler");
        $__internal_9f57b1c427cee243d0a00d1d8718fa9bca16fd19288e28a273c2e8fb8bc200e9->enter($__internal_9f57b1c427cee243d0a00d1d8718fa9bca16fd19288e28a273c2e8fb8bc200e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1>Error</h1>

            <div class=\"error-message\">
                <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "safeMessage", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </section>
";
        
        $__internal_9f57b1c427cee243d0a00d1d8718fa9bca16fd19288e28a273c2e8fb8bc200e9->leave($__internal_9f57b1c427cee243d0a00d1d8718fa9bca16fd19288e28a273c2e8fb8bc200e9_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  68 => 12,  62 => 11,  50 => 9,  38 => 8,  31 => 3,  29 => 1,  20 => 3,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% extends [*/
/*     _entity_config.templates.layout|default(''),*/
/*     easyadmin_config('design.templates.layout'),*/
/*     '@EasyAdmin/default/layout.html.twig'*/
/* ] %}*/
/* */
/* {% block body_class 'error' %}*/
/* {% block page_title 'ERROR' %}*/
/* */
/* {% block content %}*/
/*     <section id="main" class="content">*/
/*         <div class="error-description">*/
/*             <h1>Error</h1>*/
/* */
/*             <div class="error-message">*/
/*                 <p>{{ exception.safeMessage }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
