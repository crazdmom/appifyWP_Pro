<?php
/**
 * Template Name: Scaffolding Guide, no sidebar
 *
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
  <h1><?php the_title(); ?></h1>
       <p class="lead">Bootstrap is built on responsive 12-column grids, layouts, and components.</p>
  </div>
</header>


<div class="container">
 <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#global"><i class="icon-chevron-right"></i> Global styles</a></li>
          <li><a href="#gridSystem"><i class="icon-chevron-right"></i> Grid system</a></li>
          <li><a href="#fluidGridSystem"><i class="icon-chevron-right"></i> Fluid grid system</a></li>
          <li><a href="#layouts"><i class="icon-chevron-right"></i> Layouts</a></li>
          <li><a href="#responsive"><i class="icon-chevron-right"></i> Responsive design</a></li>
        </ul>
      </div>
      <div class="span9">



        <!-- Global Bootstrap settings
        ================================================== -->
        <section id="global">
          <div class="page-header">
            <h1>Global settings</h1>
          </div>

          <h3>Requires HTML5 doctype</h3>
          <p>Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Include it at the beginning of all your projects.</p>
<pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
  ...
&lt;/html&gt;
</pre>

          <h3>Typography and links</h3>
          <p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>
          <ul>
            <li>Remove <code>margin</code> on the body</li>
            <li>Set <code>background-color: white;</code> on the <code>body</code></li>
            <li>Use the <code>@baseFontFamily</code>, <code>@baseFontSize</code>, and <code>@baseLineHeight</code> attributes as our typographic base</li>
            <li>Set the global link color via <code>@linkColor</code> and apply link underlines only on <code>:hover</code></li>
          </ul>
          <p>These styles can be found within <strong>scaffolding.less</strong>.</p>

          <h3>Reset via Normalize</h3>
          <p>With Bootstrap 2, the old reset block has been dropped in favor of <a href="http://necolas.github.com/normalize.css/" target="_blank">Normalize.css</a>, a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> that also powers the <a href="http://html5boilerplate.com" target="_blank">HTML5 Boilerplate</a>. While we use much of Normalize within our <strong>reset.less</strong>, we have removed some elements specifically for Bootstrap.</p>

        </section>




        <!-- Grid system
        ================================================== -->
        <section id="gridSystem">
          <div class="page-header">
            <h1>Default grid system</h1>
          </div>

          <h2>Live grid example</h2>
          <p>The default Bootstrap grid system utilizes <strong>12 columns</strong>, making for a 940px wide container without <a href="./scaffolding.html#responsive">responsive features</a> enabled. With the responsive CSS file added, the grid adapts to be 724px and 1170px wide depending on your viewport. Below 767px viewports, the columns become fluid and stack vertically.</p>
          <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
            </div>
            <div class="row show-grid">
              <div class="span2">2</div>
              <div class="span3">3</div>
              <div class="span4">4</div>
            </div>
            <div class="row show-grid">
              <div class="span4">4</div>
              <div class="span5">5</div>
            </div>
            <div class="row show-grid">
              <div class="span9">9</div>
            </div>
          </div>

          <h3>Basic grid HTML</h3>
          <p>For a simple two column layout, create a <code>.row</code> and add the appropriate number of <code>.span*</code> columns. As this is a 12-column grid, each <code>.span*</code> spans a number of those 12 columns, and should always add up to 12 for each row (or the number of columns in the parent).</p>
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span8"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
          <p>Given this example, we have <code>.span4</code> and <code>.span8</code>, making for 12 total columns and a complete row.</p>

          <h2>Offsetting columns</h2>
          <p>Move columns to the right using <code>.offset*</code> classes. Each class increases the left margin of a column by a whole column. For example, <code>.offset4</code> moves <code>.span4</code> over four columns.</p>
          <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span4">4</div>
              <div class="span3 offset2">3 offset 2</div>
            </div><!-- /row -->
            <div class="row show-grid">
              <div class="span3 offset1">3 offset 1</div>
              <div class="span3 offset2">3 offset 2</div>
            </div><!-- /row -->
            <div class="row show-grid">
              <div class="span6 offset3">6 offset 3</div>
            </div><!-- /row -->
          </div>
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span3 offset2"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>

          <h2>Nesting columns</h2>
          <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column. Nested rows should include a set of columns that add up to the number of columns of its parent.</p>
          <div class="row show-grid">
            <div class="span9">
              Level 1 column
              <div class="row show-grid">
                <div class="span6">
                  Level 2
                </div>
                <div class="span3">
                  Level 2
                </div>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span9"&gt;
    Level 1 column
    &lt;div class="row"&gt;
      &lt;div class="span6"&gt;Level 2&lt;/div&gt;
      &lt;div class="span3"&gt;Level 2&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
        </section>



        <!-- Fluid grid system
        ================================================== -->
        <section id="fluidGridSystem">
          <div class="page-header">
            <h1>Fluid grid system</h1>
          </div>

          <h2>Live fluid grid example</h2>
          <p>The fluid grid system uses percents instead of pixels for column widths. It has the same responsive capabilities as our fixed grid system, ensuring proper proportions for key screen resolutions and devices.</p>
          <div class="bs-docs-grid">
            <div class="row-fluid show-grid">
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
            </div>
            <div class="row-fluid show-grid">
              <div class="span4">4</div>
              <div class="span4">4</div>
              <div class="span4">4</div>
            </div>
            <div class="row-fluid show-grid">
              <div class="span4">4</div>
              <div class="span8">8</div>
            </div>
            <div class="row-fluid show-grid">
              <div class="span6">6</div>
              <div class="span6">6</div>
            </div>
            <div class="row-fluid show-grid">
              <div class="span12">12</div>
            </div>
          </div>

          <h3>Basic fluid grid HTML</h3>
          <p>Make any row "fluid" by changing <code>.row</code> to <code>.row-fluid</code>. The column classes stay the exact same, making it easy to flip between fixed and fluid grids.</p>
<pre class="prettyprint linenums">
&lt;div class="row-fluid"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span8"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>

          <h2>Fluid offsetting</h2>
          <p>Operates the same way as the fixed grid system offsetting: add <code>.offset*</code> to any column to offset by that many columns.</p>
          <div class="bs-docs-grid">
            <div class="row-fluid show-grid">
              <div class="span4">4</div>
              <div class="span4 offset4">4 offset 4</div>
            </div><!-- /row -->
            <div class="row-fluid show-grid">
              <div class="span3 offset3">3 offset 3</div>
              <div class="span3 offset3">3 offset 3</div>
            </div><!-- /row -->
            <div class="row-fluid show-grid">
              <div class="span6 offset6">6 offset 6</div>
            </div><!-- /row -->
          </div>
<pre class="prettyprint linenums">
&lt;div class="row-fluid"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span4 offset2"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>

          <h2>Fluid nesting</h2>
          <p>Nesting with fluid grids is a bit different: the number of nested columns should not match the parent's number of columns. Instead, each level of nested columns are reset because each row takes up 100% of the parent column.</p>
          <div class="row-fluid show-grid">
            <div class="span12">
              Fluid 12
              <div class="row-fluid show-grid">
                <div class="span6">
                  Fluid 6
                </div>
                <div class="span6">
                  Fluid 6
                </div>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums">
&lt;div class="row-fluid"&gt;
  &lt;div class="span12"&gt;
    Fluid 12
    &lt;div class="row-fluid"&gt;
      &lt;div class="span6"&gt;Fluid 6&lt;/div&gt;
      &lt;div class="span6"&gt;Fluid 6&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

        </section>




        <!-- Layouts (Default and fluid)
        ================================================== -->
        <section id="layouts">
          <div class="page-header">
            <h1>Layouts</h1>
          </div>

          <h2>Fixed layout</h2>
          <p>Provides a common fixed-width (and optionally responsive) layout with only <code>&lt;div class="container"&gt;</code> required.</p>
          <div class="mini-layout">
            <div class="mini-layout-body"></div>
          </div>
<pre class="prettyprint linenums">
&lt;body&gt;
  &lt;div class="container"&gt;
    ...
  &lt;/div&gt;
&lt;/body&gt;
</pre>

          <h2>Fluid layout</h2>
          <p>Create a fluid, two-column page with <code>&lt;div class="container-fluid"&gt;</code>&mdash;great for applications and docs.</p>
          <div class="mini-layout fluid">
            <div class="mini-layout-sidebar"></div>
            <div class="mini-layout-body"></div>
          </div>
<pre class="prettyprint linenums">
&lt;div class="container-fluid"&gt;
  &lt;div class="row-fluid"&gt;
    &lt;div class="span2"&gt;
      &lt;!--Sidebar content--&gt;
    &lt;/div&gt;
    &lt;div class="span10"&gt;
      &lt;!--Body content--&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
        </section>




        <!-- Responsive design
        ================================================== -->
        <section id="responsive">
          <div class="page-header">
            <h1>Responsive design</h1>
          </div>

          <h2>Enabling responsive features</h2>
          <p>Turn on responsive CSS in your project by including the proper meta tag and additional stylesheet within the <code>&lt;head&gt;</code> of your document. If you've compiled Bootstrap from the Customize page, you need only include the meta tag.</p>
<pre class="prettyprint linenums">
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
&lt;link href="assets/css/bootstrap-responsive.css" rel="stylesheet"&gt;
</pre>
          <p><span class="label label-info">Heads up!</span>  Bootstrap doesn't include responsive features by default at this time as not everything needs to be responsive. Instead of encouraging developers to remove this feature, we figure it best to enable it as needed.</p>

          <h2>About responsive Bootstrap</h2>
          <img src="assets/img/responsive-illustrations.png" alt="Responsive devices" style="float: right; margin: 0 0 20px 20px;">
          <p>Media queries allow for custom CSS based on a number of conditions&mdash;ratios, widths, display type, etc&mdash;but usually focuses around <code>min-width</code> and <code>max-width</code>.</p>
          <ul>
            <li>Modify the width of column in our grid</li>
            <li>Stack elements instead of float wherever necessary</li>
            <li>Resize headings and text to be more appropriate for devices</li>
          </ul>
          <p>Use media queries responsibly and only as a start to your mobile audiences. For larger projects, do consider dedicated code bases and not layers of media queries.</p>

          <h2>Supported devices</h2>
          <p>Bootstrap supports a handful of media queries in a single file to help make your projects more appropriate on different devices and screen resolutions. Here's what's included:</p>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Label</th>
                <th>Layout width</th>
                <th>Column width</th>
                <th>Gutter width</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Large display</td>
                <td>1200px and up</td>
                <td>70px</td>
                <td>30px</td>
              </tr>
              <tr>
                <td>Default</td>
                <td>980px and up</td>
                <td>60px</td>
                <td>20px</td>
              </tr>
              <tr>
                <td>Portrait tablets</td>
                <td>768px and above</td>
                <td>42px</td>
                <td>20px</td>
              </tr>
              <tr>
                <td>Phones to tablets</td>
                <td>767px and below</td>
                <td class="muted" colspan="2">Fluid columns, no fixed widths</td>
              </tr>
              <tr>
                <td>Phones</td>
                <td>480px and below</td>
                <td class="muted" colspan="2">Fluid columns, no fixed widths</td>
              </tr>
            </tbody>
          </table>
<pre class="prettyprint linenums">
/* Large desktop */
@media (min-width: 1200px) { ... }

/* Portrait tablet to landscape and desktop */
@media (min-width: 768px) and (max-width: 979px) { ... }

/* Landscape phone to portrait tablet */
@media (max-width: 767px) { ... }

/* Landscape phones and down */
@media (max-width: 480px) { ... }
</pre>


          <h2>Responsive utility classes</h2>
          <p>For faster mobile-friendly development, use these utility classes for showing and hiding content by device. Below is a table of the available classes and their effect on a given media query layout (labeled by device). They can be found in <code>responsive.less</code>.</p>
          <table class="table table-bordered table-striped responsive-utilities">
            <thead>
              <tr>
                <th>Class</th>
                <th>Phones <small>767px and below</small></th>
                <th>Tablets <small>979px to 768px</small></th>
                <th>Desktops <small>Default</small></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><code>.visible-phone</code></th>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
                <td class="is-hidden">Hidden</td>
              </tr>
              <tr>
                <th><code>.visible-tablet</code></th>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
              </tr>
              <tr>
                <th><code>.visible-desktop</code></th>
                <td class="is-hidden">Hidden</td>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
              </tr>
              <tr>
                <th><code>.hidden-phone</code></th>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
                <td class="is-visible">Visible</td>
              </tr>
              <tr>
                <th><code>.hidden-tablet</code></th>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
              </tr>
              <tr>
                <th><code>.hidden-desktop</code></th>
                <td class="is-visible">Visible</td>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
              </tr>
            </tbody>
          </table>

          <h3>When to use</h3>
          <p>Use on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.</p>

          <h3>Responsive utilities test case</h3>
          <p>Resize your browser or load on different devices to test the above classes.</p>
          <h4>Visible on...</h4>
          <p>Green checkmarks indicate that class is visible in your current viewport.</p>
          <ul class="responsive-utilities-test">
            <li>Phone<span class="visible-phone">&#10004; Phone</span></li>
            <li>Tablet<span class="visible-tablet">&#10004; Tablet</span></li>
            <li>Desktop<span class="visible-desktop">&#10004; Desktop</span></li>
          </ul>
          <h4>Hidden on...</h4>
          <p>Here, green checkmarks indicate that class is hidden in your current viewport.</p>
          <ul class="responsive-utilities-test hidden-on">
            <li>Phone<span class="hidden-phone">&#10004; Phone</span></li>
            <li>Tablet<span class="hidden-tablet">&#10004; Tablet</span></li>
            <li>Desktop<span class="hidden-desktop">&#10004; Desktop</span></li>
          </ul>

        </section>



      </div>
    </div>

  </div>
<?php endwhile; ?>
<?php get_footer(); ?>