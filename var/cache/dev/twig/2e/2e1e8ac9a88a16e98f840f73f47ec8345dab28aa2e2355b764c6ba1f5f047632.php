<?php

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_2835a3625fdaeefaba0b5847799d7c93e1c64d8fcbde3fb270f88da517ccd972 extends Twig_Template
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
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "@EasyAdmin/default/exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a6925f41ed14a97d458677b4816726ea58841ed3c86951884f2a9d5c9e1ee9b = $this->env->getExtension("native_profiler");
        $__internal_5a6925f41ed14a97d458677b4816726ea58841ed3c86951884f2a9d5c9e1ee9b->enter($__internal_5a6925f41ed14a97d458677b4816726ea58841ed3c86951884f2a9d5c9e1ee9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a6925f41ed14a97d458677b4816726ea58841ed3c86951884f2a9d5c9e1ee9b->leave($__internal_5a6925f41ed14a97d458677b4816726ea58841ed3c86951884f2a9d5c9e1ee9b_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_994f67bf22a8721d31077180e4649009893d4ef87585a29f07d29fcf5581dc08 = $this->env->getExtension("native_profiler");
        $__internal_994f67bf22a8721d31077180e4649009893d4ef87585a29f07d29fcf5581dc08->enter($__internal_994f67bf22a8721d31077180e4649009893d4ef87585a29f07d29fcf5581dc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_994f67bf22a8721d31077180e4649009893d4ef87585a29f07d29fcf5581dc08->leave($__internal_994f67bf22a8721d31077180e4649009893d4ef87585a29f07d29fcf5581dc08_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2464e9da308acdefba111dec721eeecab35dce0ec545b24426b44c333720418c = $this->env->getExtension("native_profiler");
        $__internal_2464e9da308acdefba111dec721eeecab35dce0ec545b24426b44c333720418c->enter($__internal_2464e9da308acdefba111dec721eeecab35dce0ec545b24426b44c333720418c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "ERROR";
        
        $__internal_2464e9da308acdefba111dec721eeecab35dce0ec545b24426b44c333720418c->leave($__internal_2464e9da308acdefba111dec721eeecab35dce0ec545b24426b44c333720418c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0c1465a4b3e19e3cf2a7b200ffddb436be545296888d3818ae35cb37f0037f3 = $this->env->getExtension("native_profiler");
        $__internal_a0c1465a4b3e19e3cf2a7b200ffddb436be545296888d3818ae35cb37f0037f3->enter($__internal_a0c1465a4b3e19e3cf2a7b200ffddb436be545296888d3818ae35cb37f0037f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a0c1465a4b3e19e3cf2a7b200ffddb436be545296888d3818ae35cb37f0037f3->leave($__internal_a0c1465a4b3e19e3cf2a7b200ffddb436be545296888d3818ae35cb37f0037f3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
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
