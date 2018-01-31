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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03938903b1dee8587d74dab8fadae676356db3cc651e9f991797c75a35386406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03938903b1dee8587d74dab8fadae676356db3cc651e9f991797c75a35386406->enter($__internal_03938903b1dee8587d74dab8fadae676356db3cc651e9f991797c75a35386406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $__internal_8c5a80d2910badaf6ca389769b6de62b260f2a08401f3a5e6c3b62e5f8bc6756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5a80d2910badaf6ca389769b6de62b260f2a08401f3a5e6c3b62e5f8bc6756->enter($__internal_8c5a80d2910badaf6ca389769b6de62b260f2a08401f3a5e6c3b62e5f8bc6756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03938903b1dee8587d74dab8fadae676356db3cc651e9f991797c75a35386406->leave($__internal_03938903b1dee8587d74dab8fadae676356db3cc651e9f991797c75a35386406_prof);

        
        $__internal_8c5a80d2910badaf6ca389769b6de62b260f2a08401f3a5e6c3b62e5f8bc6756->leave($__internal_8c5a80d2910badaf6ca389769b6de62b260f2a08401f3a5e6c3b62e5f8bc6756_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5caef076f94e1bb2b5df46fb154ee7812b7c47507c20f7e26d3a42df0f3e8975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5caef076f94e1bb2b5df46fb154ee7812b7c47507c20f7e26d3a42df0f3e8975->enter($__internal_5caef076f94e1bb2b5df46fb154ee7812b7c47507c20f7e26d3a42df0f3e8975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4ec4a5443f447df84ae7096ca0ed91caefe02926c3a69c1d67483594a50cc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ec4a5443f447df84ae7096ca0ed91caefe02926c3a69c1d67483594a50cc12->enter($__internal_a4ec4a5443f447df84ae7096ca0ed91caefe02926c3a69c1d67483594a50cc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifyuser");
        echo "\"><img class=\"card-img-top\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "</h5>
              <p class=\"card-text\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "type", array()), "html", null, true);
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 23, $this->getSourceContext()); })()), "content", array()), "observations", array()), "validated", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obs"]) {
            // line 24
            echo "      <form method=\"post\"> 
        <tr>                
         <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "name", array()), "html", null, true);
            echo "</td>
         <td><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "image", array()))), "html", null, true);
            echo "\" alt=\"photo observée\"></td>
         <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lat", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lng", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "type", array()), "html", null, true);
            echo "</td>
      </tr>
      </form>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          ";
        // line 35
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
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 46, $this->getSourceContext()); })()), "content", array()), "observations", array()), "queued", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obs"]) {
            echo "   
      <tr>                
         <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "name", array()), "html", null, true);
            echo "</td>
         <td><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "image", array()))), "html", null, true);
            echo "\" alt=\"photo observée\"></td>
         <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lat", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lng", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "type", array()), "html", null, true);
            echo "</td>

      </form>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  </table>
";
        
        $__internal_a4ec4a5443f447df84ae7096ca0ed91caefe02926c3a69c1d67483594a50cc12->leave($__internal_a4ec4a5443f447df84ae7096ca0ed91caefe02926c3a69c1d67483594a50cc12_prof);

        
        $__internal_5caef076f94e1bb2b5df46fb154ee7812b7c47507c20f7e26d3a42df0f3e8975->leave($__internal_5caef076f94e1bb2b5df46fb154ee7812b7c47507c20f7e26d3a42df0f3e8975_prof);

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
        return array (  166 => 56,  156 => 52,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  133 => 46,  120 => 35,  118 => 34,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  88 => 24,  84 => 23,  67 => 9,  63 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
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
{%endblock%}", "Administration/UserDashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\UserDashboard.html.twig");
    }
}
