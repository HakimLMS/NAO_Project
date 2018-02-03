<?php

/* Administration/OrganizerDashboard.html.twig */
class __TwigTemplate_3d6d031b7add388249e40d05bb2ebf436e53555724b9a004463cab378eb609be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/OrganizerDashboard.html.twig", 1);
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
        $__internal_03ae5b9c894c0f961aa310c71b3ddf21d63e01c40bbb50de9c1bf46cf1464082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ae5b9c894c0f961aa310c71b3ddf21d63e01c40bbb50de9c1bf46cf1464082->enter($__internal_03ae5b9c894c0f961aa310c71b3ddf21d63e01c40bbb50de9c1bf46cf1464082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/OrganizerDashboard.html.twig"));

        $__internal_4e85a91b7c1e2fd3b186c1b0af7bec0ba355d4f76160108db78b3ba81ab9f234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e85a91b7c1e2fd3b186c1b0af7bec0ba355d4f76160108db78b3ba81ab9f234->enter($__internal_4e85a91b7c1e2fd3b186c1b0af7bec0ba355d4f76160108db78b3ba81ab9f234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/OrganizerDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03ae5b9c894c0f961aa310c71b3ddf21d63e01c40bbb50de9c1bf46cf1464082->leave($__internal_03ae5b9c894c0f961aa310c71b3ddf21d63e01c40bbb50de9c1bf46cf1464082_prof);

        
        $__internal_4e85a91b7c1e2fd3b186c1b0af7bec0ba355d4f76160108db78b3ba81ab9f234->leave($__internal_4e85a91b7c1e2fd3b186c1b0af7bec0ba355d4f76160108db78b3ba81ab9f234_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_664c0d8ae7694be621d2943ab4093bbae6145413cdb288bf712ae0a3259344aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664c0d8ae7694be621d2943ab4093bbae6145413cdb288bf712ae0a3259344aa->enter($__internal_664c0d8ae7694be621d2943ab4093bbae6145413cdb288bf712ae0a3259344aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78aa90abc8a2665b875fefc51ebc885d9644d5d3b64eb822394a9201941296ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78aa90abc8a2665b875fefc51ebc885d9644d5d3b64eb822394a9201941296ad->enter($__internal_78aa90abc8a2665b875fefc51ebc885d9644d5d3b64eb822394a9201941296ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
      <tr>
        <th>Nom</th>
        <th>Photo</th>
        <th>Lat</th>
        <th>Long</th>
        <th>Type</th>
        <th>Action à faire</th>
      </tr>
          ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 47, $this->getSourceContext()); })()), "content", array()), "observations", array()), "toValidate", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obs"]) {
            // line 48
            echo "
      <form method=\"post\">        
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
         <td> 
             <button type=\"submit\" formaction=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_obs", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "id", array()))), "html", null, true);
            echo "\">Valider</button>
             <button type=\"submit\" formaction=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deny_obs", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "id", array()))), "html", null, true);
            echo "\">Supprimer</button>
         </td>
      </tr>
      </form>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "  </table>
";
        
        $__internal_78aa90abc8a2665b875fefc51ebc885d9644d5d3b64eb822394a9201941296ad->leave($__internal_78aa90abc8a2665b875fefc51ebc885d9644d5d3b64eb822394a9201941296ad_prof);

        
        $__internal_664c0d8ae7694be621d2943ab4093bbae6145413cdb288bf712ae0a3259344aa->leave($__internal_664c0d8ae7694be621d2943ab4093bbae6145413cdb288bf712ae0a3259344aa_prof);

    }

    public function getTemplateName()
    {
        return "Administration/OrganizerDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 63,  168 => 58,  164 => 57,  159 => 55,  155 => 54,  151 => 53,  147 => 52,  143 => 51,  138 => 48,  134 => 47,  120 => 35,  118 => 34,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  88 => 24,  84 => 23,  67 => 9,  63 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
      <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
      <tr>
        <th>Nom</th>
        <th>Photo</th>
        <th>Lat</th>
        <th>Long</th>
        <th>Type</th>
        <th>Action à faire</th>
      </tr>
          {% for obs in data.content.observations.toValidate %}

      <form method=\"post\">        
      <tr>                
         <td>{{obs.name}}</td>
         <td><img src=\"{{asset('build/img/'~obs.image)}}\" alt=\"photo observée\"></td>
         <td>{{obs.lat}}</td>
         <td>{{obs.lng}}</td>
         <td>{{obs.type}}</td>
         <td> 
             <button type=\"submit\" formaction=\"{{path('validate_obs', {'id' : obs.id})}}\">Valider</button>
             <button type=\"submit\" formaction=\"{{path('deny_obs', {'id' : obs.id})}}\">Supprimer</button>
         </td>
      </tr>
      </form>
          {% endfor %}
  </table>
{%endblock%}
", "Administration/OrganizerDashboard.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Administration\\OrganizerDashboard.html.twig");
    }
}
