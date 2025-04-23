<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Admin/plan.html.twig */
class __TwigTemplate_0568b1879392642956b39c43342cd7f2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'FormArmor_body' => [$this, 'block_FormArmor_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plan.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plan.html.twig"));

        $this->parent = $this->loadTemplate("admin_layout.html.twig", "Admin/plan.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_FormArmor_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FormArmor_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        yield "\t<h2>AFFICHAGE DES PLANS DE FORMATION</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Client</th>
\t\t\t<th>Formation</th>
\t\t\t<th>Effectué</th>
\t\t\t<th colspan=\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lesPlans"]) || array_key_exists("lesPlans", $context) ? $context["lesPlans"] : (function () { throw new RuntimeError('Variable "lesPlans" does not exist.', 15, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 16
            yield "\t\t\t\t<tr ";
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16) % 2 == 0)) {
                yield " class=\"success\" ";
            } else {
                yield " class=\"info\" ";
            }
            yield ">
\t\t\t\t\t<td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "client", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "formation", [], "any", false, false, false, 19), "libelle", [], "any", false, false, false, 19), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "formation", [], "any", false, false, false, 19), "niveau", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
\t\t\t\t\t";
            // line 20
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "effectue", [], "any", false, false, false, 20) == 1)) {
                // line 21
                yield "\t\t\t\t\t\t<td>Oui</td>
\t\t\t\t\t";
            } else {
                // line 23
                yield "\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t";
            }
            // line 25
            yield "\t\t\t\t\t<td><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPlanModif", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPlanSupp", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "\t\t</tbody>
\t</table>
\t
\t";
        // line 32
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesPlans"]) || array_key_exists("lesPlans", $context) ? $context["lesPlans"] : (function () { throw new RuntimeError('Variable "lesPlans" does not exist.', 32, $this->source); })()));
        yield "
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu5').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/plan.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  168 => 32,  163 => 29,  146 => 26,  141 => 25,  137 => 23,  133 => 21,  131 => 20,  125 => 19,  121 => 18,  117 => 17,  107 => 16,  90 => 15,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin_layout.html.twig' %}
{% block FormArmor_body %}
\t<h2>AFFICHAGE DES PLANS DE FORMATION</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Client</th>
\t\t\t<th>Formation</th>
\t\t\t<th>Effectué</th>
\t\t\t<th colspan=\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for plan in lesPlans %}
\t\t\t\t<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class=\"success\" {% else %} class=\"info\" {% endif %}>
\t\t\t\t\t<td>{{plan.id}}</td>
\t\t\t\t\t<td>{{plan.client.username}}</td>
\t\t\t\t\t<td>{{plan.formation.libelle}}-{{plan.formation.niveau}}</td>
\t\t\t\t\t{% if (plan.effectue == 1) %}
\t\t\t\t\t\t<td>Oui</td>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<td><a href=\"{{ path('adminPlanModif', {'id': plan.id}) }}\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"{{ path('adminPlanSupp', {'id': plan.id}) }}\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t
\t{{ knp_pagination_render(lesPlans) }}
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu5').attr('class', 'active');
\t\t});
\t</script>
\t
{% endblock %}", "Admin/plan.html.twig", "C:\\wamp64\\www\\FormArmor\\templates\\admin\\plan.html.twig");
    }
}
