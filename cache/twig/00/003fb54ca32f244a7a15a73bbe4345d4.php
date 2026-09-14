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

/* @Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/01.home */
class __TwigTemplate_ddec5ba31c748147db6d690c0000c959 extends Template
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
        yield "<h1>Student Organization Information Hub</h1>
<h2>Welcome!</h2>
<p>Welcome to the official Student Organization Information Hub.</p>
<p>This website provides students with important announcements, upcoming activities, events, and information about our organization.</p>
<h2>📢 Latest Announcements</h2>
<ul>
<li>Welcome to the new school year!</li>
<li>Organization meeting will be held soon.</li>
<li>Check this website regularly for important updates.</li>
</ul>
<h2>📅 Upcoming Activities</h2>
<h3>Organization Meeting</h3>
<p>September 20, 2026</p>
<h3>Student Orientation</h3>
<p>September 25, 2026</p>
<h3>Organization Week</h3>
<p>October 5–9, 2026</p>
<h2>Stay Informed. Stay Involved.</h2>
<p>Visit the different sections of our website to learn more about the organization and its activities.</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/01.home";
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
        return new Source("<h1>Student Organization Information Hub</h1>
<h2>Welcome!</h2>
<p>Welcome to the official Student Organization Information Hub.</p>
<p>This website provides students with important announcements, upcoming activities, events, and information about our organization.</p>
<h2>📢 Latest Announcements</h2>
<ul>
<li>Welcome to the new school year!</li>
<li>Organization meeting will be held soon.</li>
<li>Check this website regularly for important updates.</li>
</ul>
<h2>📅 Upcoming Activities</h2>
<h3>Organization Meeting</h3>
<p>September 20, 2026</p>
<h3>Student Orientation</h3>
<p>September 25, 2026</p>
<h3>Organization Week</h3>
<p>October 5–9, 2026</p>
<h2>Stay Informed. Stay Involved.</h2>
<p>Visit the different sections of our website to learn more about the organization and its activities.</p>", "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/01.home", "");
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
