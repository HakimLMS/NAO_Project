<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c4bc26f7203e5f39eb05147e24068f05ee0caf85932ce27b317313b834fe3186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d026fb5b88b8a913c731b344d21e256b03e9be379392244b09f0ff33c6acda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d026fb5b88b8a913c731b344d21e256b03e9be379392244b09f0ff33c6acda7->enter($__internal_4d026fb5b88b8a913c731b344d21e256b03e9be379392244b09f0ff33c6acda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_eae23608015ede6710da80779bae3d443ae2de4efc5bc3aac604cdc1bb8c5543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae23608015ede6710da80779bae3d443ae2de4efc5bc3aac604cdc1bb8c5543->enter($__internal_eae23608015ede6710da80779bae3d443ae2de4efc5bc3aac604cdc1bb8c5543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_4d026fb5b88b8a913c731b344d21e256b03e9be379392244b09f0ff33c6acda7->leave($__internal_4d026fb5b88b8a913c731b344d21e256b03e9be379392244b09f0ff33c6acda7_prof);

        
        $__internal_eae23608015ede6710da80779bae3d443ae2de4efc5bc3aac604cdc1bb8c5543->leave($__internal_eae23608015ede6710da80779bae3d443ae2de4efc5bc3aac604cdc1bb8c5543_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_46d09c1913f765ef9a35d9ae1e0bac1a10f94b943fae6dc46d63a67b398d3119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d09c1913f765ef9a35d9ae1e0bac1a10f94b943fae6dc46d63a67b398d3119->enter($__internal_46d09c1913f765ef9a35d9ae1e0bac1a10f94b943fae6dc46d63a67b398d3119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_19d5ffd6233782817b2ff8a63b5e56f726ab9fbd77e41ec19f363c52ece4afc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d5ffd6233782817b2ff8a63b5e56f726ab9fbd77e41ec19f363c52ece4afc4->enter($__internal_19d5ffd6233782817b2ff8a63b5e56f726ab9fbd77e41ec19f363c52ece4afc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_19d5ffd6233782817b2ff8a63b5e56f726ab9fbd77e41ec19f363c52ece4afc4->leave($__internal_19d5ffd6233782817b2ff8a63b5e56f726ab9fbd77e41ec19f363c52ece4afc4_prof);

        
        $__internal_46d09c1913f765ef9a35d9ae1e0bac1a10f94b943fae6dc46d63a67b398d3119->leave($__internal_46d09c1913f765ef9a35d9ae1e0bac1a10f94b943fae6dc46d63a67b398d3119_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cf7fd4cf13af12e0ef15c191b169a40d4b11a8d05d77af384380553ed2469043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf7fd4cf13af12e0ef15c191b169a40d4b11a8d05d77af384380553ed2469043->enter($__internal_cf7fd4cf13af12e0ef15c191b169a40d4b11a8d05d77af384380553ed2469043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_92d9fcb0ed68289df72f7d92a022866054a1d64fb471c14cfb0cad67a5765e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d9fcb0ed68289df72f7d92a022866054a1d64fb471c14cfb0cad67a5765e78->enter($__internal_92d9fcb0ed68289df72f7d92a022866054a1d64fb471c14cfb0cad67a5765e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_92d9fcb0ed68289df72f7d92a022866054a1d64fb471c14cfb0cad67a5765e78->leave($__internal_92d9fcb0ed68289df72f7d92a022866054a1d64fb471c14cfb0cad67a5765e78_prof);

        
        $__internal_cf7fd4cf13af12e0ef15c191b169a40d4b11a8d05d77af384380553ed2469043->leave($__internal_cf7fd4cf13af12e0ef15c191b169a40d4b11a8d05d77af384380553ed2469043_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_17956199844c9431e058d415db574d8d8ed27e065a9de48b61c57558a53e7e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17956199844c9431e058d415db574d8d8ed27e065a9de48b61c57558a53e7e0f->enter($__internal_17956199844c9431e058d415db574d8d8ed27e065a9de48b61c57558a53e7e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_177140994f3a1692b4f8d89daa7a20ec68736819496618c035f26293259833b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177140994f3a1692b4f8d89daa7a20ec68736819496618c035f26293259833b4->enter($__internal_177140994f3a1692b4f8d89daa7a20ec68736819496618c035f26293259833b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_177140994f3a1692b4f8d89daa7a20ec68736819496618c035f26293259833b4->leave($__internal_177140994f3a1692b4f8d89daa7a20ec68736819496618c035f26293259833b4_prof);

        
        $__internal_17956199844c9431e058d415db574d8d8ed27e065a9de48b61c57558a53e7e0f->leave($__internal_17956199844c9431e058d415db574d8d8ed27e065a9de48b61c57558a53e7e0f_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b835cb67e15be50d119eda1942d84b9044dbd12d0fab454602f98e061cdcf896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b835cb67e15be50d119eda1942d84b9044dbd12d0fab454602f98e061cdcf896->enter($__internal_b835cb67e15be50d119eda1942d84b9044dbd12d0fab454602f98e061cdcf896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_695c8ea6675a8c1b4b93cc1417fda4a733c30fd43fb27f2f327ed76bcf1a331a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695c8ea6675a8c1b4b93cc1417fda4a733c30fd43fb27f2f327ed76bcf1a331a->enter($__internal_695c8ea6675a8c1b4b93cc1417fda4a733c30fd43fb27f2f327ed76bcf1a331a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_695c8ea6675a8c1b4b93cc1417fda4a733c30fd43fb27f2f327ed76bcf1a331a->leave($__internal_695c8ea6675a8c1b4b93cc1417fda4a733c30fd43fb27f2f327ed76bcf1a331a_prof);

        
        $__internal_b835cb67e15be50d119eda1942d84b9044dbd12d0fab454602f98e061cdcf896->leave($__internal_b835cb67e15be50d119eda1942d84b9044dbd12d0fab454602f98e061cdcf896_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7e2a4938fcc61df130a944a714be6d8a8d89e475cc74f8cea0d1cb1a186227c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2a4938fcc61df130a944a714be6d8a8d89e475cc74f8cea0d1cb1a186227c7->enter($__internal_7e2a4938fcc61df130a944a714be6d8a8d89e475cc74f8cea0d1cb1a186227c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c62ba4c0238617a0952c219188d115e824976237bd17971b4cfc8ed7010b4a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62ba4c0238617a0952c219188d115e824976237bd17971b4cfc8ed7010b4a3b->enter($__internal_c62ba4c0238617a0952c219188d115e824976237bd17971b4cfc8ed7010b4a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_c62ba4c0238617a0952c219188d115e824976237bd17971b4cfc8ed7010b4a3b->leave($__internal_c62ba4c0238617a0952c219188d115e824976237bd17971b4cfc8ed7010b4a3b_prof);

        
        $__internal_7e2a4938fcc61df130a944a714be6d8a8d89e475cc74f8cea0d1cb1a186227c7->leave($__internal_7e2a4938fcc61df130a944a714be6d8a8d89e475cc74f8cea0d1cb1a186227c7_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_436dbaeeaff6a82ea6f2370163e827a3d2e6a7d1d6805113d30823fe633c2af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436dbaeeaff6a82ea6f2370163e827a3d2e6a7d1d6805113d30823fe633c2af8->enter($__internal_436dbaeeaff6a82ea6f2370163e827a3d2e6a7d1d6805113d30823fe633c2af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c8c625df202f43fbbac2417b48ece90a2056c8d2e8d882ea313880308720b6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c625df202f43fbbac2417b48ece90a2056c8d2e8d882ea313880308720b6b8->enter($__internal_c8c625df202f43fbbac2417b48ece90a2056c8d2e8d882ea313880308720b6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_c8c625df202f43fbbac2417b48ece90a2056c8d2e8d882ea313880308720b6b8->leave($__internal_c8c625df202f43fbbac2417b48ece90a2056c8d2e8d882ea313880308720b6b8_prof);

        
        $__internal_436dbaeeaff6a82ea6f2370163e827a3d2e6a7d1d6805113d30823fe633c2af8->leave($__internal_436dbaeeaff6a82ea6f2370163e827a3d2e6a7d1d6805113d30823fe633c2af8_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_f3afc06a06644a698b4330820768ea2f8efb44e5ccfa099d0b1ae42f5186b4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3afc06a06644a698b4330820768ea2f8efb44e5ccfa099d0b1ae42f5186b4ba->enter($__internal_f3afc06a06644a698b4330820768ea2f8efb44e5ccfa099d0b1ae42f5186b4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_2b2709104a0c5661c736e02a68bafa2beed4e0b08958a51700133340b18e7c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2709104a0c5661c736e02a68bafa2beed4e0b08958a51700133340b18e7c46->enter($__internal_2b2709104a0c5661c736e02a68bafa2beed4e0b08958a51700133340b18e7c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_2b2709104a0c5661c736e02a68bafa2beed4e0b08958a51700133340b18e7c46->leave($__internal_2b2709104a0c5661c736e02a68bafa2beed4e0b08958a51700133340b18e7c46_prof);

        
        $__internal_f3afc06a06644a698b4330820768ea2f8efb44e5ccfa099d0b1ae42f5186b4ba->leave($__internal_f3afc06a06644a698b4330820768ea2f8efb44e5ccfa099d0b1ae42f5186b4ba_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_46b790ebb5f438b3a51391bc76964462f1f02954d9f28d3d2945fe7e10160a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b790ebb5f438b3a51391bc76964462f1f02954d9f28d3d2945fe7e10160a06->enter($__internal_46b790ebb5f438b3a51391bc76964462f1f02954d9f28d3d2945fe7e10160a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_702d356d34e87b5923206b6c2c536268529f987b51a01f99f307481465cb4008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702d356d34e87b5923206b6c2c536268529f987b51a01f99f307481465cb4008->enter($__internal_702d356d34e87b5923206b6c2c536268529f987b51a01f99f307481465cb4008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_702d356d34e87b5923206b6c2c536268529f987b51a01f99f307481465cb4008->leave($__internal_702d356d34e87b5923206b6c2c536268529f987b51a01f99f307481465cb4008_prof);

        
        $__internal_46b790ebb5f438b3a51391bc76964462f1f02954d9f28d3d2945fe7e10160a06->leave($__internal_46b790ebb5f438b3a51391bc76964462f1f02954d9f28d3d2945fe7e10160a06_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
