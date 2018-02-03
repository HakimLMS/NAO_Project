<?php

/* Administration/UserDashboard.html.twig */
class __TwigTemplate_2d7d3df62af0ba662b89f636341e771aba407f6287752f4e9946bdff3d097df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/UserDashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fb7daac8ee5fa1540e4617fa46d5a57c2357cd0866571c4b271257355b50d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb7daac8ee5fa1540e4617fa46d5a57c2357cd0866571c4b271257355b50d00->enter($__internal_9fb7daac8ee5fa1540e4617fa46d5a57c2357cd0866571c4b271257355b50d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $__internal_56d0d869f868ddece4a922c1a162b88b070a00aca68bc0a53148b0df391e9edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d0d869f868ddece4a922c1a162b88b070a00aca68bc0a53148b0df391e9edf->enter($__internal_56d0d869f868ddece4a922c1a162b88b070a00aca68bc0a53148b0df391e9edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fb7daac8ee5fa1540e4617fa46d5a57c2357cd0866571c4b271257355b50d00->leave($__internal_9fb7daac8ee5fa1540e4617fa46d5a57c2357cd0866571c4b271257355b50d00_prof);

        
        $__internal_56d0d869f868ddece4a922c1a162b88b070a00aca68bc0a53148b0df391e9edf->leave($__internal_56d0d869f868ddece4a922c1a162b88b070a00aca68bc0a53148b0df391e9edf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1578222752c0a86f49237ba59b45138df70c5e126b71ff985428a01055264ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1578222752c0a86f49237ba59b45138df70c5e126b71ff985428a01055264ae5->enter($__internal_1578222752c0a86f49237ba59b45138df70c5e126b71ff985428a01055264ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cff838b2eadf8f6cd18f5ddc1a1d17757cf5a8569421ce87271dc57fee697b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff838b2eadf8f6cd18f5ddc1a1d17757cf5a8569421ce87271dc57fee697b08->enter($__internal_cff838b2eadf8f6cd18f5ddc1a1d17757cf5a8569421ce87271dc57fee697b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon espace";
        
        $__internal_cff838b2eadf8f6cd18f5ddc1a1d17757cf5a8569421ce87271dc57fee697b08->leave($__internal_cff838b2eadf8f6cd18f5ddc1a1d17757cf5a8569421ce87271dc57fee697b08_prof);

        
        $__internal_1578222752c0a86f49237ba59b45138df70c5e126b71ff985428a01055264ae5->leave($__internal_1578222752c0a86f49237ba59b45138df70c5e126b71ff985428a01055264ae5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a96b941a40f752675c2a60fa222a8d358b4901e2ed35e3557fb00ea54e2a57a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96b941a40f752675c2a60fa222a8d358b4901e2ed35e3557fb00ea54e2a57a2->enter($__internal_a96b941a40f752675c2a60fa222a8d358b4901e2ed35e3557fb00ea54e2a57a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9408a7c96a8cc706b9913e6499a43f66fb07a1e7386b52988508450fbbd1181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9408a7c96a8cc706b9913e6499a43f66fb07a1e7386b52988508450fbbd1181->enter($__internal_b9408a7c96a8cc706b9913e6499a43f66fb07a1e7386b52988508450fbbd1181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifyuser");
        echo "\"><img class=\"card-img-top\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "</h5>
              <p class=\"card-text\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo "</p>
            </div>
        </div>        
    </div>
      <table id=\"observationtable\">
      <h2 class=\"h2tabdashboard\">Observations</h2> 
      <tr>
        <th>Nom</th>
        <th>Photo</th>
        <th>Lat</th>
        <th>Long</th>
        <th>Type</th>
        <th>Action à faire</th>
      </tr>
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 26, $this->getSourceContext()); })()), "content", array()), "observations", array()), "validated", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obs"]) {
            // line 27
            echo "      <form method=\"post\"> 
        <tr>                
         <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "name", array()), "html", null, true);
            echo "</td>
         <td><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "image", array()))), "html", null, true);
            echo "\" alt=\"photo observée\"></td>
         <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lat", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lng", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "type", array()), "html", null, true);
            echo "</td>
      </tr>
      </form>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "          ";
        // line 38
        echo "  </table>

  <table id=\"obsqueudtable\">
      <h2 class=\"h2tabdashboard\">Observations en attente de validation</h2> 
      <tr>
        <th>Nom</th>
        <th>Photo</th>
        <th>Lat</th>
        <th>Long</th>
        <th>Type</th>
      </tr>
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 49, $this->getSourceContext()); })()), "content", array()), "observations", array()), "queued", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obs"]) {
            echo "   
      <tr>                
         <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "name", array()), "html", null, true);
            echo "</td>
         <td><img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "image", array()))), "html", null, true);
            echo "\" alt=\"photo observée\"></td>
         <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lat", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lng", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "type", array()), "html", null, true);
            echo "</td>

      </form>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </table>
";
        
        $__internal_b9408a7c96a8cc706b9913e6499a43f66fb07a1e7386b52988508450fbbd1181->leave($__internal_b9408a7c96a8cc706b9913e6499a43f66fb07a1e7386b52988508450fbbd1181_prof);

        
        $__internal_a96b941a40f752675c2a60fa222a8d358b4901e2ed35e3557fb00ea54e2a57a2->leave($__internal_a96b941a40f752675c2a60fa222a8d358b4901e2ed35e3557fb00ea54e2a57a2_prof);

    }

    public function getTemplateName()
    {
        return "Administration/UserDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 59,  175 => 55,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  152 => 49,  139 => 38,  137 => 37,  127 => 33,  123 => 32,  119 => 31,  115 => 30,  111 => 29,  107 => 27,  103 => 26,  86 => 12,  82 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Mon espace{% endblock %}

{% block body %}
    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               <a href=\"{{path('modifyuser')}}\"><img class=\"card-img-top\" src=\"{{asset('build/img/'~user.image)}}\" alt=\"{{user.firstname}}\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">{{user.firstname}}</h5>
              <p class=\"card-text\">{{user.type}}</p>
            </div>
        </div>        
    </div>
      <table id=\"observationtable\">
      <h2 class=\"h2tabdashboard\">Observations</h2> 
      <tr>
        <th>Nom</th>
        <th>Photo</th>
        <th>Lat</th>
        <th>Long</th>
        <th>Type</th>
        <th>Action à faire</th>
      </tr>
          {% for obs in data.content.observations.validated %}
      <form method=\"post\"> 
        <tr>                
         <td>{{obs.name}}</td>
         <td><img src=\"{{asset('build/img/'~obs.image)}}\" alt=\"photo observée\"></td>
         <td>{{obs.lat}}</td>
         <td>{{obs.lng}}</td>
         <td>{{obs.type}}</td>
      </tr>
      </form>
          {% endfor %}
          {# wire buttons to actions to validate or not the accounts #}
  </table>

  <table id=\"obsqueudtable\">
      <h2 class=\"h2tabdashboard\">Observations en attente de validation</h2> 
      <tr>
        <th>Nom</th>
        <th>Photo</th>
        <th>Lat</th>
        <th>Long</th>
        <th>Type</th>
      </tr>
          {% for obs in data.content.observations.queued %}   
      <tr>                
         <td>{{obs.name}}</td>
         <td><img src=\"{{asset('build/img/'~obs.image)}}\" alt=\"photo observée\"></td>
         <td>{{obs.lat}}</td>
         <td>{{obs.lng}}</td>
         <td>{{obs.type}}</td>

      </form>
          {% endfor %}
  </table>
{%endblock%}", "Administration/UserDashboard.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Administration\\UserDashboard.html.twig");
    }
}
