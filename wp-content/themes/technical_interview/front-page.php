<h1>Technical interview</h1>
<h2>Introduction</h2>
<p>Welcome to the technical interview. Thank you for your interest in the role. I hope you find this interview challenging and enjoyable. -James</p>

<h2>Goal</h2>
<p>The goal of this interview is to see how well you can complete low-level tasks associated with WordPress.</p>

<h2>Tasks</h2>
<ol>
    <li>Update the styling of the contact form page, to match <a href="<?= Roots\Sage\Assets\asset_path('images/contact-page-example.png'); ?>">this screenshot.</a></li>
    <li>Validate the contact form fields using JavaScript.</li>
    <li>Submit the contact form using admin-ajax.php or the REST API.</li>
    <li>Validate the form fields using the WordPress plugin.</li>
    <li>Display error or success messages to the visitor when they submit the form.</li>
    <li>Use your plugin to send the contact form fields in an email.</li>
    <li>Commit the project to a public Git repository and send a link to <a href="mailto:private@jameswhayman.com">private@jameswhayman.com</a></li>
</ol>

<h2>Bonus points</h2>
<ul>
    <li>Use Composer to manage your plugin's dependencies.</li>
    <li>Use Bower to manage your Javascript dependencies.</li>
    <li>Use the build tools that come with the installed theme.</li>
    <li>Use separate directories, files and comments to keep your code clean and understandable.</li>
    <li>Use WordPress coding standards.</li>
</ul>

<h2>Restrictions</h2>
<ul>
    <li>You <strong>CAN</strong> use 3rd party PHP and Javascript libraries for data validation.</li>
    <li>You <strong>CANNOT</strong> use 3rd party WordPress plugins.</li>
    <li>Use Mailcatcher to intercept emails. You <strong>DO NOT</strong> need to send an external email.</li>
</ul>

<h2>Useful links</h2>
<ul>
    <li><a href="https://github.com/roots/sage">Roots Sage WordPress theme</a></li>
    <li><a href="https://developer.wordpress.org/plugins/security/data-validation/">Data validation</a></li>
    <li><a href="https://bower.io/">Bower package manager</a></li>
    <li><a href="http://gulpjs.com/">Gulp, streaming builds</a></li>
    <li><a href="http://parsleyjs.org/">Parsley.js, Javascript data validation</a></li>
    <li><a href="https://getcomposer.org/">PHP composer package manager</a></li>
    <li><a href="https://github.com/Respect/Validation">Respect validation, PHP data validation</a></li>
    <li><a href="https://mailcatcher.me/">Mailcatcher</a></li>
    <li><a href="https://codex.wordpress.org/WordPress_Coding_Standards">WordPress coding standards</a></li>
</ul>

<h2>Notes</h2>
<ul>
    <li>All accounts are <code>root:candidate</code> or <code>candidate:candidate</code>.</li>
    <li>If something is not working, send me details of the error and a screenshot to <a href="mailto:private@jameswhayman.com">private@jameswhayman.com</a>.</li>
</ul>