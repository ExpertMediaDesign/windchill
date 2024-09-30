<h1>FSE Child Theme using Tailwind</h1>

This is meant to be an easy-to-customize child theme of the Frost theme by Brian Gardner & WPEngine. 

The goal is to integrate Tailwind design & components into the Block Pattern workflow, and keep the advantages of using a child theme of major development studios. 
This way, when we develop themes for our clients, they can easily keep their parent theme securely updated for years to come & not affect their design.

<h2>Tailwind & Full-Site Editing</h2>
If you're interested in a boilerplate FSE theme with Tailwind, I would recommend looking into TailPress or PressWind.

Alternatively, adding Tailwind to an existing theme like TwentyTwentyFour is possible with a few steps:
<ul>
  <li>Follow Tailwind's Installation guide into the theme's root directory</li>
  <li>Make sure to specify your /patterns and /templates directories to be scanned for TW classes.</li>
  <li>Create your block patterns, page templates, etc. with Tailwind classes</li>
  <li>Build your CSS as usual with Tailwind</li>
  <li>Make sure to enqueue those final build css files in your functions.php</li>
</ul>

<h2>Custom Gutenberg Blocks</h2>
Currently we are creating custom blocks in a plugin based on the recommendations from the developer's handbook.

If you're considering Tailwind in use in the plugin as well, you can add your plugin directory path to your tailwind.config.js file under "content". 
