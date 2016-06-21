<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_03ec563a0b3da9a16ade5e6756fd07eb62adef8c22a631009f058852585ef26c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbfb98e0e7e5c308d350718e67d3884d9e6d330c5f124dcb7eb0dc6ddac6a3f3 = $this->env->getExtension("native_profiler");
        $__internal_cbfb98e0e7e5c308d350718e67d3884d9e6d330c5f124dcb7eb0dc6ddac6a3f3->enter($__internal_cbfb98e0e7e5c308d350718e67d3884d9e6d330c5f124dcb7eb0dc6ddac6a3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cbfb98e0e7e5c308d350718e67d3884d9e6d330c5f124dcb7eb0dc6ddac6a3f3->leave($__internal_cbfb98e0e7e5c308d350718e67d3884d9e6d330c5f124dcb7eb0dc6ddac6a3f3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_aaa6916aab7b8bae23f4ece6971099fe8d5f72ba6308da91d3a4232d37a8aefd = $this->env->getExtension("native_profiler");
        $__internal_aaa6916aab7b8bae23f4ece6971099fe8d5f72ba6308da91d3a4232d37a8aefd->enter($__internal_aaa6916aab7b8bae23f4ece6971099fe8d5f72ba6308da91d3a4232d37a8aefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_aaa6916aab7b8bae23f4ece6971099fe8d5f72ba6308da91d3a4232d37a8aefd->leave($__internal_aaa6916aab7b8bae23f4ece6971099fe8d5f72ba6308da91d3a4232d37a8aefd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
