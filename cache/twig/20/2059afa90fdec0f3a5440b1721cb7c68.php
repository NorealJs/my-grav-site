<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/06.contact-us */
class __TwigTemplate_35de409d30eb1cd89b291b63f036f6c9 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<h1>Contact Us</h1>
<p>If you have questions, suggestions, or concerns, you can contact the organization using the information below.</p>
<h2>Organization Office</h2>
<p><strong>Email:</strong> <a href=\"mailto:studentorganization@example.com\">studentorganization@example.com</a></p>
<p><strong>School:</strong> Your School Name</p>
<p><strong>Office:</strong> Student Organization Office</p>
<h2>Social Media</h2>
<p><strong>Facebook:</strong> Student Organization</p>
<p><strong>Instagram:</strong> @studentorganization</p>
<h2>Office Hours</h2>
<p>Monday–Friday</p>
<p>8:00 AM – 5:00 PM</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/06.contact-us";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Contact Us</h1>
<p>If you have questions, suggestions, or concerns, you can contact the organization using the information below.</p>
<h2>Organization Office</h2>
<p><strong>Email:</strong> <a href=\"mailto:studentorganization@example.com\">studentorganization@example.com</a></p>
<p><strong>School:</strong> Your School Name</p>
<p><strong>Office:</strong> Student Organization Office</p>
<h2>Social Media</h2>
<p><strong>Facebook:</strong> Student Organization</p>
<p><strong>Instagram:</strong> @studentorganization</p>
<h2>Office Hours</h2>
<p>Monday–Friday</p>
<p>8:00 AM – 5:00 PM</p>", "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/06.contact-us", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
