<h1><a href="#laravel--vue-js-quiz-example" aria-hidden="true" class="anchor" id="user-content-laravel--vue-js-crud-example"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel &amp; Vue JS QUIZ CRUD Example</h1>
<h3><a href="#install" aria-hidden="true" class="anchor" id="user-content-install"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Install</h3>
<ol>
<li>
<p>Open your terminal.</p>
</li>
<li>
<p>Clone this repo:</p>
<pre><code> git clone https://github.com/adeel696/laravel-vue-quiz.git
</code></pre>
</li>
<li>
<p>Once finished, change directory to laravel-vue-crud:</p>
<pre><code> cd laravel-vue-quiz
</code></pre>
</li>
<li>
<p>Install all laravel dependencies:</p>
<pre><code> composer install
</code></pre>
</li>
<li>
<p>Modify <code>DB_*</code> value in <code>.env</code> with your database config.</p>
</li>
<li>
<p>Generate application key:</p>
<pre><code> php artisan key:generate
</code></pre>
</li>
<li>
<p>Run migration table:</p>
<pre><code> php artisan migrate
</code></pre>
</li>
<li>
<p>Serve the app:</p>
<pre><code>php artisan serve
</code></pre>
</li>
<li>
<p>Open <code>http://localhost:8000/</code> in your web browser.</p>
</li>
</ol>
<h3><a href="#dummy-data" aria-hidden="true" class="anchor" id="user-content-dummy-data"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Dummy Data</h3>
<ol>

<h3><a href="#development" aria-hidden="true" class="anchor" id="user-content-development"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Development</h3>
<ol>
<li>
<p>Open your terminal and change directory to <code>laravel-vue-quiz</code>.</p>
</li>
<li>
<p>Make sure you have <a href="https://nodejs.org/en/download/" rel="nofollow">nodejs</a> installed and run this command:</p>
<pre><code> npm install
</code></pre>
<pre><code> npm install --save axios vue-axios
</code></pre>
<pre><code> npm install vue-router
</code></pre>
</li>
<li>
<p>All files (components, etc) are located in <code>resources/assets</code>.</p>
</li>
</ol>
