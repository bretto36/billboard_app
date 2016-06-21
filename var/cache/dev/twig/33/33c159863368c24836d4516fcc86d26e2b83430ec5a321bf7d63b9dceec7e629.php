<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_79f82edfc3104add97084dcf33638324d06f0ea113c98ce3c4d263e5feb4e1cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb73469a5dbcf049a9918ef2253f7061ff4ea6f48b892a891972fed919000d40 = $this->env->getExtension("native_profiler");
        $__internal_fb73469a5dbcf049a9918ef2253f7061ff4ea6f48b892a891972fed919000d40->enter($__internal_fb73469a5dbcf049a9918ef2253f7061ff4ea6f48b892a891972fed919000d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb73469a5dbcf049a9918ef2253f7061ff4ea6f48b892a891972fed919000d40->leave($__internal_fb73469a5dbcf049a9918ef2253f7061ff4ea6f48b892a891972fed919000d40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4105b61eaf722e9cf44693624179dc12ea27a37afc392cdd7318272e62b6e1bf = $this->env->getExtension("native_profiler");
        $__internal_4105b61eaf722e9cf44693624179dc12ea27a37afc392cdd7318272e62b6e1bf->enter($__internal_4105b61eaf722e9cf44693624179dc12ea27a37afc392cdd7318272e62b6e1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4105b61eaf722e9cf44693624179dc12ea27a37afc392cdd7318272e62b6e1bf->leave($__internal_4105b61eaf722e9cf44693624179dc12ea27a37afc392cdd7318272e62b6e1bf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
